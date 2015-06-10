<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//gig.php
class Letter extends CI_Controller {
 
	/**
	 * Default Gig method.
	 * 
	 * Load header, text, and footer. Nothing special happens. Could remove.
	 */
	
	
	 public function index()
	{ 
		$this->load->view($this->config->item('theme') . 'header');
			$this->load->model('Letter_model');
			$data['query'] = $this->Letter_model->get_letter();
			$this->load->view('letter/home');
			$this->load->view($this->config->item('theme') . 'footer');
	}
	
	/**
	 * List of gigs.
	 * 
	 * Generates a list of gigs and sends them to the giglist.php view.
	 * 
	 * @see Gigs_model::get_gigs()	In ../models/gigs_model.php
	 */
	public function mylist()
	{ 
		  
		$this->load->model('Letter_model'); 
		$this->config->set_item('title', 'ፊደላት');
		$data['query'] = $this->Letter_model->get_letter();  
		$this->load->view('letter/letterlist', $data);
		
	}
	
	/**
	 * View of single gig.
	 * 
	 * Generates the view page for a single gig.
	 * 
	 * @see Gigs_model::get_gigs()	In ../models/gigs_model.php
	 * 
	 * @param int $id Gig ID, set to 0 for list.
	 */
	public function view($id = 0)
	{ 
		  
		$this->load->model('Letter_model'); 
		$this->config->set_item('title', 'ዝርዝር ፊደል');
		$data['query'] = $this->Letter_model->get_letter($id); 
		$this->load->view('letter/view', $data);
		//$this->load->view('letter/' . $letter->SoundFidel . '".$fileExtention. "', $data);
		
		
		
	}
	
	
	/**
	 * View of single gig.
	 * 
	 * Generates the view page for a single gig.
	 * 
	 * @param int $id Gig ID, set to 0 for list.
	 */
	public function add()
	{ #will create a form for adding customers
		  
		$this->load->helper('form');
		$this->config->set_item('title', 'ፊደል ወስኽ'); 
		$this->load->view('letter/add');
		
	}#end add()
	
	/**
	 * Handle form validation.
	 * 
	 * Validate the form and call method to insert into database.
	 * 
	 * @see Gigs_model::insert()	In ../models/gigs_model.php
	 */
	public function insert()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('FirstFidel', 'Gig Title', 'trim|required');
		$this->form_validation->set_rules('SecondFidel', 'Description', 'trim|required');
		$this->form_validation->set_rules('ThirdFidel', 'Gig Title', 'trim');
		$this->form_validation->set_rules('FourthFidel', 'Tax Term', 'trim');
		$this->form_validation->set_rules('FifthFidel', 'Job Length', 'trim|required');
		$this->form_validation->set_rules('SixthFidel', 'Responsibilities', '');
		$this->form_validation->set_rules('SeventhFidel', 'Requirements', '');
		$this->form_validation->set_rules('SoundFidel', 'Pay Rate', 'trim|required');
		/*$this->form_validation->set_rules('CompanyName', 'Company Name', 'trim|required');
		$this->form_validation->set_rules('CompanyURL', 'Company URL', '');
		$this->form_validation->set_rules('CompanyLogoURL', 'Company Logo URL', '');
		$this->form_validation->set_rules('ContactName', 'Contact Name', '');
		$this->form_validation->set_rules('ContactPhone', 'Contact Phone', '');
		$this->form_validation->set_rules('ContactEmail', 'Contact Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('StartDate', 'Start Date, in YYYY-MM-DD format', 'trim|required');
		$this->form_validation->set_rules('ClosingDate', 'Closing Date, in YYYY-MM-DD format',  'trim|required');
		
		$this->form_validation->set_rules('SpecialInstructions', 'Special Instructions', '');
		*/
		if($this->form_validation->run() == false)
		{//form failed - go back to add
			$this->config->set_item('title', 'ፊደል ኵውሰኽ ኣይተኻኣለን'); 
			$this->load->view('letter/add');
			
		}else{//insert data
			
			$this->load->model('Letter_model'); 
			//insert data and return id of an entered item
			$id = $this->Letter_model->insert();
			
			#use the id number to load the view of the new customer
			$data['query'] = $this->Letter_model->get_letter($id);
			
			#using custom feedback function to inform user
			feedback('ፊደል ብዓወት ተወሲኹ!', 'success');
			
			$this->load->view('letter/view', $data);
		}
	}#end insert()
	
	function addhelp()
	{
		$this->load->view('letter/addhelp');
	}
	 
}

 