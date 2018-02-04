<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class India extends CI_Controller
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
		
		$source = '../data/koala.jpg'; 
		// note that we could have referenced an image anywhere on our system

		// set the mime type for that image (jpeg, png, etc)
		header("Content-type: image/png"); 
		header('Content-Disposition: inline');
		readfile($source); // dish it

		$this->render();
	}

}