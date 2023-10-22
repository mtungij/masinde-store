<?php

class Expenses extends CI_Controller
{

   
   public function __construct()
   {
    parent::__construct();
    $this->load->model('ExpensesModel');
    $this->load->model('BranchModel');
    
   }

   public function index()
   {
    $matumizi = $this->ExpensesModel->get_expenses();
    $this->load->view('expenses/expenses.php', ["matumizi" => $matumizi]);
         
   }

   public function create_expenses()
   {
     $data =array(  

        'expenses_name'=>$this->input->post('expenses_name')
        
     );  
     $expenss=$this->ExpensesModel->set_expenses($data);
    //  echo "<pre>";
    //  print_r($expenss);
    //  echo "<pre>";

    if ($expenss) {
         $this->session->set_flashdata('status', 'Expenses saved successfully');
          redirect('expenses');
          
    } else {
        $this->session->set_flashdata('status', 'Expenses name your trying to record existed');
        $this->load->view('expenses/expenses.php');
    }
    


   }
      public function require()
      {

         $this->load->view('expenses/requirest');
         
      }

   public function requirest_ex()
   {
      
      $userId = $this->session->userdata('userId');
      $expens = $this->ExpensesModel->get_expenses();
      $branch = $this->BranchModel-> get_branch();
      //   echo "<pre>";
      //  print_r($branch );
      //  echo "<pre>";
      //       exit();

      $this->load->view('expenses/requirest',['expens'=> $expens, 'branch'=>$branch]);
      
   }

   public function request_submit()

   {
      
         $data =[
            'description'=>$this->input->post('description'),
            'amount'=>$this->input->post('amount'),
            'expenses'=>$this->input->post('expenses'),
            'branch_id'=>$this->input->post('branch_id'),
         ];
           
            $ans=$this->ExpensesModel->requests($data);

            if ( $ans) {
                     $this->session->set_flashdata('expenses_success', 'Expenses recorded successfully');
                     return redirect('Expenses/requirest_ex');
            } else {
               $this->session->set_flashdata('expenses_error', 'Expenses not recorded successfully');
               return redirect('Expenses/requirest_ex');
            }
            
   
   


         }
}