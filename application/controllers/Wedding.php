<?php

class Wedding extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model(array('buku_tamu_model','informasi_dasar_model','love_story_model'));
    }

    function index(){
        $this->load->view('wedding');
    }
}