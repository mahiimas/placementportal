<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

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


 /***
    *@function name:To view the login page
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/

	public function index()
	{
		
		$this->load->view('login');
	}

	 /***
    *@function name:view page to insert the student details  
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/


		public function us()
		{	if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			$this->load->view('user');
		}
		else{
		 redirect(base_url().'main/login');
		}
		}

			 /***
    *@function name:apply for interview
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/

		public function addcompl()
		{	if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
				$this->load->model('mainmodel');
				$data['n']=$this->mainmodel->interview_table();
				$this->load->view('addcomp',$data);
			}
			else{
				redirect(base_url().'main/login');
			}
		

		}
		
		 /*@function name:view of complaint form
		    *@author : Betty Thomas
		    *@date : 04/03/2021
		    ***/



		public function comp()
		{	if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			$data['n']=$this->uri->segment(3);
			$this->load->view('complaints',$data);
		}
		else
		{
			redirect(base_url().'main/login');
		}
		}



		 /*@function name:adding complaint to the corresponding interview details
		    *@author : Betty Thomas
		    *@date : 04/03/2021
		    ***/



		public function add_complaint()
		{	
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			 $this->load->library('form_validation');
		$this->form_validation->set_rules("complaint","complaint",'required');
		$this->form_validation->set_rules("id","id",'required');
				if($this->form_validation->run())
				{
					$this->load->model('mainmodel');
					$id=$this->input->post('id');
					$a=array("complaint"=>$this->input->post("complaint"));
			
					$update=$this->mainmodel->update_interview_table($a,$id);
				}


		redirect('main/addcompl','refresh');
	}
	else{
		redirect(base_url().'main/login');
	}
		}


		/*@function name:view of feeback form
		    *@author : Betty Thomas
		    *@date : 04/03/2021
		    ***/


		public function ifb()
		{	if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			$data['n']=$this->uri->segment(3);
			$this->load->view('interfb',$data);
		}
		else{
			redirect(base_url().'main/login');
		}
		}


		 /*@function name:adding feedback to the corresponding interview details
		    *@author : Betty Thomas
		    *@date : 04/03/2021
		    ***/



		public function add_feedback()
		{	if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			 $this->load->library('form_validation');
		$this->form_validation->set_rules("feedback","feedback",'required');
		$this->form_validation->set_rules("id","id",'required');
				if($this->form_validation->run())
				{
					$this->load->model('mainmodel');
					$id=$this->input->post('id');
					$a=array("feedback"=>$this->input->post("feedback"));
			
					$update=$this->mainmodel->update_interview_table($a,$id);
				}
		redirect('main/addcompl','refresh');
	}
	else{
		redirect(base_url().'main/login');
		}
	}

		 /***
	}
    *@function name:Edit Resume
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/



		public function resu()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			$this->load->view('resume');
		}
		else
		{
			redirect(base_url().'main/login');
		}
		}
		 /***
    *@function name:View page to add project details
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/
		  public function projectstudent()
		 {
		 	if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
	  	$this->load->view('projectstudent');
	  }
	  else
	  {
	  	redirect(base_url().'main/login');
	  }
		  }

		   /***
    *@function name:View page to add qualification details
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/

		public function qualificationstudent()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			$this->load->view('qualificationstudent');
		}
		else
		{
			redirect(base_url().'main/login');
		}
		}

		 /***
    *@function name:View page to add skill details
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/

		public function skillstudent()
		{if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			$this->load->view('skillstudent');
		}
		else
		{
			redirect(base_url().'main/login');
		}
		}
		
		 /***
    *@function name:View page to add paper details
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/

	    public function paperstudent()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			$this->load->view('paperstudent');
		}
		else
		{
			redirect(base_url().'main/login');
		}
		}



		 /***
    *@function name:Insert student details to the table
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/
	
	    

	     
		public function insert_user()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
		 $this->load->library('form_validation');
		$this->form_validation->set_rules("fname","first_name",'required');
		$this->form_validation->set_rules("lname","last_name",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("dob","DOB",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("blood","blood",'required');
		$this->form_validation->set_rules("religion","religion",'required');
		$this->form_validation->set_rules("category","category",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("course","course",'required');
		$this->form_validation->set_rules("syear","starting_year",'required');
		$this->form_validation->set_rules("smonth","stating_month",'required');
		$this->form_validation->set_rules("gitid","github_id",'required');
		$this->form_validation->set_rules("linkid","linkedin_id",'required');
		$this->form_validation->set_rules("mobile","mobile",'required');
		$this->form_validation->set_rules("state","state",'required');
		$this->form_validation->set_rules("city","city",'required');
		$this->form_validation->set_rules("pin","pin",'required');
		
		$id=$_SESSION['id'];
				if($this->form_validation->run())
				{	
					$config['upload_path']='./upload/';
					$config['allowed_types']='gif|jpg|png|pdf|doc';
					$this->load->library('upload',$config);
						if(!$this->upload->do_upload('resume'))
						{
						$error=array('error'=>$this->upload->display_errors());
						print_r($error); }

						else
						{
						$data=array('resume'=>$this->upload->data());
						$img=$data['resume']['file_name'];
						}

					// $a=array('resume'=>$img);
					$this->load->model('mainmodel');
					
	
		$a=array("fname"=>$this->input->post("fname"),
			"lname"=>$this->input->post("lname"),
			"emailid"=>$this->input->post("email"),
			"dob"=>$this->input->post("dob"),
			"gender"=>$this->input->post("gender"),
			"religion"=>$this->input->post("religion"),
			"category"=>$this->input->post("category"),
			"currentstatus"=>$this->input->post("status"),
			"address"=>$this->input->post("address"),
			"course"=>$this->input->post("course"),
			"starty"=>$this->input->post("syear"),
			"startm"=>$this->input->post("smonth"),
			"gitid"=>$this->input->post("gitid"),
			"linkid"=>$this->input->post("linkid"),
			"pincode"=>$this->input->post("pin"),
			"faceid"=>$this->input->post("face"),
			"city"=>$this->input->post("city"),
			"state"=>$this->input->post("state"),
			"mobile"=>$this->input->post("mobile"),
			"resume"=>$img,
			"loginid"=>$id,

			"bloodgroup"=>$this->input->post("blood"));
		
		$this->mainmodel->insert_student_table($a);
	}
	// exit();
		redirect('main/us','refresh');

	}
	else
	{
		redirect(base_url().'main/login');
	}
		} 
		

		 /***
    *@function name:Inserting paper details
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/

		public function paper_details()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
		 $this->load->library('form_validation');
		$this->form_validation->set_rules("topic","topic",'required');
		$this->form_validation->set_rules("brief","brief",'required');
		$this->form_validation->set_rules("date","date",'required');
		$this->form_validation->set_rules("guide","guide",'required');
		$id=$_SESSION['id'];
		

				if($this->form_validation->run())
				{
					$this->load->model('mainmodel');
	
					$a=array("topic"=>$this->input->post("topic"),
						"brief"=>$this->input->post("brief"),
						"date"=>$this->input->post("date"),
						"guide"=>$this->input->post("guide"),
						"loginid"=>$id);							
			
					$this->mainmodel->insert_paper_table($a);
				}
		redirect('main/us','refresh');
	}
	else
	{
		redirect(base_url().'main/login');
		} 
	}

		 /***
    *@function name:Inserting the qualification details
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/
		
		public function qualify_details()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
		 $this->load->library('form_validation');
		$this->form_validation->set_rules("qualification","qualification",'required');
		$this->form_validation->set_rules("marks","marks",'required');
		$this->form_validation->set_rules("place","place",'required');
		$this->form_validation->set_rules("backlogs","backlogs",'required');
		
		$id=$_SESSION['id'];
				if($this->form_validation->run())
				{
					$this->load->model('mainmodel');
	
					$a=array("qualification"=>$this->input->post("qualification"),
						"marks"=>$this->input->post("marks"),
						"institution"=>$this->input->post("institution"),
						"backlogs"=>$this->input->post("backlogs"),
						"place"=>$this->input->post("place"),
						"loginid"=>$id);
			
					$this->mainmodel->insert_qualify_table($a);
				}
		redirect('main/us','refresh');	
	}
	else{
		redirect(base_url().'main/login');
	}
		} 

		


			
		/***
    *@function name:Inserting the project details
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/

		public function project_details()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
		 $this->load->library('form_validation');
		$this->form_validation->set_rules("name","name",'required');
		$this->form_validation->set_rules("describe","describe",'required');
		$this->form_validation->set_rules("sdate","sdate",'required');
		$this->form_validation->set_rules("edate","edate",'required');
		$this->form_validation->set_rules("role","role",'required');
			$id=$_SESSION['id'];

				if($this->form_validation->run())
				{
					$this->load->model('mainmodel');
	
					$a=array("name"=>$this->input->post("name"),
						"describe"=>$this->input->post("describe"),
						"sdate"=>$this->input->post("sdate"),
						"edate"=>$this->input->post("edate"),
						"role"=>$this->input->post("role"),
						"loginid"=>$id);
			
					$this->mainmodel->insert_project_table($a);
				}
		redirect('main/us','refresh');	
	}
	else{
		redirect(base_url().'main/login');
	}
		} 

		/***
    *@function name:Inserting the skill details
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/
		

		public function skill_details()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
		 $this->load->library('form_validation');
		$this->form_validation->set_rules("skill","skill",'required');
		$this->form_validation->set_rules("strength","strength",'required');
		$id=$_SESSION['id'];
		
		

				if($this->form_validation->run())
				{
					$this->load->model('mainmodel');
	
					$a=array("skill"=>$this->input->post("skill"),
						"strength"=>$this->input->post("strength"),
						"loginid"=>$id);
						
			
					$this->mainmodel->insert_skills_table($a);
				}
		redirect('main/us','refresh');	
	}
	else{
		redirect(base_url().'main/login');
	}
		} 

		/***
    *@function name:updating student profile-view page
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/

		public function updateuserprofile()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {

		$this->load->model('mainmodel');
		$id=$_SESSION['id'];
		$data['n']=$this->mainmodel->view_user_details($id);
		$this->load->view('updateprofile',$data);
		//$this->load->view('updateprofile');
	}
	else
	{
		redirect(base_url().'main/login');
	}
		}


		/***
    *@function name:Function to Updating the student details
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/
		public function update_user()
		{	
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","first_name",'required');
		$this->form_validation->set_rules("lname","last_name",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("dob","DOB",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("blood","blood",'required');
		$this->form_validation->set_rules("religion","religion",'required');
		$this->form_validation->set_rules("category","category",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("course","course",'required');
		$this->form_validation->set_rules("syear","starting_year",'required');
		$this->form_validation->set_rules("smonth","stating_month",'required');
		$this->form_validation->set_rules("gitid","github_id",'required');
		$this->form_validation->set_rules("linkid","linkedin_id",'required');
		$this->form_validation->set_rules("mobile","mobile",'required');
		$this->form_validation->set_rules("state","state",'required');
		$this->form_validation->set_rules("city","city",'required');
		$this->form_validation->set_rules("pin","pin",'required');

		

				if($this->form_validation->run())
				{	
					$config['upload_path']='./upload/';
					$config['allowed_types']='gif|jpg|png|pdf|doc';
					$this->load->library('upload',$config);
						if(!$this->upload->do_upload('resume'))
						{
						$error=array('error'=>$this->upload->display_errors());
						print_r($error); }

						else
						{
						$data=array('resume'=>$this->upload->data());
						$img=$data['resume']['file_name'];
						}

					// $a=array('resume'=>$img);
					$this->load->model('mainmodel');
					
	
		$a=array("fname"=>$this->input->post("fname"),
			"lname"=>$this->input->post("lname"),
			"emailid"=>$this->input->post("email"),
			"dob"=>$this->input->post("dob"),
			"gender"=>$this->input->post("gender"),
			"religion"=>$this->input->post("religion"),
			"category"=>$this->input->post("category"),
			"currentstatus"=>$this->input->post("status"),
			"address"=>$this->input->post("address"),
			"course"=>$this->input->post("course"),
			"starty"=>$this->input->post("syear"),
			"startm"=>$this->input->post("smonth"),
			"gitid"=>$this->input->post("gitid"),
			"linkid"=>$this->input->post("linkid"),
			"pincode"=>$this->input->post("pin"),
			"faceid"=>$this->input->post("face"),
			"city"=>$this->input->post("city"),
			"state"=>$this->input->post("state"),
			"mobile"=>$this->input->post("mobile"),
			"resume"=>$img,
			"bloodgroup"=>$this->input->post("blood"));
		$id=$_SESSION['id'];
		$this->mainmodel->update_student_table($a,$id);
	}
	// exit();
		redirect('main/us','refresh');
	}
	else{
		redirect(base_url().'main/login');
	}
		}


		/***
    *@function name:Viewpage  to view the student profile
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/

		public function viewuserprofile()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {

		$this->load->model('mainmodel');
		$id=$_SESSION['id'];
		$data['n']=$this->mainmodel->view_user_details($id);
		$this->load->view('viewprofile',$data);
		}
		else{
			redirect(base_url().'main/login');
		}
		}

		/***
    *@function name:Inserting the qualification details
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/


		public function userprojectview()
		{	if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->projecttable();
			$this->load->view('viewproject',$data);	
		}
		else{
			redirect(base_url().'main/login');
		}
		}


		/***
    *@function name:Updating the project details
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/

		public function updateprojectdetails()
		{	if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			$this->load->model('mainmodel');
			$id=$this->uri->segment(3);
			$data['n']=$this->mainmodel->projectupdate($id);
			$this->load->view('updateprojectform',$data);
		}
		else{
			redirect(base_url().'main/login');
		}

		}


		 /***
    *@function name:To view the student dashboard
    *@author : Betty Thomas
    *@date : 04/03/2021
    ***/

		public function studentdashboard()
		{if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
			$this->load->view('sdashboard');
		}
		else{
			redirect(base_url().'main/login');
		}
		}


		 /***
    *@function name:login
    *@author : Mahima s
    *@date : 04/03/2021
    ***/
    public function login()
    {
        $this->load->view('login');
    }

     /***
    *@function name:login function
    *@author : Mahima s
    *@date : 04/03/2021
    ***/
   
    public function logns()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {
            $this->load->model('mainmodel');
            $email=$this->input->post("email");
            $pass=$this->input->post("password");
            $rslt=$this->mainmodel->selectpass($email,$pass);
                if ($rslt)
                 {
                    $id=$this->mainmodel->getuserid($email);

                    $user=$this->mainmodel->getuser($id);
                    $this->load->library(array('session'));
                    $this->session->set_userdata(array
                        ('id'=>(int)$user->id,
                        'usertype'=>$user->usertype,'logged_in'=>(bool)true));
                    if($_SESSION['usertype']=='2' && $_SESSION['logged_in']==true)
                    {
                        redirect(base_url().'main/cdashboard');
                    }
                    elseif($_SESSION['usertype']=='0'&& $_SESSION['logged_in']==true )
                    {
                        redirect(base_url().'main/dashboard');
                    }
                    elseif($_SESSION['usertype']=='1'&& $_SESSION['logged_in']==true )
                    {
                        redirect(base_url().'main/studentdashboard');
                    }
                   
                 }
                 else
                 {
                    echo "invalid user";
                 }
             }
             else
             {
                redirect('main/login','refresh');
             }
                 
}





	// public function index()
	// {
	// 	 $this->load->view('index');
	// }


    /***
    *@function name:dashboard
    *@author : nihala n
    *@date : 04/03/2021
    ***/
	public function dashboard()
		{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
			$this->load->view('dashboard');
		}
		else
		{
			redirect(base_url().'main/login');
		}
		}
		 /***
    *@function name:view user
    *@author : Mahima s
    *@date : 04/03/2021
    ***/
        
	public function view_user()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
	 		$this->load->view('viewstudents');
	 	}
	 	else
	 	{
	 		redirect(base_url().'main/login');
	 	}
		}
	public function notification()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
	 		$this->load->view('notification');
	 	}
	 	else{
	 		redirect(base_url().'main/login');
	 	}
		}
	public function view_complaints()
		{
			if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
	 			$this->load->model('mainmodel');
   	$data['n']=$this->mainmodel->adminviewcomplaint();
   	$this->load->view('view_complaints',$data);
   //}
	 	}
	 	else{
	 		redirect(base_url().'main/login');
	 	}
		}
		 /***
    *@function name:logout
    *@author : Mahima s
    *@date : 06/03/2021
    ***/

	public function logout()
		{
	 		 

    $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    redirect(base_url().'main/index');



		}


		 /***
    *@function name:Add user
    *@author : Mahima s
    *@date : 04/03/2021
    ***/
    public function user()
    {
        $this->load->view('add_user');
    }
    public function adduser()
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {

        $this->load->library('form_validation');
        $this->form_validation->set_rules("firstname","firstname",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
        $b=array("firstname"=>$this->input->post("firstname"),"email"=>$this->input->post("email"),"password"=>$this->input->post("password"),
                "usertype"=>'1');
        $this->mainmodel->inreg($b);    
        redirect(base_url().'main/dashboard');
        }
    }
        else
        {
            redirect(base_url().'main/login');
        }
}
/***
    *@function name: company page
    *@author : Nihala N
    *@date : 04/03/2021
    ***/
public function company()
    {
        $this->load->view('add_company');
    }
    /***
    *@function name:Add company
    *@author : Mahima s
    *@date : 04/03/2021
    ***/
    public function addcompany()
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("firstname","firstname",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
        $a=array("firstname"=>$this->input->post("firstname"),"email"=>$this->input->post("email"),"password"=>$this->input->post("password"),
                "usertype"=>'2');
        $this->mainmodel->inregs($a);    
        redirect(base_url().'main/dashboard');
        }
    }
    else
    {
        redirect(base_url().'main/login');
    }
}
/***
    *@function name: Add interview details
    *@author : Mahima s
    *@date : 04/03/2021
    ***/
public function add_interview()
    {
        $this->load->view('addidetails');
    }
    public function addinterview()
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("cname","company",'required');
        $this->form_validation->set_rules("date","date",'required');
        $this->form_validation->set_rules("qlfctn","qualification",'required');
        $this->form_validation->set_rules("batch","batch",'required');
        $this->form_validation->set_rules("experience","experience",'required');
        $this->form_validation->set_rules("salary","salary",'required');
        $this->form_validation->set_rules("location","location",'required');
        $this->form_validation->set_rules("lastdate","lastdate",'required');
        $this->form_validation->set_rules("venue","venue",'required');
        
        if($this->form_validation->run())
        {
        
        $this->load->model('mainmodel');
        $b=array("company"=>$this->input->post("cname"),
            "date"=>$this->input->post("date"),
            "qualification"=>$this->input->post("qlfctn"),
            "batch"=>$this->input->post("batch"),
            "experience"=>$this->input->post("experience"),
            "salary"=>$this->input->post("salary"),
            "jlocation"=>$this->input->post("location"),
            "ldate"=>$this->input->post("lastdate"),
            "vlocation"=>$this->input->post("venue"), );
        $this->mainmodel->ireg($b);    
        redirect(base_url().'main/dashboard');
        }
    }
    
    else
    {
        redirect(base_url().'main/login');
    }
}
    
/***
    *@function name:view student details
    *@author : Mahima s
    *@date : 05/03/2021
    ***/

    public function student_view()
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->viewstudent();
        $this->load->view('view_stud',$data);
    }
    else
    {
        redirect(base_url().'main/login');
    }
    }
    /***
    *@function name:view qualification details
    *@author : Mahima s
    *@date : 05/03/2021
    ***/
    public function qualification()
    {       
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->viewqualification();
        $this->load->view('qualification',$data);
    }
    else
    {
        redirect(base_url().'main/login');
    }
    }
    /***
    *@function name:view project details
    *@author : Mahima s
    *@date : 05/03/2021
    ***/
    public function project()
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->viewproject();
        $this->load->view('project',$data);
    }
    else
    {
        redirect(base_url().'main/login');
    }
    }
    /***
    *@function name:view paper details
    *@author : Mahima s
    *@date : 05/03/2021
    ***/
    public function paper()
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->viewpaper();
        $this->load->view('paper',$data);
    }
    else
    {
        redirect(base_url().'main/login');
    }
}
    /***
    *@function name:view interview details
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
    public function viewinterview()
    {       
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->updateinterviews();
        $this->load->view('view_interview',$data);
    }
    else
    {
       redirect('main/login','refresh'); 
    }
}
    /***
    *@function name:view  interview details for update
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function updateinterview()
    {    
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
          $this->load->model('mainmodel');
          $id=$this->uri->segment(3);
          
          $data['n']=$this->mainmodel->updateinterviewss($id);
          $this->load->view('updateinterview',$data);
      }
      else
      {
        redirect('main/login','refresh');
      }
    }
    /***
    *@function name:update interview details
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
    public function updateinterviews()
    {    
         if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        
         $a=array("company"=>$this->input->post("cname"),
                    "date"=>$this->input->post("date"),
                    "qualification"=>$this->input->post("qlfctn"),
                    "batch"=>$this->input->post("batch"),
                    "experience"=>$this->input->post("experience"),
                    "salary"=>$this->input->post("salary"),
                    "jlocation"=>$this->input->post("location"),
                    "vlocation"=>$this->input->post("venue"),
                    "ldate"=>$this->input->post("lastdate"));
                  $this->load->model('mainmodel');
                  $id=$this->input->post('id'); 
                
                            $this->load->model('mainmodel');

                                $this->mainmodel->updateinterviewtable($a,$id);
                                redirect('main/dashboard','refresh');
                            }
                    
    }
    /***
    *@function name:delete interview details
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function deleteinterview()
{
    if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
$id=$this->uri->segment(3);
echo $id;
$this->load->model('mainmodel');
$this->mainmodel->deleteinterviews($id);
redirect('main/viewinterview','refresh');
}
else
{
    redirect('main/index','refresh');
}
}

/***
    *@function name:view users
    *@author : Mahima s
    *@date : 06/03/2021
    ***/


 public function viewuser()
    {    
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
          $this->load->model('mainmodel');
          $id=$this->uri->segment(3);
          $data['n']=$this->mainmodel->viewuserss();
          $this->load->view('viewuser',$data);
      }
      else
      {
        redirect('main/login','refresh');
      }
    }
    /***
    *@function name:view user details for update
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
    public function updatez()
    {
          $this->load->model('mainmodel');
          $id=$this->uri->segment(3);
          $data['n']=$this->mainmodel->viewusersz();
          $this->load->view('updateuser',$data);
    } 
    /***
    *@function name:update users
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
    public function updateusers()
    {    
         if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
    
         $a=array("firstname"=>$this->input->post("firstname"),
                    "email"=>$this->input->post("email"),
                    "password"=>$this->input->post("password"));
                  $this->load->model('mainmodel');
                  $id=$this->input->post('id'); 
                
                            $this->load->model('mainmodel');

                                $this->mainmodel->updateusertable($a,$id);
                                redirect('main/viewuser','refresh');
                            }
                    else
                    {
                        redirect('main/login','refresh');
                    }
    }
      
/***
    *@function name:Delete users
    *@author : Mahima s
    *@date : 06/03/2021
    ***/

public function deleteuser()
{
    if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
$id=$this->uri->segment(3);
echo $id;
$this->load->model('mainmodel');
$this->mainmodel->deleteuser($id);
redirect('main/viewuser','refresh');
}
else
{
    redirect('main/login','refresh');
}
}
/***
    *@function name:Company dashboard
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
public function cdashboard()
        {
            if($_SESSION['logged_in']==true && $_SESSION['usertype']=='2')
        {
            $this->load->view('cdashboard');
        }
        else
        {
            redirect('main/login','refresh');
        }
    }
    public function sdashboard()
        {
            if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
            $this->load->view('sdashboard');
        }
        else
        {
            redirect('main/login','refresh');
        }
    }


/***
    *@function name:To view the students
    *@author : Mahima s
    *@date : 06/03/2021
    ***/
   public function cview_student()
   {
   	if($_SESSION['logged_in']==true && $_SESSION['usertype']=='2')
        {
   	$this->load->model('mainmodel');
   	$data['n']=$this->mainmodel->companyview();
   	$this->load->view('cview_student',$data);
   }
   else
   {
   	redirect(base_url().'main/login');
   }


   }

/***
    *@function name:admin to view the student's feedback
    *@author : Mahima s
    *@date : 06/03/2021
    ***/

   public function vfeedback()
   {
   	if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
   	$this->load->model('mainmodel');
   	$data['n']=$this->mainmodel->adminviewfeedback();
   	$this->load->view('vfeedback',$data);
   }
   else
   {
   	redirect(base_url().'main/login');
   }


   }

  

}





	     


	