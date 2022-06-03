<?php
class Avesacademy_m extends CI_Model
{
	function articleinsert($table,$data)	
	{
		 $this->db->trans_start();
		$this->db->insert($table,$data);
		$this->db->trans_complete();
    	return $this->db->insert_id();
	}
	function getarticlecontent($table)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		$this->db->select("$a.*,$b.student_name");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
		$this->db->order_by("article_insertdate", "desc");
	 	$result=$this->db->get($table);
     	return $result->result_array();
	
	
	}
	function getarticlecontentpage($table,$row,$row1)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		$this->db->select("$a.*,$b.*");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
		$this->db->order_by("article_insertdate", "asc");
		$this->db->limit($row,$row1);
	 	$result=$this->db->get($table);
     	return $result->result_array();
	
	
	}
	function getarticlecount($table)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		$this->db->select("$a.*,$b.student_name");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
		$this->db->order_by("article_insertdate", "desc");
	 	$result=$this->db->get($table);
	 	$rowcount = $result->num_rows();
     	return $rowcount;
	
	
	}
	function getsinglearticlecontent($table,$articleid)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		$this->db->select("$a.*,$b.*");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		$this->db->where('article_id',$articleid);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
	 	$result=$this->db->get($table);
     	return $result->result();
	
	
	}
	function getarticlecountstudent($table,$studentid)
	{
		$status=1;
		$this->db->where('article_status',$status);
		$this->db->where('article_studentid',$studentid);
	 	$result=$this->db->get($table);
	 	$rowcount = $result->num_rows();
     	return $rowcount;
	}
	function getallarticlestudent($table,$studentid)	
	{
		 $status=1;
		 $a=$table;
		$this->db->select("*");
		$this->db->where('article_status',$status);
		$this->db->where('article_studentid',$studentid);
		$this->db->order_by("article_insertdate", "desc");	
 	$result=$this->db->get($table);
     	return $result->result_array();
	
	
	}
	
	function getArtistWorks($id)	
	{

		$q = $this->db->query("SELECT * FROM article_db INNER JOIN student_db ON student_db.student_id = article_db.article_studentid INNER JOIN teacher_db ON student_db.student_teacherid = teacher_db.teacher_id WHERE article_db.article_visibility='public' AND article_db.article_status='1' AND teacher_db.teacher_id = ?",array($id));
		
     	return $q->result_array();
	
	
	}
	
	function getArtistWorkCount($id)	
	{

		$q = $this->db->query("SELECT * FROM article_db INNER JOIN student_db ON student_db.student_id = article_db.article_studentid INNER JOIN teacher_db ON student_db.student_teacherid = teacher_db.teacher_id WHERE teacher_db.teacher_id = ?",array($id));
		
     	return $q->num_rows();
	
	
	}
	
	
	function getstudentdetail($table,$studentid)
	{
		 $status=1;
		$this->db->select("*");
		$this->db->where('student_status',$status);
		$this->db->where('student_id',$studentid);
	 	$result=$this->db->get($table);
     	return $result->result();
	}
	function getarticleajaxtag($table,$search)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		/*$this->db->select("$a.*,$b.*");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
		$this->db->order_by("article_insertdate", "asc");
		$this->db->like('article_tag',"%".$search."%");*/

		$result = $this->db->query("SELECT * FROM $a INNER JOIN student_db ON student_db.student_id =
			article_db.article_studentid WHERE article_visibility = 'public' AND article_status = 
			$status AND article_tag LIKE '%$search%' ORDER BY article_insertdate");

		//echo "SELECT * FROM $a INNER JOIN student_db ON student_db.student_id =
		//	article_db.article_studentid WHERE article_visibility = 'public' AND article_status = 
		//	$status AND article_tag LIKE '%$search%' ORDER BY article_insertdate";

	 	//$result=$this->db->get($table);
     	return $result->result_array();
	
	
	}
	function getarticleajaxstudent($table,$search)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		/*$this->db->select("$a.*,$b.*");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
		$this->db->order_by("article_insertdate", "asc");
		$this->db->like('article_tag',"%".$search."%");*/

		$result = $this->db->query("SELECT * FROM $a INNER JOIN student_db ON student_db.student_id =
			article_db.article_studentid WHERE article_visibility = 'public' AND article_status = 
			$status AND student_db.student_name LIKE '%$search%' ORDER BY article_insertdate");

		//echo "SELECT * FROM $a INNER JOIN student_db ON student_db.student_id =
		//	article_db.article_studentid WHERE article_visibility = 'public' AND article_status = 
		//	$status AND article_tag LIKE '%$search%' ORDER BY article_insertdate";

	 	//$result=$this->db->get($table);
     	return $result->result_array();
	
	
	}
	function getarticleajaxarticle($table,$search)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		/*$this->db->select("$a.*,$b.*");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
		$this->db->order_by("article_insertdate", "asc");
		$this->db->like('article_tag',"%".$search."%");*/

		$result = $this->db->query("SELECT * FROM $a INNER JOIN student_db ON student_db.student_id =
			article_db.article_studentid WHERE article_visibility = 'public' AND article_status = 
			$status AND article_name LIKE '%$search%' ORDER BY article_insertdate");

		//echo "SELECT * FROM $a INNER JOIN student_db ON student_db.student_id =
		//	article_db.article_studentid WHERE article_visibility = 'public' AND article_status = 
		//	$status AND article_tag LIKE '%$search%' ORDER BY article_insertdate";

	 	//$result=$this->db->get($table);
     	return $result->result_array();
	
	
	}
	function getarticleajaxteacher($table,$search)	
	{
		 $status=1;
		 $a=$table;
		 $b="student_db";
		/*$this->db->select("$a.*,$b.*");
		$this->db->where('article_visibility',"public");
		$this->db->where('article_status',$status);
		 $this->db->join($b,"$a.article_studentid = $b.student_id");
		$this->db->order_by("article_insertdate", "asc");
		$this->db->like('article_tag',"%".$search."%");*/

		$result = $this->db->query("SELECT * FROM $a INNER JOIN student_db ON student_db.student_id =
			article_db.article_studentid WHERE article_visibility = 'public' AND article_status = 
			$status AND student_db.student_school LIKE '%$search%' ORDER BY article_insertdate");

		//echo "SELECT * FROM $a INNER JOIN student_db ON student_db.student_id =
		//	article_db.article_studentid WHERE article_visibility = 'public' AND article_status = 
		//	$status AND article_tag LIKE '%$search%' ORDER BY article_insertdate";

	 	//$result=$this->db->get($table);
     	return $result->result_array();
	
	
	}

}
?>
