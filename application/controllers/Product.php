<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function index()
    {
        $this->load->view('products/product_list');
    }

    public function show($id)
    {
        $this->load->view('products/product_detail');
    }

    public function create_index()
    {
        $this->load->view('products/add_product');
    }

    public function create($id)
    {
        //create product
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