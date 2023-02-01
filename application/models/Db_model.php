<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Db_model extends CI_Model
{

       function get_data($id,$ket,$db)
    {
        $this->db->where('id', $id);
		
         $q= $this->db->get($db);
		 foreach($q->result() as $t){
			 $d= $t->$ket;
		 }
		 return $d;
    } 
       function get_user($id,$ket)
    {
        $this->db->where('id_users',$id);
		
         $q= $this->db->get('tbl_user');
		 foreach($q->result() as $t){
			 $d= $t->$ket;
		 }
		 return $d;
    }    
    function get_kab($id)
    {
        $this->db->where('id',$id);
		
         $q= $this->db->get('kota');
		 foreach($q->result() as $t){
			 $d= $t->name;
		 }
		 return $d;
    }  
	function get_babak($id)
    {
        $this->db->where('id',$id);
		
         $q= $this->db->get('babak');
		 foreach($q->result() as $t){
			 $d= $t->ket;
		 }
		 return $d;
    } 
	function get_nilai($api='',$kab='',$soal='')
    {
        $this->db->where('api',$api);
        $this->db->where('soal',$soal);
        $this->db->where('kab',$kab);
        $q= $this->db->get('nilai');
		if($q->num_rows()>0){
			
		 foreach($q->result() as $t){
			 $d= $t->nilai;
		 }
		 return $d;
		}
		else
		{
				 return $d='0';
	
		}


    } 
		function get_max_soal($api='')
    {
		    $this->db->select_max('soal');

        $this->db->where('api',$api);
        $q= $this->db->get('nilai');
			
		 foreach($q->result() as $t){
			 $d= $t->soal;
		 }
		 return $d;
		


    }
	function get_total($api='',$kab='')
    {
		        $this->db->select_sum('nilai');

        $this->db->where('api',$api);
        $this->db->where('kab',$kab);
        $q= $this->db->get('nilai');
	
			
		 foreach($q->result() as $t){
			 $d= $t->nilai;
		 }
		 return $d;
		

    } 
}

