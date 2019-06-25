<?php
    class Homepage extends CI_Controller
    {
        public function index()
        {
            $this->load->view('templates/header');
            $this->load->view('homepage/index');
            $this->load->view('templates/footer');
        }
    }
?>