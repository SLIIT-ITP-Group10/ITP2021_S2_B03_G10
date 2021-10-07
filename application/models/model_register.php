<?php

class model_register extends CI_Model {

    // function insertUserData($data){

    //     $this->db->insert('sp_employee_details',$data);
       
    //     // $data = array(

    //     //     'SP_EMP_FIRSTNAME' => $this->input->post('fname', TRUE),
    //     //     'SP_EMP_LASTNAME' => $this->input->post('lname', TRUE),
    //     //     'SP_EMP_POSITION' => $this->input->post('position', TRUE),
    //     //     'SP_EMP_ADDRESS_NO' => $this->input->post('address', TRUE),
    //     //     'SP_EMP_ADDRESS_LINE01' => $this->input->post('address01', TRUE),
    //     //     'SP_EMP_ADDRESS_LINE02' => $this->input->post('address02', TRUE),
    //     //     'SP_EMP_GENDER' => $this->input->post('gender', TRUE),
    //     //     'SP_EMP_BIRTHDAY' => $this->input->post('birthday', TRUE),
    //     //     'SP_EMP_MARITAL_STATUS' => $this->input->post('marital', TRUE),
    //     //     'SP_EMP_EMAIL' => $this->input->post('email', TRUE),
    //     //     // 'SP_EMP_MOBILE' => $this->input->post('phoneno', TRUE),
    //     //     'SP_EMP_NIC' => $this->input->post('nic', TRUE),
    //     //     // 'SP_EMPLOYEE_ID' => $this->input->post('user_id', TRUE)

    //     // ); 

    //         // return $this->db->insert('sp_employee_details',$data);
           

    // }

    // function insertPhoneNo($number){
    //     $this->db->insert('sp_employee_phone_no',$number);
    // }

    function fetch_Userdata() {

        $query=$this->db->query("SELECT * FROM sp_employee_details WHERE SP_EMPLOYEE_ID=SP_EMPLOYEE_ID AND SP_EMPLOYEE_ID=(SELECT SP_EMPLOYEE_ID='SP1099')");
        // $query = $this->db->get('sp_employee_details');
        return $query;
    }


    public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load Model*/
	$this->load->model('model_register');
	}
    function displayrecordsById($SP_EMPLOYEE_ID)
	{
	// $query=$this->db->query("select * from sp_employee_details where SP_EMPLOYEE_ID='".$id."'");
	// return $query->result();

    $query=$this->db->query("SELECT * FROM 'sp_employee_details' WHERE SP_EMPLOYEE_ID='".$SP_EMPLOYEE_ID."'");
    $result = $query->result();
	return $result;

    // return $this->db->where('SP_EMPLOYEE_ID',$SP_EMPLOYEE_ID['SP_EMPLOYEE_ID'])
	// 		->update($this->table,$SP_EMPLOYEE_ID); 
	}

    function update_records($SP_EMP_FIRSTNAME,$SP_EMP_LASTNAME,$SP_EMP_POSITION,$SP_EMP_ADDRESS_NO,$SP_EMP_ADDRESS_LINE01,
    $SP_EMP_ADDRESS_LINE02,$SP_EMP_GENDER,$SP_EMP_BIRTHDAY,$SP_EMP_MARITAL_STATUS,$SP_EMP_EMAIL,$SP_EMP_NIC,$SP_EMPLOYEE_ID){
	    // $query=$this->db->query("update sp_employee_details SET fname='$SP_EMP_FIRSTNAME',lname='$SP_EMP_LASTNAME',
        //     position='$SP_EMP_POSITION',address='$SP_EMP_ADDRESS_NO',
        //     address01='$SP_EMP_ADDRESS_LINE01',address02='$SP_EMP_ADDRESS_LINE02',
        //     gender='$SP_EMP_GENDER',birthday='$SP_EMP_BIRTHDAY', marital='$SP_EMP_MARITAL_STATUS',
        //     email='$SP_EMP_EMAIL',nic='$SP_EMP_NIC',id='$SP_EMPLOYEE_ID' where id='$id'");
        $this->db->replace('sp_employee_details', $SP_EMP_FIRSTNAME,$SP_EMP_LASTNAME,$SP_EMP_POSITION,$SP_EMP_ADDRESS_NO,$SP_EMP_ADDRESS_LINE01,
        $SP_EMP_ADDRESS_LINE02,$SP_EMP_GENDER,$SP_EMP_BIRTHDAY,$SP_EMP_MARITAL_STATUS,$SP_EMP_EMAIL,$SP_EMP_NIC,$SP_EMPLOYEE_ID);
        redirect('Register/Edit');
    }
}