<?php
class mainmodel extends CI_model
{


/*@function name:To insert the details of the student
*@author : Betty Thomas
*@date : 04/03/2021
***/

public function insert_student_table($a)
{
	$this->db->insert("student",$a);


}


/*@function name:To insert the paper details of the student
*@author : Betty Thomas
*@date : 04/03/2021
***/

public function insert_paper_table($a)
{
		$this->db->insert("paper",$a);
}

/*@function name:To insert the qualification details of the student
*@author : Betty Thomas
*@date : 04/03/2021
***/




public function insert_qualify_table($a)
{
		$this->db->insert("qualification",$a);
}

/*@function name:To insert the project details of the student
*@author : Betty Thomas
*@date : 04/03/2021
***/


public function insert_project_table($a)
{
		$this->db->insert("project",$a);
}

/*@function name:To insert the skills details of the student
*@author : Betty Thomas
*@date : 04/03/2021
***/


public function insert_skills_table($a)
{
		$this->db->insert("skills",$a);
}

/*@function name:To view the user details of the student
*@author : Betty Thomas
*@date : 04/03/2021
***/


public function view_user_details($id)
{
	$this->db->select('*');
		$this->db->where("id",$id);
		$qry=$this->db->get("student");
		return $qry;
}


/*@function name:To update the student details 
*@author : Betty Thomas
*@date : 04/03/2021
***/


public function update_student_table($a,$id)
{
	$this->db->select('*');
$qry=$this->db->where("id",$id);
$qry=$this->db->update("student",$a);
return $qry;

}

/*@function name:To get  the project details of the student
*@author : Betty Thomas
*@date : 04/03/2021
***/


public function projecttable()
{

		$qry=$this->db->get("project");
		return $qry;
}

/*@function name:To get the project details of the student
*@author : Betty Thomas
*@date : 04/03/2021
***/


public function projectupdate($id)
{
$this->db->select('*');
		$this->db->where("id",$id);
		$qry=$this->db->get("project");
		return $qry;

}



/*@function name:To view the details of the interview
*@author : Betty Thomas
*@date : 04/03/2021
***/

public function interview_table()
{

		$qry=$this->db->get("interview");
		return $qry;
}


/*@function name:Updation of interview table: adding feedback and complaints
*@author : Betty Thomas
*@date : 04/03/2021
***/


public function update_interview_table($a,$id)
{
	$this->db->select('*');
$qry=$this->db->where("id",$id);
$qry=$this->db->update("interview",$a);
return $qry;
}

	/***
*@function name:insertion  of student
*@author : Mahima s
*@date : 04/03/2021
***/

public function inreg($b)
{
 
   $this->db->insert("login",$b);
}
/***
*@function name:insertion of company
*@author : Mahima s
*@date : 04/03/2021
***/
public function inregs($a)
{
 
   $this->db->insert("login",$a);
}
/***
*@function name:interview details
*@author : Mahima s
*@date : 04/03/2021
***/
public function ireg($b)
{
 
   $this->db->insert("interview",$b);
}
/***
*@function name:selecting password
*@author : Mahima s
*@date : 04/03/2021
***/
public function selectpass($email,$pass)
{
$this->db->select('password');
$this->db->from("login");
$this->db->where("email",$email);
$qry=$this->db->get()->row('password');
return $qry;
}

/***
*@function name:fetching id
*@author : Mahima s
*@date : 04/03/2021
***/
public function getuserid($email)
{
$this->db->select('id');
$this->db->from("login");
$this->db->where("email",$email);
return $this->db->get()->row('id');
}
/***
*@function name:fetching id
*@author : Mahima s
*@date : 04/03/2021
***/
public function getuser($id)
{
$this->db->select('*');
$this->db->from("login");
$this->db->where("id",$id);
return $this->db->get()->row();
}
/***
*@function name:view student details
*@author : Mahima s
*@date : 05/03/2021
***/
public function viewstudent()
{
	$this->db->select('*');
	$qry=$this->db->get("student");
	return $qry;
}
/***
    *@function name:view qualification details
    *@author : Mahima s
    *@date : 05/03/2021
    ***/
public function viewqualification()
{
	$this->db->select('*');
	$this->db->join('skills','skills.loginid=qualification.loginid','inner');
	$qry=$this->db->get("qualification");
	return $qry;
}
/***
    *@function name:view project details
    *@author : Mahima s
    *@date : 05/03/2021
    ***/
public function viewproject()
{
	$this->db->select('*');
	$qry=$this->db->get("project");
	return $qry;
}
/***
    *@function name:view paper details
    *@author : Mahima s
    *@date : 05/03/2021
    ***/
public function viewpaper()
{
	$this->db->select('*');
	$qry=$this->db->get("paper");
	return $qry;
}
/***
    *@function name:selecting details
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function singledata($id)
{
$this->db->select('*');
$this->db->where("id",$id);
$qry=$this->db->get("interview");
return $qry;
}
public function singleselect()
{
$qry=$this->db->get("interview");
return $qry;
}
/***
    *@function name:view interview details for update
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function updateinterviewss($id)
{
	$this->db->select('*');

	$this->db->where("id",$id);
	$qry=$this->db->get("interview");
	return $qry;
}
public function updateinterviews()
{
	
	$qry=$this->db->get("interview");
	return $qry;
}
/***
    *@function name:update interview details
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function updateinterviewtable($a,$id)
{
	$this->db->select('*');
	$this->db->where("id",$id);
	$qry=$this->db->update("interview",$a);
	return $qry;
}
/***
    *@function name:Delete interview details
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function deleteinterviews($id)
{
$this->db->where('id',$id);
$this->db->delete("interview");
}
/***
    *@function name:selecting  user details
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function singledatas($id)
{
$this->db->select('*');
$this->db->where("id",$id);
$qry=$this->db->get("login");
return $qry;
}
public function singleselects()
{
$qry=$this->db->get("login");
return $qry;
}/***
    *@function name:view user details for update
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function viewuserss()
{
	$this->db->select('*');
	//$this->db->where("id",$id);
	$qry=$this->db->get("login");
	return $qry;
}
public function viewuser()
{
	
	$qry=$this->db->get("login");
	return $qry;
}
/***
    *@function name:update user details
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function updateusertable($a,$id)
{
	$this->db->select('*');
	$this->db->where("id",$id);
	$qry=$this->db->update("login",$a);
	return $qry;
}
/***
    *@function name:delete user details
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function deleteuser($id)
{
$this->db->where('id',$id);
$this->db->delete("login");
}


/***
    *@function name:updating details
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function viewusersz()
{
	$this->db->select('*');
	$this->db->where("id",$id);
	$qry=$this->db->get("login");
	return $qry;
}

/***
    *@function name:To view the candidates for the company according to their skills
    *@author : Mahima s
    *@date : 06/03/2021
    ***/

public function companyview()
{

	$this->db->select('*');
	$this->db->join('skills','skills.loginid=student.loginid','inner');
	$qry=$this->db->get("student");
	return $qry;

}
/***
    *@function name:To view the candidates for the admin who sends the feedback
    *@author : Mahima s
    *@date : 06/03/2021
    ***/

public function adminviewfeedback()
{

	$this->db->select('*');
	$this->db->join('interview','interview.loginid=student.loginid','inner');
	$qry=$this->db->get("student");
	return $qry;

}

public function adminviewcomplaint()
{

	$this->db->select('*');
	$this->db->join('interview','interview.loginid=student.loginid','inner');
	$qry=$this->db->get("student");
	return $qry;

}


}
	?>


