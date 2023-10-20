<?php

class SalesModel extends CI_Model
{
    public function get_all_sales()
    {
        //get all sales
        $this->db->query("SELECT * FROM orders");
    }

    public function get_sales_by_user($user_id)
    {
        //get sales by user
        return $this->db->query("SELECT * FROM orders WHERE user_id = $user_id")->result();
    }

    //get sales by date
    public function get_sales_by_date($date)
    {
        return $this->db->query("SELECT * FROM orders WHERE DATE(created_at) = '$date'")->result();
    }

    //get sales by date range join with users table and product table
    public function get_sales_by_date_range($start_date, $end_date)
    {
        return $this->db->query("SELECT o.*, u.name as user_name, p.name as product_name FROM orders o JOIN users u ON o.user_id = u.id JOIN order_item oi ON o.order_number = oi.order_id JOIN products p ON oi.product_id = p.id WHERE DATE(o.created_at) BETWEEN '$start_date' AND '$end_date'")->result();
    }

    public function get_sales_by_branch($branch_id)
    {
        return $this->db->query("SELECT * FROM orders WHERE branch_id = $branch_id")->result();
    }

    public function get_sales_of_branches()
    {
        //group sales by branches
        return $this->db->query("SELECT branch_id, COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders GROUP BY branch_id")->result();
    }



    /**
     * TOTAL SALES OF THE BRANCH
     * this includes all totals sales reports of the branch
     */

    //get total sales of the day by branch
    public function get_sales_of_the_day_by_branch($branch_id)
    {
        return $this->db->query("SELECT COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders WHERE branch_id = $branch_id AND DATE(created_at) = CURDATE()")->row();
    }

    //get total sales of the week by branch
    public function get_sales_of_the_week_by_branch($branch_id)
    {
        return $this->db->query("SELECT COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders WHERE branch_id = $branch_id AND WEEK(created_at) = WEEK(CURDATE())")->row();
    }

    //get total sales of the month by branch
    public function get_sales_of_the_month_by_branch($branch_id)
    {
        return $this->db->query("SELECT COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders WHERE branch_id = $branch_id AND MONTH(created_at) = MONTH(CURDATE())")->row();
    }

    //get total sales of the year by branch
    public function get_sales_of_the_year_by_branch($branch_id)
    {
        return $this->db->query("SELECT COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders WHERE branch_id = $branch_id AND YEAR(created_at) = YEAR(CURDATE())")->row();
    }





    /**
     * SALES STATISTICS OF EACH BRANCH
     * this includes all the reports of each branch
     */

    //group sales by branches for each day
    //-total sales per each branch for each day
    public function get_sales_of_branches_per_day()
    {
        return $this->db->query("SELECT branch_id, DATE(created_at) day, COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders GROUP BY branch_id, DATE(created_at)")->result();
    }

    //group sales by branches for each week
    //-total sales per each branch for each week
    public function get_sales_of_branches_per_week()
    {
        return $this->db->query("SELECT branch_id, WEEK(created_at) week, COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders GROUP BY branch_id, WEEK(created_at)")->result();
    }


    //group sales by branches for each month
    //-total sales per each branch for each month
    public function get_sales_of_branches_per_month()
    {
        return $this->db->query("SELECT branch_id, MONTHNAME(created_at) month, COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders GROUP BY branch_id, MONTH(created_at)")->result();
    }


    //group sales by branches for each year
    //-total sales per each branch for each year
    public function get_sales_of_branches_per_year()
    {
        return $this->db->query("SELECT branch_id, YEAR(created_at) year, COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders GROUP BY branch_id, YEAR(created_at)")->result();
    }

    public function get_general_sales()
    {
        //get general sales
        return $this->db->query("SELECT COUNT(*) as general_sales FROM orders")->row();
    }





    /**  
     * GEANARAL SALES STATICSTICS OF THE DAY
     * this includes all the reports of the day in general sales
     */
    public function get_sales_per_each_day()
    {
        //group sales by days
        return $this->db->query("SELECT DATE(created_at) as day, COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders GROUP BY DATE(created_at)")->result();
    }

    public function get_order_items_of_the_day()
    {
        //get all order items sold today join with products table
        return $this->db->query("SELECT * FROM order_item oi JOIN product p ON oi.product_id = p.id WHERE DATE(oi.created_at) = CURDATE()")->result();
    }

    //get top 10 products sold today
    public function get_top_10_products_of_the_day()
    {
        return $this->db->query("SELECT p.name, SUM(oi.quantity) as total_quantity FROM order_item oi JOIN product p ON oi.product_id = p.id WHERE DATE(oi.created_at) = CURDATE() GROUP BY oi.product_id ORDER BY total_quantity DESC LIMIT 10")->result();
    }

    public function get_profit_per_each_day()
    {
        //group profits by days
        return $this->db->query("SELECT DATE(created_at) as day, SUM(o.total_price) as revenue, SUM(oi.profit) as profit FROM orders o JOIN order_item oi ON o.order_number = oi.order_id GROUP BY DATE(o.created_at)")->result();
    }






    /**  
     * GEANARAL SALES STATICSTICS OF THE WEEK
     * this includes all the reports of the week in general sales
     */

    public function get_sales_per_each_week()
    {
        //group sales by weeks
        return $this->db->query("SELECT WEEK(created_at) as week, COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders GROUP BY WEEK(created_at)")->result();
    }

    public function get_order_items_of_the_week()
    {
        //get all order items sold this week join with products table
        return $this->db->query("SELECT * FROM order_item oi JOIN products p ON oi.product_id = p.id WHERE WEEK(oi.created_at) = WEEK(CURDATE())")->result();
    }

    //get top 10 products sold this week
    public function get_top_10_products_of_the_week()
    {
        return $this->db->query("SELECT p.name, SUM(oi.quantity) as total_quantity FROM order_item oi JOIN products p ON oi.product_id = p.id WHERE WEEK(oi.created_at) = WEEK(CURDATE()) GROUP BY oi.product_id ORDER BY total_quantity DESC LIMIT 10")->result();
    }

    public function get_profit_of_the_week()
    {
        //group profits by weeks
        return $this->db->query("SELECT WEEK(created_at) as week, SUM(o.total_price) as revenue, SUM(oi.profit) as profit FROM orders o JOIN order_item oi ON o.order_number = oi.order_id GROUP BY WEEK(o.created_at)")->result();
    }

    public function get_profit_per_each_week()
    {
        //group sales by weeks
        return $this->db->query("SELECT WEEK(created_at) as week, SUM(o.total_price) as revenue, SUM(oi.profit) as profit FROM orders o JOIN order_item oi ON o.order_number = oi.order_id GROUP BY WEEK(o.created_at)")->result();
    }





    /**  
     * GEANARAL SALES STATICSTICS OF THE MONTH
     * this includes all the reports of the month in general sales
     */

    public function get_sales_per_each_month()
    {
        //group sales by months
        return $this->db->query("SELECT MONTHNAME(created_at) as month, COUNT(*) as total_sales, SUM(total_price) as revenue FROM orders GROUP BY MONTH(created_at)")->result();
    }


    //get all order items sold this month join with products table
    public function get_order_items_of_the_month()
    {
        return $this->db->query("SELECT * FROM order_item oi JOIN products p ON oi.product_id = p.id WHERE MONTH(oi.created_at) = MONTH(CURDATE())")->result();
    }

    //get top 10 products sold this month
    public function get_top_10_products_of_the_month()
    {
        return $this->db->query("SELECT p.name as product_name, SUM(oi.quantity) as total_quantity FROM order_item oi JOIN product p ON oi.product_id = p.id WHERE MONTH(oi.created_at) = MONTH(CURDATE()) GROUP BY oi.product_id ORDER BY total_quantity DESC LIMIT 7")->result();
    }

    public function get_profit_per_each_month()
    {
        //group sales by months
        return $this->db->query("SELECT MONTHNAME(created_at) as month, SUM(o.total_price) as revenue, SUM(oi.profit) as profit FROM orders o JOIN order_item oi ON o.order_number = oi.order_id GROUP BY MONTH(o.created_at)")->result();
    }






    /**  
     * GEANARAL SALES STATICSTICS OF THE YEAR
     * this includes all the reports of the year in general sales
     */


    //get profit of this year
    public function get_profit_of_the_year()
    {
        return $this->db->query("SELECT SUM(o.total_price) as revenue, SUM(oi.profit) as profit FROM orders o JOIN order_item oi ON o.order_number = oi.order_id WHERE YEAR(o.created_at) = YEAR(CURDATE())")->row();
    }

    //get top 10 products sold this year
    public function get_top_10_products_of_the_year()
    {
        return $this->db->query("SELECT p.name, SUM(oi.quantity) as total_quantity FROM order_item oi JOIN products p ON oi.product_id = p.id WHERE YEAR(oi.created_at) = YEAR(CURDATE()) GROUP BY oi.product_id ORDER BY total_quantity DESC LIMIT 10")->result();
    }
}