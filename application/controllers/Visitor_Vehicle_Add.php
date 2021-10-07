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

class Visitor_Vehicle_Add extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function Index()
  {
    $this->load->model("Model_visitor_vehicle");
    $data["fetch_data"] = $this->Model_visitor_vehicle->fetch_data();
    //$this->load->view("Succfully_Add_Visitor_Detailss");
    $this->load->view("Succfully_Add_Visitor_Details",$data);
  }
  
    public function VisitorVehicle()
    {
    $this->form_validation->set_rules('VVReg','Visitor Vehicle Reg Number','required');
    $this->form_validation->set_rules('VID','Visitor IDr','required');
    $this->form_validation->set_rules('Snum','Slot Number','required');
    $this->form_validation->set_rules('vtype','Vehicle Type','required');
    $this->form_validation->set_rules('vcolor','Vehcile Color ','required');
    $this->form_validation->set_rules('otype','Owner Type','required');
    
    
    if($this->form_validation->run() == FALSE)
    {
       
      $this->load->view('staff/Add_Visitor_Deatils');
      //echo '<script>alert("Please check your submitted data again")</script>';
    }
    else
    {
      
      $this->load->model("Model_visitor_vehicle");
      $this->Model_visitor_vehicle->insertVehicledata();
      redirect(base_url() . 'index.php/staff/Add_Visitor_Deatils');
       echo '<script>alert("Successfully Data Saved")</script>';
    }

    
}
public function Check()
  {
    $this->load->model("Model_visitor_vehicle");
    $data["fetch_Visitor"] = $this->Model_visitor_vehicle->fetch_Visitor();
    //$this->load->view("Gate0perator_View_All_Vehicle_Details");
    $this->load->view("Gate0perator_View_All_Vehicle_Details",$data);
  }

  public function ViewVehiclesDetail()
  {
		$this->load->model("Model_visitor_vehicle");
		$data["fetch_Visitor"] = $this->Model_visitor_vehicle->fetch_Visitor();
		//$this->load->view("View_All_Vehicle_Details");
		$this->load->view("Staff/Gate0perator_View_All_Vehicle_Details",$data);
  }
  
}