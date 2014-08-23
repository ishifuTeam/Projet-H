<?php
    class Immobilier extends MX_Controller{

        function __construct() {
            parent::__construct();
            $this->check_isvalidated();
            $this->load->model('immobilier_model','ImmobilierManager');
            $this->load->module('type');
            $this->load->module('agent');
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
                            'recordsType' => $this->type->all_types(),
                            'recordsAgent' => $this->agent->all_agents()
                        );
            
            $this->load->view('ajouterimmo_view',$tab);
        }
        
        public function all_immobilier(){
            $tab = $this->ImmobilierManager->get_all_immobiliers();
            return $tab;
        }
        
        function ajout_process(){
            $data = array(
                'id_immo' => $this->input->post('matricule'),
                'titre_immo' => $this->input->post('titre'),
                'desc_immo' => $this->input->post('description'),
                'id_type' => $this->input->post('type'),
                'img_immo' => $this->input->post('image'),
                'surface_immo' => $this->input->post('surface'),
                'prix_immo' => $this->input->post('prix'),
                'adresse_immo' => $this->input->post('adresse'),
                'nbchambre_immo' => $this->input->post('chambre'),
                'nbdouche_immo' => $this->input->post('douche'),
                'option_immo' => $this->input->post('option'),
                'id_agent' => $this->input->post('agent')
            );
            
            
            $this->ImmobilierManager->creer_immobilier($data);
            redirect('immobilier/listing');
            
        }
        
        //Fonction pour gerer le listing
        
        public function listing(){
            
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->ImmobilierManager->get_all_immobiliers()
                        );
            
            $this->load->view('listerimmo_view',$tab);
        }
        
        //Fonction pour gerer la visualisation
        
        function voir($id){
            
            $id = $this->uri->segment(3);
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->ImmobilierManager->get_immobilier($id)
                        );
            
            $this->load->view('voirimmo_view',$tab);
            
        }
        
        //Fonction pour gerer la modification
        
        function modifier($id){
            
            $id = $this->uri->segment(3);
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'recordsType' => $this->type->all_types(),
                            'recordsAgent' => $this->agent->all_agents(),
                            'records' => $this->ImmobilierManager->get_immobilier($id)
                        );
            
            $this->load->view('update',$tab);
                
        }
        
        function modif_process($id){
            
            $id = $this->uri->segment(3);
            $data = array(
                            'id_immo' => $id,
                            'titre_immo' => $this->input->post('titre'),
                            'desc_immo' => $this->input->post('description'),
                            'id_type' => $this->input->post('type'),
                            'img_immo' => $this->input->post('image'),
                            'surface_immo' => $this->input->post('surface'),
                            'prix_immo' => $this->input->post('prix'),
                            'adresse_immo' => $this->input->post('adresse'),
                            'nbchambre_immo' => $this->input->post('chambre'),
                            'nbdouche_immo' => $this->input->post('douche'),
                            'option_immo' => $this->input->post('option'),
                            'id_agent' => $this->input->post('agent')
                        );
            
            $this->ImmobilierManager->modifier_immobilier($data);
            redirect('immobilier/listing');
            
        }


        //Fonction pour gerer la suppression
        
        function supprimer($id){
            
            $id = $this->uri->segment(3);
            
            $this->ImmobilierManager->supprimer_immobilier($id);
            redirect('immobilier/listing');
            
        }
        
    }