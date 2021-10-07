<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model ResidentDetails_model
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

class Resident_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }
  // ------------------------------------------------------------------------

  public function insert_ResidentData()
  {
    $data = array(
      
      'SP_RESIDENT_ID' => $this->input->post('residentid', TRUE),
      'SP_RESIDENT_Mrs_Mr' => $this->input->post('mr', TRUE),
      'SP_RESIDENT_FIRSTNAME' => $this->input->post('firstname', TRUE),
      'SP_RESIDENT_LASTNAME' => $this->input->post('lastname', TRUE),
      'SP_RESIDENT_OCCUPATION' => $this->input->post('occupation', TRUE),      
      'SP_RESIDENT_MARITAL_STATUS' => $this->input->post('status', TRUE),      
      'SP_RESIDENT_GENDER' => $this->input->post('gender', TRUE),
      'SP_RESIDENT_BIRTHDAY' => $this->input->post('dob'),
      'SP_RESIDENT_EMAIL' => $this->input->post('email', TRUE),
      'SP_RESIDENT_NIC' => $this->input->post('nic', TRUE), 
      'SP_RESIDENT_CREATED_DATETIME' => date("Y-m-d h:i:sa")
    );

    $data1 = array(
      'SP_RESIDENT_ID' => $this->input->post('residentid', TRUE),
      'SP_RESIDENT_PHONENO' => $this->input->post('phoneno', TRUE),
    );

    $apartmentid =  $this->input->post('apartmentid', TRUE);
    $residentid  =  $this->input->post('residentid', TRUE);

    $insert1 = $this->db->insert("sp_resident_details", $data);
    $insert2 = $this->db->insert("sp_resident_phone_number", $data1);

    $this->db->set('SP_RESIDENT_ID', $residentid);
    $this->db->where('SP_APARTMENT_ID', $apartmentid);
    $update = $this->db->update('sp_apartment_details');

    if($insert1 == TRUE and $insert2 == TRUE and $update == TRUE){

      return TRUE;

    }
    else{

      echo '<script>alert("Insertion Fialed")</script>';
      return FALSE;

    }
    // $query = $this->db->insert("sp_resident_phone_number", $data);
    //$query = $this->db->insert("sp_resident_details", $data);
    //echo '<script>alert("Data added to the database")</script>';
    // print_r($data);
    // die();
  }

  // ------------------------------------------------------------------------

  public function fetch_ResidentData()
  {
    $query = $this->db->get("sp_resident_details");
    return $query;
  }

  public function fetch_Contact()
  {
    $contact = $this->input->post("resid", TRUE);
    $this->db->where('SP_RESIDENT_ID', $contact);
    $query = $this->db->get("sp_resident_phone_number");
    return $query;
  }

  public function fetch_ApartmentDetails()
  {
    $query = $this->db->get("sp_apartment_details");
    return $query;
  }
  public function fetch_Apartment()
  {
    $result = $this->db->query("select SP_APARTMENT_ID from sp_apartment_details where SP_RESIDENT_ID IS NULL");
    return $result;
    
  }
  
}

/* End of file ResidentDetails_model.php */
/* Location: ./application/models/ResidentDetails_model.php */