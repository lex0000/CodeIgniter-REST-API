<?php

(defined('BASEPATH')) or exit('No direct script access allowed');
error_reporting(0);
/**
 * Class MY_Controller
 */
class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        header('Access-Control-Allow-Origin: *');  
        //header('Content-Type: application/json');

        // header('Token:'.$jwt);
        // echo json_encode($_SERVER);
        //$this->load->driver('cache', array('adapter' => 'file')); 
        //echo "<Pre>";
        // $key = "sggggbbbsldsfglsjflsdfjlasdfjlasdjflasdfjalsdfjlasdfjlsfer0394ur03";
        // $token = array(
        //     "iss" => "http://example.org",
        //     "aud" => "http://example.com",
        //     "iat" => 1356999524,
        //     "nbf" => 1357000000,
        //     "user_id" =>1,
        //     "position_id"=>1, 
        // );
        
        // $jwt = JWT::encode($token, $key);
        // //set custom response header;
        // header('custom: tgg');
        // echo $jwt;
        // echo "<br>";
        // try {
        //     $decoded = JWT::decode($jwt, $key, array('HS256'));
        // } catch (Exception $e) {
        //     echo 'Caught exception: ',  $e->getMessage(), "\n";
        // }
        // print_r($decoded);
        // echo "<Hr>";
        // setcookie('foo', 'bar');

        // /* Define a custom response header
        // This will be ignored by most clients */
        // header("X-Sample-Test: foo");
        // /* Specify plain text content in our response */
        // header('Content-type: text/plain');
        // /* What headers are going to be sent? */
        // var_dump(headers_list());

        // print_r($_SERVER);
        // header('Content-Type: application/json');
        // header('Token:'.$jwt);
        // echo json_encode($_SERVER);

   
    }

    public function reply($data){
        header('Content-Type: application/json');
        $this->response([$data]);
    }


    

}
require_once APPPATH.'libraries/REST_Controller.php';