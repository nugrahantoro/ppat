<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tools extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
		 echo Modules::run('login');
    }
	
}
