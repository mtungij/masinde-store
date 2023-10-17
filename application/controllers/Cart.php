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
        $this->load->model('ProductBranchModel');
        
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
         $branchId = $this->session->userdata('branchId');
         $userId = $this->input->post('user_id');
         $sellType = $this->input->post('sell_type');
         $productId = $this->input->post('product_id');

         //if product quantity is less than 1, redirect back with error message
            $product = $this->ProductBranchModel->get_productbranch_by_id($productId, $branchId);
            if($product->quantity < 1) {
                $this->session->set_flashdata('product_quantity_less_than_1', 'Product quantity is less than 1, please add more products to the inventory.');
                redirect('product/sell');
            }

         $cart = $this->CartModel->get_latest_cart($userId);
         $latest_cart = null;
         if(!$cart) {
                $this->db->trans_start();
                    //create new cart
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
                $this->session->set_flashdata('added_to_cart', 'Product is successfully added to the cart');

                redirect('product/sell');
            } else {
                $cartItem = $this->CartItemModel->get_latest_cart_item($productId, $latest_cart->id, $sellType);
                $this->db->query("UPDATE cart_item SET quantity = $cartItem->quantity + 1 WHERE cart_id = $latest_cart->id AND product_id = $cartItem->product_id AND sold_by = '$sellType'");
                $this->session->set_flashdata('product_quantity_increased', 'We found this product to the cart, Now we increased the quantity by 1 instead of adding it again.');
                redirect('product/sell');
            }
         }

    }
}