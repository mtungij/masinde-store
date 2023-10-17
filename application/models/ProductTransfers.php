<?php

class ProductTransfers extends CI_Model
{
    public function get_product_transfers($branchId)
    {
        $this->db->select('pt.*, p.name as product_name, b.name as branch_name');
        $this->db->from('product_transfers pt');
        $this->db->join('product p', 'p.id = pt.product_id');
        $this->db->join('branch b', 'b.id = pt.transfer_to');
        $this->db->where('transfer_from', $branchId);
        $this->db->limit(30);
        $this->db->order_by('pt.id', 'DESC');
        return $this->db->get()->result();
    }


    public function transfer_to_vendor($data)
    {
        $this->db->insert('vendor_product', $data);
        return $this->db->insert_id();
    }


    public function get_products_transfer_to_vendor($branch_id)
    {
        return $this->db->query("SELECT vp.id, vp.branch_id, u.username, p.name, vp.quantity, vp.created_at 
                          FROM vendor_product vp 
                          JOIN product_branch pb ON pb.id = vp.product_id 
                          JOIN product p ON p.id = pb.product_id
                          JOIN user u ON u.id = vp.user_id
                          WHERE vp.branch_id = $branch_id
                          ")->result();
    }


}