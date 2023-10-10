<?php

class DebtPaymentModel extends CI_Model
{
    //create methods
    public function get_debt_payments() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('debts');
        return $query->result();
    }


    public function get_debt_payment($id) {
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

}