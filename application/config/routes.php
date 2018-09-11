<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = 'main/pageNotFound';
$route['translate_uri_dashes'] = FALSE;


/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Application Routes
 * @category	Libraries
 * @author		Mark Ochieng'(Vinarq Technologies)
 * @license     MIT
 */

// admin panel urls
$route['login'] = 'main';
$route['exit'] = 'crud/logout';
$route['register'] = 'main/reg';
$route['reset'] = 'main/resetPassword';
$route['dashboard'] = 'main/home';
$route['staffs'] = 'main/allStaff';
$route['employees'] = 'main/allEmployees';
$route['employers'] = 'main/allEmployers';
$route['get_employee'] = 'main/singleEmployee';
$route['suspended_employees'] = 'main/suspendedEmployees';
$route['suspended_employers'] = 'main/suspendedEmployers';
$route['suspended_jobs'] = 'main/suspendedJobs';
$route['active_employees'] = 'main/activeEmployees';
$route['active_employers'] = 'main/activeEmployers';
$route['get_employer'] = 'main/sinlgeEmployer';
$route['jobs'] = 'main/allJobs';
$route['get_job'] = 'main/singleJob';
$route['open_jobs'] = 'main/openJobs';
$route['closed_jobs'] = 'main/closedJobs';
$route['create_job'] = 'main/createJob';
$route['create_staff'] = 'main/createStaff';
$route['create_employee'] = 'main/createEmployee';
$route['create_employer'] = 'main/createEmployer';
 
// crud/post/get functions urls
$route['login_user'] = 'crud/login';
$route['staff_create/post'] = 'crud/register'; //default create url
$route['register_user'] = 'crud/reg_staff';
$route['register_staff_'] = 'crud/admin_create_staff';
$route['employee_update'] = 'crud/updateEmployee';
$route['employer_update'] = 'crud/updateEmployer';
$route['staff_reset'] = 'crud/staffResetPassword';
$route['job_update'] = 'crud/updateJob';
$route['update_job_status'] = 'crud/updateJobStatus';
$route['update_employee_status'] = 'crud/updateEmployeeStatus';
$route['update_employer_status'] = 'crud/updateEmployerStatus';
$route['update_staff_status'] = 'crud/updateStaffStatus';

// create urls by sadmin
$route['create_new_job_'] = 'crud/createJob';
$route['create_staff_post'] = 'crud/createStaff';
$route['create_new_employee_'] = 'crud/createEmployee';
$route['create_new_employer_'] = 'crud/createEmployer';
// main updates 
$route['update_employer_details'] = 'crud/updatingEmployer';
$route['update_employee_details'] = 'crud/updatingEmployee';
$route['update_job_details'] = 'crud/updatingJob';
// admin content
$route['myProfile'] = 'main/admin_profile';
$route['activate'] = 'crud/verify_email';

// support urls
$route['supportEmployers'] = 'main/supportEmployer';
$route['supportEmployees'] = 'main/supportEmployee';
$route['supportStaff'] = 'main/supportStaff';
$route['supportPosts'] = 'main/supportPosts';
// finance urls
$route['finance'] = 'main/financeHome';

// applicants
$route['view_job_applicants'] = 'main/singleJobApplicants';