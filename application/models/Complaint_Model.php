<?php

class Complaint_Model extends CI_Model{


    public function insertusercomplaint(){

   

        $data = Array(

            //   key => value
            // Database coloumn name => (name)

            'SP_COMPLAINT_ID' => '',
            'SP_RESIDENT_ID' => $this->input->post('Resident_ID',TRUE),
            'SP_DATETIME' => date("Y-m-d h:i:sa"),
            'SP_SAMPLE_IMAGE' => $this->input->post('filename',TRUE),
            'SP_DESCRIPTION' => $this->input->post('Description',TRUE),
            'SP_STATUS' => "Pending",
            'SP_SUBTITLE' => $this->input->post('sub',TRUE),
        );

//  print_r($data);
//  die();
     

       $this->db->insert('sp_complaints_details', $data);
       
 }

     
 function ViewData(){

            //  $query = $this ->db->get("sp_complaints_details");
             //select * from sp_complaints_details
            //  $this->db->select("*");
            //  $this->from("sp_complaints_details");
            //  $query = $this->db->get();
            //  return $query;


            $this->load->database();
            $query = $this->db->query("SELECT*FROM sp_complaints_details");
            return $query;
     }

    

}
