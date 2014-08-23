<?php
    class Agent extends MX_Controller{

        function __construct() {
            parent::__construct();
            $this->check_isvalidated();
            $this->load->model('agent_model','AgentManager');
            $this->load->module('agence');
        }
        
        private function check_isvalidated(){
            if(($this->session->userdata('autoriser')) == FALSE ){
                    redirect('login');
            }
        }
        
        public function index() {
            $this->listing();
        }
        
        //Fonction pour la gestion de l'ajout
        
        public function all_agents(){
            
            $tab = $this->AgentManager->get_all_agents();
            return $tab;
        
        }    
        
        
        public function ajouter(){
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->agence->all_agence()
                        );
            
            $this->load->view('ajouteragent_view',$tab);
        }
        
        function ajout_process(){
            $data = array(
                            'id_agent' => $this->input->post('id'),
                            'nom_agent' => $this->input->post('nom'),
                            'prenoms_agent' => $this->input->post('nom'),
                            'img_agent' => $this->input->post('image'),
                            'email_agent' => $this->input->post('email'),
                            'psswd_agent' => sha1($this->input->post('password')),
                            'login_agent' => $this->input->post('login'),
                            'numtel_agent' => $this->input->post('numero'),
                            'id_agence' => $this->input->post('agence')
                        );
            
            
            $this->AgentManager->creer_agent($data);
            redirect('agent/listing');
            
        }
        
        //Fonction pour gerer le listing
        
        public function listing(){
            
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->AgentManager->get_all_agents()
                        );
            
            $this->load->view('listeragent_view',$tab);
        }
        
        //Fonction pour gerer la visualisation
        
        function voir($id){
            
            $id = $this->uri->segment(3);
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->AgentManager->get_agent($id)
                        );
            
            $this->load->view('voiragent_view',$tab);
            
        }
        
        //Fonction pour gerer la modification
        
        function modifier($id){
            
            $id = $this->uri->segment(3);
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->AgentManager->get_agent($id)
                        );
            
            $this->load->view('modifieragent_view',$tab);
                
        }
        
        function modif_process($id){
            
            $id = $this->uri->segment(3);
            $data = array(
                            'id_agent' => $id,
                            'lib_agent' => $this->input->post('nom'),
                            'address_agent' => $this->input->post('adresse'),
                            'email_agent' => $this->input->post('email'),
                            'psswd_agent' => sha1($this->input->post('password')),
                            'login_agent' => $this->input->post('login'),
                            'numtel_agent' => $this->input->post('numero'),
                            'id_plan' => $this->input->post('plan')
                        );
            
            $this->AgentManager->modifier_agent($data);
            redirect('agent/listing');
            
        }


        //Fonction pour gerer la suppression
        
        function supprimer($id){
            
            $id = $this->uri->segment(3);
            
            $this->AgentManager->supprimer_agent($id);
            redirect('agent/listing');
            
        }
        
    }