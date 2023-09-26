<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function get_users()
    {
        //users
    }

    public function get_user($id)
    {
       $users =  $this->db->get('User');
       return $users;
    }

    public function create_user($data)
    {
        $this->db->insert('User', $data);
    }


    public function update_user($id)
    {
        //update user here
    }

    public function delete_user($id)
    {
        //delete user
    }
}