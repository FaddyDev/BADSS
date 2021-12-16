<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

function __construct()

{
parent::__construct();
$this->load->library('session');
$this->load->helper('form');
$this->load->helper('url');
$this->load->helper('html');
$this->load->database();
$this->load->library('form_validation');

$this->load->model('model_login');

}
public function index()
{
$this->load->view('login_form');
}

public function getLoginValues()
{
$category = $this->input->post('category');
$username = $this->input->post('username');
$password = $this->input->post('password');

$this->form_validation->set_rules('category','Category','required');
$this->form_validation->set_rules('username','Username','required');
$this->form_validation->set_rules('password','Password','required');

if($this->form_validation->run() == FALSE)
{$this->load->view('login_form');}
else{
   $result ='';
     if($this->input->post('submit') == "Login")
	 {
	  if($category=='STUDENT'){
	  $result = $this->model_login->login_checkpoint_student($username ,$password);
	  }
	 else{
	  $result = $this->model_login->login_checkpoint($category ,$username ,$password);}
	     if($result > 0)
		 {
		   $sessiondata = array(
           'category'=>$category,
		   'username'=>$username,
		   'loggedin'=>TRUE);
           $this->session->set_userdata($sessiondata);
		   if($category=='STUDENT'){
	  redirect('student_home');
	  }
	 else if($category=='RECOMENDERS'){
	 redirect('rec_home');}
	 else{
	 redirect('comm_home');
	 }
           
		 }
		 else
		 {
		 $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Invalid Credentials, Please check and try agin!</div>');
		$this->load->view('login_form');
		 }
   }
   else
   {
     $this->load->view('login_form');
   }
 }
}

public function logout()
{
$this->session->sess_destroy();
redirect('index');
}

}

/* End of file welcome.php */

/* Location: ./application/controllers/login.php */

