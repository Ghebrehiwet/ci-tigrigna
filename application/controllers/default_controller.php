<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Default_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/default_controller
	 *	- or -  
	 * 		http://example.com/index.php/default_controller/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
     * Change/Add route with new controller in config/routes.php
     * $route['default_controller'] = "default_controller";
	 */

	public function index()
	{
        $this->load->model('Default_model');
        $this->load->view('default_view');
	}// end index
}// end
