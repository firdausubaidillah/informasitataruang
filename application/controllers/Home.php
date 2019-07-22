<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        error_reporting(0);
    }

    public function index()
    {
       $this->load->view('_frontend/index');
    }

    public function loginpemohon()
    {
        $this->load->view('_frontend/login');
    }

    public function registrasipemohon()
    {
        $this->load->view('_frontend/registrasi');
    }

    public function admin()
    {
        $this->load->view('_backend/login');
    }

}