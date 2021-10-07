<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Committee
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

class Committee extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // 
  }

  public function AddCommitteeFee()
  {

		$this->load->view("Manager/AddCommitteeFee");

  }

  public function AddCommitteeMember()
  {

		$this->load->view("Manager/AddCommitteeMember");

  }

  public function loadManagerDashboard()
  {

		$this->load->view("Manager/ManagerDashboard");

  }

  public function ResidentDetails()
  {

		$this->load->model("Resident_model");
		$data["fetch_ResidentData"] = $this->Resident_model->fetch_ResidentData();
    $data["fetch_Apartment"] = $this->Resident_model->fetch_ApartmentDetails();
		$this->load->view('Manager/ResidentDetails', $data);

  }

  public function ResidentCommitteeMembers()
  {

		$this->load->model("Committee_model");
		$data["fetch_CommitteeMember"] = $this->Committee_model->fetch_CommitteeMember();
		$this->load->view('Resident/Committee', $data);

  }

  public function CommitteeMembership()
  {

		$this->load->model("Committee_model");
		$data["fetch_Committee"] = $this->Committee_model->fetch_Committee();
		$this->load->view("Manager/CommitteeFee", $data);

  }

  public function CommitteeMembers()
  {

		$this->load->model("Committee_model");
		$data["fetch_CommitteeMember"] = $this->Committee_model->fetch_CommitteeMember();
		$this->load->view("Manager/CommitteeMember", $data);

  }
  

  public function UpdateMembershipFee()
  {

    $this->form_validation->set_rules('method', 'Payment Method', 'required');
    $this->form_validation->set_rules('status', 'Payment Status', 'required');
    $this->form_validation->set_rules('depositeddate', 'Deposited Date', 'required');

    if($this->form_validation->run() == FALSE)
    {
      echo '<script>alert("All Fields should be filled")</script>';

      // $link = base_url()."index.php/Committee/CommitteeMembership";
      // $this->load->library($link);
      $this->CommitteeMembership();
      //redirect(base_url() . "index.php/Committee/CommitteeMembership");

    }
    else
    {
      echo '<script>alert("Updated")</script>';
      $this->load->model("Committee_model");
      $this->Committee_model->Update_CommitteeFee();
      

      redirect(base_url() . "index.php/Committee/CommitteeMembership");

    }

  }

  public function UpdateMembershipFeeNPaid()
  {

    $receiptid =  $this->input->post("receiptid");
    $this->load->model("Committee_model");
    $this->Committee_model->Update_CommitteeFee($receiptid);

    redirect(base_url() . "index.php/Committee/CommitteeMembership");

  }

  public function CommitteeMemberDetails()
  {

		$this->load->model("Committee_model");
		$data["fetch_CommitteeMemberDetails"] = $this->Committee_model->fetch_CommitteeMemberDetails();
    $this->load->view("Manager/Modal", $data);

  }

  public function ResidentCommitteeMemberDetails()
  {

		$this->load->model("Committee_model");
		$data["fetch_CommitteeMemberDetails"] = $this->Committee_model->fetch_CommitteeMemberDetails();
    $this->load->view("Resident/Modal", $data);

  }

  public function UpdateCommitteeMemberDetails()
  {
    $this->form_validation->set_rules('resid', 'Resident ID', 'required|callback_DatabaseResCheck');
    $this->form_validation->set_rules('joineddate', 'Joined Date', 'required');
    $this->form_validation->set_rules('position', 'Position', 'required');

    if($this->form_validation->run() == FALSE)
    {
      echo '<script>alert("Enter Valid Resident ID or Empty Fields")</script>';
      //$this->CommitteeMembers();

      $this->load->model("Committee_model");
      $data["fetch_CommitteeMember"] = $this->Committee_model->fetch_CommitteeMember();
      $this->load->view("Manager/CommitteeMember", $data);

    }
    else
    {
      $this->load->model("Committee_model");
      $this->Committee_model->Update_Committee();
      //$this->CommitteeMembers();

      redirect(base_url() . "index.php/Committee/CommitteeMembers");
      // $this->load->model("Committee_model");
      // $data["fetch_CommitteeMember"] = $this->Committee_model->fetch_CommitteeMember();
      // $this->load->view("Manager/CommitteeMember", $data);

    }

  }

  public function DatabaseResCheck()
  {
    $this->load->model("Committee_model");
    if($this->Committee_model->ValidResident()){
      return TRUE;
    }
    else{
      //echo '<script>alert("Resident ID is not valid or Not a Registered Resident")</script>';
      $this->form_validation->set_message('DatabaseResCheck', 'Not a Registered Resident or Empty field');
      return FALSE;
    }
  }

  public function DatabaseApartCheck()
  {
    $this->load->model("Committee_model");
    if($this->Committee_model->ValidApartment()){
      return TRUE;
    }
    else{
      //echo '<script>alert("Resident ID is not valid or Not a Registered Resident")</script>';
      $this->form_validation->set_message('DatabaseApartCheck', 'Invalid Apartment ID or Aparmtent is not registered');
      return FALSE;
    }
  }

  public function insert_CommitteeFee()
  {
      $this->form_validation->set_rules('resid', 'Resident ID', 'required|callback_DatabaseResCheck');
      $this->form_validation->set_rules('apartmentid', 'Apartment ID', 'required|callback_DatabaseApartCheck');
      $this->form_validation->set_rules('method', 'Payment Method', 'required');
      $this->form_validation->set_rules('status', 'Payment Status', 'required');
      $this->form_validation->set_rules('month', 'Monthly Amount', 'required');
      $this->form_validation->set_rules('sixmonth', '6 Month Amount', 'required');
      $this->form_validation->set_rules('rate', 'Rate per sqrt', 'required');
      $this->form_validation->set_rules('size', 'Apartment Size', 'required');
      $this->form_validation->set_rules('season', 'Membership Season', 'required');
      $this->form_validation->set_rules('depositeddate', 'Deposited Date', 'required');

      if($this->form_validation->run() == FALSE)
      {
        $this->load->view('Manager/AddCommitteeFee');
      }
      else
      {

        $this->load->model('Committee_model');
        $this->Committee_model->insertFee();
        $this->load->view('Manager/Modal/Success');
        
        //echo '<script>alert("Successfully Data Saved")</script>';
  
      }

  }

  public function DeleteMembershipFee(){

    $this->load->model('Committee_model');
    
    if($this->Committee_model->DeleteFee() == TRUE){

      include 'application/views/Manager/Modal/DeleteSuccess.php';

    }
    else{

      include 'application/views/Manager/Modal/DeleteFailed.php';

    }

  }

  public function Add_CommitteeMember(){

      $this->form_validation->set_rules('resid', 'Resident ID', 'required|callback_DatabaseResCheck');
      $this->form_validation->set_rules('position', 'Position of the Committee', 'required');
      $this->form_validation->set_rules('joineddate', 'Joined Date', 'required');

      if($this->form_validation->run() == FALSE)
      {
        $this->load->view('Manager/AddCommitteeMember');
      }
      else
      {

        $this->load->model('Committee_model');
    
        if($this->Committee_model->insertCommitteeMember() == TRUE){
    
          include 'application/views/Manager/Modal/InsertSuccess.php';
    
        }
        else{
    
          include 'application/views/Manager/Modal/InsertFailed.php';
    
        }
  
      }

  }

  public function GenarateReport(){


    $this->load->model('Committee_model');
    $this->load->dbutil();
    $this->load->helper('file');
    $this->load->helper('download');
    $report = $this->Committee_model->getReport();
    $new_report = $this->dbutil->csv_from_result($report);
    write_file('MemerbshipFeeReport.csv',$new_report);
    force_download('MemerbshipFeeReport.csv', $new_report);

  }

  public function GetReport(){

    $this->load->model('Committee_model');
    $data["fetch_Committee"] = $this->Committee_model->getReport();

    $this->load->view('Manager/Modal/MembershipReport', $data);

  }

  public function action()
  {
   $this->load->model("Committee_model");
   $this->load->library("excel");
   $object = new PHPExcel();
 
   $object->setActiveSheetIndex(0);
 
   $table_columns = array("Receipt ID", "Apartment ID", "Owner ID", "Floor Area in sqft", "Rate per sqft", "Total for a month", "Total for 6 month", "Season", "Payment Method", "Deposit Date", "Payment Status");
 
   $column = 0;
 
   foreach($table_columns as $field)
   {
    $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
    $column++;
   }
 
   $committee_data = $this->Committee_model->getReport();
 
   $excel_row = 2;
 
   foreach($committee_data->result() as $row)
   {
    $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->SP_MEMBERSHIP_RECEIPT_ID);
    $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->SP_APARTMENT_ID);
    $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->SP_RESIDENT_ID);
    $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->SP_APRTMENT_SIZE);
    $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->SP_RATE_PER_SQRT);
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->SP_MONTH_AMOUNT);
    $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->SP_6MONTHS_AMOUNT);
    $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->SP_MEMBERSHIP_SEASON);
    $object->getActiveSheet()->setCellValueByColumnAndRow(8, $excel_row, $row->SP_PAYMENT_METHOD);
    $object->getActiveSheet()->setCellValueByColumnAndRow(9, $excel_row, $row->SP_DEPOSITED_DATE);
    $object->getActiveSheet()->setCellValueByColumnAndRow(10, $excel_row, $row->SP_PAYMENT_STATUS);
    $excel_row++;
   }
 
   $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
   header('Content-Type: application/vnd.ms-excel');
   header('Content-Disposition: attachment;filename="MembershipData.xls"');
   $object_writer->save('php://output');

  }
 

}


/* End of file Committee.php */
/* Location: ./application/controllers/Committee.php */