<?php
    class Plan_model extends CI_Model {
        
        function creer_plan($data) {
            $this->db->insert('plans', $data);
        }
        
        function get_plan($id) {
            $this->db->where('id_plan', $id);
            $query = $this->db->get('plans');
            return $query->result();
        }
        
        function count_plan() {
            $query = $this->db->get('plans');
            return count($query->result());
        }
        
        function get_all_plans() {
            $query = $this->db->get('plans');
            return $query->result();
        }
        
        function modifier_plan($data) {
            $id = $data['id_plan'];
            $this->db->where('id_plan', $id);
            $this->db->update('plans', $data);
        }
        
        function supprimer_plan($id) {
            $this->db->where('id_plan', $id);
            $this->db->delete('plans');
        }
        
    }