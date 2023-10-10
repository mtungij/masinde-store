<?php

class OrderItemModel extends CI_Model 
{
    public function get_order_items()
    {
        $query = $this->db->get('order_item');
        return $query->result();
    }

    public function get_order_item($id)
    {
        $query = $this->db->get_where('order_item', ['id' => $id]);
        return $query->row();
    }

    public function create_order_item($data)
    {
        $this->db->insert('order_item', $data);
        return $this->db->insert_id();
    }

    public function update_order_item($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('order_item', $data);
    }

    public function delete_order_item($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('order_item');
    }
}