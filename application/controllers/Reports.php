<?php

use Dompdf\Dompdf;
use Mpdf\Mpdf;

class Reports extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('ReportsModel');
    }
    public function staff_wise()
    {
        //get orders count of each staff and total order revenue raised by each staff
        $report_data = $this->db->query(
            "SELECT o.user_id, u.username, u.position, COUNT(o.user_id) AS total_orders, SUM(o.amount_paid) AS total_revenue 
            FROM orders o 
            JOIN user u 
            ON u.id = o.user_id
            WHERE DATE(o.created_at) = CURDATE()
            GROUP BY o.user_id"
          )->result();

        $this->load->view('reports/staff_wise', ["datas" => $report_data, "from" => null, "to" => null]);
    }

    public function print() {
       $domPdf = new Dompdf();
         $domPdf->loadHtml('<h1 style="color: green">Hello World</h1>');
         $domPdf->setPaper('A4', 'landscape');
         $domPdf->render();
         $domPdf->stream("branch_wise.pdf", array("Attachment" => false));
    }

    public function staff_wise_filter()
    {
        
        $from_date = $this->input->post('from');
        $to_date = $this->input->post('to');

        $report_data = $this->ReportsModel->staff_wise_filter($from_date, $to_date);
        $this->load->view('reports/staff_wise', ["datas" => $report_data, "from" => $from_date, "to" => $to_date]);
    }


    public function branch_wise()
    {
        //get orders count of each branch and total order revenue raised by each branch
        $report_data = $this->db->query(
            "SELECT o.branch_id, b.name as branch, COUNT(o.branch_id) AS total_orders, SUM(o.amount_paid) AS total_revenue 
            FROM orders o 
            JOIN branch b 
            ON b.id = o.branch_id
            WHERE DATE(o.created_at) = CURDATE()
            GROUP BY o.branch_id"
          )->result();

        $this->load->view('reports/branch_wise', ["datas" => $report_data, "from" => null, "to" => null]);
    }


    public function branch_wise_filter()
    {
        
        $from_date = $this->input->post('from');
        $to_date = $this->input->post('to');

        $report_data = $this->ReportsModel->branch_wise_filter($from_date, $to_date);
        $this->load->view('reports/branch_wise', ["datas" => $report_data, "from" => $from_date, "to" => $to_date]);
    }


    public function credit_sales()
    {
        //select all orders with credit payment method
        $report_data = $this->db->query(
            "SELECT o.order_number, d.customer_name, u.username as staff, b.name as branch, d.customer_phone, d.customer_address, d.amount_paid, d.amount_due, o.created_at
            FROM orders o 
            JOIN branch b 
            ON b.id = o.branch_id
            JOIN user u 
            ON u.id = o.user_id
            LEFT JOIN debt d
            ON o.order_number = d.order_id 
            WHERE o.sell_by = 'credit' AND DATE(o.created_at) = CURDATE()"
          )->result();

        $this->load->view('reports/credit_sales', ["datas" => $report_data, "from" => null, "to" => null]);
    }


    public function credit_sales_filter()
    {
        
        $from_date = $this->input->post('from');
        $to_date = $this->input->post('to');

        $report_data = $this->ReportsModel->credit_sales_filter($from_date, $to_date);

        $this->load->view('reports/credit_sales', ["datas" => $report_data, "from" => $from_date, "to" => $to_date]);
    }


    // get all products from product_branch table and group them by product_id and branch_id
    public function all_products()
    {
        $report_data = $this->db->query(
            "SELECT p.name, p.brand, p.buy_price, p.retail_sale_price, p.whole_sale_price, SUM(pb.inventory) AS total_inventory, p.expire_date
            FROM product p
            LEFT JOIN product_branch pb
            ON p.id = pb.product_id
            JOIN branch b
            ON b.id = pb.branch_id
            GROUP BY  pb.product_id
          ")->result();

        $this->load->view('reports/all_products', ["datas" => $report_data, "from" => null, "to" => null]);
    }

    public function out_of_stock()
    {
        //get products from product_branch table with inventory <= stock_limit
        $report_data = $this->db->query(
            "SELECT p.name, p.brand, pb.inventory, b.name as branch, p.buy_price
            FROM product_branch pb
            LEFT JOIN product p
            ON pb.product_id = p.id
            LEFT JOIN branch b
            ON pb.branch_id = b.id
            WHERE pb.inventory <= pb.stock_limit
            ")->result();


        $this->load->view("reports/out_of_stock", ["datas"=> $report_data]);
    }



    public function empty_products()
    {
         //get products from product_branch table with inventory <= stock_limit
        $report_data = $this->db->query(
            "SELECT p.name, p.brand, pb.inventory, b.name as branch, p.buy_price
            FROM product_branch pb
            LEFT JOIN product p
            ON pb.product_id = p.id
            LEFT JOIN branch b
            ON pb.branch_id = b.id
            WHERE pb.inventory = 0
            ")->result();


        $this->load->view("reports/empty_products", ["datas"=> $report_data]);
    }


    public function expenses() {
        $report_data = $this->db->query(
            "SELECT e.id, e.description, e.amount, e.created_at, b.name as branch, u.username as staff
            FROM expenses e
            JOIN branch b
            ON b.id = e.branch_id
            JOIN user u
            ON u.id = e.user_id
            WHERE DATE(e.created_at) = CURDATE()
            ")->result();

        $this->load->view("reports/expenses", ["datas"=> $report_data, "from" => null, "to" => null]);
    }


    public function expenses_filter() {
        $from_date = $this->input->post('from');
        $to_date = $this->input->post('to');

        $report_data = $this->db->query(
            "SELECT e.id, e.description, e.amount, e.created_at, b.name as branch, u.username as staff
            FROM expenses e
            JOIN branch b
            ON b.id = e.branch_id
            JOIN user u
            ON u.id = e.user_id
            WHERE DATE(e.created_at) BETWEEN '$from_date' AND '$to_date'
            ")->result();

        $this->load->view("reports/expenses", ["datas"=> $report_data, "from" => $from_date, "to" => $to_date]);
    }

}

