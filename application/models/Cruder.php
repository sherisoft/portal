<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    /**
     * CodeIgniter Application Model Classes
     *
     * This classes object are super classes that every library in
     * CodeIgniter will be assigned to.
     *
     * @package     CodeIgniter
     * @subpackage  Crud function models
     * @category    Libraries
     * @author      Mark Ochieng'| Vinarq Technologies
     * @license     MIT
     */
class Cruder extends CI_Model{
    function __construct(){
        parent::__construct();
    }

// 
    public function create_staff(){
        $names = $this->input->post('username');
        $pass = md5($this->input->post('password'));
        $mail = $this->input->post('email');
        $date = date('Y-m-d H:i:s');

        $this->load->helper('string');
        $slug = random_string('alnum',20);
        // data prep
        $data = array(
            'staffid' => '',
            'name' => $names,
            'password' => $pass,
            'email' => $mail,
            'status' => "active",
            'created_on' => $date,
            'verified' => $slug,
            'role' => 'notSet', );
        // verification and account creation
        $query=$this->db->query("SELECT * FROM staff WHERE email='".$mail."'");
        if($query->num_rows()==1)
        {
            return "exists";
        }
        else
        {
            $sql=$this->db->insert('staff',$data);
            $qu=$this->db->query('SELECT * FROM staff WHERE email="'.$mail.'"');
            $config = Array(
              'protocol' => 'smtp',
              'smtp_host' => 'ssl://smtp.googlemail.com',
              'smtp_port' => '465',
              'smtp_user' => 'vinarqtechnologies@gmail.com', // change it to yours
              'smtp_pass' => 'natasha@2014', // change it to yours
              'mailtype' => 'html',
              'charset' => 'iso-8859-1',
              'wordwrap' => TRUE,                  
            );
            $config['validate'] = FALSE; // TRUE or FALSE (boolean)    Whether to validate the email address.
                $config['priority'] = 3; // 1, 2, 3, 4, 5    Email Priority. 1 = highest. 5 = lowest. 3 = normal.
                $config['crlf'] = '\r\n';
                            $code=rand();
                            $this->load->library('email',$config);
                            $this->email->set_newline("\r\n");

            $this->email->from('vinarqtechnologies@gmail.com','G-AJIRI');
            $this->email->to($mail);
            $this->email->subject('G-Ajiri Confirmation Email');
            $this->email->message('Please confirm your account as soon as possible by clicking on the following link http://localhost/portal/activate/?slug='.$slug);

            if($this->email->send())
            {

                return "success";
            }
            else
            {
                $que=$this->db->query('DELETE FROM staff WHERE email="'.$mail.'"');
                return "failed";
                echo show_error($this->email->print_debugger());
            } 
        }
    }

    // activate email sent
    function activate()
    {
        $activate = $this->input->get('slug');
        $q=$this->db->query("SELECT * FROM staff WHERE verified='".$activate."'");
        if($q->num_rows()<1)
        {
        echo "<script>alert('This is an invalid OTP-Token');</script>";
        }
        else
        {
        $query=$this->db->query('UPDATE staff SET verified="yes" WHERE verified="'.$activate.'"');
        if($query)
        {
            echo "<script>alert('Your email has been activated successfuly, please wait for the Super Administrator to approve your account');</script>";
        }
        }
        
    }


    // admin staff creation
    public function create_staff_(){
        $names = $this->input->post('username');
        $pass = md5($this->input->post('password'));
        $mail = $this->input->post('email');
        $pos = $this->input->post('position');
        $date = date('Y-m-d H:i:s');

        $this->load->helper('string');
        $slug = random_string('alnum',20);
        // data prep
        $data = array(
            'staffid' => '',
            'name' => $names,
            'password' => $pass,
            'email' => $mail,
            'status' => "active",
            'created_on' => $date,
            'verified' => 'yes',
            'role' => $pos, );
        // verification and account creation
        $query=$this->db->query("SELECT * FROM staff WHERE email='".$mail."'");
        if($query->num_rows()==1)
        {
            return "exists";
        }
        else
        {
            $sql=$this->db->insert('staff',$data);

            if($sql){
                return "success";

            }else{
                return "failed";

            }
        }
    }

    // admin employer creation
    public function create_employer(){
        $f_name = $this->input->post('firstName');
        $m_name = $this->input->post('middleName');
        $l_name = $this->input->post('lastName');
        $mobile = $this->input->post('mobileNumber');
        $username = $this->input->post('username');
        $bussn = $this->input->post('businessName');
        $busslo = $this->input->post('businessLocation');
        $bussno = $this->input->post('businessRegNo');
        $gender = $this->input->post('gender');
        $industry = $this->input->post('industry');
        $pass = md5($this->input->post('password'));
        $mail = $this->input->post('email');
        $about = $this->input->post('about');
        $date = date('Y-m-d H:i:s');

        $this->load->helper('string');
        $slug = random_string('alnum',20);
        // data prep
        $data = array(
            'employerId' => '',
            'firstName' => $f_name,
            'middleName' => $m_name,
            'lastName' => $l_name,
            'emailAddress' => $mail,
            'mobileNumber' => $mobile,
            'password' => $pass,
            'status' => 'active', 
            'createOn' => $date,
            'lastLogin' => $date,
            'verificationStatus' => 'verified',
            'username' => $username,
            'businessName' => $bussn,
            'businessLocation' => $busslo,
            'businessRegNo' => $bussno,
            'industry' => $industry, 
            'gender' => $gender,
            'about' => $about, 
        );
        // verification and account creation
        $query=$this->db->query("SELECT * FROM employers WHERE emailAddress='".$mail."'");
        if($query->num_rows()==1)
        {
            return "exists";
        }
        else
        {
            $sql=$this->db->insert('employers',$data);

            if($sql){
                return "success";

            }else{
                return "failed";

            }
        }  
    }

    // admin employee creation
    public function create_employee(){
        $f_name = $this->input->post('firstName');
        $m_name = $this->input->post('middleName');
        $l_name = $this->input->post('lastName');
        $mobile = $this->input->post('mobileNumber');
        $username = $this->input->post('username');
        $dob = $this->input->post('dob');
        $idno = $this->input->post('identityNumber');
        $residence = $this->input->post('residence');
        $gender = $this->input->post('gender');
        $pass = md5($this->input->post('password'));
        $mail = $this->input->post('email');
        $about = $this->input->post('about');
        $date = date('Y-m-d H:i:s');

        $this->load->helper('string');
        $slug = random_string('alnum',20);
        // data prep
        $data = array(
            'userId' => '',
            'firstName' => $f_name,
            'middleName' => $m_name,
            'lastName' => $l_name,
            'emailAddress' => $mail,
            'mobileNumber' => $mobile,
            'role' => 'normal',
            'password' => $pass, 
            'status' => 'active',
            'createOn' => $date,
            'lastLogin' => $date,
            'verificationStatus' => 'verified',
            'username' => $username,
            'dob' => $dob, 
            'gender' => $gender,
            'about' => $about,
            'idNumber'=>$idno,
            'residentArea'=>$residence,
        );
        // verification and account creation
        $query=$this->db->query("SELECT * FROM users WHERE emailAddress='".$mail."'");
        if($query->num_rows()==1)
        {
            return "exists";
        }
        else
        {
            $sql=$this->db->insert('users',$data);

            if($sql){
                return "success";

            }else{
                return "failed";

            }
        } 
    }

    // Creating Job posts

    public function create_job(){
        $companyName = $this->input->post('companyName');
        $position = $this->input->post('position');
        $quantity = $this->input->post('howMany');
        $min_salary = $this->input->post('minSalary');
        $max_salary = $this->input->post('maxSalary');
        $OpeningDate = $this->input->post('openingDate');
        $dueDate = $this->input->post('closingDate');
        $employer = $this->input->post('employer');
        $cat = $this->input->post('category');
        $about = $this->input->post('about');
        $date = date('Y-m-d H:i:s');

        $this->load->helper('string');
        $slug = random_string('alnum',20);
        // data prep
        $data = array(
            'jobId' => '',
            'companyName' => $companyName,
            'position' => $position,
            'totalAvailable' => $quantity,
            'salaryFrom' => $min_salary,
            'salaryUpTo' => $max_salary,
            'openFrom' => $OpeningDate,
            'closedOn' => $dueDate, 
            'status' => 'open',
            'createdOn' => $date,
            'category' => $cat,
            'employerId' => $employer,
            'about' => $about,
        );
        // verification and account creation
        // $query=$this->db->query("select * from jobs where emailAddress='".$mail."'");
        $sql=$this->db->insert('jobs',$data);
        if($sql){
            return "success";

        }else{
            return "failed";

        }
    }


    // 
    public function updateStaffState(){
        $id = $this->input->post('id');
        $state = $this->input->post('state');

        $q=$this->db->query("SELECT * FROM staff WHERE staffid='".$id."'");
        if($q->num_rows()<1)
        {
            echo "<script>alert('Internal Server Error Occured. Please Contact Technical Team');</script>";
        }
        else
        {
            $query=$this->db->query('UPDATE staff SET status="'.$state.'" WHERE staffid="'.$id.'"');
            if($query)
            {
                return True;
            }
        }

    }

        // 
    public function updateEmployeeState(){
        $id = $this->input->post('id');
        $state = $this->input->post('state');

        $q=$this->db->query("SELECT * FROM users WHERE userId='".$id."'");
        if($q->num_rows()<1)
        {
            echo "<script>alert('Internal Server Error Occured. Please Contact Technical Team');</script>";
        }
        else
        {
            $query=$this->db->query('UPDATE users SET status="'.$state.'" WHERE userId="'.$id.'"');
            if($query)
            {
                return True;
            }
        }

    }

        // 
    public function updateEmployerState(){
        $id = $this->input->post('id');
        $state = $this->input->post('state');

        $q=$this->db->query("SELECT * FROM employers WHERE employerId='".$id."'");
        if($q->num_rows()<1)
        {
            echo "<script>alert('Internal Server Error Occured. Please Contact Technical Team');</script>";
        }
        else
        {
            $query=$this->db->query('UPDATE employers SET status="'.$state.'" WHERE employerId="'.$id.'"');
            if($query)
            {
                return True;
            }
        }

    }
        // 
    public function updateJobState(){
        $id = $this->input->post('id');
        $state = $this->input->post('state');

        $q=$this->db->query("SELECT * FROM jobs WHERE jobId='".$id."'");
        if($q->num_rows()<1)
        {
            echo "<script>alert('Internal Server Error Occured. Please Contact Technical Team');</script>";
        }
        else
        {
            $query=$this->db->query('UPDATE jobs SET status="'.$state.'" WHERE jobId="'.$id.'"');
            if($query)
            {
                return True;
            }
        }

    }

    // Creating Job posts

    public function update_job(){
        $companyName = $this->input->post('companyName');
        $position = $this->input->post('position');
        $quantity = $this->input->post('howMany');
        $min_salary = $this->input->post('minSalary');
        $max_salary = $this->input->post('maxSalary');
        $OpeningDate = $this->input->post('openingDate');
        $dueDate = $this->input->post('closingDate');
        $employer = $this->input->post('employer');
        $cat = $this->input->post('category');
        $about = $this->input->post('about');
        $id = $this->input->post('id');
        $date = date('Y-m-d H:i:s');

        $this->load->helper('string');
        $slug = random_string('alnum',20);
        // data prep
        $data = array(
            'companyName' => $companyName,
            'position' => $position,
            'totalAvailable' => $quantity,
            'salaryFrom' => $min_salary,
            'salaryUpTo' => $max_salary,
            'openFrom' => $OpeningDate,
            'closedOn' => $dueDate, 
            'category' => $cat,
            'employerId' => $employer,
            'about' => $about,
        );
        // verification and account creation
        // verification and account creation
        $query=$this->db->query("SELECT * FROM jobs WHERE jobId='".$id."'");
        if($query->num_rows()==1)
        {
            $this->db->where('jobId',$id);
            $sql=$this->db->update('jobs',$data);

            if($sql){
                return "success";

            }else{
                return "failed";

            }
        }
        else
        {
            return "notFoud";
        }
    }

    // admin employee creation
    public function update_employee(){
        $f_name = $this->input->post('firstName');
        $m_name = $this->input->post('middleName');
        $l_name = $this->input->post('lastName');
        $mobile = $this->input->post('mobileNumber');
        $username = $this->input->post('username');
        $dob = $this->input->post('dob');
        $idno = $this->input->post('identityNumber');
        $residence = $this->input->post('residence');
        $mail = $this->input->post('email');
        $about = $this->input->post('about');
        $date = date('Y-m-d H:i:s');

        $this->load->helper('string');
        $slug = random_string('alnum',20);
        // data prep
        $data = array(
            'firstName' => $f_name,
            'middleName' => $m_name,
            'lastName' => $l_name,
            'emailAddress' => $mail,
            'mobileNumber' => $mobile,
            'username' => $username,
            'dob' => $dob, 
            'about' => $about,
            'idNumber'=>$idno,
            'residentArea'=>$residence,
        );
        // verification and account creation
        $query=$this->db->query("SELECT * FROM users WHERE emailAddress='".$mail."'");
        if($query->num_rows()==1)
        {
            $this->db->where('emailAddress',$mail);
            $sql=$this->db->update('users',$data);

            if($sql){
                return "success";

            }else{
                return "failed";

            }
        }
        else
        {
            return "notFoud";
        } 
    }

// 
        public function update_employer(){
        $f_name = $this->input->post('firstName');
        $m_name = $this->input->post('middleName');
        $l_name = $this->input->post('lastName');
        $mobile = $this->input->post('mobileNumber');
        $username = $this->input->post('username');
        $bussn = $this->input->post('businessName');
        $busslo = $this->input->post('businessLocation');
        $bussno = $this->input->post('businessRegNo');
        $industry = $this->input->post('industry');
        $mail = $this->input->post('email');
        $about = $this->input->post('about');

        $this->load->helper('string');
        $slug = random_string('alnum',20);
        // data prep
        $data = array(
            'firstName' => $f_name,
            'middleName' => $m_name,
            'lastName' => $l_name,
            'emailAddress' => $mail,
            'mobileNumber' => $mobile,
            'username' => $username,
            'businessName' => $bussn,
            'businessLocation' => $busslo,
            'businessRegNo' => $bussno,
            'industry' => $industry,
            'about' => $about, 
        );
        // verification and account creation
        $query=$this->db->query("SELECT * FROM employers WHERE emailAddress='".$mail."'");
        if($query->num_rows()==1)
        {
            $this->db->where('emailAddress',$mail);
            $sql=$this->db->update('employers',$data);

            if($sql){
                return "success";

            }else{
                return "failed";

            }
        }
        else
        {
            return "notFoud";
        }  
    }


// 
    public function update_staff(){
        $names = $this->input->post('username');
        $pass = md5($this->input->post('password'));
        $mail = $this->input->post('email');
        $pos = $this->input->post('position');
        $date = date('Y-m-d H:i:s');

        $this->load->helper('string');
        $slug = random_string('alnum',20);
        // data prep
        $data = array(
            'staffid' => '',
            'name' => $names,
            'password' => $pass,
            'email' => $mail,
            'status' => "active",
            'created_on' => $date,
            'verified' => 'yes',
            'role' => $pos, );
        // verification and account creation
        $query=$this->db->query("SELECT * FROM staff WHERE email='".$mail."'");
        if($query->num_rows()==1)
        {
            return "exists";
        }
        else
        {
            $sql=$this->db->insert('staff',$data);

            if($sql){
                return "success";

            }else{
                return "failed";

            }
        }
        
    }
 }
