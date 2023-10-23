<?php


class Vendors extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('VendorModel');
        $this->load->model('ProductTransfers');
        $this->load->model('ProductBranchModel');
        $this->load->model('BranchModel');
        $this->load->model('ProductModel');
    }


    public function index()
    {
        $branch_id =
        $vendors = $this->VendorModel->get_vendors();
        $branches = $this->BranchModel->get_branches();
        $transfers = $this->ProductTransfers->get_products_transfer_to_vendor($this->session->userdata('branchId'));
        $products = $this->ProductBranchModel->get_productsbranch($this->session->userdata('branchId'));
        $data = [
            'products' => $products, 
            'branches' => $branches, 
            'vendors' => $vendors, 
            'transfers' => $transfers,
        ];
        $this->load->view('vendors/vendor_transfer', $data);
    }

    public function transfer_to_vendor()
    {
        $this->form_validation->set_rules('product_id', 'Product', 'required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric');
        $this->form_validation->set_rules('branch_id', 'Branch', 'required');
        $this->form_validation->set_rules('vendor_id', 'Vendor', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = [
                'product_id' => $this->input->post('product_id'),
                'quantity' => $this->input->post('quantity'),
                'branch_id' => $this->input->post('branch_id'),
                'user_id' => $this->input->post('vendor_id'),
            ];

            //save to product_vendor table
            $this->ProductTransfers->transfer_to_vendor($data);
            redirect('vendors/index');
        }
    }


    public function delete($id)
    {
        $this->VendorModel->delete_vendor_product($id);
        $this->session->set_flashdata('vp_confirmation', 'Vendor sales is confirmed that it\'s correct!');
        redirect('vendors');
    }
}