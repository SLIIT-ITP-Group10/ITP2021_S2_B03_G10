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

class Manager_view extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }
  
  public function index()
  {
    $this->load->model("Model_Manager_View");
    $data["fetch_data"] = $this->Model_Manager_View->fetch_data();
    //$this->load->view("View_All_Vehicle_Details");
    $this->load->view("View_All_Vehicle_Details",$data);
  }

  public function View()
  {
    $this->load->model("Model_Manager_View");
    $data["Allview"] = $this->Model_Manager_View->Allview();
    //$this->load->view("View_All_Vehicle_Details");
    $this->load->view("View_All_Vehicle_Details",$data);
  }
  
  public function delete()
  {
    $this->load->model("Model_Manager_view");
    $this->Model_Manager_view->Delete_single_user();
    echo '<script>alert("Data Deleted")</script>';
    redirect(base_url() . "index.php/Manager_view/ViewVehicles");
  }
  
	public function ViewVehicles()
	{
		$this->load->model("Model_Manager_View");
		$data["fetch_data"] = $this->Model_Manager_View->fetch_data();
		$data["Allview"] = $this->Model_Manager_View->Allview();
		//$this->load->view("View_All_Vehicle_Details");
		$this->load->view("Manager/View_All_Vehicle_Details",$data);
        
	}

  public function delete1()
  {
    $this->load->model("Model_Manager_view");
    $this->Model_Manager_view->Delete_single_user1();
    echo '<script>alert("Data Deleted")</script>';
    redirect(base_url() . "index.php/Manager_view/ViewVehicles2");
  }

  public function ViewVehicles2()
  {
		$this->load->model("Model_Manager_View");
		$data["fetch_data"] = $this->Model_Manager_View->fetch_data();
    $data["Allview"] = $this->Model_Manager_View->Allview();
		//$this->load->view("View_All_Vehicle_Details");
		$this->load->view("Manager/View_All_Vehicle_Details",$data);
  }
  
}