<?php

/**
 * 
 */
class LoginModel extends CI_Model {

    const TABLE_NAME = "user";

    public function cekakun($data) {
        $this->db->where('username',$data['username']);
        $this->db->where('password',$data['password']);
        return $this->db->get($this::TABLE_NAME)->result_array();
    }
    
    public function findByUsername($username) {
		// mendapatkan data user berdasarkan username
        $query = $this->db->from($this::TABLE_NAME)->where('username', $username)->get()->row_array();
        if(!$query){
            return FALSE;
        }
        return $query;
    }
    
    public function authenticate($username,$password) {
        $user = $this->findByUsername($username);
        if(!$user){
            return FALSE;
        }
        return password_verify($password, $user['password']); 
    }
    
    public function bikinakun($data) {
        $this->db->insert($this::TABLE_NAME, $data);
    }

}

?>
