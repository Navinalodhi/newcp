<?php
class avesadmin_m extends CI_Model
{
	
	function select($table,$username,$password)
	{
		$this->db->select('username,password'); 
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$val=$this->db->get($table);
		return $val->num_rows();
	}
	function selectn($table,$password)
	{
		
		$this->db->select('password'); 
		$this->db->where('password',$password);
		$val1=$this->db->get($table);
		return $val1->num_rows();
	}
	function selectu($data){
	$id=1;
	$this->db->where('admin_id',$id);
	$this->db->update('admin_db', $data);

	}
	function teacherinsert($table,$data)
	{
		$this->db->insert($table,$data);
	}
	function getcontent($table)
	{
		$this->db->select("*"); 
		$val=$this->db->get($table);
		return $val->result();
	}
	function showcontent($table,$teacherid)
	{
		$this->db->select("*");
		$this->db->where("teacher_id",$teacherid);
		 $result=$this->db->get($table);
	     return $result->result();
	}
	function teacherupdate($teacherid,$data)
	{
		$this->db->where('teacher_id', $teacherid);
		$this->db->update('teacher_db', $data);

	}
	function categoryinsert($table,$data)
	{
		$this->db->insert($table,$data);
	}
	function showcontentcategory($table,$categoryid)
	{
		
		$this->db->select("*");
		$this->db->where("category_id",$categoryid);
		 $result=$this->db->get($table);
	     return $result->result();
	}
	function categoryupdate($categoryid,$data)
	{
		$this->db->where('category_id', $categoryid);
		$this->db->update('category_db', $data);

	}
	function studentupdate($teacherid,$data)
	{
		$this->db->where('student_teacherid', $teacherid);
		$this->db->update('student_db', $data);

	}

}