<?php

class CartItemModel extends CI_Model
{
    public function get_cart_items()
    {
        return $this->db->get('Cart_item')->result();
        
    }

    public function get_cart_item($id)
    {
        return $this->db->get_where('Cart_item', ['id' => $id])->row();
    }
    public function get_latest_cart_item($product_id, $cart_id, $sold_by)
    {
        return $this->db->get_where('Cart_item', ['product_id' => $product_id, 'cart_id' => $cart_id, 'sold_by' => $sold_by])->row();
    }

    public function create_cart_item($data)
    {
        $this->db->insert('Cart_item', $data);
        
    }

    public function update_cart_item($id ,$data) {
        $this->db->update('Cart_item', $data, ['id' => $id]);
    }

    public function delete_cart_item($id)
    {
        $this->db->delete('Cart_item', ['id' => $id]);
    }
}