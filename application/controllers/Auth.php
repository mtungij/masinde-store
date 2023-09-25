<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function login() 
    {
        $userdata = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        ];

        $this->form_validation->set_rules('username', 'Username', 'trim|htmlspecialchars|stripslashes');
        $this->form_validation->set_rules('password', 'Password', 'trim|htmlspecialchars|stripslashes');

        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            //check  user
        }
        
        
    }

    public function register()
    {
        $userdata = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'branch_id' => $this->input->post('branch_id'),
            'store_id' => $this->input->post('store_id'),
            'is_superuser' => $this->input->post('is_superuser'),
            'is_staff' => $this->input->post('is_staff'),
            'is_active' => $this->input->post('is_active'),
            'password' => $this->input->post('password'),
        ];

        //data validation
        $config = [
            [
                'field' => 'first_name',
                'label' => 'First Name',
                'rules' => 'trim|required|min_length[2]|max_length[100]',
                'errors' => [
                    'min_length' => 'First name is too short',
                    'max_length' => 'Only 100 characters long is allowed',
                ],
            ],
            [
                'field' => 'last_name',
                'label' => 'Last Name',
                'rules' => 'trim|required|min_length[2]|max_length[100]',
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'trim|required|min_length[4]|max_length[100]|is_unique[user.username]',
                'errors' => [
                    'is_unique' => 'This %s is already exist.'
                ],
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|min_length[4]|max_length[100]|valid_email|is_unique[user.email]',
                'errors' => [
                    'is_unique' => 'This %s is already exist.'
                ],
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[4]|max_length[255]',
                'errors' => [
                    'required' => 'You should provide a %s',
                ]
            ],
            [
                'field' => 'confipass',
                'label' => 'Password Confirmation',
                'rules' => 'trim|required|min_length[4]|max_length[255]|matches[password]',
                'errors' => [
                    'required' => 'You should provide a %s',
                ]
            ],
        ];

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            return redirect('user/create_index');
        } else {
            //encrypt password
            $options = ['cost' => 12];
            $hashedPassword = password_hash($userdata['password'], PASSWORD_BCRYPT, $options);
            $userdata['password'] = $hashedPassword;

            $this->UserModel->create_user($userdata);
            echo "User created";
        
        }

    }

    public function logout()
    {
        //logout
    }
}