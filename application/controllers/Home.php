<?php
/**
 * Home Controller for TireForce.
 * Home index page is the default page that is opened if no other page is found when entering the website.
 *	ie. http://www.websitename.com/tireforce/index.php -> if it can not find index it is sent here and the index function is loaded.
 *	@author Calvin Williams <calvin.william1012@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/*
		Constructor to load the home model for querys.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model','home');
	}


	public function index()
	{
		/**
		 *
		 * Gets all the values and puts them into the array,
		 * Expensive in processing but easy to understand and implement.
		 *
		 */
		
		$data['title']= 'TireForce Sample';
		$data['years'] = $this->home->getYears();
		$data['makes'] = $this->home->getMakes();
		$data['models'] = $this->home->getModels();
		$data['bodys'] = $this->home->getBodys();
		/*
		 * Loads the view with the data from the model.
		 */
		$this->load->view('home_view',$data);
	}

	public function search()
	{
		/**
		 *
		 * Gets all the values in a single object,
		 * Better for processing.
		 */
		$data['title'] = 'Tire Search';
		$data['tires'] = $this->home->search($this->input->post());
		/*
		 * Loads the search view with the query results.
		 */
		$this->load->view('search_view',$data);
	}
}

