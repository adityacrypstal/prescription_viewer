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
					$username= $doctors['Id'];
				}
				$this->session->set_userdata(array('username'=>$username));
				redirect('Doctor/view/');

			}elseif($pharma!=NULL){
				foreach($pharma as $pharmas){
					$username= $pharmas['Id'];
				}
				$this->session->set_userdata(array('username'=>$username));
				redirect('Pharma/view/');

			}elseif($patient!=NULL){

				foreach($patient as $patients){
					$username= $patients['Id'];
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
					$data['patients']=$this->PV->get_patient_model();
					$data['doctors']=$this->PV->get_doctor_model();
					$data['pharmas']=$this->PV->get_pharma();
					$data['appoints']=$this->PV->get_appoint_admin();
					$this->load->view('admin/header');
					$this->load->view('admin/'.$page,$data);
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
		public function add_patient(){
			$this->load->database();
			$this->db->insert('patient',$_POST);
			$this->db->trans_complete();
			$Id = $this->db->insert_id();
			echo ("<script LANGUAGE='JavaScript'>
    					window.alert('Patient added sucessfully.Patient Id is ".$Id." ');
    							window.location.href='view/add_patient';
   					 </script>");
	
			
			
		}
		public function add_doctor(){
			$this->load->database();
			$this->db->insert('doctor',$_POST);
			echo ("<script LANGUAGE='JavaScript'>
    					window.alert('Doctor added sucessfully!');
    							window.location.href='view/add_doctor';
			   		 </script>");
			  
		}
		public function liveSearch(){
			$search = $this->input->get('id');
  			$result = $this->PV->getPerson($search);
  			echo json_encode ($result);
 			
		}
		public function liveSearch_doctor(){
			$search = $this->input->get('id');
  			$result = $this->PV->getPerson_doctor($search);
  			echo json_encode ($result);
 			
		}
		public function pharmaSearch(){
			$search = $this->input->get('id');
  			$result = $this->PV->getPharmaLive($search);
  			echo json_encode ($result);
 			
		}
		public function signup(){
			$this->load->view('admin/signup');
			
		}
		public function appoint(){
			$data['patient']=$this->uri->segment(3);
			$data['doctor']=$this->uri->segment(4);
			$data['time']=date('h:i:sa');
			$this->db->insert('appoints',$data);
			echo ("<script LANGUAGE='JavaScript'>
    					window.alert('Appointment added sucessfully!');
    							window.location.href='".base_url('index.php/Admin/view/appointments')."';
			   		 </script>");

			
		}
		public function add_pharma(){
			$this->load->database();
			$this->db->insert('pharma',$_POST);
			$this->db->trans_complete();
			$Id = $this->db->insert_id();
			echo ("<script LANGUAGE='JavaScript'>
    					window.alert('Pharma added sucessfully Username is ".$Id." ');
    							window.location.href='view/index';
   					 </script>");
	
			
		}
		public function trying(){
			$date=$_GET['date'];
			$query=$this->db->query("SELECT * FROM appoints WHERE DATE(date) ='$date'");
			$ad=$query->result_array();
			echo json_encode($ad);

		}			
	public function remove_appoints(){
	$id=$this->uri->segment(3);
	$this->db->query('DELETE FROM `appoints`WHERE id ='.$id.'');
	echo ("<script LANGUAGE='JavaScript'>
    					window.alert('Appointment remove sucessfully!');
    							window.location.href='".base_url('index.php/Admin/view/prescribe')."';
			   		 </script>");
	}	
	public function submitAppoint(){
		$this->db->insert('appoints',$_GET);
		echo ("<script LANGUAGE='JavaScript'>
    					window.alert('Appointment created sucessfully!');
    							window.location.href='".base_url('index.php/Admin/view/prescribe')."';
			   		 </script>");

	}
}
