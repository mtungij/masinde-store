<?php

class Sales extends CI_Controller
{
   public function index() 
   {
    $this->load->view('sales/all_sales');
   }

    public function dashboard()
    {
        $this->load->view('sales/sales_dashboard');
    }
}