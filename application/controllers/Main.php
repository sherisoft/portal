<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * CodeIgniter Application Controller Class
	 *
	 * This class object is the super class that every library in
	 * CodeIgniter will be assigned to.
	 *
	 * @package		CodeIgniter
	 * @subpackage	Base pages Controllers
	 * @category	Libraries
	 * @author		Mark Ochieng'(Vinarq Technologies)
  	 * @license     MIT
	 */
    function __construct()
    { 
        // Construct the parent class
        parent::__construct();
        $this->load->model('geter');
        $this->load->library('form_validation');
        // Configure limits on our controller methods
    }

	public function index()
	{
		$this->load->view('base/head');
		$this->load->view('pages/enter');	
		$this->load->view('base/foot');
	}

	// 
	public function reg()
	{
		$this->load->view('base/head');
		$this->load->view('pages/register');	
		$this->load->view('base/foot');
	}

	// 
	public function resetPassword()
	{
		$this->load->view('base/head');
		$this->load->view('pages/reset_password');	
		$this->load->view('base/foot');
	}

	// 
	public function home()
	{

        if($this->session->userdata('validated'))
        {
			$data['jobs'] = $this->geter->getTotalPosts();
			$data['employees'] = $this->geter->getTotalEmployees();
			$data['employers'] = $this->geter->getTotalEmployers();
			$data['staff'] = $this->geter->getTotalStaff();

			$this->load->view('base/header');
			// $this->load->view('pages/dashboard', $data);
			$this->load->view('pages/dashboard', $data);	
			$this->load->view('base/footer');
        }
        else
        {
            redirect('login');
        }

	}

	// 
	public function allStaff()
	{
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getAllStaff();
			$this->load->view('base/xheader');
			$this->load->view('pages/all_staff', array ('data' => $data));	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function allEmployees()
	{
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getAllEmployees();
			$this->load->view('base/xheader');
			$this->load->view('pages/all_employees', array ('data' => $data));	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function allEmployers()
	{
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getAllEmployers();
			$this->load->view('base/xheader');
			$this->load->view('pages/all_employers', array ('data' => $data));	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function singleEmployee()
	{
       if($this->session->userdata('validated'))
        {
			$data['items'] = $this->geter->getSingleEmployee();

			$this->load->view('base/header');
			$this->load->view('pages/single_employee', $data);	
			$this->load->view('base/footer');
        }
        else
        {
            redirect('login');
        }
	}

	//  
	public function sinlgeEmployer()
	{
       if($this->session->userdata('validated'))
        {
			$data['items'] = $this->geter->getSingleEmployer();

			$this->load->view('base/header');
			$this->load->view('pages/single_employer', $data);	
			$this->load->view('base/footer');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function suspendedEmployers()
	{
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getSuspendedEmployers();
			$this->load->view('base/xheader');
			$this->load->view('pages/suspended_employers', array ('data' => $data));	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function suspendedEmployees()
	{
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getSuspendedEmployees();
			$this->load->view('base/xheader');
			$this->load->view('pages/suspended_employees', array ('data' => $data));	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function activeEmployers()
	{
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getActiveEmployers();
			$this->load->view('base/xheader');
			$this->load->view('pages/active_employers', array ('data' => $data));	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function activeEmployees()
	{
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getActiveEmployees();
			$this->load->view('base/xheader');
			$this->load->view('pages/active_employees', array ('data' => $data));	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function allJobs()
	{
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getAllPosts();
			$this->load->view('base/xheader');
			$this->load->view('pages/all_jobs', array ('data' => $data));	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }
	}


	// 
	public function openJobs()
	{
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getOpenPosts();
			$this->load->view('base/xheader');
			$this->load->view('pages/all_open_jobs', array ('data' => $data));	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }

	}

	// 
	public function suspendedJobs()
	{
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getSuspendedPosts();
			$this->load->view('base/xheader');
			$this->load->view('pages/suspended_jobs', array ('data' => $data));	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function closedJobs()
	{
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getClosedPosts();
			$this->load->view('base/xheader');
			$this->load->view('pages/all_closed_jobs', array ('data' => $data));	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }
	}


	// 
	public function singleJob()
	{
       if($this->session->userdata('validated'))
        {
			$data['items'] = $this->geter->getSingleJob();

			$this->load->view('base/header');
			$this->load->view('pages/single_job', $data);	
			$this->load->view('base/footer');
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
			$this->load->view('base/header');
			$this->load->view('pages/create_job');	
			$this->load->view('base/ffooter');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function createStaff()
	{
       if($this->session->userdata('validated'))
        {
			$this->load->view('base/header');
			$this->load->view('pages/create_staff');	
			$this->load->view('base/ffooter');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function createEmployee()
	{
       if($this->session->userdata('validated'))
        {
			$this->load->view('base/header');
			$this->load->view('pages/create_employee');	
			$this->load->view('base/ffooter');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function createEmployer()
	{
       if($this->session->userdata('validated'))
        {
			$this->load->view('base/header');
			$this->load->view('pages/create_employer');	
			$this->load->view('base/ffooter');
        }
        else
        {
            redirect('login');
        }
	}


	// 
	public function pageNotFound()
	{
		$this->load->view('errors/html/error_404');	
	}

	// 
	public function admin_profile(){
       if($this->session->userdata('validated'))
        {
			$this->load->view('base/header');
			$this->load->view('pages/adminProfile');	
			$this->load->view('base/footer');
        }
        else
        {
            redirect('login');
        }
	}
	// 
	public function supportEmployer(){
       if($this->session->userdata('validated'))
        {
			$this->load->view('base/header');
			$this->load->view('support/employer');	
			$this->load->view('base/footer');
        }
        else
        {
            redirect('login');
        }
	}
	// 
	public function supportEmployee(){
       if($this->session->userdata('validated'))
        {
			$this->load->view('base/header');
			$this->load->view('support/employee');	
			$this->load->view('base/footer');
        }
        else
        {
            redirect('login');
        }
	}
	// 
	public function supportStaff(){
       if($this->session->userdata('validated'))
        {
			$this->load->view('base/header');
			$this->load->view('support/staff');	
			$this->load->view('base/footer');
        }
        else
        {
            redirect('login');
        }
	}
	// 
	public function supportPosts(){
       if($this->session->userdata('validated'))
        {
			$this->load->view('base/header');
			$this->load->view('support/posts');	
			$this->load->view('base/footer');
        }
        else
        {
            redirect('login');
        }
	}	
	// 
	public function financeHome(){
       if($this->session->userdata('validated'))
        {
			$this->load->view('base/header');
			$this->load->view('finance/home');	
			$this->load->view('base/footer');
        }
        else
        {
            redirect('login');
        }
	}

	// 
	public function singleJobApplicants(){
       if($this->session->userdata('validated'))
        {
			$data = $this->geter->getJobApplicants();
			$this->load->view('base/xheader');
			$this->load->view('pages/per_job_applicants', $data);	
			$this->load->view('base/xfooter');
        }
        else
        {
            redirect('login');
        }		
	}
}