<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function get_users(): array
    {
        //get users and their branches
        $users = $this->db->query("SELECT u.*, b.name as branch_name FROM user u JOIN branch b ON u.branch_id = b.id")->result();
        return $users;
    }

    public function get_login_user($data)
    {
       return $this->db->get_where('user', $data)->row();
    }

    public function get_user($id)
    {
       return $this->db->get_where('user', ['id' => $id])->row();
    }

    public function create_user($data)
    {
        $this->db->insert('user', $data);
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