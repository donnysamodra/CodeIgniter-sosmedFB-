<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index() {
        $this->load->view('LoginView');
    }

    public function cekakun() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->LoginModel->findByUsername($username);
        $valid = $this->LoginModel->authenticate($username, $password);

        if ($valid) {
            $data = array(
                'username' => $username,
                'name' => $user['name'],
                'email' => $user['email'],
                'photo' => $user['photo'],
                'password' => $password,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            redirect('Beranda');
        } else {
            if (!$user) {
                $this->session->set_flashdata('failed', '<div><center><br>Username Not Found</center></div>');
            } else if (!$valid) {
                $this->session->set_flashdata('failed', '<div><center><br>Wrong Password</center></div>');
            }
            redirect('Login');
        }
    }

    public function bikinakun() {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $photo = $this->input->post('photo');
        if (empty($username) || empty($password) || empty($email) || empty($name) || empty($photo)) {
            $this->session->set_flashdata('failed', '<div><center><br>Data is Empty</center></div>');
            redirect('Login');
        } else {
            $user = $this->LoginModel->findByUsername($username);
            if ($user == FALSE) {
                $data = array(
                    'username' => $username,
                    'email' => $email,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'name' => $name,
                    'photo' => $photo
                );
                $this->LoginModel->bikinakun($data);
                $this->session->set_flashdata('failed', '<div><center><br>Successfully</center></div>');
            } else {
                $this->session->set_flashdata('failed', '<div><center><br>Username already used</center></div>');
            }
            redirect('Login');
        }
    }

}
