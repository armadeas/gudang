<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	function view(){
		echo $this->uri->segment(2);
	}
	function deas(){
		echo "ganteng";
	}
}
	