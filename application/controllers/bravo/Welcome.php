<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome
 *
 * @author andraavram
 */
class Welcome extends Application {
    //put your code here
    
    public function index() 
    {
        $this->show(2);
    }
}
