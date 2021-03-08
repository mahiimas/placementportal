<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>user/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>user/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>user/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>user/assets/demo/demo.css" rel="stylesheet" />
</head>


<style>
  .dev
  {
    margin-left: 400px;
  }
</style>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url()?>../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Apply NOW
        3</a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="<?php echo base_url()?>main/index">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/us">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>                                                    
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="<?php echo base_url()?>main/addcompl">
              <i class="material-icons">content_paste</i>
              <p>Apply interview</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="<?php echo base_url()?>main/resu">
              <i class="material-icons">content_paste</i>
              <p>Edit resume</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/projectstudent">
              <i class="material-icons">library_books</i>
              <p>project</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/qualificationstudent">
              <i class="material-icons">library_books</i>
              <p>Qualification</p>
            </a>
          </li>
          <li class="nav-item ">
             <a class="nav-link" href="<?php echo base_url()?>main/skillstudent">
              <i class="material-icons">library_books</i>
              <p>Skills</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/paperstudent">
              <i class="material-icons">library_books</i>
              <p>Paper presentation</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/logout">
              <i class="material-icons">library_books</i>
              <p>Logout</p>
            </a>
          </li>
          </ul>
      </div>
    </div>
    <div class="dev">
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add Your Topic </h4>
                  <p class="card-category"></p>
                </div>
                <form method="post" action="<?php echo base_url()?>main/paper_details">
                    <div class="row">
                <div class="card-body">
                 
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Topic</label>
                          <input type="text" class="form-control" name="topic" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" class="form-control" name="brief" required="">
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Guide</label>
                          <input type="text" class="form-control" name="guide" required="">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date</label>
                          <input type="text" class="form-control" name="date" required="">
                        </div>
                      </div>

                    </div>
                    

                     <button type="submit" class="btn btn-primary pull-right">Add </button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        