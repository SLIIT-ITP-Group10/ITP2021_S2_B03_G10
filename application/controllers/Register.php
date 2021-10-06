<?php

class Register extends CI_Controller {

    public function RegisterUser(){

        // $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname','Last Name','required');
        $this->form_validation->set_rules('position','Employee Position','required');
        $this->form_validation->set_rules('address','Address No','required');
        $this->form_validation->set_rules('address01','Address Line 01','required');
        $this->form_validation->set_rules('address02','Address Line 02','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('birthday','Date of Birth','required');
        $this->form_validation->set_rules('marital','Marital Status','required');
        $this->form_validation->set_rules('email','Email','required|valid_email'); 
        // |is_unique[sp_employee_details,SP_EMP_EMAIL
        $this->form_validation->set_rules('phoneno','Phone No','required');
        $this->form_validation->set_rules('nic','NIC','required');
        $this->form_validation->set_rules('id','Staff ID','required');


        if ($this->form_validation->run() == FALSE){

            $this->load->view('Staff/StaffRegistration');
        }
        else {

            $this->load->model('model_register');
            $data = array(

                'SP_EMP_FIRSTNAME' => $this->input->post('fname', TRUE),
                'SP_EMP_LASTNAME' => $this->input->post('lname', TRUE),
                'SP_EMP_POSITION' => $this->input->post('position', TRUE),
                'SP_EMP_ADDRESS_NO' => $this->input->post('address', TRUE),
                'SP_EMP_ADDRESS_LINE01' => $this->input->post('address01', TRUE),
                'SP_EMP_ADDRESS_LINE02' => $this->input->post('address02', TRUE),
                'SP_EMP_GENDER' => $this->input->post('gender', TRUE),
                'SP_EMP_BIRTHDAY' => $this->input->post('birthday', TRUE),
                'SP_EMP_MARITAL_STATUS' => $this->input->post('marital', TRUE),
                'SP_EMP_EMAIL' => $this->input->post('email', TRUE),
                'SP_EMP_NIC' => $this->input->post('nic', TRUE),
                'SP_EMPLOYEE_ID' => $this->input->post('id', TRUE)
    
            );

            $query = $this->db->insert('sp_employee_details',$data);

            $number = array(
                'SP_EMPLOYEE_ID' => $this->input->post('id', TRUE),
                'SP_EMP_MOBILE' => $this->input->post('phoneno', TRUE)
            );
             $query = $this->db->insert('sp_employee_phone_no',$number);

             echo'<script>alert("Data inserted.")</script>';

            // $this->load->model('model_register');
            // $response = $this->model_register->insertUserData();
            // if ($response){

            //     $this->session->set_flashdata('msg','Registered Successfully!');
            //     redirect('Welcome/Edit');
            // }
            // else {
            //     $this->session->set_flashdata('msg','Registered UnSuccessfull! Please register again.');
            //     redirect('Welcome/Edit');
            // }
        }
    }

    public function inserted(){

        $this->load->view('Staff/StaffRegistration');
    }


    public function updatedata()
	{
    $SP_EMPLOYEE_ID=$this->input->get('SP_EMPLOYEE_ID');
    $this->load->model('model_register');
	$result['data']=$this->model_register->displayrecordsById($SP_EMPLOYEE_ID);
	$this->load->view('Staff/StaffUpdate',$result);
	
		if($this->input->post('update')){
            $SP_EMP_FIRSTNAME = $this->input->post('fname');
            $SP_EMP_LASTNAME = $this->input->post('lname');
            $SP_EMP_POSITION = $this->input->post('position');
            $SP_EMP_ADDRESS_NO = $this->input->post('address');
            $SP_EMP_ADDRESS_LINE01 = $this->input->post('address01');
            $SP_EMP_ADDRESS_LINE02 = $this->input->post('address02');
            $SP_EMP_GENDER = $this->input->post('gender');
            $SP_EMP_BIRTHDAY = $this->input->post('birthday');
            $SP_EMP_MARITAL_STATUS = $this->input->post('marital');
            $SP_EMP_EMAIL = $this->input->post('email');
            $SP_EMP_NIC = $this->input->post('nic');
            $SP_EMPLOYEE_ID = $this->input->post('id');
        $this->load->model('model_register');
		$this->model_register->update_records($SP_EMP_FIRSTNAME,$SP_EMP_LASTNAME,$SP_EMP_POSITION,$SP_EMP_ADDRESS_NO,$SP_EMP_ADDRESS_LINE01,
        $SP_EMP_ADDRESS_LINE02,$SP_EMP_GENDER,$SP_EMP_BIRTHDAY,$SP_EMP_MARITAL_STATUS,$SP_EMP_EMAIL,$SP_EMP_NIC, $SP_EMPLOYEE_ID);
		// echo "Date updated successfully !”;
		}
        
	}

    public function Edit()
	{
		// $this->load->model('model_register');
		// $data['display_records'] = $this->model_register->display_records();

		$this->load->model('model_register');
		// $data['model_register/displayrecordsById'] = $this->model_register->displayrecordsById($SP_EMPLOYEE_ID);

		// $this->load->model('model_register');
		//  $data['update_records'] = $this->model_register->update_records();
		$this->load->view('Staff/StaffUpdate');
	}
    
    
}