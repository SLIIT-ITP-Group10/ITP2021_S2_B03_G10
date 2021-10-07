<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Model {

	public function insert_Userdata(){

        $data = array (

            'SP_VISITOR_ID' => $this ->input->post('visitorid',TRUE) ,
            'SP_RESIDENT_ID'=> $this ->input->post('residentid',TRUE),
            'SP_VISITOR_FIRSTNAME' => $this ->input->post('firstname',TRUE) ,
            'SP_VISITOR_LASTNAME' => $this ->input->post('lastname',TRUE) ,
            'SP_VISITOR_DATE' =>date("Y-m-d h:i:sa") ,
            'SP_VISITOR_TIMEOFARRIVAL' => $this ->input->post('time',TRUE)
         
        );

        $this->db->insert('sp_visitor_details', $data);


        $number = array(
            'SP_VISITOR_ID' => $this ->input->post('visitorid',TRUE) ,
            'SP_VISITOR_PHONE_NUMBER' => $this ->input->post('phoneno',TRUE) 
        );

       $query= $this->db->insert('sp_visitor_phone', $number);   


       echo'<script>alert("Data added to the database")</script>';
       
     
    }

    //-----------------------------------

    // public function fetch_Userdata()
    // {
    //     $query = $this->db->get("sp_visitor_details");
       
    //     return $query;
    // }

    public function fetch_Userdata()
    {
        $this->db->select("s1.SP_VISITOR_ID , s1.SP_RESIDENT_ID , s1.SP_VISITOR_FIRSTNAME , s1.SP_VISITOR_LASTNAME , s1.SP_VISITOR_DATE , s1.SP_VISITOR_TIMEOFARRIVAL, s2.SP_VISITOR_PHONE_NUMBER ");
        $this->db->from("sp_visitor_details s1");
        $this->db->join("sp_visitor_phone s2", "s2.SP_VISITOR_ID=s1.SP_VISITOR_ID","left");
        $query = $this->db->get();
       
        return $query;
    }
    


    // public function fetch_visitor_data(id)
    // {
    //     $query = $this->db->get("sp_visitor_details")->id(id);
       
    //     return $query;
    // }
    // public function edit_table($visitorid)
    // {
    //     $this->db->select('*');
    //     $this->db->where('visitorid',$visitorid);
    //     $row = $this->db->get('sp_visitor_details');
    //     return $row->row_array();

    // }

//     function delete_data($SP_VISITOR_ID){  
//         $this->db->where("SP_VISITOR_ID", $SP_VISITOR_ID);  
//         $this->db->delete("sp_visitor_details");  
//         //DELETE FROM tbl_user WHERE id = $id  
//    }  
//    function fetch_single_data($SP_VISITOR_ID)  
//    {  
//         $this->db->where("SP_VISITOR_ID", $SP_VISITOR_ID);  
//         $query = $this->db->get("sp_visitor_details");  
//         return $query;  
//         //Select * FROM tbl_user where id = '$id'  
//    }  
//    function update_data($data, $SP_VISITOR_ID)
//    {  
//         $this->db->where("SP_VISITOR_ID", $SP_VISITOR_ID);  
//         $this->db->update("sp_visitor_details", $data);  
//         //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
//    }  

// public function Update_visitor($visitorid)
// {
  
//   $data = $this->input->post('paid', TRUE);
//   $this->db->set('SP_VISITOR_TIMEOFARRIVAL', $data);
//   $this->db->where('SP_VISITOR_ID', $visitorid);
//   $this->db->update('sp_visitor_details');
  

// }
    public function Delete_single_user1()
      {
         $data = $this->input->post('visitorid');
        $this->db->where('SP_VISITOR_ID', $data);
        $this->db->delete('sp_visitor_phone');

        $this->db->where('SP_VISITOR_ID', $data);
        $this->db->delete('sp_visitor_details');
        //Delete FROM sp_visitor_vehicle_details Reg number ='SP_RESIDENT_VEHICLE_REG_NUMBER'
     }
        
}   

     

     
 
