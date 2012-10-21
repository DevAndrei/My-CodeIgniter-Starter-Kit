<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Incident_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
     
    public function get_all()
    {



    	$query = $this->db->get('incidents');

    	foreach ($query->result() as $row){
		    $data[] = $row;
		}

        return $data;


    }
}
?>