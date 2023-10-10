<?php

class CartItemModel extends CI_Model
{
    public function get_cart_items()
    {
        return $this->db->get('cart_item')->result();
        
    }

    public function get_cart_item($id)
    {
        return $this->db->get_where('cart_item', ['id' => $id])->row();
    }
    public function get_latest_cart_item($product_id, $cart_id, $sold_by)
    {
        return $this->db->get_where('cart_item', ['product_id' => $product_id, 'cart_id' => $cart_id, 'sold_by' => $sold_by])->row();
    }

    public function create_cart_item($data)
    {
        $this->db->insert('cart_item', $data);
    }

    public function update_cart_item($id ,$data) {
        $this->db->update('cart_item', $data, ['id' => $id]);
        return true;
    }

    public function delete_cart_item($id)
    {
        return $this->db->delete('cart_item', ['id' => $id]);
    }
}