<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');
    }
    public function index()
    {
        $products = $this->ProductModel->get_products();
        $this->load->view('products/product_list', ['products' => $products]);
    }

    public function show($id)
    {
        $product = $this->ProductModel->get_product($id);
        $this->load->view('products/product_detail', ['product' => $product]);
    }

    public function create_index()
    {
        $this->load->view('products/add_product');
    }

    public function create()
    {
        $productdata = [
            "name" => $this->input->post('name'),
            "brand" => $this->input->post('brand'),
            "branch_id" => $this->input->post('branch_id'),
            "store_id" => $this->input->post('store_id'),
            "pkj_amount" => $this->input->post('pkgs_amount'),
            "quantity" => $this->input->post('quantity'),
            "pkgs_buy_price" => $this->input->post('pkgs_buy_price'),
            "whole_sale_price" => $this->input->post('whole_sale_price'),
            "retail_sale_price" => $this->input->post('retail_sale_price'),
            "extra_items" => $this->input->post('extra_items'),
            "stock_limit" => $this->input->post('stock_limit'),
            "stock_limit_unit" => $this->input->post('stock_limit_unit'),
            "expire_date" => $this->input->post('expire_date'),
        ];

        $q = $this->ProductModel->create_product($productdata);
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
        $this->load->view('products/sell_product');
    }
}