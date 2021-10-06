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

class Complaint_Control extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // 
  }

  public function add(){

    $this->load->view('Resident/Addcomplaint');
  }


  public function sendcomplaint()
  {
    $this->form_validation->set_rules('Resident_ID', 'Resident ID', 'required');
    $this->form_validation->set_rules('sub', 'Subtitle', 'required');

    if ($this->form_validation->run() == FALSE)
    {
            $this->load->view('Resident/Addcomplaint');
    }
    else
    {
            $this->load->model('Complaint_Model');
            $this->Complaint_Model->insertusercomplaint();
            echo '<script>alert("Successfully Data Saved")</script>';
            redirect(base_url() . "index.php/Complaint_Control/ViewData");
              //  if($response){
              //    $this->session->set_flashdata('msg','Complaint added successfully');
                //  redirect('Resident/Addcomplaint');
               
            // $this->load->view('ViewComplaints', $data);
            
    }   

    
  }

  
  public function ViewData(){

    $this->load->model("Complaint_Model");
    $data["DataView"] = $this->Complaint_Model->ViewData();

   //  $this->load->view('Manager/ViewComplaints',$data);
    $this->load->view('Resident/Complaints',$data);

}
}


/* End of file Complaint1.php */
/* Location: ./application/controllers/Complaint1.php */