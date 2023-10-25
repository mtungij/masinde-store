<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model
{
    public function get_products()
    {
        $products = $this->db->get('product')->result();
        return $products;
    }

    public function get_product($id)
    {
       $product =  $this->db->get_where('product', ['id' => $id])->row();
       return $product;
    }

    public function create_product($data)
    {
        $q = $this->db->insert('product', $data);
        return $this->db->insert_id();
    }


    public function update_product($id)
    {
        //update product here
    }

    public function delete_product($id)
    {
        //delete product
    }
}