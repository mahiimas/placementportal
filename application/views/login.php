<!DOCTYPE html>
<html>
    <head>
        <title>placement portal</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" href="../css/styl.css">
    </head>
    <!-- <style>
      body
  {
    background-image:url("../img/.jpg");
    background-size: cover;

  }
</style> -->
    <body >
      <!-- Header start -->
  <header>
      <nav class="menubar navbar-light">
        <div class="top container-fluid">
            <div class="row">
           
                <div class="col-7 text-warning">

                    <h4 class="h2">PLACEMENT PORTAL</h4>
                </div>
                <div class="col-5 h4 text-end text-info">
                    <i class="fab fa-facebook  "></i>
                    <i class="fab fa-instagram "></i>
                    <i class="fab fa-youtube "></i>
                     <i class="fab fa-google "></i>
                </div>
            </div>
        </div>
      </nav>
<!-- main section start -->
<section >
<div class="container">
<div class="row">

<div class="col-6 py-5 mt-5 text-right">

<img src="../img/os.png" alt="sample" class="img-fluid mx-auto d-block rounded">
</div>
<div class="col-6 box mt-5 p-5  ">

<form  action="<?php echo base_url()?>main/logns" method="post" class="border  border-2 border-light p-5 rounded-bottom rounded bg-dark">

  <div class="row mb-3">
    <!-- <h2 class="text-warning">LOGIN</h2> -->
    <div class="col-sm-10">

      <input type="email" class="form-control" placeholder="email" name="email" >
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-10">
      <input type="password" class="form-control" placeholder="password" name="password">
    </div>
  </div>
  <input type="submit" class="btn btn-warning" value="LOGIN">
  <a href="<?php echo base_url()?>main/forgot">Forgot password </a>
  <!-- <a href="<?php echo base_url()?>main/forgot"class="text-white ">Forgot Password</a>

  <a href="<?php echo base_url()?>main/reg_form"class="nav-link text-white">Sign-Up</a> -->
 
  </form>
 
</div>

</div>
</div>
</section>
<!-- main section end -->
<section class="">


</section>


<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>

	
	<!-- <form method="post" action="<?php echo base_url()?>main/logns">
		<fieldset>
			<div><h2 style="color: red">login</h2></div>
			<br>
		<table border="1">
		

				 email:
					<input type="email" name="email"></br></br>
					password:
					<input type="password" name="password"></br><br>
					<input type="submit" value="submit" name="submit"><br>
					<a href="<?php echo base_url()?>main/forgot">Forgot password </a>
				</fieldset>
				
				
				
					
</table>
</form> -->
<!---Jquery--->
