<?php

class Api extends REST_Controller 
{
    function __construct()
    {
        parent::__construct();

    }



    public function test_get($id=0){

        $response = array("status"=>true,"message"=>"success");

        $this->response($response);
    }


}