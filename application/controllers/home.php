<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Main_Controller {

  function __construct()
  {
    parent::__construct();
  }

  public function index()
	{
    $data['view'] = 'home_view';
		$data['title'] = 'Home';

		$this->load->view('template', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */