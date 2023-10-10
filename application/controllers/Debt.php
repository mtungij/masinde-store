<?php

class Debt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DebtModel');
        $this->load->model('DebtPaymentModel');
    }

    public function index()
    {
        $debts = $this->DebtModel->get_debts();
        $this->load->view('debts/all_debts', ['debts' => $debts]);
    }

    public function sell_by_debt()
    {
        $debt_number = uniqid('DB-');
        $debt = [
            'user_id' => $this->input->post('user_id'), 
            'branch_id' => $this->input->post('branch_id'),
            'total_price' => $this->input->post('cart_price'),
            'cart_id' => $this->input->post('cart_id'),
            'sold_by' => $this->input->post('sell_type'),
        ];
        $this->load->view('debts/add_debt', ['debt' => $debt]);
    }

    public function show($id)
    {
        $debt = $this->DebtModel->get_debt($id);
        $debt_payments = $this->DebtPaymentModel->get_debt_payments();
        $this->load->view('debts/debt_detail', ['debt' => $debt, 'debt_payments' => $debt_payments]);
    }

    public function create_index()
    {
        $this->load->view('debts/add_debt');
    }

    public function create()
    {
        $data = [
            'debt_number' => $this->input->post('debt_number'),
            'total_price' => $this->input->post('total_price'),
            'user_id' => $this->input->post('user_id'), 
            'sell_by' => $this->input->post('sell_type'),
            'amount_paid' => $this->input->post('amount_paid'),
        ];
        $this->DebtModel->create_debt($data);
        $this->session->set_flashdata('debt_created', 'The debt is created.');
        redirect('debt');
    }

    public function update_index($id)
    {
        $debt = $this->DebtModel->get_debt($id);
        $this->load->view('debts/edit_debt', ['debt' => $debt]);
    }

    public function update($id)
    {
        $data = [
            'debt_number' => $this->input->post('debt_number'),
            'total_price' => $this->input->post('total_price'),
            'user_id' => $this->input->post('user_id'), 
            'sell_by' => $this->input->post('sell_type'),
            'amount_paid' => $this->input->post('amount_paid'),
        ];
        $this->DebtModel->update_debt($id, $data);
        $this->session->set_flashdata('debt_updated', 'The debt is updated.');
        redirect('debt');
    }

    public function delete($id)
    {
        $this->DebtModel->delete_debt($id);
        $this->session->set_flashdata('debt_deleted', 'The debt is deleted.');
        redirect('debt');
    }

    public function pay_debt($id)
    {
        $debt = $this->DebtModel->get_debt($id);
        $this->load->view('debts/pay_debt', ['debt' => $debt]);
    }  

    public function pay($id)
    {
        $data = [
            'debt_id' => $id,
            'amount_paid' => $this->input->post('amount_paid'),
        ];
        $this->DebtPaymentModel->create_debt_payment($data);
        $this->session->set_flashdata('debt_paid', 'The debt is paid.');
        redirect('debt');
    }

    public function delete_payment($id)
    {
        $this->DebtPaymentModel->delete_debt_payment($id);
        $this->session->set_flashdata('debt_payment_deleted', 'The debt payment is deleted.');
        redirect('debt');
    }


}