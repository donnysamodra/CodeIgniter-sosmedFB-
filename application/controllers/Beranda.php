<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('BerandaModel');
        $this->load->model('LoginModel');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            $data['posts'] = $this->BerandaModel->getPosts();
            $this->load->view('BerandaView', $data);
        } else {
            $this->session->set_flashdata('failed', '<div><center><br>Need to Login</center></div>');
            redirect('Login');
        }
    }

    public function create() {
        $username = $this->input->post('username');
        $content = $this->input->post('content');
        if (empty($content)) {
            $this->session->set_flashdata('notif', '<div><center><br>Post is empty</center></div>');
        } else {
            $data = array(
                'username' => $username,
                'content' => $content
            );

            $this->BerandaModel->create($data);
        }
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

    public function editprofil($username) {
        $this->load->view('EditProfil');
    }

    public function updateprofil() {
        $username = $this->input->post('awal');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $photo = $this->input->post('photo');
        if (empty($username) || empty($password) || empty($email) || empty($name) || empty($photo)) {
            $this->session->set_flashdata('failed', '<div><center><br>Data is Empty</center></div>');
            redirect('Profil');
        } else {
            $data = array(
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'name' => $name,
                'photo' => $photo
            );
            $this->BerandaModel->updateakun($data, $username);
            $user = $this->LoginModel->findByUsername($username);
            $data = array(
                'username' => $username,
                'name' => $user['name'],
                'email' => $user['email'],
                'photo' => $user['photo'],
                'password' => $password,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            $this->session->set_flashdata('notif', '<div><center><br>Successfully updating your Profile</center></div>');
            redirect('Profil');
        }
    }

    public function hapusprofil($username) {
        $this->BerandaModel->deleteprofil($username);
        $this->session->set_flashdata('failed', '<div><center><br>Successfully deleting your Account</center></div>');
        redirect('Beranda/Logout');
    }

    public function updatepost($id) {
        $content = $this->input->post('content');
        $post = array(
            'id' => $id,
            'content' => $content
        );
        $this->BerandaModel->updatepost($post);
        $this->session->set_flashdata('notif', '<div><center><br>Successfully updating your Post</center></div>');
        redirect('Profil');
    }

    public function editpost($id) {
        $data['id'] = $this->BerandaModel->findcontent($id);
        $this->load->view('EditPost', $data);
    }

    public function deletepost($id, $username) {
        $this->BerandaModel->deletepost($id);
        $this->session->set_flashdata('notif', '<div><center><br>Successfully deleting your Post</center></div>');
        redirect('Profil');
    }

}
