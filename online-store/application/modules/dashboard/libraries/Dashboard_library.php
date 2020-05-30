<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_library {

    var $ci;

    public function __construct() {

        $this->ci = & get_instance();

        //$this->ci->load->model("dashboard_model","model");

    }
    
    public function test(){
        return "text";
    }
}
