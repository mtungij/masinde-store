<?php

class OrderModel extends CI_Model 
{
    public function get_orders()
    {
        $query = $this->db->get('orders');
        return $query->result();
    }

    public function get_order($id)
    {
        $query = $this->db->get_where('orders', ['id' => $id]);
        return $query->row();
    }

    public function create_order($data)
    {
        $this->db->insert('orders', $data);
        return $this->db->insert_id();
    }

    public function update_order($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('orders', $data);
    }

    public function delete_order($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('orders');
    }
}