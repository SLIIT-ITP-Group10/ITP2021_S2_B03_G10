<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addvisitor extends CI_Controller {

	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function RegisterVisitor()
	{
		
		$this->load->model("Visitor");
        $this->Visitor->insert_Userdata();

		// redirect(base_url()."index.php/Addvisitor/loadVisitor");


	}

	public function loadVisitor()
	{

		$this->load->model("Visitor");
		$data["fetch_Userdata"] = $this->Visitor->fetch_Userdata();
		$this->load->view('Resident/Add_visitors',$data);

	}

	public function loadGate()
	{

		$this->load->model("Visitor");
		$data["fetch_Userdata"] = $this->Visitor->fetch_Userdata();
		$this->load->view('Admin/gate_opertor',$data);

	}
	
	public function loadstartpage()
	{

		$this->load->model("Visitor");
		$data["fetch_Userdata"] = $this->Visitor->fetch_Userdata();
		$this->load->view('Resident/Start_page',$data);

	}


	public function loadReport()
	{

		$this->load->model("Visitor");
		$data["fetch_Userdata"] = $this->Visitor->fetch_Userdata();
		$this->load->view('Manager/report_visitor',$data);

	}
	// public function edit_table()
	// {
	// 	$this->load->model('Visitor');
	// 	$data['edit'] = $this->Visitor->edit_table();
	// 	$this->load->view('Resident/Add_visitors');
	
	// }

    //   public function delete_data(){  
    //        $SP_VISITOR_ID = $this->uri->segment(3);  
    //        $this->load->model("Visitor");  
    //        $this->main_model->delete_data($SP_VISITOR_ID);  
    //        redirect(base_url() . "Addvisitor/deleted");  
    //   }  
    //   public function deleted()  
    //   {  
    //        $this->Add_visitors();  
    //   }  
    //   public function update_data(){  
    //        $user_id = $this->uri->segment(3);  
    //        $this->load->model("Visitor");  
    //        $data["user_data"] = $this->Visitor->fetch_single_data($user_id);  
    //        $data["fetch_data"] = $this->Visitor->fetch_data();  
    //        $this->load->view("Add_visitors", $data);  
    //   }  
    //   public function updated()  
    //   {  
    //        $this->Add_visitors();  
    //   }  



       public function delete()
       {
         $this->load->model("Visitor");
         $this->Visitor->Delete_single_user1();
         echo '<script>alert("Data Deleted")</script>';
		 redirect(base_url()."index.php/Addvisitor/Start_page");
       }

	   public function Start_page()
	
	{
		//$this->load->view('Resident/Add_visitors');

		$this->load->model("Visitor");
		$data["fetch_Userdata"] = $this->Visitor->fetch_Userdata();
		$this->load->view('Resident/Start_page',$data);
	}



 }  






	
	


