<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller RegisterResident
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class RegisterUser extends CI_Controller
{
    
  public function __construct()
  {

    parent::__construct();

  }

  public function index()
  {
    // 
  }

  public function loadLogin()
	{
		$this->load->view('Layout/Login');
	}

	public function loadSignup()
	{
		$this->load->view('Layout/SignUp');
	}

	public function loadResidentRegister()
	{
		$this->load->view('Manager/AddResident');
	}

  public function AddResident()
  {
    $this->load->model("Resident_model");
    $data['apartmentid'] = $this->Resident_model->fetch_Apartment();
    $this->load->view('Manager/AddResident', $data);
  }

  public function GetContact(){
    $this->load->model("Resident_model");
    $data['contact'] = $this->Resident_model->fetch_Contact();    
    $this->load->view('Manager/ContactModal', $data);
  }

  public function RegisterResident()
  {
    $this->form_validation->set_rules('firstname', 'First Name', 'required');
    $this->form_validation->set_rules('lastname', 'Last Name', 'required');
    $this->form_validation->set_rules('occupation', 'Occupation', 'required');
    $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[sp_resident_details.SP_RESIDENT_EMAIL]');
    $this->form_validation->set_rules('phoneno', 'Phone No', 'required');
    $this->form_validation->set_rules('nic', 'NIC', 'required');
    $this->form_validation->set_rules('residentid', 'Resident ID', 'required|is_unique[sp_resident_details.SP_RESIDENT_ID]');
    $this->form_validation->set_rules('apartmentid', 'Apartment ID', 'required');
    // $this->form_validation->set_rules('password', 'Password' , 'required');
    //$this->form_validation->set_rules('confirmpassword', 'Confirm Password' , 'required|matches[password]');

    if($this->form_validation->run() == FALSE)
    {
      $this->AddResident();
      //$this->load->view('Manager/AddResident');
    }
    else
    {

        $this->load->model("Resident_model");

        if($this->Resident_model->insert_ResidentData() == TRUE){

          echo '<script>alert("Data Inserted")</script>';
          $this->AddResident();
          //$this->load->library('Manager/AddResident');
          //redirect(base_url() . "index.php/RegisterUser/AddResident");
        }
        else{
          echo '<script>alert("Data Not Inserted")</script>';
          $this->AddResident();
        }

    }

  }

  public function Manager()
  {
    //$data["SystemLogin"] = $this->session->flashdata('data');
    // $data = $this->session->flashdata('pdata');
    // print_r($data[1]);
    if(!$this->session->has_userdata('logged_user')){
      redirect(base_url() . 'index.php/RegisterUser/loadLogin');
    }
    $user = $this->session->userdata('logged_user');
    $userid = $this->session->userdata('logged_userid');
    $userdata['usertype'] = $this->session->userdata('logged_usertype');
    
    $this->load->model("User_model");
    $userdata['SystemLogin'] = $this->User_model->DBgetdata($user);
    //print_r($userdata);

    
    //$this->load->view('Layout/ManagersideNavigation', $userdata);
    $this->load->view('Manager/ManagerUserProfile', $userdata);
  }

  public function Staff()
  {
    //$data["SystemLogin"] = $this->session->flashdata('data');
    // $data = $this->session->flashdata('pdata');
    // print_r($data[1]);
    if(!$this->session->has_userdata('logged_user')){
      redirect(base_url() . 'index.php/RegisterUser/loadLogin');
    }
    $user = $this->session->userdata('logged_user');
    $userid = $this->session->userdata('logged_userid');
    $userdata['usertype'] = $this->session->userdata('logged_usertype');
    $userdata['userdata'] = $this->session->userdata('logged_userdata');

    $this->load->model("User_model");
    $userdata['SystemLogin'] = $this->User_model->DBgetdata($user);
    //print_r($userdata);

    //$this->load->view('Layout/StaffsideNavigation', $userdata);
    $this->load->view('Staff/StaffUserProfile', $userdata);
    
  }

  public function Resident()
  {
    if(!$this->session->has_userdata('logged_user')){
      redirect(base_url() . 'index.php/RegisterUser/loadLogin');
    }
    $user = $this->session->userdata('logged_user');
    $userdata['usertype'] = $this->session->userdata('logged_usertype');
    $userid = $this->session->userdata('logged_userid');

    $this  ->load->model("User_model");
    $userdata['SystemLogin'] = $this->User_model->DBgetdata($user);

    
    //$this->load->view('Layout/ResidentsideNavigation', $userdata);
    $this->load->view('Resident/ResidentUserProfile', $userdata);
    //print_r($userdata);
    //redirect(base_url().'index.php/Resident/ResidentUserProfile',$userdata);
    // $data["SystemLogin"] = $this->session->flashdata('data');
    // $this->load->view('Resident/ResidentUserProfile', $SystemLogin);
    // $data = $this->session->flashdata('pdata');
    // print_r($data[1]);
  }

  public function SystemLogin()
  {
    $this->form_validation->set_rules('username', 'User Name', 'required|callback_DatabaseLoginCheck');
    $this->form_validation->set_rules('password', 'Password', 'required|callback_DatabaseLoginCheck');

    if($this->form_validation->run() == FALSE)
    {
      $this->load->view('Layout/LoginAgain');
    }
    else
    {
      echo '<script>alert("Logging....")</script>';
      $this->load->model("User_model");
      $pdata = $this->User_model->SystemLogin();
      $usertype = $pdata[0];
      $data["SystemLogin"] = $pdata[1];
      $data["usertype"] = $usertype;
      $userid = $pdata[2];

      $SP_USERNAME = $this->input->post('username', TRUE);
      $SP_PASSWORD = $this->input->post('password', TRUE);

      $this->load->library('session');

      $this->session->set_userdata('logged_user', $SP_USERNAME);
      $this->session->set_userdata('logged_usertype', $usertype);
      $this->session->set_userdata('logged_userid', $userid);
      $this->session->set_userdata('logged_userdata', $data["SystemLogin"]);
      //$this->load->view('Staff/StaffUserProfile', $data);

      if($usertype == "MAN"){

        $this->Manager();
        // $this->session->set_flashdata('pdata',$pdata);
        // redirect(base_url().'index.php/RegisterUser/Staff/'.$pdata);

      }
      else if($usertype == "RES") {

        $this->Resident();
        //$this->load->view('Resident/ResidentUserProfile', $data);
        // $this->session->set_flashdata('pdata',$pdata);
        // redirect(base_url() . 'index.php/RegisterUser/Resident/'.$pdata);
      }
      else if($usertype == "EMP") {

        $this->Staff();
        //$this->load->view('Resident/ResidentUserProfile', $data);
        // $this->session->set_flashdata('pdata',$pdata);
        // redirect(base_url() . 'index.php/RegisterUser/Resident/'.$pdata);
      }

    }

  }

  public function SystemSignup()
  {
    $this->form_validation->set_rules('type', 'User Type', 'required');
    $this->form_validation->set_rules('userid', 'User ID', 'required|callback_DatabaseSignupCheck');
    $this->form_validation->set_rules('username', 'User Name', 'required|is_unique[sp_system_account.SP_USERNAME]|is_unique[sp_emp_system_account.SP_USERNAME]|min_length[5]|max_length[20]');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[20]');

    if($this->form_validation->run() == FALSE)
    {

      $this->load->view('Layout/SignUp');
    }
    else
    {
      echo '<script>alert("Successfully Resident Registered")</script>';
      $this->load->model("User_model");
      $this->User_model->SystemRegistration();
      $this->load->view('Layout/Login');
    }

  }

  //Pass the parameter to check whether the user is regisered or not 
  public function DatabaseSignupCheck(){

    $this->load->model("User_model");
    if($this->User_model->SignUpCorrectlyCheck()){
      return TRUE;
    }
    else{
      $this->form_validation->set_message('DatabaseSignupCheck', 'Not a Registered Resident or Employee');
      return FALSE;
    }

  }

  //Pass the parameter to check whether the user has valid system account(correct login credentials) 
  public function DatabaseLoginCheck(){

    $this->load->model("User_model");
    if($this->User_model->LoginCorrectlyCheck()){
      return TRUE;
    }
    else{
      return FALSE;
    }

  }

  public function loadResidentDetails()
  {

    $this->load->model("Resident_model");
		$data["fetch_ResidentData"] = $this->Resident_model->fetch_ResidentData();
		$this->load->view('Manager/ResidentDetails', $data);

  }

}


/* End of file RegisterResident.php */
/* Location: ./application/controllers/RegisterResident.php */