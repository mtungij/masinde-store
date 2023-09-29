<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CartItem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CartItemModel');
        
    }
    public function index()
    {
        //all 
    }

    public function delete($id)
    {
        $q = $this->CartItemModel->delete_cart_item($id);
        if($q) {
            $this->session->set_flashdata('cart_item_deleted', 'The cart item is deleted.');
            redirect('product/sell');
        }
    }
}