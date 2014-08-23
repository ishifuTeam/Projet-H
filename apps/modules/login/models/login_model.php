<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    
    public function validate($user, $pwd){
        
        // Prep the query
        $this->db->where('email_compagnie', $user);
        $this->db->where('psswd_compagnie', $pwd);
        $this->db->from('compagnie');
        // Run the query
        $query = $this->db->get();
        // Let's check if there are any results
        if(count($query->result()) == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'id' => $row->id_compagnie,
                    'agence' => $row->lib_compagnie,
                    'username' => $row->login_compagnie,
                    'autoriser' => true
                    );
            $this->session->set_userdata($data);
				
            return TRUE;
        }
        else {
            return FALSE;
	}
    }
}
?>