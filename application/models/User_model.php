<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model User_model
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

class User_model extends CI_Model {

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

  //

  public function DBgetdata($userid)
  {
    
    $SP_USERNAME = $userid;

    $query1 = $this->db->query("select * from sp_resident_details where SP_RESIDENT_ID = (select SP_USER_ID from sp_system_account where SP_USERNAME = '$SP_USERNAME')");
    $query2 = $this->db->query("select * from sp_employee_details where SP_EMPLOYEE_ID = (select SP_USER_ID from sp_emp_system_account where SP_USERNAME = '$SP_USERNAME')");

    if($query1->num_rows() == 1) {

      $rdata = $query1;
      return $rdata;

    }
    else if($query2->num_rows() == 1) {

      $edata = $query2;
      return $edata;

    }
    // $query = $this->db->query("select * from sp_resident_details where SP_RESIDENT_ID = (select SP_USER_ID from sp_system_account where SP_USERNAME = '$SP_USERNAME')");
    // //$query2=$this->db->query("select * from sp_employee_details where 	SP_EMPLOYEE_ID ='$userid'");
    // return $query;
  }


  public function SystemLogin()
  {
    
      $SP_USERNAME = $this->input->post('username', TRUE);
      $SP_PASSWORD = $this->input->post('password', TRUE);

    // $query = $this->db->insert("sp_system_account", $data);
    // echo '<script>alert("Data added to the database")</script>';
    $query1 = $this->db->query("select * from sp_resident_details where SP_RESIDENT_ID = (select SP_USER_ID from sp_system_account where SP_USERNAME = '$SP_USERNAME')");
    $query2 = $this->db->query("select * from sp_employee_details where SP_EMP_POSITION = 'Manager' AND SP_EMPLOYEE_ID = (select SP_USER_ID from sp_emp_system_account where SP_USERNAME = '$SP_USERNAME')");

    $query3 = $this->db->query("select * from sp_employee_details where SP_EMPLOYEE_ID = (select SP_USER_ID from sp_emp_system_account where SP_USERNAME = '$SP_USERNAME')");

    $query4 = $this->db->query("select SP_USER_ID from sp_system_account where SP_USERNAME = '$SP_USERNAME'");
    $query5 = $this->db->query("select SP_USER_ID from sp_emp_system_account where SP_USERNAME = '$SP_USERNAME'");

    if($query1->num_rows() == 1) {

      $rdata = array("RES", $query1, $query4);
      return $rdata;

    }
    else if($query2->num_rows() == 1) {

      $edata = array("MAN", $query2, $query5);
      return $edata;

    }
    else if($query3->num_rows() == 1) {

      $edata = array("EMP", $query3, $query5);
      return $edata;

    }
    // $query = $this->db->query("select * from sp_resident_details where SP_RESIDENT_ID = (select SP_USER_ID from sp_system_account where SP_USERNAME = '$SP_USERNAME')");
    // //$query2=$this->db->query("select * from sp_employee_details where 	SP_EMPLOYEE_ID ='$userid'");
    // return $query;
  }

  //Add new user registrstion data into sp_system_account table in database 
  public function SystemRegistration()
  {
    $type = $this->input->post('type', TRUE);
    $data = array(
      'SP_USER_ID' => $this->input->post('userid', TRUE),
      'SP_USERNAME' => $this->input->post('username', TRUE),
      'SP_PASSWORD' => $this->input->post('password', TRUE),
      'SP_CREATED_DATETIME' => date("Y-m-d h:i:sa")
    );

    if($type == 'RES'){
      $query = $this->db->insert("sp_system_account", $data);
    }
    else if($type == 'EMP'){
      $query = $this->db->insert("sp_emp_system_account", $data);
    }
    echo '<script>alert("Data added to the database")</script>';
  }

  //SignUp validation
  public function SignUpCorrectlyCheck(){

    $userid = $this->input->post('userid',TRUE);

    $query=$this->db->query("select * from sp_system_account where 	SP_USER_ID ='$userid'");
    $query0=$this->db->query("select * from sp_emp_system_account where 	SP_USER_ID ='$userid'");
    $query1=$this->db->query("select * from sp_resident_details where 	SP_RESIDENT_ID ='$userid'");
    $query2=$this->db->query("select * from sp_employee_details where 	SP_EMPLOYEE_ID ='$userid'");


    if($query->num_rows() > 0 or $query->num_rows() > 0){
      $this->form_validation->set_message('DatabaseCheck', 'Already, User registered to the system');
      echo '<script>alert("Already, User registered to the system")</script>';
      return FALSE;
    }
    else if(($query1->num_rows() == 0) && ($query2->num_rows() == 0)){
      $this->form_validation->set_message('DatabaseCheck', 'You are not a Registered user in Spathodea System');
      echo '<script>alert("You are not a Registered user in Spathodea System. Please contact your Manager.")</script>';
      return FALSE;
    }
    else if($query1->num_rows() > 0){
      return TRUE;
    }
    else if($query2->num_rows() > 0){
      return TRUE;
    }
    else{
      return TRUE;
    }

  }

  //Login validation
  public function LoginCorrectlyCheck(){

    $username = $this->input->post('username',TRUE);
    $password = $this->input->post('password',TRUE);

    $query1=$this->db->query("select * from sp_system_account where 	SP_USERNAME ='$username' AND SP_PASSWORD ='$password'");
    $query2=$this->db->query("select * from sp_emp_system_account where 	SP_USERNAME ='$username' AND SP_PASSWORD ='$password'");
   


    if($query1->num_rows() == 1 or $query2->num_rows() == 1){
      return TRUE;
    }
    else {
      return FALSE;
    }

  }

  // ------------------------------------------------------------------------

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */

