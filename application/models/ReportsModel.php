<?php

class ReportsModel extends CI_Model
{
    public function staff_wise_sells()
    {
        //get orders count of each staff and total order revenue raised by each staff
        $report_data = $this->db->query(
            "SELECT o.user_id, u.username, u.position, o.sell_by, COUNT(*) AS total_orders, SUM(amount_paid) AS total_revenue 
            FROM orders o 
            JOIN user u 
            WHERE u.id = o.user_id
            GROUP BY user_id"
          )->result();

        return $report_data;
    }


    public function print_staff_wise()
    {
        //get orders count of each staff and total order revenue raised by each staff
        $report_data = $this->db->query(
            "SELECT o.user_id, u.username, u.position, o.sell_by, COUNT(*) AS total_orders, SUM(amount_paid) AS total_revenue 
            FROM orders o 
            JOIN user u 
            WHERE u.id = o.user_id
            GROUP BY user_id"
          )->result();

        return $report_data;
    }


    public function staff_wise_filter($from_date, $to_date)
    {
        //get orders count of each staff and total order revenue raised by each staff between two dates(created_at)
        $report_data = $this->db->query(
            "SELECT o.user_id, u.username, u.position, o.sell_by, COUNT(*) AS total_orders, SUM(amount_paid) AS total_revenue 
            FROM orders o 
            JOIN user u 
            WHERE u.id = o.user_id AND o.created_at BETWEEN '$from_date' AND '$to_date'
            GROUP BY user_id"
          )->result();

        return $report_data;
    }


    public function branch_wise_sells()
    {
        //get orders count of each branch and total order revenue raised by each branch
        $report_data = $this->db->query(
            "SELECT o.branch_id, b.name, COUNT(*) AS total_orders, SUM(amount_paid) AS total_revenue 
            FROM orders o 
            JOIN branch b 
            WHERE b.id = o.branch_id
            GROUP BY branch_id"
          )->result();

        return $report_data;
    }



    public function branch_wise_filter($from_date, $to_date)
    {
        //get orders count of each branch and total order revenue raised by each branch between two dates(created_at)
        $report_data = $this->db->query(
            "SELECT o.branch_id, b.name as branch, COUNT(*) AS total_orders, SUM(amount_paid) AS total_revenue 
            FROM orders o 
            JOIN branch b 
            WHERE b.id = o.branch_id AND o.created_at BETWEEN '$from_date' AND '$to_date'
            GROUP BY branch_id"
          )->result();

        return $report_data;
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

        return $report_data;
    }


    public function credit_sales_filter($from_date, $to_date)
    {
        //select all orders with credit payment method between two dates(created_at)
        $report_data = $this->db->query(
            "SELECT o.order_number, d.customer_name, u.username as staff, b.name as branch, d.customer_phone, d.customer_address, d.amount_paid, d.amount_due, o.created_at
            FROM orders o 
            JOIN branch b 
            ON b.id = o.branch_id
            JOIN user u 
            ON u.id = o.user_id
            LEFT JOIN debt d
            ON o.order_number = d.order_id 
            WHERE o.sell_by = 'credit' AND o.created_at BETWEEN '$from_date' AND '$to_date'"
          )->result();

        return $report_data;
    }

   
}