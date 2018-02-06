<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		public function index($page = 'index'){
			if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
				show_404();
				}
			else{$this->load->view('admin/'.$page);}
				

		}
		public function login($page = 'index'){
			$data['username']=$_POST['username'];
			$data['password']=$_POST['password'];
			$admin=$this->login->login_admin($data);
			$doctor=$this->login->login_doctor($data);
			$pharma=$this->login->login_pharma($data);
			$patient=$this->login->login_patient($data);
			if($admin!=NULL){
				foreach($admin as $admins){
					$username= $admins['username'];
				}
				$this->session->set_userdata(array('username'=>$username));
				redirect('admin/view/');
			}elseif($doctor!=NULL){
				foreach($doctor as $doctors){
					$username= $doctors['username'];
				}
				$this->session->set_userdata(array('username'=>$username));
				redirect('Doctor/view/');

			}elseif($pharma!=NULL){
				foreach($pharma as $pharmas){
					$username= $admins['username'];
				}
				$this->session->set_userdata(array('username'=>$username));
				redirect('Pharma/view/');

			}elseif($patient!=NULL){

				foreach($patient as $patients){
					$username= $patients['username'];
				}
				$this->session->set_userdata(array('username'=>$username));
				redirect('Patient/view/');
			}else{
				$this->load->view('admin/'.$page);
			}
		}
		public function view($page ='add_patient'){
			if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
				show_404();
				}
			else{
				if(null !==($this->session->userdata('username'))){
					$this->load->view('admin/header');
					$this->load->view('admin/'.$page);
				}else{
					
					$this->load->view('admin/index');
					
				}
				
			}
				

		}
		public function logout(){
			$this->session->unset_userdata('username');
			$this->load->view('admin/index');
			$this->load->view('admin/toast');
			
		}
	
}