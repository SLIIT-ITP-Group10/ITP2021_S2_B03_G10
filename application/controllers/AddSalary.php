<?php

class AddSalary extends CI_Controller {

    public function addSalary(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('id','User ID','required');
        $this->form_validation->set_rules('month','Month','required');
        $this->form_validation->set_rules('amount','Amount','required');
        

        if ($this->form_validation->run() == FALSE){

            $this->load->view('Manager/MonthlySalary');
        }
        else {

            $this->load->model('model_salary');
            $data = array(

                    'SP_EMP_ID' => $this->input->post('id', TRUE),
                    'SP_SALARY_DATE' => $this->input->post('month', TRUE),
                    'SP_SALARY_AMOUNT' => $this->input->post('amount', TRUE),
        
                ); 

                $this->model_salary->insertUserSalary($data);
                // redirect( 'Welcome/Add');
                echo'<script>alert("Data inserted.")</script>';



            // $response = $this->model_salary->insertUserSalary();
            // if ($response){

            //     $this->session->set_flashdata('msg','Details added Successfully!');
            //     redirect('Welcome/Add');
            // }
            // else {
            //     $this->session->set_flashdata('msg','UnSuccessfull! Please add details again.');
            //     redirect('Welcome/Add');
            // }
        }
    }

    public function inserted(){

        $this->load->view('Manager/MonthlySalary');
    }

    
}