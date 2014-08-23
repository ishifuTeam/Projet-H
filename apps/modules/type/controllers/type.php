<?php
    class Type extends MX_Controller{

        function __construct() {
            parent::__construct();
            $this->check_isvalidated();
            $this->load->model('type_model','TypeManager');
        }
        
        private function check_isvalidated(){
            if(($this->session->userdata('autoriser')) == FALSE ){
                    redirect('login');
            }
        }
        
        //Fonction pour la gestion de l'ajout
        
//        public function ajouter(){
//            $tab = array(
//                            'username' => $this->session->userdata('username'),
//                            'agence' => $this->session->userdata('agence'),
//                            'id' => $this->session->userdata('id')
//                        );
//            
//            $this->load->view('ajoutertype_view',$tab);
//        }
        
        public function all_types(){
            
            $tab = $this->TypeManager->get_all_types();
            return $tab;
            
        }
                
        function ajout_process(){
            $data = array(
                            'lib_type' => $this->input->post('nom'),
                            'desc_type' => $this->input->post('description')
                        );
            
            $this->TypeManager->creer_type($data);
            redirect('type');
            
        }
        
        //Fonction pour gerer le listing
        
        public function index(){
            
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->TypeManager->get_all_types(),
                            'recordsType' => NULL
                        );
            
            $this->load->view('type_view',$tab);
        }

        //Fonction pour gerer la modification
        
        function modifier($id){
            
            $id = $this->uri->segment(3);
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->TypeManager->get_all_types(),
                            'recordsType' => $this->TypeManager->get_type($id)
                        );
            
            $this->load->view('test',$tab);
                
        }
        
        function modif_process($id){
            
            $id = $this->uri->segment(3);
            $data = array(
                            'id_type' => $id,
                            'lib_type' => $this->input->post('nom'),
                            'desc_type' => $this->input->post('description')
                        );
            
            $this->TypeManager->modifier_type($data);
            redirect('type');
            
        }


        //Fonction pour gerer la suppression
        
        function supprimer($id){
            
            $id = $this->uri->segment(3);
            
            $this->TypeManager->supprimer_type($id);
            redirect('type');
            
        }
        
    }