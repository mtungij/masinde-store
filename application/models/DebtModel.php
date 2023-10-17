<?php

class DebtModel extends CI_Model
{
    //create methods
    public function get_debts() {
        //use join to get debt info, the name of the customer(debter) and the name of the user(seller) and branch_name
        $this->db->select('d.id, d.customer_name, d.amount_paid, d.amount_due, d.customer_phone as phone, customer_address as address, b.name as branch, u.username as staff');
        $this->db->from('debt d');
        $this->db->join('orders od', 'od.order_number = d.order_id');
        $this->db->join('user u', 'u.id = od.user_id');
        $this->db->join('branch b', 'b.id = od.branch_id');
        $query = $this->db->get();
        return $query->result();
    }


    public function get_debt($id) {
        $query = $this->db->get_where('debts', ['id' => $id]);
        return $query->row();
    }


    public function create_debt($data) {
        $this->db->insert('debts', $data);
    }


    public function update_debt($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('debts', $data);
    }


    public function delete_debt($id) {
        $this->db->where('id', $id);
        $this->db->delete('debts');
    }


    public function get_debt_by_cart_id($cart_id) {
        $query = $this->db->get_where('debts', ['cart_id' => $cart_id]);
        return $query->row();
    }


    public function get_debt_by_debt_number($debt_number) {
        $query = $this->db->get_where('debts', ['debt_number' => $debt_number]);
        return $query->row();
    }


    public function get_debt_by_user_id($user_id) {
        $query = $this->db->get_where('debts', ['user_id' => $user_id]);
        return $query->row();
    }


    public function get_debt_by_sell_by($sell_by) {
        $query = $this->db->get_where('debts', ['sell_by' => $sell_by]);
        return $query->row();
    }


    public function get_debt_by_amount_paid($amount_paid) {
        $query = $this->db->get_where('debts', ['amount_paid' => $amount_paid]);
        return $query->row();
    }


    public function get_debt_by_total_price($total_price) {
        $query = $this->db->get_where('debts', ['total_price' => $total_price]);
        return $query->row();
    }


    public function get_debt_by_created_at($created_at) {
        $query = $this->db->get_where('debts', ['created_at' => $created_at]);
        return $query->row();
    }


    public function get_debt_by_updated_at($updated_at) {
        $query = $this->db->get_where('debts', ['updated_at' => $updated_at]);
        return $query->row();
    }


}