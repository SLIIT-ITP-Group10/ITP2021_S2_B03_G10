<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Staff_model
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

class Staff_model extends CI_Model {

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

  public function fetch_attendenceData(){
    $query = $this->db->get("sp_attendence_details");
    return $query;
  }
  // ------------------------------------------------------------------------

  public function fetch_userData(){
    
    $this->db->select("s1.SP_EMPLOYEE_ID , s1.SP_EMP_POSITION , s2.SP_EMP_MOBILE , s1.SP_EMP_EMAIL");
    $this->db->from("sp_employee_details s1");
    $this->db->join("sp_employee_phone_no s2", "s2.SP_EMPLOYEE_ID=s1.SP_EMPLOYEE_ID", "left");
    $query = $this->db->get();
    return $query;

    // $this->db->select("SP_EMP_MOBILE");
    // $this->db->from("sp_employee_phone_no");
    
    // $query = $this->db->get();
    // return $query;
  }

}

/* End of file Staff_model.php */
/* Location: ./application/models/Staff_model.php */