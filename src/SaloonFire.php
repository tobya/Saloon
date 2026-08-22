<?php

  namespace Tobya\Saloon;


  use Saloon\Http\Response;
  use Saloon\Http\Request;
  use Saloon\CachePlugin\Traits\HasCaching;

  class SaloonFire
  {
        protected $disableCaching = false;


        public function disableCaching($disableCaching = true) : static
        {
            $this->disableCaching = $disableCaching;
            return $this;
        }



      /**
       * Process any modification to Request.
       * @param Request $request
       * @return Response
       */
        protected function applymodifiers(Request $request) : Request
        {
            if ($this->disableCaching){
              if(method_exists($request,'disableCaching'))
             // if(is_callable([$this, 'disableCaching']))
              {
                $request->disableCaching();
              }
            }
            return $request;
        }
  }
