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

    public function create_index()
    {
        $branches = $this->BranchModel->get_branches();
        $this->load->view('products/add_product', ['branches' => $branches]);
    }

    public function create()
    {

        $productdata = [
            "name" => $this->input->post('name'),
            "brand" => $this->input->post('brand'),
            "unit" => $this->input->post('unit'),
            "buy_price" => $this->input->post('pkgs_buy_price'),
            "whole_sale_price" => $this->input->post('whole_sale_price'),
            "retail_sale_price" => $this->input->post('retail_sale_price'),
            "expire_date" => $this->input->post('expire_date'),
        ];

         $product_id = $this->ProductModel->create_product($productdata);

         $product_branchdata = [
            "branch_id" => $this->input->post('branch_id'),
            "product_id" => $product_id,
            "quantity" => $this->input->post('quantity'),
            "inventory" => $this->input->post('quantity'),
            "stock_limit" => $this->input->post('stock_limit'), 
        ];

        $q = $this->ProductBranchModel->create_productbranch($product_branchdata);

        if($q) {
            $products_url = site_url('product');
            $this->session->set_flashdata('create_product', "Product is created successfully! view it <a href='$products_url' style='color: orange; text-decoration: underline;'>Here</a>");
            return redirect('product/create_index');
        } else {
            $this->session->set_flashdata('create_product_failure',"<b>Failed!<b>, We could not save this product due to unexpected error.");
            return redirect('product/create_index');
        }
    }

    public function update($id)
    {
        //update_product
    }

    public function delete($id)
    {
        //delate product
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