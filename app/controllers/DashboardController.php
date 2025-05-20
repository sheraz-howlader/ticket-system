<?php 

    class DashboardController extends Controller{
        
        public function __construct() {
            parent::__construct();
        }

        public function home(){
            $this->load->view('dashboard');
        }
    }

