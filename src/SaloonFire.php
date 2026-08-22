<?php

  namespace Tobya\Saloon;


  use Saloon\Http\Response;
  use Saloon\Http\Request;

  class SaloonFire
  {
        protected $disableCaching = false;


        public function disableCaching($disableCaching = true)
        {
            $this->disableCaching = $disableCaching;
        }



      /**
       * Process any modification to Request.
       * @param Request $request
       * @return Response
       */
        protected function applymodifiers(Request $request) : Request
        {
            if ($this->disableCaching){
                $request->disableCaching();
            }
            return $request;
        }
  }
