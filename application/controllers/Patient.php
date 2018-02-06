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
	
}
