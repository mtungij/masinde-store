<?php

class Store extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');
        $this->load->model('ProductBranchModel');
        $this->load->model('BranchModel');
        $this->load->model('ProductTransfers');
    }


    public function index()
    {
        $products = $this->ProductBranchModel->get_productsbranch($this->session->userdata('branchId'));
        $this->load->view('store/all_products', ['products' => $products]);
    }

    public function show($id)
    {
        $product = $this->ProductModel->get_product($id);
        $this->load->view('store/product_detail', ['product' => $product]);
    }

    public function transfer_product_view()
    {
        $transfers = $this->ProductTransfers->get_product_transfers($this->session->userdata('branchId'));
        $branches = $this->BranchModel->get_branches();
        $products = $this->ProductBranchModel->get_productsbranch($this->session->userdata('branchId'));
        $this->load->view('store/transfer_product', ['products' => $products, 'branches' => $branches, 'transfers' => $transfers]);
    }

    public function transfer_product()
    {
        $this->form_validation->set_rules('product_id', 'Product', 'required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric');
        $this->form_validation->set_rules('transfer_from', 'From Branch', 'required');
        $this->form_validation->set_rules('transfer_to', 'To Branch', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->transfer_product_view();
        } else {
            $product_id = $this->input->post('product_id');
            $quantity = $this->input->post('quantity');
            $tranfer_from = $this->input->post('transfer_from');
            $transfer_to = $this->input->post('transfer_to');

            $product_branch = $this->ProductBranchModel->get_productbranch_by_id($product_id, $tranfer_from);

            if ($product_branch->inventory < $quantity) {
                $this->session->set_flashdata('transfer_quantity_error', 'Quantity is not enough to make transfer');
                return redirect('store/transfer_product_view');
            } else {
                //save transfers to product_transfers table
                $this->db->insert('product_transfers', [
                    'product_id' => $product_id,
                    'transfer_from' => $tranfer_from,
                    'quantity' => $quantity,
                    'transfer_to' => $transfer_to,
                ]);
 
                //update the stock(inventory) of product_branch
                $product_branch_from_quantity = $product_branch->inventory - $quantity;
                $this->db->query("UPDATE product_branch SET inventory = $product_branch_from_quantity WHERE id = $product_branch->id");

                // if product_branch_to exists, update the quantity, else create new product_branch
                $product_branch_to = $this->ProductBranchModel->get_productbranch_by_id($product_id, $transfer_to);
                if ($product_branch_to) {
                    $new_product_branch_to_quantity = $product_branch_to->inventory + $quantity;
                    $this->ProductBranchModel->update_productbranch($product_branch_to->id, ['quantity' => $new_product_branch_to_quantity, 'inventory' => $new_product_branch_to_quantity]);
                } else {
                    $this->ProductBranchModel->create_productbranch([
                        'product_id' => $product_id,
                        'branch_id' => $transfer_to,
                        'quantity' => $quantity,
                        'inventory' => $quantity,
                        'stock_limit' => 0
                    ]);

                }
                $this->session->set_flashdata('transfer_success', 'Transfer product successfully');
                redirect('store/transfer_product_view');
            }
        }
    }
}
