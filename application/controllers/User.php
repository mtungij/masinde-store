<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->load->view('users/all_users');
    }

    public function show($id)
    {
        $this->load->view('user_detail');
    }

    public function create_index()
    {
        $this->load->view('users/add_user');
    }

    public function update()
    {
        //update user here
    }

    public function delete()
    {
        //delete user
    }

    public function profile($id)
    {
        $this->load->view('users/edit');
    }
}