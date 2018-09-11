<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    /**
     * CodeIgniter Application Model Classes
     *
     * This classes object are super classes that every library in
     * CodeIgniter will be assigned to.
     *
     * @package     CodeIgniter
     * @subpackage  User function models
     * @category    Libraries
     * @author      Mark Ochieng'| Vinarq Technologies
     * @license     MIT
     */
class User extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function login(){
        $name = $this->input->post('email');
        $pass = md5($this->input->post('password'));

        $query = $this->db->query('SELECT * FROM staff WHERE email="'.$name.'"');
        if ($query->num_rows() == 0) {
            # code...
            $false="notFound";
            return $false;
        }else if($query->num_rows() == 1){
            $this->db->where('password',$pass);
            $this->db->where('email',$name);
            //run query
            $q=$this->db->get('staff');
            if($q->num_rows()<1)
            {
                $state = "notMatch";
                return $state;
            }else{
                if($q->row()->verified != 'yes') {
                    # code...
                    $email="notVerified";
                    return $email;
                }elseif ($q->row()->status == 'disabled') {
                    # code...
                    $res="disabled";
                    return $res;
                }
                else
                {
                    $this->load->library('session');
                    $data= array(
                        'staffid' => $q->row()->staffid,
                        'name' => $q->row()->name,
                        'email' => $q->row()->email,
                        'status' => $q->row()->status,
                        'created_on' => $q->row()->created_on,
                        'role' => $q->row()->role,
                        'validated' => true
                        );
                    $this->session->set_userdata($data);
                    return true;
                }
            }
        }
        else{
            echo "Oops!! Internal Server Error Occured. Please COntact the Dev Team";
        }
        // $sq=$this->db->query('SELECT * FROM staff WHERE email="'.$name.'"');
        // $check=$sq->row_array();
        // if($sq->num_rows()==0)
        //  {
        //     $false="notFound";
        //     return $false;
        //  }
        // else if($check['verified']!='yes')
        // {
        //     $email="notVerified";
        //     return $email;
        // }
        // else if($check['status']!='active')
        // {
        //     $email="disabled";
        //     return $email;
        // }
        // else
        // {
        //     $this->db->where('password',$pass);
        //     $this->db->where('email',$name);
        //     //run query
        //     $q=$this->db->get('staff');
        //     if($q->num_rows<1)
        //     {
        //         $state = "notMatch";
        //         return $state;
        //     }
        //     else
        //     {
        //         $this->load->library('session');
        //         $data= array(
        //             'staffid' => $q->row()->staffid,
        //             'name' => $q->row()->name,
        //             'email' => $q->row()->email,
        //             'status' => $q->row()->status,
        //             'create_on' => $q->row()->create_on,
        //             'role' => $q->row()->role,
        //             'validated' => true
        //             );
        //         $this->session->set_userdata($data);
        //         return true;
        //     }
        // }
        // return false;
    }



    // INSERT INTO `users` (`userId`, `firstName`, `middleName`, `lastName`, `emailAddress`, `mobileNumber`, `role`, `password`, `status`, `createOn`, `lastLogin`, `verificationStatus`, `username`, `cv`, `dp`, `dob`, `idNumber`, `residentArea`) VALUES ('1', 'Allen', 'Barry', 'Mwenda', 'allen@vinarq.com', '0712367457', '777', 'b717415eb5e699e4989ef3e2c4e9cbf7', 'active', '2018-07-29 23:40:55', '0000-00-00 00:00:00.000000', 'verified', 'Flash', NULL, NULL, NULL, NULL, NULL);
}



        // $sq=$this->db->query('SELECT * FROM users WHERE username="'.$name.'" AND password="'.$pass.'"');
        // $check=$sq->row_array();
        //     if($sq->num_rows()==0)
        //  {
        //     $false="notFound";
        //     echo  $false;
        //  }else{
        //     // $query=$this->db->query('UPDATE users set verificationStatus="verified" where username="'.$name.'"');
        //     $sq=$this->db->query('SELECT * FROM users WHERE username="'.$name.'"');
        //     //run query
        //     if($sq->num_rows<1)
        //     {
        //         $state = "notMatch";
        //         return $state;
        //     }
        //     else
        //     {
                

        //         $data= array(
        //             'userId' => $row->userId,
        //             'firstName' => $row->firstName,
        //             'lastName' => $row->lastName,
        //             'username' => $row->username,
        //             'validated' => true
        //             );
        //         $this->session->set_userdata($data);
        //         return true;
        //     }
        //  }
?>