<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

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
	public function index()
	{
		$this->load->model('Staff_model');
		$data['fetch_userData'] = $this->Staff_model->fetch_userData();
		
		$this->load->model('model_salary');
		$data['fetch_data'] = $this->model_salary->fetch_data();
		// $this->load->view('Manager/StaffDetails');
		$this->load->view('Manager/StaffDetails', $data);
	}

	public function manager()
	{
		$this->load->model('model_register');
		$data['fetch_Userdata'] = $this->model_register->fetch_Userdata();
		// $this->load->view('Staff/ManagerProfile');
		$this->load->view('Staff/ManagerProfile', $data);
	}

	public function Next_Page()
	{
		$this->load->model('Staff_model');
		$data['fetch_attendenceData'] = $this->Staff_model->fetch_attendenceData();
		// $this->load->view('Manager/StaffAttendence');
		$this->load->view('Manager/StaffAttendence', $data);
	}

	public function Add()
	{
		$this->load->model('model_salary');
		$data['fetch_data'] = $this->model_salary->fetch_data();
		// $this->load->view('Manager/MonthlySalary');
		$this->load->view('Manager/MonthlySalary', $data);
	}

	public function register()
	{
		$this->load->view('Staff/StaffRegistration');
	}
}
