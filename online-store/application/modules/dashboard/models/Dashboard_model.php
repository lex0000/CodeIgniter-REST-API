<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function All(){
        $array=array(
            array("id"=>1,"name"=>"tao")
        );

        return $array;
    }

}