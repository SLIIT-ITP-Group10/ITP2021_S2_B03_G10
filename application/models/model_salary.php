<?php

class model_salary extends CI_Model {

    function insertUserSalary($data){

        $this->db->insert('sp_salary_details',$data);
        // $data = array(

        //     'SP_EMP_ID' => $this->input->post('id', TRUE),
        //     'SP_SALARY_DATE' => $this->input->post('month', TRUE),
        //     'SP_SALARY_AMOUNT' => $this->input->post('amount', TRUE),

        // ); 

            // return $this->db->insert('sp_salary_details',$data);
    
    }

    function fetch_data(){

        $query = $this->db->get('sp_salary_details');
        return $query;
    }




}