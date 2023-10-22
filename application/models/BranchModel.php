<?php


class BranchModel extends CI_Model
{
    public function get_branches()
    {
        $branches = $this->db->get('branch')->result();
        return $branches;
    }

    public function get_branch()
    {

        $branch = $this->db->get('branch')->result();
       return $branch;
    }

    public function create_branch($data)
    {
        $q = $this->db->insert('branch', $data);
        return $this->db->insert_id();
    }
}