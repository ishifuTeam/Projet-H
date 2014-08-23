<?php
    class Plan extends MX_Controller{

        function __construct() {
            parent::__construct();
            $this->check_isvalidated();
            $this->load->model('plan_model','PlanManager');
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
                            'id' => $this->session->userdata('id')
                        );
            
            $this->load->view('ajouterplan_view',$tab);
        }
        
        public function all_plans(){
            
            $tab = $this->PlanManager->get_all_plans();
            return $tab;
            
        }
                
        function ajout_process(){
            $data = array(
                            'lib_plan' => $this->input->post('nom'),
                            'desc_plan' => $this->input->post('description'),
                            'sms_plan' => $this->input->post('sms'),
                            'email_plan' => $this->input->post('email'),
                            'pub_plan' => $this->input->post('pub')
                        );
            
            
            $this->PlanManager->creer_plan($data);
            redirect('plan/listing');
            
        }
        
        //Fonction pour gerer le listing
        
        public function listing(){
            
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->PlanManager->get_all_plans()
                        );
            
            $this->load->view('listerplan_view',$tab);
        }

        //Fonction pour gerer la modification
        
        function modifier($id){
            
            $id = $this->uri->segment(3);
            $tab = array(
                            'username' => $this->session->userdata('username'),
                            'agence' => $this->session->userdata('agence'),
                            'id' => $this->session->userdata('id'),
                            'records' => $this->PlanManager->get_plan($id)
                        );
            
            $this->load->view('modifierplan_view',$tab);
                
        }
        
        function modif_process($id){
            
            $id = $this->uri->segment(3);
            $data = array(
                            'id_plan' => $id,
                            'lib_plan' => $this->input->post('nom'),
                            'desc_plan' => $this->input->post('description'),
                            'sms_plan' => $this->input->post('sms'),
                            'email_plan' => $this->input->post('email'),
                            'pub_plan' => $this->input->post('pub')
                        );
            
            $this->PlanManager->modifier_plan($data);
            redirect('plan/listing');
            
        }


        //Fonction pour gerer la suppression
        
        function supprimer($id){
            
            $id = $this->uri->segment(3);
            
            $this->PlanManager->supprimer_plan($id);
            redirect('plan/listing');
            
        }
        
    }