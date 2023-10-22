<?php
class ExpensesModel extends CI_Model
{

    public function set_expenses($data)
    {
        $expense = $this->db->get_where('expense', array('expenses_name'=>$data['expenses_name']))->result();
    if(count($expense) > 0) {
        return false;
    }else {
        $this->db->insert('expense', $data);
        return true;
    }
    }

    public function get_expenses()

    {
            $ex=$this->db->get('expense');
            return $ex->result();
            
    }

    public function requests($data)
    {
        $this->db->insert('expenses', $data);
        return true;

    }

    public function update_expenses($data)
    {
        $this->db->update('expense', $data, array("id" => $data["id"]));
        return true;

    }


    public function delete_expenses($id)
    {
        $this->db->delete('expense', array("id" => $id));
        return true;

    }


public function create_salary($userdata)
{

    $this->db->insert('salary', $userdata);
        return true;
 
}


}