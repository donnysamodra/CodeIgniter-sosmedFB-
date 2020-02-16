<?php

/**
 * 
 */
class BerandaModel extends CI_Model {

    const TABLE_NAME = "post";

    public function getPosts() {
        $this->db->select('name, p.username, content, id, u.email, u.photo')
                ->from('post p')
                ->join('user u', 'p.username = u.username')
                ->order_by('id', 'DESC');
        $posts = $this->db->get()->result_array();

        return $posts;
    }

    public function getMyPosts($username) {
        $where = 'p.username = u.username AND u.username = "' . $username . '"';
        $this->db->select('u.name, p.username, p.content, p.id, u.email')
                ->from('post p, user u')
                ->where($where)
                ->order_by('id', 'DESC');
        $posts = $this->db->get()->result_array();

        return $posts;
    }

    public function getFriends($username) {
        $this->db->from('user')
                ->where('username != "' . $username . '"')
                ->order_by('username', 'ASC');
        $posts = $this->db->get()->result_array();

        return $posts;
    }

    public function getProfil($username) {
        $where = 'username = "' . $username . '"';
        $this->db->from('user')
                ->where($where);
        return $this->db->get()->result_array();
    }
    
    public function getFriendPost($username) {
        $where = 'p.username = u.username AND u.username = "' . $username . '"';
        $this->db->select('u.username,u.email,u.name,p.content,p.id')
                ->from('user u, post p')
                ->where($where)
                ->order_by('id', 'DESC');
        return $this->db->get()->result_array();
    }
    
    public function create($data) {
        $this->db->insert($this::TABLE_NAME, $data);
    }

    public function deletepost($id) {
        // delete data
        $query = $this->db->where('id', $id)
                ->delete($this::TABLE_NAME);
        return $query;
    }

    public function updatepost($user) {
        $query = $this->db->where('id', $user['id'])
                ->update($this::TABLE_NAME, $user);
        return $query;
    }

    public function updateakun($data,$awal) {
        $query = $this->db->where('username', $awal)
                ->update('user', $data);
        return $query;
    }

    public function deleteprofil($username) {
        // delete data
        $query = $this->db->where('username', $username)
                ->delete('user');
        return $query;
    }
    
    public function findcontent($id) {
        $query = $this->db->from($this::TABLE_NAME)->where('id', $id)->get()->row_array();
        return $query;
    }
}
?>

