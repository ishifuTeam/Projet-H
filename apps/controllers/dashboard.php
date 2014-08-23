<?php
    class Dashboard extends CI_Controller {
        
        function __construct(){
            parent::__construct();
            $this->check_isvalidated();
        }
			
        private function check_isvalidated(){
            if(($this->session->userdata('autoriser')) == FALSE ){
                redirect('login');
            }
        }
        
        public function index(){
            
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id')
                        );
            
            $this->load->view('dashboard_view',$tab);
        }
		
        public function logout(){
            $this->session->sess_destroy();
            redirect('login');
    	}
        
    }