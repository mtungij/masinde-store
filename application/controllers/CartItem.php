<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CartItem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CartItemModel');
        $this->load->model('ProductBranchModel');
        
    }
    public function index()
    {
        //all 
    }
    
    //update cart item
    public function update()
    {
        //get cart item sent from ajax
        $id = $this->input->post('id');
        $quantity = $this->input->post('quantity');
        $data = [
            'quantity' => $this->input->post('quantity'),
            'cart_id' => $this->input->post('cart_id'),
            'product_id' => $this->input->post('product_id'),
            'sold_by' => $this->input->post('sold_by'),
        ];

        //select product inventory then if product inventory is less than quantity, return error message else update cart item
        $product = $this->ProductBranchModel->get_productbranch_by_id($data['product_id'], $this->session->userdata('branchId'));
        if($product->inventory < $quantity) {
            $this->session->set_flashdata('stockEmptyOnUpdateCart', "The product quantity you are trying to sell is out of stock, You can sell less than $product->inventory products only.");
            echo json_encode("Product inventory is less than $quantity");
            return;
        } else {
            $this->db->update('cart_item', $data, ['id' => $id]);
            echo json_encode("Cart item is updated successfully");
        }
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