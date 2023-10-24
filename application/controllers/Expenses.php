<?php

class Expenses extends CI_Controller
{
    public function index()
    {
        $this->load->view('expenses/expenses');
    }

    public function create_index()
    {
        $this->load->view('expenses/add_expense');
    }


    public function create_expense()
    {
        $data = [
            "user_id" => $this->input->post('user_id'),
            "branch_id" => $this->input->post('branch_id'),
            "amount" => $this->input->post('amount'),
            "description" => $this->input->post('description'),
        ];


        //get total amount_paid from orders table
        $this->db->select_sum('total');
        $this->db->where('branch_id', $this->input->post('branch_id'));
        $query = $this->db->get('sales');

        $total_sales = $query->row()->total;

         //updated the total sales
         $this->db->set('total', $total_sales - $this->input->post('amount'));
         $this->db->where('branch_id', $this->input->post('branch_id'));
         $this->db->update('sales');

         $this->db->insert('expenses', $data);
         $this->session->set_flashdata('create_expense', 'Expense has been saved successfully!');
        
        redirect('expenses/create_index');
    }

}