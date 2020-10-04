<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {
    function index(){

        $this->load->model('Test_model');
        $data = $this -> Test_model -> gets();
        $this->load->view('Test',array('Tests'=>$data));

    }
    function get($id){
        $data = array('id'=>$id);
        $this->load->view('get',array('id'=>$id));
    }
}
