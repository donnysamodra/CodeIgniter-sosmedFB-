<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BerandaModel');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            $data['mine'] = $this->BerandaModel->getMyPosts($_SESSION['username']);
            $data['profils'] = $this->BerandaModel->getFriends($_SESSION['username']);
            $this->load->view('ProfilView', $data);
        } else {
            $this->session->set_flashdata('failed', '<div><center><br>Need to Login</center></div>');
            redirect('Login');
        }
    }

    public function create() {
        $username = $this->input->post('username');
        $content = $this->input->post('content');

        $data = array(
            'username' => $username,
            'content' => $content
        );

        $this->BerandaModel->create($data);
        redirect('Beranda');
    }

    public function logout() {
        $username = array(
            'username', 'name'
        );
        $this->session->unset_userdata($userdata);
        $this->session->set_userdata('logged_in', FALSE);
        $this->session->set_flashdata('failed', '<div><center><br>Logout Success</center></div>');
        redirect('Login');
    }

    public function viewprofil($username) {
        if ($username == $_SESSION['username']) { //kalau diklik yg pny sendiri masuk ke profil , kl tdk ke friend
            redirect('Profil');
        } else {
            $data['profil'] = $this->BerandaModel->getProfil($username);
            $data['posts'] = $this->BerandaModel->getFriendPost($username);
            $this->load->view('FriendProfil',$data);
        }
    }

}
