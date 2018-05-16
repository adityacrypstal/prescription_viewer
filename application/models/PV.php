<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PV extends CI_Model {
    public function get_patient_model(){
        $this->db->order_by("Id","desc");
        $query=$this->db->get('patient');
        return $query->result_array();
    }
    public function get_doctor_model(){
        $this->db->order_by("Id","desc");
        $query=$this->db->get('doctor');
        return $query->result_array();
    }
    public function get_pharma(){
        $this->db->order_by("Id","desc");
        $query=$this->db->get('pharma');
        return $query->result_array();
    }
    public function getPerson($search){
        $this->load->database();
         $query = $this->db->query("SELECT * FROM patient where  Id like '%$search%' ");
        return $query->result();
    }
    public function getPerson_doctor($search){
        $this->load->database();
         $query = $this->db->query("SELECT * FROM doctor where  fname like '%$search%' ");
        return $query->result();
    }
    public function getPharmaLive($search){
        $this->load->database();
         $query = $this->db->query("SELECT * FROM pharma where ( district  like '%$search%' OR area like '%$search%' OR name like '%$search%' OR pin like '%$search%' OR state like '%$search%')");
        return $query->result();
    }
    public function get_history($patient){
        $condition = "Patient =" . "'" . $patient .  "'";
        $this->db->select('*');
        $this->db->order_by("Id","desc");
        $this->db->where($condition);
        $query=$this->db->get('prescription');

        return $query->result_array();
    }
    public function get_appoints($data){
        $condition = "Id =" . "'" . $data['username'] .  "'";
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows()>0){
            foreach($query->result() as $row)
            {
               $doctor= $row->Id;
            }
        }
       
        $date=date("Y/m/d");
         
        $this->db->select('*,appoints.patient AS pid');
        $this->db->from('appoints');
        $this->db->join('patient','appoints.patient=patient.id');
        // $this->db->join('doctor','prescription.doctor=doctor.id');
        $this->db->order_by("appoints.id,Time");
        $this->db->where("Doctor =" . "'" . $doctor .  "'AND date ="."'".$date."'");
        $query1= $this->db->get();
        return $query1->result_array();
    }
    public function get_appoint_admin(){
        $this->db->select('*,doctor.fname AS drname,patient.fname AS ptname,patient.id AS pid,doctor.id AS did,appoints.Id AS Id');
        $this->db->from('appoints');
        $this->db->join('patient','patient.id=appoints.patient');
        $this->db->join('doctor','doctor.id=appoints.doctor');
        $query = $this->db->get();
        return $query->result_array();
     }
    public function get_profile($data){
       
        $condition = "Id =" . "'" . $data['username'] .  "'";
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    
    }
    public function appointed($patient){
       
        $condition = "Id =" . "'" . $patient .  "'";
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    
    }
    public function get_profile_doctor($data){
       
        $condition = "Id =" . "'" . $data['username'] .  "'";
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    
    }
    public function get_profile_pharma($data){
       
        $condition = "Id =" . "'" . $data['username'] .  "'";
        $this->db->select('*');
        $this->db->from('pharma');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    
    }
    public function get_my_presc($data){
        $condition = "Id =" . "'" . $data['username'] .  "'";
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows()>0){
            foreach($query->result() as $row)
            {
               $patient= $row->Id;
            }
        }
        $condition1 = "Patient =" . "'" . $patient .  "'";
        $this->db->select('*,doctor.fname AS dname');
        // $this->db->order_by("Id");
        $this->db->join('doctor','prescription.doctor=doctor.id');
        $this->db->where($condition1);
        $query1=$this->db->get('prescription');
        return $query1->result_array();
    }
    public function set_pharma($data){
        $data1['Pharma']=$data['pharma'];
        $this->db->where('Id',$data['medicin']);
        $this->db->update('prescription',$data1);
        redirect('Patient/view/index');
    }
    public function get_med_list($data){
        $condition = "Id =" . "'" . $data['username'] .  "'";
        $this->db->select('*');
        $this->db->from('Pharma');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows()>0){
            foreach($query->result() as $row)
            {
               $patient= $row->Id;
            }
        }
        
       
      
        $this->db->select('* ,doctor.fname AS Dname,patient.fname AS Fname');
        $this->db->from('prescription');
        $this->db->join('patient','prescription.patient=patient.id');
        $this->db->join('doctor','prescription.doctor=doctor.id');
        $this->db->order_by("prescription.id");
        $this->db->where($condition1 = "Pharma =" . "'" . $patient .  "'");
        $query1= $this->db->get();
        return $query1->result_array();
    }
    public function not_available($data){
        $datas['Pharma']=Null;
        $this->db->where('Id',$data['Id']);
        $this->db->update('prescription',$datas);
        redirect('Pharma/view/index');
    }
    public function get_notification(){
        $username=$this->session->userdata('username');
        $this->load->database();
         $query = $this->db->query("SELECT * FROM notification where  patient_id = $username");
        return $query->result_array();
        
    }
}
?>