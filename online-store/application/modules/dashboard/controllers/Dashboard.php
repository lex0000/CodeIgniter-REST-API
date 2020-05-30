<?php
class Dashboard extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model("dashboard_model","model");

        $this->load->library("dashboard_library");

    }

    public function index(){

        $this->load->module('user/controller');
        $this->controller->method();

        error_reporting(-1);

        echo "ggg";

        echo  Modules::run('user/test',12);
        //exit;

        $this->data = $this->model->All();

        print_r($data);

        $this->data['test'] = $this->dashboard_library->test();

        print_r($data);

        print_r($_SESSION);

        //$this->load->view("user/index");

        //$this->load->view("template/layouts");

    }

}