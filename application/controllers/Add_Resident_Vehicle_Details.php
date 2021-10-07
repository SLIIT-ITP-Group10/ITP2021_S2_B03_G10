<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 * Controller Complaint1
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
class Add_Resident_Vehicle_Details extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function Index()
  {
    $this->load->model("Model_Add_vehicle");
    $data["fetch_data"] = $this->Model_Add_vehicle->fetch_data();
    //$this->load->view("Show_Vehicle_Deatils");
    $this->load->view("Resident/Show_Vehicle_Deatils",$data);
  }
  
    public function ResidentUser()
    { 

      $this->load->model("Model_Add_vehicle");
      $this->Model_Add_vehicle->insertVehicledata();
      echo '<script>alert("Successfully Data Saved")</script>';
      //$this->load->view('Resident/Add_Rsident_Vehicle');
      //$this->loadPage();
      redirect(base_url() . 'index.php/Add_Resident_Vehicle_Details/loadPage');
      
      
    }
    
       //                                  Resident handling part(main function)               //
	public function loadPage()
	{
		$this->load->view('Resident/Add_Rsident_Vehicle');
	}
    
  }
 