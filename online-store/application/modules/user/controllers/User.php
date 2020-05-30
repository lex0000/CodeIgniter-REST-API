<?php
class User extends MX_Controller 
{
    function __construct()
    {
        parent::__construct();

        //$this->load->model("user_model","model");

        $this->load->library("user_library");
    }

    public function tao(){
       
        // Array of css files
$css = array(
    base_url('public/assets/css/skin-red.css'),
    base_url('public/assets/dist/css/AdminLTE.min.css'),
   );
   
   $mergeCSS = "";
   // Loop the css Array
   foreach ($css as $css_file) {
       // Load the content of the css file 
       $mergeCSS.= file_get_contents($css_file);
   }
   
   // Remove comments also applicable in javascript
   $mergeCSS= preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $mergeCSS);
   
   // Remove space after colons
   $mergeCSS= str_replace(': ', ':', $mergeCSS);
   
   // Remove whitespace
   $mergeCSS= str_replace(array("\n", "\t", '  ', '    ', '    '), '', $mergeCSS);
   
   //Generate Etag
   $genEtag = md5_file($_SERVER['SCRIPT_FILENAME']);
   
   // call the browser that support gzip, deflate or none at all, if the browser doest      support compression this function will automatically return to FALSE
   ob_start('ob_gzhandler');
   
   // call the generated etag
   header("Etag: ".$genEtag); 
   
   // Same as the cache-control and this is optional
   header("Pragma: public");
   
   // Enable caching
   header("Cache-Control: public ");
   
   // Expire in one day
   header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400 ) . ' GMT');
   
   // Set the correct MIME type, because Apache won't set it for us
   header("Content-type: text/javascript");
   
   // Set accept-encoding
   header('Vary: Accept-Encoding');
   
   // Write everything out
   echo($mergeCSS);

    }

    public function index(){

       // $this->data = $this->model->All();


  

       // print_r($data);

       // exit;


        $this->load->view("template/layouts");
        //exit;
    //    $data = $this->db->select()
    //                 ->from("users")
    //                 ->get()
    //                 ->result();
        
   
    //$this->load->js("xxxx");
        
       //print_r($this->js);
        //print_r($_SESSION);
       // exit;

    }


    public function login(){
        $this->load->view("login");
    }

    public function test($id=0){

        $session_data = array(
            'id' => 1,
            'username' => "tao"
        );

        //print_r($session_data);exit;

        $this->session->set_userdata($session_data);
    }


    public function template(){
        
        $this->load->view("template/layouts");

    }


    public function test2(){

        echo "xx";
    }


    public function xx(){
        require_once  APPPATH.'libraries/codeigniter-predis/src/Redis.php';
        $this->redis = new \CI_Predis\Redis(['serverName' => 'localhost']);

        //$this->redis->hset("tao",'gasdfasdfasfdasfasfaasf_',json_encode(array("id"=>1,"name"=>"tao","email"=>"tao@tao.com")));
        $this->redis->hset("mm",'gasdfasdfasfdasfasfaasf_','mm');

        //$this->redit->set("mm","xx");

        $data = $this->redis->hget('mm','gasdfasdfasfdasfasfaasf_');

        //$data = $this->redis->scan(0);
        

        $data = $this->redis->hset("I","x","I");
        $data = $this->redis->hset("L","x","LOVE");
        $data = $this->redis->hset("Y","x","YOU");



        $data = $this->redis->hset("U","a","III");
        $data = $this->redis->hset("U","xb","LOVE");
        $data = $this->redis->hset("U","xc","YOU");


        $this->redis->set("M","I'M M");

        //$this->redis->hdel("U",'a');

        $data = $this->redis->hget('L','x');

        $data = $this->redis->hScan('U', 0, 'MATCH', '*');

       // $data = $this->redis->scan("");

        $data = $this->redis->hGetAll('U');
 
        print_r($data);

    }



}