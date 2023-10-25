<?php

class Sales extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SalesModel');
    }
   public function index() 
   {
    $this->load->view('sales/all_sales');
   }

    public function dashboard()
    {
        $general_sales = $this->db->query("SELECT COUNT(*) as general_sales from orders")->row();
        $day_sales = $this->db->query("SELECT COUNT(*) as day_sales from orders WHERE DATE(created_at) = CURDATE()")->row();
        $month_sales = $this->db->query("SELECT COUNT(*) as month_sales from orders WHERE MONTH(created_at) = MONTH(CURDATE())")->row();
        $week_sales = $this->db->query("SELECT COUNT(*) as week_sales from orders WHERE WEEK(created_at) = WEEK(CURDATE())")->row();
        $half_year_sales = $this->db->query("SELECT COUNT(*) as half_year_sales from orders WHERE QUARTER(created_at) = QUARTER(CURDATE())")->row();
        $year_sales = $this->db->query("SELECT COUNT(*) as year_sales from orders WHERE YEAR(created_at) = YEAR(CURDATE())")->row();

        $sales_per_each_month = $this->SalesModel->get_sales_per_each_month();
        $sales_of_branches = $this->SalesModel->get_sales_of_branches();
        $top10_monthly_products = $this->SalesModel->get_top_10_products_of_the_month();
        
        //calculate the percentage of daily sales
        $day_sales_percentage = round(($day_sales->day_sales / $general_sales->general_sales) * 100);

        //calculate the percentage of monthly sales
        $month_sales_percentage = round(($month_sales->month_sales / $general_sales->general_sales) * 100);

        //calculate the percentage of yearly sales
        $year_sales_percentage = round(($year_sales->year_sales / $general_sales->general_sales) * 100);


        $data =  [
            'general_sales' => $general_sales->general_sales,
            'day_sales' => $day_sales->day_sales,
            'week_sales' => $week_sales->week_sales,
            'month_sales' => $month_sales->month_sales,
            'year_sales' => $year_sales->year_sales,
            'day_sales_percentage' => $day_sales_percentage,    
            'month_sales_percentage' => $month_sales_percentage,
            'year_sales_percentage' => $year_sales_percentage,
            'top10_monthly_products' => $top10_monthly_products,
        ];
        $this->load->view('sales/sales_dashboard', $data);
    }

    public function mysales_view()
    {
       $user_id = $this->session->userdata('userId');
        $mysales = $this->SalesModel->get_sales_by_user($this->session->userdata('userId'));
        //get today's sales and revenue by user
        $today_sales = $this->db->query(
            "SELECT COUNT(user_id) as today_sales, SUM(amount_paid) as revenue 
            FROM orders 
            WHERE user_id = $user_id AND DATE(created_at) = CURDATE()
          ")->row_array();

        //get monthly total sales and revenue by user
        $monthly_sales = $this->db->query(
            "SELECT COUNT(user_id) as monthly_sales, SUM(amount_paid) as revenue 
            FROM orders 
            WHERE user_id = $user_id AND MONTH(created_at) = MONTH(CURDATE())
          ")->row_array();

        $sales_summary = $this->db->query(
            "SELECT COUNT(user_id) as total_sales, SUM(amount_paid) as revenue 
            FROM orders 
            WHERE user_id = $user_id
          ")->row_array();

        $data = [
            'sales' => $mysales, 
            'sales_summary' => $sales_summary,
            'today_sales' => $today_sales,
            'monthly_sales' => $monthly_sales,
        ];

        $this->load->view('sales/mysales',$data );
    }

    public function branch_sales()
    {
        $branch_id = $this->session->userdata('branchId');
        $branch_sales = $this->SalesModel->get_sales_by_branch($branch_id);
        $today_branch_sales = $this->db->query(
            "SELECT COUNT(branch_id) as today_sales, SUM(amount_paid) as revenue 
            FROM orders 
            WHERE branch_id = $branch_id AND DATE(created_at) = CURDATE()
         ")->row_array();

        $monthly_sales = $this->db->query(
            "SELECT COUNT(branch_id) as monthly_sales, SUM(amount_paid) as revenue 
            FROM orders 
            WHERE branch_id = $branch_id AND MONTH(created_at) = MONTH(CURDATE())
            ")->row_array();

        $sales_summary = $this->db->query(
            "SELECT COUNT(branch_id) as total_sales, SUM(amount_paid) as revenue 
            FROM orders 
            WHERE branch_id = $branch_id
          ")->row_array();
        
        $data = [
            "sales" => $branch_sales,
            "sales_summary" => $sales_summary,
            "today_sales" => $today_branch_sales,
            "monthly_sales" => $monthly_sales,
        ];

        $this->load->view('sales/branch_sales', $data);
        
    }

}