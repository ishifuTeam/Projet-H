<?php
    class Agence_model extends CI_Model {
        
        function creer_agence($data) {
            $this->db->insert('agences', $data);
        }
        
        function get_agence($id) {
            $this->db->where('id_agence', $id);
            $query = $this->db->get('agences');
            return $query->result();
        }
        
        function count_agence() {
            $query = $this->db->get('agences');
            return count($query->result());
        }
        
        function get_all_agences() {
            $query = $this->db->get('agences');
            return $query->result();
        }
        
        function modifier_agence($data) {
            $id = $data['id_agence'];
            $this->db->where('id_agence', $id);
            $this->db->update('agences', $data);
        }
        
        function supprimer_agence($id) {
            $this->db->where('id_agence', $id);
            $this->db->delete('agences');
        }
        
    }