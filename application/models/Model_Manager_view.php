<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Manager_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Model_Manager_View extends CI_Model 
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }


//                            Resident details get in databse  function          //    

public function fetch_data()
  {
    $query = $this->db->get("sp_resident_vehicle_details");
    //select * from sp_resident_vehicle_details
    return $query;
  }
  //                            visitor details get in databse  function          //    

  public function Allview()
  {
    $query = $this->db->get("sp_visitor_vehicle_details");
    //select * from sp_resident_vehicle_details
    return $query;
  }
 //                                   Resident delete function             //

  public function Delete_single_user()
  {
    $id = $this->input->post('regnum');
    $this->db->where('SP_RESIDENT_VEHICLE_REG_NUMBER', $id);
    $this->db->delete('sp_resident_vehicle_details');
    //Delete FROM sp_visitor_vehicle_details Reg number ='SP_RESIDENT_VEHICLE_REG_NUMBER'

  }
  //                                   visitor delete function              //

  public function Delete_single_user1()
  {
    $id = $this->input->post('regnum');
    $this->db->where('SP_VISITOR_VEHICLE_REG_NUM ', $id);
    $this->db->delete('sp_visitor_vehicle_details');
    //Delete FROM sp_visitor_vehicle_details Reg number ='SP_RESIDENT_VEHICLE_REG_NUMBER'
  }
  
}