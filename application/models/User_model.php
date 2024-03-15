<?php
class User_model extends CI_Model {

   public function add_project($data) {
        return $this->db->insert('users', $data);
    }
    public function get_all_users() {
        $query = $this->db->get('users'); 
        return $query->result(); 
    }
}