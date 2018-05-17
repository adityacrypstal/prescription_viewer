<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

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
        if(!file_exists(APPPATH.'views/admin/patient/'.$page.'.php')){
            show_404();
            }
        else{
            if(null !==($this->session->userdata('username'))){
				$data['username']=$this->session->userdata('username');
				$data['presc']=$this->PV->get_my_presc($data);
				$data['username']=$this->session->userdata('username');
				$data['patients']=$this->PV->get_patient_model();
				$data['doctors']=$this->PV->get_doctor_model();
				$data['pharmas']=$this->PV->get_pharma();
				$data['profiles']=$this->PV->get_profile($data);
				$data['notifications']=$this->PV->get_notification();
                $this->load->view('admin/patient/header',$data);
                $this->load->view('admin/patient/'.$page,$data);
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
		$this->db->where('Id', $this->session->userdata('username'));
		$this->db->update('patient', $data); 
		redirect('Patient/view/profile');
	}
	public function Select(){
		$patient=$this->uri->segment(3);
		redirect('/Patient/view/select_pharma/'.$patient);
	}
	public function Order(){
		$data['medicin']=$this->uri->segment(3);
		$data['pharma']=$this->uri->segment(4);
		$this->PV->set_pharma($data);

	}
	public function liveNotification(){
		$result=$this->PV->get_notification();
		echo json_encode($result);
	}
	public function remove_notification()
	{
		$id=$this->uri->segment(3);
		$this->db->query("DELETE  FROM notification WHERE  Id = $id ");
		redirect('Patient/view/index');
	}	
}
