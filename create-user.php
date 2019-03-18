<?php

	include_once('')

?>


<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
	  <!--  <link rel="icon" href="../../../../favicon.ico"> -->

	    <title>New User</title>

	    <!-- Bootstrap core CSS -->
	     <link href="css/bootstrap.min.css" rel="stylesheet">

	     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		 <script src="js/bootstrap.min.js"></script>

	     
	    <!-- Custom styles for this template -->
    	<link href="css/dashboard.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="css/users.css" rel="stylesheet">

	    <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>

   <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">IHS Towers Teachers STEM</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="home.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
             <li class="nav-item">
                <a class="nav-link active" href="teachers.php">
                  <span data-feather="users"></span>
                   Teachers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="subjects.php">
                  <span data-feather="shopping-cart"></span>
                  Subjects
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Images
                </a>
              </li>
            </ul>
          </div>
        </nav>

         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">User Details</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <!--<div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Create New</button>
              </div>  -->
            </div>
          </div>
          <div class="formContainer">
          	<div id="formBody">

          		<form method="post" action="home.html" id="profileForm" name="createUserForm">

          			<div class="billingContactContainer bgprar">
							
						<div class="columnOne">	
							<label for="firstName">First Name </label><input type="text" name="fName" id="firstName" class="form-control"> 
							<label for="lastName">Last Name </label><input type="text" name="lName" id="lastName" class="form-control"> 
							<label for="emailAdd">Email Address</label><input type="text" name="email" id="emailAdd" class="form-control">
							<label for="mobileNo">Mobile </label><input type="text" name="mobile" id="mobileNo" class="form-control"> <br />
							<span>Assign Subjects</span> &nbsp;<button type="button" class="btn-add" data-toggle="modal" data-target="#assignModal"><i class="fa fa-plus"></i></button><br>
							<span name="assign-subjects" id="assignSubjects"></span><br />

							<!-- Modal -->
							<div class="modal fade" id="assignModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Subjects</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
								      <form method="post" action="" id="assignForm" name="assignForm">
								      		 <input type="radio" name="assignRadio" id="rdAgric" value="Agriculture" class="custom-control-input">
								      		 <label for="rdAgric" class="custom-control-label">Agriculture </label><br />
									         <input type="radio" name="assignRadio" id="rdBiology" value="Biology" class="custom-control-input">
									         <label for="rdBiology" class="custom-control-label">Biology </label><br />
									         <input type="radio" name="assignRadio" id="rdChemistry" value="Chemistry" class="custom-control-input">
									         <label for="rdChemistry" class="custom-control-label">Chemistry </label>
								      </form>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="button" class="btn btn-primary">Save</button>
							      </div>
							    </div>
							  </div>
							</div>
							<input class="btn btn-primary" type="submit" name="submitCreateUser" value="Save"/>
							<input type="hidden" name="submitUser" value=""/>
						</div>
						<div class="columnTwo">	
							<label>Username </label><input type="text" name="username" id="username" class="form-control"> 
							<label>Password </label><input type="text" name="password" id="password" class="form-control">
							<label>Confirm Password </label><input type="text" name="cmPassword" id="cmPassword" class="form-control"> 	
						</div>

					</div>
          		</form>
          	</div>
          </div>
        </main>
  </body>

</html>