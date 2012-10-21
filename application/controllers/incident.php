<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Incident extends Main_Controller {

   	function __construct()
   	{
        parent::__construct();
        $this->load->model('incident_model');
    }

   	public function index()
    {
     	$data['view'] = 'incident_main_view';
		  $data['title'] = 'Home';

      $data['incidents'] = $this->incident_model->get_all();

		  $this->load->view('template', $data);
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */