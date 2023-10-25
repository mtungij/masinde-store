<?php

class Expenses extends CI_Controller
{
<<<<<<< HEAD

   
   public function __construct()
   {
    parent::__construct();
    $this->load->model('ExpensesModel');
    $this->load->model('BranchModel');
    $this->load->model('UserModel');
    
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

         public function salary_index()
         {
           $branc= $this->BranchModel->get_branches();
           $staff= $this->UserModel->get_users();
         //   echo "<pre>";
         //   print_r($staff);
         //   echo "<pre>";
            $this->load->view('expenses/salary',['branc'=> $branc,'staff'=> $staff]);
            
         }

         public function salary()
         {
            

        //data validation
        $config = [
            [
                'field' => 'branch_name',
                'label' => 'Branch Name',
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'branch name is required',
                ],
            ],
            [
                'field' => 'staff_name',
                'label' => 'staff Name',
                'rules' => 'trim|required',
                'errors' => [
                  'required' => 'branch name is required',
              ],
            ],
            [
               'field' => 'staff_name',
               'label' => 'staff Name',
               'rules' => 'trim|required',
               'errors' => [
                 'required' => 'Staff name is required',
             ],
           ],
            [
                'field' => 'salary_amount',
                'label' => 'Salary',
                'rules' => 'trim|required',
                'errors' => [
                  'required' => 'Salary Amount is required',
                ],
            ],
           
            [
                'field' => 'pay_date',
                'label' => 'Pay date',
                'rules' => 'trim|required',
                'errors' => [
                  'required' => 'Pay datet is required',
                ],
            ],
           
            
        ];

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('expenses/salary');
        } else {
         $userdata = [
            'branch_name' => $this->input->post('branch_name'),
            'staff_name' => $this->input->post('staff_name'),
            'salary_amount' => $this->input->post('salary_amount'),
            'pay_date' => $this->input->post('pay_date'),
         
        ];
         $this->ExpensesModel->create_salary($userdata);

             $this->session->set_flashdata('register_success', "<b>{$userdata['salary_amount']}</b> is registered successfully!");
           redirect('expenses/salary');
        }

         }
         
=======
    public function index()
    {
        $this->load->view('expenses/expenses');
    }

    public function create_index()
    {
        $this->load->view('expenses/add_expense');
    }


    public function create_expense()
    {
        $data = [
            "user_id" => $this->input->post('user_id'),
            "branch_id" => $this->input->post('branch_id'),
            "amount" => $this->input->post('amount'),
            "description" => $this->input->post('description'),
        ];


        //get total amount_paid from orders table
        $this->db->select_sum('total');
        $this->db->where('branch_id', $this->input->post('branch_id'));
        $query = $this->db->get('sales');

        $total_sales = $query->row()->total;

         //updated the total sales
         $this->db->set('total', $total_sales - $this->input->post('amount'));
         $this->db->where('branch_id', $this->input->post('branch_id'));
         $this->db->update('sales');

         $this->db->insert('expenses', $data);
         $this->session->set_flashdata('create_expense', 'Expense has been saved successfully!');
        
        redirect('expenses/create_index');
    }

>>>>>>> 2dd20578987fa13d5cfc9346c075d467fc48dc59
}