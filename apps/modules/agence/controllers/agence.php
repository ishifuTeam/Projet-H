<?php
    class Agence extends MX_Controller{

        function __construct() {
            parent::__construct();
            $this->check_isvalidated();
            $this->load->model('agence_model','AgenceManager');
            $this->load->module('plan');
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
        
        public function ajouter(){
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->plan->all_plans()
                        );
            
            $this->load->view('ajouteragence_view',$tab);
        }
        
        public function all_agence(){
            $tab = $this->AgenceManager->get_all_agences();
            return $tab;
        }
        
        function ajout_process(){
            $data = array(
                            'lib_agence' => $this->input->post('nom'),
                            'address_agence' => $this->input->post('adresse'),
                            'email_agence' => $this->input->post('email'),
                            'psswd_agence' => sha1($this->input->post('password')),
                            'login_agence' => $this->input->post('login'),
                            'numtel_agence' => $this->input->post('numero'),
                            'id_plan' => $this->input->post('plan')
                        );
            
            
            $this->AgenceManager->creer_agence($data);
            redirect('agence/listing');
            
        }
        
        //Fonction pour gerer le listing
        
        public function listing(){
            
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->AgenceManager->get_all_agences()
                        );
            
            $this->load->view('listeragence_view',$tab);
        }
        
        //Fonction pour gerer la visualisation
        
        function voir($id){
            
            $id = $this->uri->segment(3);
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->AgenceManager->get_agence($id)
                        );
            
            $this->load->view('voiragence_view',$tab);
            
        }
        
        //Fonction pour gerer la modification
        
        function modifier($id){
            
            $id = $this->uri->segment(3);
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->AgenceManager->get_agence($id)
                        );
            
            $this->load->view('modifieragence_view',$tab);
                
        }
        
        function modif_process($id){
            
            $id = $this->uri->segment(3);
            $data = array(
                            'id_agence' => $id,
                            'lib_agence' => $this->input->post('nom'),
                            'address_agence' => $this->input->post('adresse'),
                            'email_agence' => $this->input->post('email'),
                            'psswd_agence' => sha1($this->input->post('password')),
                            'login_agence' => $this->input->post('login'),
                            'numtel_agence' => $this->input->post('numero'),
                            'id_plan' => $this->input->post('plan')
                        );
            
            $this->AgenceManager->modifier_agence($data);
            redirect('agence/listing');
            
        }


        //Fonction pour gerer la suppression
        
        function supprimer($id){
            
            $id = $this->uri->segment(3);
            
            $this->AgenceManager->supprimer_agence($id);
            redirect('agence/listing');
            
        }
        
    }