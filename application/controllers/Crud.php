<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	/**
	 * CodeIgniter Application Controller Class
	 *
	 * This class object is the super class that every library in
	 * CodeIgniter will be assigned to.
	 *
	 * @package		CodeIgniter
	 * @subpackage	Crud funcions Controllers
	 * @category	Libraries
	 * @author		Mark Ochieng'| Vinarq Technologies
  	 * @license     MIT
	 */
    public function __construct()
    {
        // Construct the parent class
        parent::__construct();

        // Configure limits on our controller methods
        // Load the model
        $this->load->model('user');
        $this->load->model('geter');
        $this->load->model('cruder');
        $this->load->library('form_validation');
    }

    //
	public function login()
	{ 
		// $this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
		if ($this->form_validation->run() === FALSE)
		{
			$response['message'] = validation_errors();
			header("content-type:application/json");
			echo json_encode($response);
		}
		else
		{
			$ressult = $this->user->login();
			if ($ressult) {
					# code...
				$response['message'] = 'ok';
				header("content-type:application/json");
				echo json_encode($response);

			}elseif ($ressult == 'notFound') {

				# code...
				$response['message'] = 'notFound';
				header("content-type:application/json");
				echo json_encode($response);

			}elseif ($ressult == 'notVerified') {

				# code...
				$response['message'] = 'notVerified';
				header("content-type:application/json");
				echo json_encode($response);

			}elseif ($ressult == 'disabled') {

				# code...
				$response['message'] = 'disabled';
				header("content-type:application/json");
				echo json_encode($response);

			}elseif ($ressult == 'notMatch') {

				# code...
				$response['message'] = 'notMatch';
				header("content-type:application/json");
				echo json_encode($response);

			}

			else{
				// redirect('dashboard');
				$response['message'] = 'Model failed';
				header("content-type:application/json");
				echo json_encode($response);
			}

		}       

	}


    /*
     * User logout
     */
    public function logout()
    {
        $this->session->unset_userdata('validated');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('login');
    }

    //
	public function register()
	{
		echo "ready2";
	}

	// 
	public function admin_create_staff(){
       if($this->session->userdata('validated'))
        {
					// $this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('position', 'position', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
			if ($this->form_validation->run() === FALSE)
			{
				$response['message'] = validation_errors();
				header("content-type:application/json");
				echo json_encode($response);
			}
			else
			{
				$ressult = $this->cruder->create_staff_();
				if ($ressult == "failed") {
					# code...
					$response['message'] = 'failed';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "exists") {
					# code...
					$response['message'] = 'exists';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "success") {
					# code...
					$response['message'] = 'success';
					header("content-type:application/json");
					echo json_encode($response);
				}else{
					
					$response['message'] = "Oops!! Internal Server Error Occured";
					header("content-type:application/json");
					echo json_encode($response);
				}	
			}
        }
        else
        {
            redirect('login');
        }
	}
	// 
	public function reg_staff(){
		// $this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('repeatPassword', 'repeatPassword', 'trim|required|min_length[8]|matches[password]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		if ($this->form_validation->run() === FALSE)
		{
			$response['message'] = validation_errors();
			header("content-type:application/json");
			echo json_encode($response);
		}
		else
		{
			$ressult = $this->cruder->create_staff();
			if ($ressult == "failed") {
				# code...
				$response['message'] = 'failed';
				header("content-type:application/json");
				echo json_encode($response);
			}elseif ($ressult == "exists") {
				# code...
				$response['message'] = 'exists';
				header("content-type:application/json");
				echo json_encode($response);
			}elseif ($ressult == "success") {
				# code...
				$response['message'] = 'success';
				header("content-type:application/json");
				echo json_encode($response);
			}else{
				
				$response['message'] = "Oops!! Internal Server Error Occured";
				header("content-type:application/json");
				echo json_encode($response);
			}
			
		}
	}
	public function verify_email() 
	{
		$this->load->helper('form','url');
		$this->load->model('cruder');
		$result=array();
		$result=$this->cruder->activate();
		if($result)
		{
			echo "Success";
		}
	}
    //
	public function updateEmployee()
	{
       if($this->session->userdata('validated'))
        {
			$data['items'] = $this->geter->getSingleEmployee();

			$this->load->view('base/header');
			$this->load->view('pages/alter_employee', $data);	
			$this->load->view('base/ffooter');
        }
        else
        {
            redirect('login');
        }

	}


    //
	public function updateEmployer()
	{
       if($this->session->userdata('validated'))
        {
			$data['items'] = $this->geter->getSingleEmployer();

			$this->load->view('base/header');
			$this->load->view('pages/alter_employer', $data);	
			$this->load->view('base/ffooter');
        }
        else
        {
            redirect('login');
        }

	}

    //
	public function updateJob()
	{
       if($this->session->userdata('validated'))
        {
			$data['items'] = $this->geter->getSingleJob();

			$this->load->view('base/header');
			$this->load->view('pages/alter_job', $data);	
			$this->load->view('base/ffooter');
        }
        else
        {
            redirect('login');
        }

	}
	
    //
	public function staffResetPassword()
	{
		echo "ready5";
	}



    //
	public function updateJobStatus()
	{	
       if($this->session->userdata('validated'))
        {
			$result = $this->cruder->updateJobState();

			if ($result) {
				if ($from == 'open') {
					# code...
					redirect('/open_jobs');
				}else if ($from == 'closed') {
					# code...
					redirect('/closed_jobs');
				}
				else if ($from == 'suspended') {
					# code...
					redirect('/suspended_jobs');
				}
				else{
					redirect('/jobs');
				}			

			}else{

				echo "Internal Server Error Occured, PLease contact the TEchnical Team.";

			}
        }
        else
        {
            redirect('login');
        }	
		$from = $this->input->post('sender');
	}


    //
	public function updateEmployeeStatus()
	{	
       if($this->session->userdata('validated'))
        {
			$from = $this->input->post('state');
			$result = $this->cruder->updateEmployeeState();

			if ($result) {
				if ($from == 'active') {
					# code...
					redirect('/suspended_employees');
				}else if ($from == 'suspended') {
					# code...
					redirect('/active_employees');
				}
				else{
					redirect('/employees');
				}			

			}else{

				echo "Internal Server Error Occured, PLease contact the TEchnical Team.";

			}
        }
        else
        {
            redirect('login');
        }

	}

    //
	public function updateEmployerStatus()
	{	
       if($this->session->userdata('validated'))
        {
			$from = $this->input->post('state');
			$result = $this->cruder->updateEmployerState();

			if ($result) {
				if ($from == 'active') {
					# code...
					redirect('/suspended_employers');
				}else if ($from == 'suspended') {
					# code...
					redirect('/active_employers');
				}
				else{
					redirect('/employers');
				}	

			}else{

				echo "Internal Server Error Occured, PLease contact the TEchnical Team.";

			}
        }
        else
        {
            redirect('login');
        }
	}


    //
	public function createJob()
	{
       if($this->session->userdata('validated'))
        {
			$this->form_validation->set_rules('companyName', 'companyName', 'trim|required');
			$this->form_validation->set_rules('position', 'position', 'trim|required');
			$this->form_validation->set_rules('howMany', 'howMany', 'trim|required|min_length[1]');
			$this->form_validation->set_rules('minSalary', 'minSalary', 'trim|required');
			$this->form_validation->set_rules('maxSalary', 'maxSalary', 'trim|required');
			$this->form_validation->set_rules('openingDate', 'openingDate', 'trim|required');
			$this->form_validation->set_rules('closingDate', 'closingDate', 'trim|required');
			$this->form_validation->set_rules('employer', 'employer', 'trim|required');
			$this->form_validation->set_rules('category', 'category', 'trim|required');
			$this->form_validation->set_rules('about', 'about', 'trim|required|min_length[20]');
			if ($this->form_validation->run() === FALSE)
			{
				$response['message'] = validation_errors();
				header("content-type:application/json");
				echo json_encode($response);
			}
			else
			{
				$ressult = $this->cruder->create_job();
				if ($ressult == "failed") {
					# code...
					$response['message'] = 'failed';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "exists") {
					# code...
					$response['message'] = 'exists';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "success") {
					# code...
					$response['message'] = 'success';
					header("content-type:application/json");
					echo json_encode($response);
				}else{
					
					$response['message'] = "Oops!! Internal Server Error Occured";
					header("content-type:application/json");
					echo json_encode($response);
				}
				
			}
        }
        else
        {
            redirect('login');
        }

	}


    //
	public function createStaff()
	{
		echo "ready11";
	}

    //
	public function createEmployer()
	{
        if($this->session->userdata('validated'))
        {
			// $this->load->library('form_validation');
			$this->form_validation->set_rules('firstName', 'firstName', 'trim|required');
			$this->form_validation->set_rules('middleName', 'middleName', 'trim|required');
			$this->form_validation->set_rules('lastName', 'lastName', 'trim|required');
			$this->form_validation->set_rules('mobileNumber', 'mobileNumber', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('businessName', 'businessName', 'trim|required');
			$this->form_validation->set_rules('businessLocation', 'businessLocation', 'trim|required');
			$this->form_validation->set_rules('businessRegNo', 'businessRegNo', 'trim|required');
			$this->form_validation->set_rules('gender', 'gender', 'trim|required');
			$this->form_validation->set_rules('industry', 'industry', 'trim|required');
			$this->form_validation->set_rules('about', 'about', 'trim|required|min_length[20]');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
			if ($this->form_validation->run() === FALSE)
			{
				$response['message'] = validation_errors();
				header("content-type:application/json");
				echo json_encode($response);
			}
			else
			{
				$ressult = $this->cruder->create_employer();
				if ($ressult == "failed") {
					# code...
					$response['message'] = 'failed';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "exists") {
					# code...
					$response['message'] = 'exists';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "success") {
					# code...
					$response['message'] = 'success';
					header("content-type:application/json");
					echo json_encode($response);
				}else{
					
					$response['message'] = "Oops!! Internal Server Error Occured";
					header("content-type:application/json");
					echo json_encode($response);
				}
				
			}
        }
        else
        {
            redirect('login');
        }

	}


	// 
	public function createEmployee(){
       if($this->session->userdata('validated'))
        {
			// $this->load->library('form_validation');
			$this->form_validation->set_rules('firstName', 'firstName', 'trim|required');
			$this->form_validation->set_rules('middleName', 'middleName', 'trim|required');
			$this->form_validation->set_rules('lastName', 'lastName', 'trim|required');
			$this->form_validation->set_rules('mobileNumber', 'mobileNumber', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('dob', 'dob', 'trim|required');
			$this->form_validation->set_rules('identityNumber', 'identityNumber', 'trim|required');
			$this->form_validation->set_rules('gender', 'gender', 'trim|required');
			$this->form_validation->set_rules('residence', 'residence', 'trim|required');
			$this->form_validation->set_rules('about', 'about', 'trim|required|min_length[20]');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
			if ($this->form_validation->run() === FALSE)
			{
				$response['message'] = validation_errors();
				header("content-type:application/json");
				echo json_encode($response);
			}
			else
			{
				$ressult = $this->cruder->create_employee();
				if ($ressult == "failed") {
					# code...
					$response['message'] = 'failed';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "exists") {
					# code...
					$response['message'] = 'exists';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "success") {
					# code...
					$response['message'] = 'success';
					header("content-type:application/json");
					echo json_encode($response);
				}else{
					
					$response['message'] = "Oops!! Internal Server Error Occured";
					header("content-type:application/json");
					echo json_encode($response);
				}
				
			}
        }
        else
        {
            redirect('login');
        }
	}


	// 
	public function updateStaffStatus(){
       if($this->session->userdata('validated'))
        {
			$result = $this->cruder->updateStaffState();

			if ($result) {
				# code...
				redirect('/staffs');

			}else{

				echo "Internal Server Error Occured, PLease contact the TEchnical Team.";

			}
        }
        else
        {
            redirect('login');
        }

	}


	//
	public function updatingEmployer(){
       if($this->session->userdata('validated'))
        {
			// $this->load->library('form_validation');
			$this->form_validation->set_rules('firstName', 'firstName', 'trim|required');
			$this->form_validation->set_rules('middleName', 'middleName', 'trim|required');
			$this->form_validation->set_rules('lastName', 'lastName', 'trim|required');
			$this->form_validation->set_rules('mobileNumber', 'mobileNumber', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('businessName', 'businessName', 'trim|required');
			$this->form_validation->set_rules('businessLocation', 'businessLocation', 'trim|required');
			$this->form_validation->set_rules('businessRegNo', 'businessRegNo', 'trim|required');
			$this->form_validation->set_rules('industry', 'industry', 'trim|required');
			$this->form_validation->set_rules('about', 'about', 'trim|required|min_length[20]');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
			if ($this->form_validation->run() === FALSE)
			{
				$response['message'] = validation_errors();
				header("content-type:application/json");
				echo json_encode($response);
			}
			else
			{
				$ressult = $this->cruder->update_employer();
				if ($ressult == "notFoud") {
					# code...
					$response['message'] = 'notFoud';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "failed") {
					# code...
					$response['message'] = 'failed';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "success") {
					# code...
					$response['message'] = 'success';
					header("content-type:application/json");
					echo json_encode($response);
				}else{
					
					$response['message'] = "Oops!! Internal Server Error Occured";
					header("content-type:application/json");
					echo json_encode($response);
				}
				
			}
        }
        else
        {
            redirect('login');
        }
	}
	//
	public function updatingEmployee(){
       if($this->session->userdata('validated'))
        {
			// $this->load->library('form_validation');
			$this->form_validation->set_rules('firstName', 'firstName', 'trim|required');
			$this->form_validation->set_rules('middleName', 'middleName', 'trim|required');
			$this->form_validation->set_rules('lastName', 'lastName', 'trim|required');
			$this->form_validation->set_rules('mobileNumber', 'mobileNumber', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('dob', 'dob', 'trim|required');
			$this->form_validation->set_rules('identityNumber', 'identityNumber', 'trim|required');
			$this->form_validation->set_rules('residence', 'residence', 'trim|required');
			$this->form_validation->set_rules('about', 'about', 'trim|required|min_length[20]');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
			if ($this->form_validation->run() === FALSE)
			{
				$response['message'] = validation_errors();
				header("content-type:application/json");
				echo json_encode($response);
			}
			else
			{
				$ressult = $this->cruder->update_employee();
				if ($ressult == "failed") {
					# code...
					$response['message'] = 'failed';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "notFoud") {
					# code...
					$response['message'] = 'notFoud';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "success") {
					# code...
					$response['message'] = 'success';
					header("content-type:application/json");
					echo json_encode($response);
				}else{
					
					$response['message'] = "Oops!! Internal Server Error Occured";
					header("content-type:application/json");
					echo json_encode($response);
				}
				
			}
        }
        else
        {
            redirect('login');
        }

	}
	//
	public function updatingJob(){
       if($this->session->userdata('validated'))
        {
			$this->form_validation->set_rules('companyName', 'companyName', 'trim|required');
			$this->form_validation->set_rules('position', 'position', 'trim|required');
			$this->form_validation->set_rules('howMany', 'howMany', 'trim|required|min_length[1]');
			$this->form_validation->set_rules('minSalary', 'minSalary', 'trim|required');
			$this->form_validation->set_rules('maxSalary', 'maxSalary', 'trim|required');
			$this->form_validation->set_rules('openingDate', 'openingDate', 'trim|required');
			$this->form_validation->set_rules('closingDate', 'closingDate', 'trim|required');
			$this->form_validation->set_rules('employer', 'employer', 'trim|required');
			$this->form_validation->set_rules('category', 'category', 'trim|required');
			$this->form_validation->set_rules('about', 'about', 'trim|required|min_length[20]');
			$this->form_validation->set_rules('id', 'id', 'trim|required');
			if ($this->form_validation->run() === FALSE)
			{
				$response['message'] = validation_errors();
				header("content-type:application/json");
				echo json_encode($response);
			}
			else
			{
				$ressult = $this->cruder->update_job();
				if ($ressult == "failed") {
					# code...
					$response['message'] = 'failed';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "notFoud") {
					# code...
					$response['message'] = 'notFoud';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "success") {
					# code...
					$response['message'] = 'success';
					header("content-type:application/json");
					echo json_encode($response);
				}else{
					
					$response['message'] = "Oops!! Internal Server Error Occured";
					header("content-type:application/json");
					echo json_encode($response);
				}
				
			}
        }
        else
        {
            redirect('login');
        }
	}
	//
	public function updatingStaff(){
       if($this->session->userdata('validated'))
        {
			// $this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('repeatPassword', 'repeatPassword', 'trim|required|min_length[8]|matches[password]');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
			if ($this->form_validation->run() === FALSE)
			{
				$response['message'] = validation_errors();
				header("content-type:application/json");
				echo json_encode($response);
			}
			else
			{
				$ressult = $this->cruder->update_staff();
				if ($ressult == "failed") {
					# code...
					$response['message'] = 'failed';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "exists") {
					# code...
					$response['message'] = 'exists';
					header("content-type:application/json");
					echo json_encode($response);
				}elseif ($ressult == "success") {
					# code...
					$response['message'] = 'success';
					header("content-type:application/json");
					echo json_encode($response);
				}else{
					
					$response['message'] = "Oops!! Internal Server Error Occured";
					header("content-type:application/json");
					echo json_encode($response);
				}
				
			}
        }
        else
        {
            redirect('login');
        }
	}
}