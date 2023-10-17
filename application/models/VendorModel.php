<?php

class VendorModel extends CI_Model
{
    public function get_vendors()
    {
        $vendors = $this->db->get_where('user', ['position' => 'vendor'])->result();
        return $vendors;
    }


    public function delete_vendor_product($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('vendor_product');
    }
}
