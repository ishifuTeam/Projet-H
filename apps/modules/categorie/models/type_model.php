<?php
    class Type_model extends CI_Model {
        
        function creer_type($data) {
            $this->db->insert('types', $data);
        }
        
        function get_type($id) {
            $this->db->where('id_type', $id);
            $query = $this->db->get('types');
            return $query->result();
        }
        
        function count_type() {
            $query = $this->db->get('types');
            return count($query->result());
        }
        
        function get_all_types() {
            $query = $this->db->get('types');
            return $query->result();
        }
        
        function modifier_type($data) {
            $id = $data['id_type'];
            $this->db->where('id_type', $id);
            $this->db->update('types', $data);
        }
        
        function supprimer_type($id) {
            $this->db->where('id_type', $id);
            $this->db->delete('types');
        }
        
    }