<?php


class Order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('OrderModel');
        $this->load->model('OrderItemModel');
    }

    public function index()
    {
        $orders = $this->OrderModel->get_orders();
        $this->load->view('orders/all_orders', ['orders' => $orders]);
    }

    public function show($id)
    {
        $order = $this->OrderModel->get_order($id);
        $order_items = $this->OrderItemModel->get_order_items();
        $this->load->view('orders/order_detail', ['order' => $order, 'order_items' => $order_items]);
    }

    public function create_index()
    {
        $this->load->view('orders/add_order');
    }

    public function create()
    {
        $cart_id = $this->input->post('cart_id');
        $branch_id = $this->input->post('branch_id');
        $order_id = "INV-".uniqid();
    
        $data = [
            'order_number' => $order_id,
            'total_price' => $this->input->post('cart_price'),
            'user_id' => $this->input->post('user_id'), 
            'branch_id' => $branch_id,
            'sell_by' => $this->input->post('sell_type'),
            'amount_paid' => $this->input->post('amount_paid'),
        ];
        $returned_orderId = $this->OrderModel->create_order($data);
        
        //select all cartItems associated with this cart
        $cartItems = $this->db->query("SELECT product_id,quantity,sold_by FROM cart_item WHERE cart_id = $cart_id")->result();
        //loop through the cartItems and insert them into the order_items table
        foreach($cartItems as $cartItem){
            $data = [
                'order_id' => $order_id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'sold_by' => $cartItem->sold_by,
            ];

            //product inventory update
            $product = $this->db->query("SELECT inventory FROM product WHERE id = $cartItem->product_id")->row();
            $new_inventory = $product->inventory - $cartItem->quantity;
            $this->db->query("UPDATE product SET inventory = $new_inventory WHERE id = $cartItem->product_id");

            $this->OrderItemModel->create_order_item($data);
        }
        //delete cart associated with this order;
        $this->db->query("DELETE FROM cart WHERE id = $cart_id");


        //if sell by debt save the debter to the debt table
        if($this->input->post('sell_type') == 'debt'){
            $data = [
                'order_id' => $order_id,
                'customer_name' => $this->input->post('customer_name'),
                'customer_phone' => $this->input->post('customer_phone'),
                'customer_address' => $this->input->post('customer_address'),
                'amount_paid' => $this->input->post('amount_paid'),
                'amount_due' => $this->input->post('cart_price'),
            ];
            $this->db->insert('debt', $data);
        }

        $this->session->set_flashdata('orderPlacedSuccessfully', 'Your order is created successfully.');
        redirect('product/sell');
    }

    public function update($id)
    {
        $data = [
            'order_number' => $this->input->post('order_number'),
            'order_date' => $this->input->post('order_date'),
            'customer_name' => $this->input->post('customer_name'),
            'customer_address' => $this->input->post('customer_address'),
            'customer_phone' => $this->input->post('customer_phone'),
            'total' => $this->input->post('total'),
        ];
        $this->OrderModel->update_order($id, $data);
        redirect('order');
    }

    public function delete($id)
    {
        $this->OrderModel->delete_order($id);
        redirect('order');
    }

    public function profile($id)
    {
        $order = $this->OrderModel->get_order($id);
        $this->load->view('orders/edit', ['order' => $order]);
    } 
}