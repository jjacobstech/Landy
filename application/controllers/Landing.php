<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('customer_model');
        $this->load->helper(array('form', 'url', 'string'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('security');
    }

    function  index()
    {


        $this->load->view('landing');
    }
    function redirect_booking()
    {
        redirect('Frontendbookin.php');
    }
}