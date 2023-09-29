<?php

class CartModel extends CI_Model
{
    public function get_carts() {
        return $this->db->get('Cart')->result();
        
    }

    public function get_cart($user_id)
    {
        return $this->db->select('ci.id, ci.quantity as cart_items_quantity,ci.sold_by,p.name, p.whole_sale_price, p.retail_sale_price')->from('cart c')
        ->join('cart_item ci', 'c.id = ci.cart_id')
        ->join('product p', 'ci.product_id = p.id')
        ->where('c.user_id', $user_id)
        ->get()->result();
    }

    public function get_latest_cart($userId)
    {
        return $this->db->get_where('Cart', ['user_id' => $userId])->row();
    }

    public function create_cart($data)
    {
        return $this->db->insert('Cart', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('Cart', ['id' => $id]);
        
    }
}