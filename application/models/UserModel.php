<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function get_users(): array
    {
        $users = $this->db->order_by('created_at', 'desc')->get('User')->result();
        return $users;
    }

    public function get_login_user($data)
    {
       return $this->db->get_where('User', $data)->row();
    }

    public function get_user($id)
    {
       return $this->db->get_where('User', ['id' => $id])->row();
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