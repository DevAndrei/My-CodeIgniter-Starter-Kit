<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
     
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
     
    public function index()
    {
      	$this->load->view('login_view');
    }

    public function process()
    {
        $result = $this->login_model->validate();
        if( !$result ){
        	$this->notify->set_message('error', 'Wrong username or password. Please try again.');
            redirect('/login');
        }else{
            redirect('home');
        }       
    }

    public function logout()
    {
    	$this->session->sess_destroy();
        redirect('login');
    }
}