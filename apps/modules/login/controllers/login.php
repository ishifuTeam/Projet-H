<?php
    class Login extends MX_Controller {
        
        function __construct(){
            parent::__construct();
            $this->check_isvalidated();
        }
			
        private function check_isvalidated(){
            if(($this->session->userdata('autoriser')) == TRUE ){
                redirect('dashboard');
            }
        }
        
        public function index(){
            $this->signin();
        }
        
        public function signin($msg = NULL){
            $data['msg'] = $msg;
            $this->load->view("page_login",$data);
        }
        
        public function signup(){
            $this->load->view('page_login');
        }
        
        function redirect(){
            $email = $this->input->post('email');
            $password = sha1($this->input->post('password'));
            
            $this->load->model("login_model",'LoginManager');
            $result = $this->LoginManager->validate($email,$password);
            
            if($result){
                redirect('dashboard');
            } else {
                $msg = '<div class="alert alert-danger" role="alert">Email ou Mot de passe invalide.</div>';
                $this->signin($msg);
            }
            
        }
        
    }