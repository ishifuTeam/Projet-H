<?php
    class Agent_model extends CI_Model {
        
        function creer_agent($data) {
            $this->db->insert('agents', $data);
        }
        
        function get_agent($id) {
            $this->db->where('id_agent', $id);
            $query = $this->db->get('agents');
            return $query->result();
        }
        
        function count_agent() {
            $query = $this->db->get('agents');
            return count($query->result());
        }
        
        function get_all_agents() {
            $this->db->join('agences', 'agences.id_agence = agents.id_agence');
            $query = $this->db->get('agents');
            return $query->result();
        }
        
        function modifier_agent($data) {
            $id = $data['id_agent'];
            $this->db->where('id_agent', $id);
            $this->db->update('agents', $data);
        }
        
        function supprimer_agent($id) {
            $this->db->where('id_agent', $id);
            $this->db->delete('agents');
        }
        
    }