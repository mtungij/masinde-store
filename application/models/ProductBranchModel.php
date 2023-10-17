<?php

class ProductBranchModel extends CI_Model
{
    public function get_productsbranch($branch_id) {
        $this->db->select('pb.id, pb.quantity, pb.inventory, pb.stock_limit, p.name as product_name, b.name as branch_name, p.brand as brand, p.unit as unit, p.buy_price as buy_price, p.whole_sale_price as whole_sale_price, p.retail_sale_price as retail_sale_price, p.expire_date as expire_date, p.id as product_id');
        $this->db->from('product_branch pb');
        $this->db->join('product p', 'p.id = pb.product_id');
        $this->db->join('branch b', 'b.id = pb.branch_id');
        $this->db->where('pb.branch_id', $branch_id);
        $query = $this->db->get();
        return $query->result();
    }


    public function get_productbranch_by_id($product_id, $branch_id) {
        $this->db->select('pb.id, pb.quantity, pb.inventory, pb.stock_limit, p.name as product_name, b.name as branch_name, p.brand as brand, p.unit as unit, p.buy_price as buy_price, p.whole_sale_price as whole_sale_price, p.retail_sale_price as retail_sale_price, p.expire_date as expire_date, p.id as product_id');
        $this->db->from('product_branch pb');
        $this->db->join('product p', 'p.id = pb.product_id');
        $this->db->join('branch b', 'b.id = pb.branch_id');
        $this->db->where('pb.branch_id', $branch_id);
        $this->db->where('pb.product_id', $product_id);
        $query = $this->db->get();
        return $query->row();
    }


    public function get_productbranch_by_branch_id($id) {
        $this->db->select('product_branch.*, product.name as product_name,branch.name as branch_name');
        $this->db->from('product_branch');
        $this->db->join('product', 'product.id = product_branch.product_id');
        $this->db->join('branch', 'branch.id = product_branch.branch_id');
        $this->db->where('product_branch.branch_id', $id);
        $query = $this->db->get();
        return $query->result();
    }


    public function get_productbranch_by_product_id($id) {
        $this->db->select('product_branch.*, product.name as product_name,branch.name as branch_name');
        $this->db->from('product_branch');
        $this->db->join('product', 'product.id = product_branch.product_id');
        $this->db->join('branch', 'branch.id = product_branch.branch_id');
        $this->db->where('product_branch.product_id', $id);
        $query = $this->db->get();
        return $query->result();
    }


    public function create_productbranch($data) {
        $this->db->insert('product_branch', $data);
        return true;
    }


    public function update_productbranch($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('product_branch', $data);
        return $this->db->affected_rows();
    }


    public function delete_productbranch($id) {
        $this->db->where('id', $id);
        $this->db->delete('product_branch');
        return $this->db->affected_rows();
    }

}
