<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pharma extends CI_Controller {

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
    public function view($page ='index'){
        if(!file_exists(APPPATH.'views/admin/pharma/'.$page.'.php')){
            show_404();
            }
        else{
            if(null !==($this->session->userdata('username'))){
				
				$data['username']=$this->session->userdata('username');
				$data['list_medic']=$this->PV->get_med_list($data);
				$data['patients']=$this->PV->get_patient_model();
				$data['doctors']=$this->PV->get_doctor_model();
				$data['pharmas']=$this->PV->get_pharma();
				$data['profiles']=$this->PV->get_profile_pharma($data);
                $this->load->view('admin/pharma/header');
                $this->load->view('admin/pharma/'.$page,$data);
            }else{
                
                $this->load->view('admin/index');
                
            }
            
        }
            

	}
	public function edit_profile(){
		if(NULL!=$_POST['password']){
			$data['password']=$_POST['password'];
		} if(NULL!=$_POST['contact'])
		{
			$data['contact']=$_POST['contact'];
		}
		$this->db->where('username', $this->session->userdata('username'));
		$this->db->update('pharma', $data); 
		redirect('Pharma/view/profile');
	}
	public function Remove_med(){
		$data['Id']=$_POST['med_id'];
		$this->db->select('*');
		$this->db->where('Id',$data['Id']);
		$this->db->delete('prescription');
		redirect('Pharma/view/index');
	}
	public function not_available(){
	if($_POST['current']=='not_available'){
		$this->PV->not_available($_POST['id_no']);
		$data['status']=Null;
		if($_POST['message']!=NULL){
			$data['message']=$_POST['message'];	
		}else{$data['message']=$_POST['current'];}
		$data['patient_id']=$_POST['patient_id'];
		$this->db->insert('notification',$data);
	}else{
		$data['status']=Null;
		if($_POST['message']!=NULL){
			$data['message']=$_POST['message'];	
		}else{$data['message']=$_POST['current'];}
		$data['patient_id']=$_POST['patient_id'];
		$this->db->insert('notification',$data);
		redirect('Pharma/view/index');
	}
	}
	
}
