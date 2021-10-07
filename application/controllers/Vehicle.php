<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller 
{
   //                                  Resident handling part(main function)               //
	/*public function Index()
	{
		$this->load->view('Resident/Add_Rsident_Vehicle');
	}*/

	public function Next()
	{
		$this->load->model("Model_Add_vehicle");
		$data["fetch_data"] = $this->Model_Add_vehicle->fetch_data();
		//$this->load->view("Show_Vehicle_Deatils");
		$this->load->view("Resident/Show_Vehicle_Deatils",$data);
    }
	
    public function Return()
	{
		$this->load->view('Resident/Add_Rsident_Vehicle'); 
	}
	/*public function Index() 
	{ 
		$this->load->model('Model_Add_vehicle');
		//$data['fetch_data'] = $this->Model_Add_Vehicle->fetch_data();
		$this->load->view('Resident/Show_Vehicle_Deatils');
	}*/

	//                                      manager handling part                               //


	/*public function index()
	{
		$this->load->model("Model_Manager_View");
		$data["fetch_data"] = $this->Model_Manager_View->fetch_data();
		$data["Allview"] = $this->Model_Manager_View->Allview();
		//$this->load->view("View_All_Vehicle_Details");
		$this->load->view("Manager/View_All_Vehicle_Details",$data);
        
	}*/
	
	

	//                            Gate oprator handling part(main fucntion to run)                 //
	public function index()
	{
		$this->load->model("Model_visitor_vehicle"); 
		$data["fetch_Visitor"] = $this->Model_visitor_vehicle->fetch_Visitor();
		$this->load->view('staff/Add_Visitor_Deatils');
	
	}
	//                                        gate operator handling                               //
	// public function view()
	// {
	//     $this->load->view('staff/Recognize_Resident_Vehicle_Details'); 
    // }
	public function show()
	{
		$this->load->view('staff/Gate0perator_View_All_Vehicle_Details'); 
    }
	// public function back()
	// {
	// 	$this->load->view('staff/Check_GateOperator'); 
    // }
	public function add()
	{
		$this->load->view('staff/Add_Visitor_Deatils'); 
    }
	
}