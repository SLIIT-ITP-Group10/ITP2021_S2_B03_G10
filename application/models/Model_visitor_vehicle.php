<?php

class Model_visitor_vehicle extends CI_Model
{
 //                      insert data in to visitor  databse table                //

   public function insertVehicledata()
    {

        $data = array
        (
            'SP_VISITOR_VEHICLE_REG_NUM' => $this->input->post('VVReg',TRUE),
            'SP_VISITOR_ID' =>$this->input->post('VID',TRUE),
            'SP_VEHICLE_TYPE' =>$this->input->post('vtype',TRUE),
            'SP_VEHICLE_COLOR' =>$this->input->post('vcolor',TRUE),
            '	SP_SLOT_NUMBER'=>$this->input->post('Snum',TRUE),
            'SP_OWNER_TYPE'  =>$this->input->post('otype',TRUE)
            
           
        );

      $this->db->insert("sp_visitor_vehicle_details",$data);
     
     
    }
 //                     

    public function fetch_data()
    {
      $this->load->database();
      //$query = $this->db->query("SELECT * FROM 'sp_visitor_vehicle_details'");
      return $query;
    }
    
    //                       get details in database resident                    //

    public function fetch_Visitor()
  {
    $query = $this->db->get("sp_resident_vehicle_details");
    //select * from sp_resident_vehicle_details
    return $query;
  }
 }
