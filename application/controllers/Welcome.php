<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->model('SalesModel');
		$this->load->model('ProductBranchModel');
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function dashboard() {
		if($this->session->userdata('userId')) {
			$total_sales_per_day = $this->db->query(
				'SELECT count(*) as total_sales_per_day 
				from orders where DATE(created_at) = CURDATE()'
			   )->row();

			$total_revenue_per_day = $this->db->query(
				'SELECT sum(amount_paid) as total_revenue_per_day 
				from orders where DATE(created_at) = CURDATE()'
			   )->row();

			$total_profit_per_day = $this->db->query(
				'SELECT sum(profit) as total_profit_per_day 
				from order_item 
				where DATE(created_at) = CURDATE()'
			  )->row();

			$total_profit = $this->db->query(
				'SELECT sum(profit) as total_profit from order_item')->row();

			$total_revenue = $this->db->query(
				'SELECT sum(amount_paid) as total_revenue from orders')->row();

			$total_sales = $this->db->query(
				'SELECT count(*) as total_sales from orders')->row();

			$avarage_sales_per_day = $this->db->query(
				'SELECT AVG(amount_paid) as avarage_sales_per_day from orders')->row();

			$total_product_count = $this->ProductBranchModel->product_branch_count();

			//get total products amount(inventory) per each branch order by total products amount(inventory) in descending order
			$products_branches = $this->db->query(
				   'SELECT b.name as name, sum(pb.inventory) as total_products_amount 
				   FROM product_branch pb 
				   LEFT JOIN branch b on b.id = pb.branch_id 
				   GROUP BY pb.branch_id 
				   ORDER BY total_products_amount DESC'
				)->result();

			//total sales and revenue per each branch/month order by total sales in descending order
			$sales_branches = $this->db->query(
				  'SELECT b.name as name, count(*) as total_sales, sum(o.amount_paid) as total_revenue 
					FROM orders o 
					LEFT JOIN branch b on b.id = o.branch_id 
					GROUP BY o.branch_id 
					ORDER BY total_sales 
					DESC'
				)->result();
	
		     //get the top 10 selling products join with product table and branch table
			$top10_products = $this->db->query(
				    'SELECT p.name as product_name, b.name as branch_name, sum(oi.quantity) as total_quantity 
						FROM order_item oi 
						LEFT JOIN product p on p.id = oi.product_id 
						LEFT JOIN orders o on o.order_number = oi.order_id
						LEFT JOIN branch b on b.id = o.branch_id
						GROUP BY oi.product_id, b.name 
						ORDER BY total_quantity 
						DESC LIMIT 10'
					)->result();


			//get number of out of out stock branch_product(inventory <= stock_limit) from each branch
			$branch_out_of_stock = $this->db->query(
				'SELECT p.name as product_name, b.name as branch_name, count(p.name) as total_out_of_stock 
				FROM product_branch pb 
				LEFT JOIN branch b on b.id = pb.branch_id 
				LEFT JOIN product p on p.id = pb.product_id
				WHERE pb.inventory <= pb.stock_limit 
				GROUP BY pb.branch_id, p.name
				LIMIT 10'
				)->result();


			$data = [
				'total_products'=> $total_product_count,
				'total_revenue'=> $total_revenue,
				'total_sales'=> $total_sales,
				'avarage_sales'=> $avarage_sales_per_day,
				'total_sales_per_day'=> $total_sales_per_day,
				'total_revenue_per_day'=> $total_revenue_per_day,
				'products_branches'=> $products_branches,
				'sales_branches'=> $sales_branches,
				'top10_products'=> $top10_products,
				'profit_per_day' => $total_profit_per_day,
				'total_profit' => $total_profit,
				'branch_out_of_stock' => $branch_out_of_stock,
				
			];
			 $this->load->view('dashboard', $data);
			 }
		else redirect('');
	}
}
