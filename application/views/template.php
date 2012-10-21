<?php
	/**
	 * Simple template.
	 * Load the header, load the main view, load the footer.
	 */
	 
	$this->load->view('include/header_view');
	
	$this->load->view($view);
	
	$this->load->view('include/footer_view');