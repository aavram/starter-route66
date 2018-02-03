<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Able
 *
 * @author andraavram
 */
class Able extends Application {
    //put your code here
    
    function __construct()
	{
		parent::__construct();
	}
    
    public function index() 
    {
        $this->show(1);
    }
}
