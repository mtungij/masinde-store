<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');
        $this->load->model('CartModel');
        $this->load->model('CartItemModel');
        
    }

    public function index()
    {
        $this->load->view('products/sell_product');
    }

    public function show($user_id) {
        $cart = $this->CartModel->get_cart($user_id);
        echo "<pre>";
        print_r($cart);
        echo "</pre>";

    }

    public function create()
    {
         $userId = $this->input->post('user_id');
         $sellType = $this->input->post('sell_type');
         $productId = $this->input->post('product_id');

         $cart = $this->CartModel->get_latest_cart($userId);
         $latest_cart = null;
         if(!$cart) {
                $this->db->trans_start();
                $this->CartModel->create_cart(["user_id" => $userId]);
                $latest_cart = $this->CartModel->get_latest_cart($userId);
                $this->CartItemModel->create_cart_item(['cart_id' => $latest_cart->id, 'product_id' => $productId, 'quantity'=>1, 'sold_by' => $sellType]);
                $this->db->trans_complete();
                
                $this->session->set_flashdata('new_cart_created', 'New cart is created with 1 product.');
                redirect('product/sell');
         } else {
            $latest_cart = $this->CartModel->get_latest_cart($userId);
            $cartItem = $this->CartItemModel->get_latest_cart_item($productId, $latest_cart->id, $sellType);
            if(!$cartItem) {
                $this->CartItemModel->create_cart_item(['cart_id' => $latest_cart->id, 'product_id' => $productId, 'quantity'=>1, 'sold_by' => $sellType]);
                $this->session->set_flashdata('added_to_cart', 'Product is added to the cart');

                redirect('product/sell');
            } else {
                $cartItem = $this->CartItemModel->get_latest_cart_item($productId, $latest_cart->id, $sellType);
                $this->db->query("UPDATE cart_item SET quantity = $cartItem->quantity + 1 WHERE cart_id = $latest_cart->id AND product_id = $cartItem->product_id AND sold_by = '$sellType'");
                $this->session->set_flashdata('product_quantity_increased', 'The quantity of this product was increased');
                redirect('product/sell');
            }
         }

    }
}