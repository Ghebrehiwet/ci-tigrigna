<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//gigs_model.php

class Letter_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	
	}
	
	public function get_letter($id = 0)
	{
		if((int)$id == 0)
		{//id is zero, show all!
			return $this->db->get('Tig_Fidelat');
		}
		else {//show one customer
			return $this->db->get_where('Tig_Fidelat', array('FidelID'=>$id));
		}
		
		 
	}#end get_gigs()
	
	public function insert()
	{
		/**
		 * FIELDS
			'GigID' => 
			'AdminID' => 
			'GigTitle' => 
			'JobNumber' => 
			'TaxTerm' => 
			'JobLength' => 
			'Description' => 
			'Responsibilities' => 
			'Requirements' => 
			'PayRate' => 
			'CompanyName' => 
			'CompanyURL' => 
			'CompanyLogoURL' => 
			'ContactName' => 
			'ContactPhone' => 
			'ContactEmail' => 
			'DateAdded' => 
			'ClosingDate' => 
			'Status' => 
			'SpecialInstructions' => 
			'LastUpdated' => 
		 */
			
		$data = array(
			'FirstFidel' => $this->input->post('FirstFidel'),
			'SecondFidel' => $this->input->post('SecondFidel'),
			'ThirdFidel' => $this->input->post('ThirdFidel'),
			'FourthFidel' => $this->input->post('FourthFidel'),
			'FifthFidel' => $this->input->post('FifthFidel'),
			'SixthFidel' => $this->input->post('SixthFidel'),
			'SeventhFidel' => $this->input->post('SeventhFidel'),
			'SoundFidel' => $this->input->post('SoundFidel'),
			/*'CompanyName' => $this->input->post('CompanyName'),
			'CompanyURL' => $this->input->post('CompanyURL'),
			'CompanyLogoURL' => $this->input->post('CompanyLogoURL'),
			'ContactName' => $this->input->post('ContactName'),
			'ContactPhone' => $this->input->post('ContactPhone'),
			'ContactEmail' => $this->input->post('ContactEmail'),
			'DateAdded' =>  date('Y-m-d'),
			'StartDate' => date('Y-m-d', strtotime($this->input->post('StartDate'))),
			'ClosingDate' => date('Y-m-d', strtotime($this->input->post('ClosingDate'))),
			'Status' => $this->input->post('Status'),
			'SpecialInstructions' => $this->input->post('SpecialInstructions'),
			'LastUpdated' => date('Y-m-d H:i:s'),*/
		
		);
		
		//var_dump($data);
		//die('@TODO: NEED TO GET DB TABLE TO INSERT INTO. Add table name to line 35 (commented out), remove this line.');
		
		$this->db->insert('Tig_Fidelat', $data);
		return $this->db->insert_id();
		
	}#end insert()
	
}


	

 