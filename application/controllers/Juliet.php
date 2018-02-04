<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Juliet extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';
		
		$record = $this->quotes->get(1);
		header("Content-type: application/json");
		echo json_encode($record);

		$this->render();
	}

}