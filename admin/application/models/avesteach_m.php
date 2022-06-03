<?php
class avesteach_m extends CI_Model
{
	
	function select($table,$username,$password)
	{
		$status=1;
		$this->db->select('teacher_username,teacher_password'); 
		$this->db->where('teacher_username',$username);
		$this->db->where('teacher_password',$password);
		$this->db->where('teacher_status',$status);
		$val=$this->db->get($table);
		return $val->num_rows();
	}
	function selectid($table,$username,$password)
	{
		$this->db->select('teacher_id,teacher_class,teacher_school'); 
		$this->db->where('teacher_username',$username);
		$this->db->where('teacher_password',$password);
		$val=$this->db->get($table);
		return $val->result();
	}
	function selectn($table,$password)
	{
		
		$this->db->select('teacher_password'); 
		$this->db->where('teacher_password',$password);
		$val1=$this->db->get($table);
		return $val1->num_rows();
	}
	function selectu($data,$id){
	
	$this->db->where('teacher_id',$id);
	$this->db->update('teacher_db', $data);

	}
	function studentinsert($table,$data)
	{
		$this->db->insert($table,$data);
	}
	function getcontent($table)
	{
		$this->db->select("*"); 
		$val=$this->db->get($table);
		return $val->result();
	}
	function getstudentcontent($table,$id)
	{
		$this->db->select("*"); 
		$this->db->where('student_teacherid',$id);
		$val=$this->db->get($table);
		return $val->result();
	}
	function getarticlecontent($table,$id)
	{
		$this->db->select("*");
		 $this->db->where('article_studentclass',$id);
		$val=$this->db->get($table);
		return $val->result();
	}
	function showcontent($table,$studentid)
	{
		$this->db->select("*");
		$this->db->where("student_id",$studentid);
		 $result=$this->db->get($table);
	     return $result->result();
	}
	function studentupdate($studentid,$data)
	{
		$this->db->where('student_id', $studentid);
		$this->db->update('student_db', $data);

	}
	function studentdelete($id)
	{
	$this->db->where('student_id', $id);
	$this->db->delete('student_db');
	} 
	function deletestudent($id)
	{
	$this->db->select("student_image");
	$this->db->where('student_id', $id);
	 $result=$this->db->get('student_db');
	  return $result->result();
	}

}