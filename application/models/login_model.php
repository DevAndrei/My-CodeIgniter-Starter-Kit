<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
     
    public function validate()
    {
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));

        if ( $username == 'admin' AND $password == 'admin' ){
            $data = array(
                    'userid' => 1,
                    'fname' => 'Farid',
                    'lname' => 'Jamae',
                    'username' => 'admin',
                    'validated' => true
                    );

            $this->session->set_userdata($data);

            return true;
        }
        else{
            $this->session->set_flashdata('username', $username);
            $this->session->set_flashdata('password', $password);

            return false;
        }
    }
}
?>