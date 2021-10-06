<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Committe_model
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

class Committee_model extends CI_Model {

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

  // ------------------------------------------------------------------------

  public function fetch_Committee()
  {
    $query = $this->db->get("sp_membership_details");
    return $query;
  }

  public function fetch_CommitteeMember()
  {
    $query = $this->db->get("sp_committee_member_details");
    return $query;
  }

  public function fetch_CommitteeMemberDetails(){

    $resid = $this->input->post("resid", TRUE);
    $this->db->where('SP_RESIDENT_ID', $resid);
    $query = $this->db->get('sp_resident_details');
    return $query;

  }

  public function Update_CommitteeFee()
  {
    $receiptid = $this->input->post('id', TRUE);
    $method = $this->input->post('method', TRUE);
    $status = $this->input->post('status', TRUE);
    $date = $this->input->post('depositeddate', TRUE);

    $this->db->set('SP_PAYMENT_METHOD', $method);
    $this->db->set('SP_PAYMENT_STATUS', $status);
    $this->db->set('SP_DEPOSITED_DATE', $date);
    $this->db->where('SP_MEMBERSHIP_RECEIPT_ID', $receiptid);
    
    if($this->db->update('sp_membership_details') == TRUE){

      echo '<script>alert("Updated")</script>';

    }
    else{
      echo '<script>alert("Update Failed")</script>';
    }

  }

  public function Update_CommitteeFeePaid($receiptid)
  {
    
    $data = $this->input->post('paid', TRUE);
    $this->db->set('SP_PAYMENT_STATUS', $data);
    $this->db->where('SP_MEMBERSHIP_RECEIPT_ID', $receiptid);
    $this->db->update('sp_membership_details');
    

  }

  public function Update_CommitteeFeeNPaid($receiptid)
  {

    $data = $this->input->post('notpaid');
    $this->db->set('SP_PAYMENT_STATUS', $data);
    $this->db->where('SP_MEMBERSHIP_RECEIPT_ID', $receiptid);
    $this->db->update('sp_membership_details');
    echo '<script>alert("Payment Status Set Not Paid")</script>';

  }

  public function Update_Committee()
  {
    $data0 = $this->input->post('joineddate');
    $data = $this->input->post('resid');
    $data1 = $this->input->post('id');
    $data2 = $this->input->post('position');
    $this->db->set('SP_COM_RESIDENT_ID', $data);
    $this->db->set('	SP_COMMITTEE_MEMBER_JOINDATE', $data0);
    $this->db->where('SP_COMMITTEE_MEMBER_ID', $data1);
    $this->db->set('SP_COMMITTEE_MEMBER_POSITION', $data2);
    $this->db->update('sp_committee_member_details');
    echo '<script>alert("Commitee Member Upadated")</script>';

  }

  public function ValidResident(){

    $username = $this->input->post('resid',TRUE);

    $query1=$this->db->query("select * from sp_resident_details where SP_RESIDENT_ID = '$username'"); 


    if($query1->num_rows() == 1){
      return TRUE;
    }
    else {
      return FALSE;
    }
  }

  public function ValidApartment(){

    $username = $this->input->post('apartmentid',TRUE);

    $query1=$this->db->query("select * from sp_apartment_details where SP_APARTMENT_ID = '$username'"); 


    if($query1->num_rows() == 1){
      return TRUE;
    }
    else {
      return FALSE;
    }
  }

  public function insertFee(){

    $data = array(
      'SP_MEMBERSHIP_RECEIPT_ID'=>'', 
      'SP_APARTMENT_ID'=>$this->input->post('apartmentid'), 
      'SP_RESIDENT_ID'=> $this->input->post('resid'), 
      'SP_APRTMENT_SIZE'=>$this->input->post('size'), 
      'SP_RATE_PER_SQRT'=>$this->input->post('rate'), 
      'SP_MONTH_AMOUNT'=>$this->input->post('month'), 
      'SP_6MONTHS_AMOUNT'=>$this->input->post('sixmonth'), 
      'SP_MEMBERSHIP_SEASON'=>$this->input->post('season'), 
      'SP_PAYMENT_METHOD'=>$this->input->post('method'), 
      'SP_DEPOSITED_DATE'=>$this->input->post('depositeddate'), 
      'SP_PAYMENT_STATUS'=>$this->input->post('status')
    );


    $query = $this->db->insert("sp_membership_details", $data);  
  
  }

  public function DeleteFee(){

    $data = $this->input->post('receiptid', TRUE);
    $this->db->where('SP_MEMBERSHIP_RECEIPT_ID', $data);

    if($this->db->delete('sp_membership_details') == TRUE){
      return TRUE;
    }
    else{
      return FALSE;
    }
  }

  public function insertCommitteeMember(){

    $data = array(
      'SP_COMMITTEE_MEMBER_ID'=>'', 
      'SP_COM_RESIDENT_ID'=>$this->input->post('resid', TRUE), 
      'SP_COMMITTEE_MEMBER_POSITION'=> $this->input->post('position', TRUE), 
      'SP_COMMITTEE_MEMBER_JOINDATE'=>$this->input->post('joineddate', TRUE)
    );


    //$query = $this->db->insert("sp_committee_member_details", $data);  
  
    if($this->db->insert("sp_committee_member_details", $data) == TRUE){
      return TRUE;
    }
    else{
      return FALSE;
    }

  }
  

  

}

/* End of file Committe_model.php */
/* Location: ./application/models/Committe_model.php */