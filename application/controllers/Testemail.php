<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testemail extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->library('email');

		$this->load->model('email_model');
	}

	public function index()
	{
		$this->email_model->sendemail();
	}
}