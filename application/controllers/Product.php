<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');
        $this->load->model('BranchModel');
         $this->load->model('CartModel');
        $this->load->model('CartItemModel');
        $this->load->model('ProductBranchModel');
    }
    public function index()
    {
        $products = $this->ProductBranchModel->get_productsbranch($this->session->userdata('branchId'));
        $this->load->view('products/product_list', ['products' => $products]);
    }

    public function show($id)
    {
        $product = $this->ProductBranchModel->get_productbranch_by_id($id, $this->session->userdata('branchId'));
        $this->load->view('products/product_detail', ['product' => $product]);
    }


    public function product_branches() {
        $data['branches'] = $this->BranchModel->get_branches();
        $this->load->view('products/products_per_branch', $data);
    }

    public function create_index()
    {
        $products = $this->db->query("SELECT * FROM product")->result();
        $branches = $this->BranchModel->get_branches();
        $this->load->view('products/add_product', ['branches' => $branches, 'products' => $products]);
    }


    public function branch_products($branch_id) {
        $branch_name = $this->db->get_where("branch", ['id' => $branch_id])->row()->name;
        $products = $this->ProductBranchModel->get_productsbranch($branch_id);
        $this->load->view('products/branch_products_detail', ['products' => $products, 'branch' => $branch_name, 'branch_id2'=>$branch_id]);
    }


    public function edit_product_branch()
    {
        $product_branch_id = $this->input->post('product_branch_id');
        
        $input_data = [
            "branch_id" => $this->input->post('branch_id'),
            "product_id" => $this->input->post('product_id'),
            "quantity" => $this->input->post('quantity'),
            "inventory" => $this->input->post('quantity'),
            "stock_limit" => $this->input->post('stock_limit'),
        ];

        //update product_branch
        $this->db->update('product_branch', $input_data, ['id' => $product_branch_id]);
        $this->session->set_flashdata('product_branch_updated', 'Branch product is updated successfullly!');
        redirect('product/branch_products/'.$input_data['branch_id']);
    }

    public function create()
    {
        //validate all the data
        $this->form_validation->set_rules('product_id', 'Product', 'required');
        $this->form_validation->set_rules('branch_id', 'Branch', 'required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required');
        $this->form_validation->set_rules('stock_limit', 'Stock Limit', 'required');
        
         $product_branchdata = [
            "product_id" => $this->input->post('product_id'),
            "branch_id" => $this->input->post('branch_id'),
            "quantity" => $this->input->post('quantity'),
            "inventory" => $this->input->post('quantity'),
            "stock_limit" => $this->input->post('stock_limit'), 
        ];

        //if product is found in the product branch table update it's quantity else add as new product branch
        $this->db->where('product_id', $product_branchdata['product_id']);
        $this->db->where('branch_id', $product_branchdata['branch_id']);
        $product_branch = $this->db->get('product_branch')->row();

        if($product_branch) {
            $product_branchdata['quantity'] = $product_branch->quantity + $product_branchdata['quantity'];
            $product_branchdata['inventory'] = $product_branch->inventory + $product_branchdata['quantity'];
            $product_branchdata['stock_limit'] = $product_branch->stock_limit;
            $this->db->where('product_id', $product_branchdata['product_id']);
            $this->db->where('branch_id', $product_branchdata['branch_id']);
            $q = $this->db->update('product_branch', $product_branchdata);

            $products_url = site_url('product');
            $this->session->set_flashdata('create_product', "Srock updated successfully! view it <a href='$products_url' style='color: orange; text-decoration: underline;'>Here</a>");
            return redirect('product/create_index');
        } else {
            $q = $this->db->insert('product_branch', $product_branchdata);
            if($q) {
            $products_url = site_url('product');
            $this->session->set_flashdata('create_product', "Product is created successfully! view it <a href='$products_url' style='color: orange; text-decoration: underline;'>Here</a>");
            return redirect('product/create_index');
        } else {
            $this->session->set_flashdata('create_product_failure',"<b>Failed!<b>, We could not save this product due to unexpected error.");
            return redirect('product/create_index');
        }
        }

    }


    public function edit_index($id)
    {
        $product = $this->ProductModel->get_product_by_id($id);
        $branches = $this->BranchModel->get_branches();
        $this->load->view('products/edit_product', ['product' => $product, 'branches' => $branches]);
    }


    public function register_view()
    {
        $this->load->view('products/register_product');
    }


    public function register_product()
    {
        $productdata = [
            "name" => $this->input->post('name'),
            "brand" => $this->input->post('brand'),
            "unit" => $this->input->post('unit'),
            "buy_price" => $this->input->post('buy_price'),
            "whole_sale_price" => $this->input->post('whole_sale_price'),
            "retail_sale_price" => $this->input->post('retail_sale_price'),
            // "expire_date" => $this->input->post('expire_date'),
        ];
        $this->db->insert('product', $productdata);
        $this->session->set_flashdata('productRegistered', 'New Product Registered Successfully!');
        return redirect('product/register_view');
    }

    public function update($id)
    {
        //update_product
    }


    public function sell() {
        $userId = $this->session->userdata('userId');
        $branchId = $this->session->userdata('branchId');
        if(!$userId) {
            redirect('');
        }
        $cartitems = $this->CartModel->get_cart($userId);
        $products = $this->ProductBranchModel->get_productsbranch($branchId);
        $this->load->view('products/sell_product', ['products' => $products, 'cartItems' => $cartitems]);
    }
}