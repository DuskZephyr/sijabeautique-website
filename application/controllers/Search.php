<?php

class Search extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('search/index');
        $this->load->view('template/footer');
    }
}
