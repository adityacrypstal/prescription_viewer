<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

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
		
        public function view($page ='prescribe'){
			if(!file_exists(APPPATH.'views/admin/doctor/'.$page.'.php')){
				show_404();
				}
			else{
				$patient=$this->uri->segment(4);
				$data['username']=$this->session->userdata('username');
				$data['patients']=$this->PV->get_patient_model();
				$data['doctors']=$this->PV->get_doctor_model();
				$data['pharmas']=$this->PV->get_pharma();
				$data['profiles']=$this->PV->get_profile_doctor($data);
				if($patient!==null){
					$data['app_det']=$this->PV->appointed($patient);
					$data['history']=$this->PV->get_history($patient);
					
				}else{$data['app_det']=$data['profiles'];}
				if(null !==($this->session->userdata('username'))){
					$data['appoints']=$this->PV->get_appoints($data);
					$this->load->view('admin/doctor/header');
					$this->load->view('admin/doctor/'.$page,$data);
				}else{
					
					$this->load->view('admin/index');
					
				}
				
			}
				

		}
		public function prescribe(){
			$this->db->insert('prescription',$_POST);
			$patient=$this->input->post('Patient');
			$this->db->where('Patient', $patient);
      		$this->db->delete('appoints'); 
			redirect('Doctor/view/prescribe');
		}
		public function edit_profile_doctor(){
			if(NULL!=$_POST['password']){
				$data['password']=$_POST['password'];
			}if(NULL!=$_POST['contact'])
			{
				$data['contact']=$_POST['contact'];
			}
			if(NULL!=$_POST['specialization'])
			{
				$data['specialization']=$_POST['specialization'];
			}
			if(NULL!=$_POST['s_from'])
			{
				$data['s_from']=$_POST['s_from'];
			}
			if(NULL!=$_POST['s_to'])
			{
				$data['s_to']=$_POST['s_to'];
			}
		
			$this->db->where('username', $this->session->userdata('username'));
			$this->db->update('doctor', $data);
			echo ("<script LANGUAGE='JavaScript'>
			window.alert('Updated profile sucessfully!');
					window.location.href='view/profile';
			</script>");
		
		}
	
}
