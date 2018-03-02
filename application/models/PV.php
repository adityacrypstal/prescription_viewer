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
    public function get_history($patient){
        $condition = "Patient =" . "'" . $patient .  "'";
        $this->db->select('*');
        $this->db->order_by("Id","desc");
        $this->db->where($condition);
        $query=$this->db->get('prescription');

        return $query->result_array();
    }
    public function get_appoints($data){
        $condition = "username =" . "'" . $data['username'] .  "'";
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows()>0){
            foreach($query->result() as $row)
            {
               $doctor= $row->fname;
            }
        }
        $condition1 = "Doctor =" . "'" . $doctor .  "'";
        $this->db->order_by("Id");
        $this->db->where($condition1);
        $query1=$this->db->get('appoints');
        return $query1->result_array();
    }
    public function get_profile($data){
       
        $condition = "username =" . "'" . $data['username'] .  "'";
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    
    }
    public function appointed($patient){
       
        $condition = "fname =" . "'" . $patient .  "'";
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    
    }
    public function get_profile_doctor($data){
       
        $condition = "username =" . "'" . $data['username'] .  "'";
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    
    }
    public function get_profile_pharma($data){
       
        $condition = "username =" . "'" . $data['username'] .  "'";
        $this->db->select('*');
        $this->db->from('pharma');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    
    }
    public function get_my_presc($data){
        $condition = "username =" . "'" . $data['username'] .  "'";
        $this->db->select('*');
        $this->db->from('patient');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows()>0){
            foreach($query->result() as $row)
            {
               $patient= $row->fname;
            }
        }
        $condition1 = "Patient =" . "'" . $patient .  "'";
        $this->db->order_by("Id");
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
        $condition = "username =" . "'" . $data['username'] .  "'";
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
        $condition1 = "Pharma =" . "'" . $patient .  "'";
        $this->db->order_by("Id");
        $this->db->where($condition1);
        $query1=$this->db->get('prescription');
        return $query1->result_array();
    }
    public function not_available($data){
        $datas['Pharma']=Null;
        $this->db->where('Id',$data['Id']);
        $this->db->update('prescription',$datas);
        redirect('Pharma/view/index');
    }
}
?>