<?php
    class Immobilier_model extends CI_Model {
        
        function creer_immobilier($data) {
            $this->db->insert('immobiliers', $data);
        }
        
        function get_immobilier($id) {
            $this->db->where('id_immo', $id);
            $query = $this->db->get('immobiliers');
            return $query->result();
        }
        
        function count_immobilier() {
            $query = $this->db->get('immobiliers');
            return count($query->result());
        }
        
        function get_all_immobiliers() {
//            $this->db->join('immobiliers', 'immobiliers.id_agent = agents.id_agent');
//            $query = $this->db->get('immobiliers');
            $sql = "SELECT * FROM immobiliers INNER JOIN TYPES ON immobiliers.id_type = types.id_type INNER JOIN agents ON immobiliers.id_agent = agents.id_agent INNER JOIN agences ON agents.id_agence = agences.id_agence";
            $query = $this->db->query($sql);
            return $query->result();
        }
        
        function modifier_immobilier($data) {
            $id = $data['id_immo'];
            $this->db->where('id_immo', $id);
            $this->db->update('immobiliers', $data);
        }
        
        function supprimer_immobilier($id) {
            $this->db->where('id_immo', $id);
            $this->db->delete('immobiliers');
        }
        
    }