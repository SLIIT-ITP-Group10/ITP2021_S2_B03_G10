<?php

class Model_Add_vehicle extends CI_Model
{

   public function insertVehicledata()
    {

        $data = array
        (
            'SP_RESIDENT_VEHICLE_REG_NUMBER' => $this->input->post('regnumber',TRUE),
            'SP_RESIDENT_ID' =>$this->input->post('resID',TRUE),
            'SP_VEHICLE_TYPE' =>$this->input->post('vtype',TRUE),
            'SP_VEHICLE_COLOR' =>$this->input->post('vcolor',TRUE),
            'SP_VEHICLE_BRAND'=>$this->input->post('vbrand',TRUE),
            'SP_SLOT_NUMBER'  =>$this->input->post('snumber',TRUE),
            'SP_OWNER_TYPE' =>$this->input->post('vowner',TRUE)
            
        );
        
      $this->db->insert("sp_resident_vehicle_details",$data);
      
    }
    
    public function fetch_data()
    {
      $query = $this->db->get('sp_resident_vehicle_details');
      //select * from sp_resident_vehicle_details
      return $query;
    }
 }


