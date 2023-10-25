<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('BranchModel');
    }

    public function login() 
    {
        $userdata = [
            'username' => $this->input->post('username'),
        ];
        $password = $this->input->post('password');

        $this->form_validation->set_rules('username', 'Username', 'trim|htmlspecialchars|stripslashes');
        $this->form_validation->set_rules('password', 'Password', 'trim|htmlspecialchars|stripslashes');

        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $user = $this->UserModel->get_login_user($userdata);
            if(!$user) {
                $this->session->set_flashdata('incorrectUser', 'Incorrest username or password!');
                return redirect('');
            } else {
                $decryptedPassword = password_verify($password,$user->password);
                if(!$decryptedPassword) {
                    $this->session->set_flashdata('incorrectPassword', 'Incorrest username or password!');
                    return redirect('','refresh');
                } else {
                    $branch = $this->db->query("SELECT branch.name FROM user JOIN branch ON branch.id = user.branch_id WHERE user.id = $user->id")->row();
                    $userInfo = [
                        'userId' =>$user->id,
                        'firstName' => $user->first_name,
                        'lastName' => $user->last_name,
                        'username' => $user->username,
                        'storeId' => $user->store_id,
                        'branchId' => $user->branch_id,
                        'branchName' => $branch->name,
                        'position' => $user->position,
                        'isStaff' => $user->is_staff,
                    ];
                    
                    $this->session->set_userdata( $userInfo );

                    redirect('welcome/dashboard');
                    
                }
            }
        }
        
        
    }

    public function register_index() {
        $this->load->view('users/add_user');
    }

    public function register()
    {
        $userdata = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'username' => $this->input->post('username'),
            'branch_id' => $this->input->post('branch_id'),
            'position' => $this->input->post('position_id'),
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
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'trim|required',
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
            $this->load->view('users/add_user');
        } else {
            //encrypt password
            $options = ['cost' => 12];
            $hashedPassword = password_hash($userdata['password'], PASSWORD_BCRYPT, $options);
            $userdata['password'] = $hashedPassword;

            $this->UserModel->create_user($userdata);
            
             $this->session->set_flashdata('register_success', "<b>{$userdata['username']}</b> is registered successfully!");
           redirect('user/create_index');
        }

    }

    public function logout()
    {
        $this->session->unset_userdata('userId');
        redirect('');
    }
}