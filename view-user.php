<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
	  <!--  <link rel="icon" href="../../../../favicon.ico"> -->

	    <title>User</title>

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
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
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
                <a class="nav-link" href="teachers.php">
                  <span data-feather="users"></span>
                   Teachers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="subjects.php">
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
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Edit</button>
              </div>  
            </div>
          </div>
          <div class="formContainer">
          	<div id="formBody">

          		<form method="post" action="home.html" id="profileForm" name="createUserForm">

                <img class="mb-4 user-view-icon-image" src="images/user_male.svg" alt="" width="85" height="85">

                <div class="viewUserTitles">
                  <h6>Personal Information</h6>
                </div>

                <hr>

          			<div class="viewUserContainer">
      						<div class="columnOne">	
      							<label for="viewfirstName" class="form-title">First Name </label><span name="vfName" id="viewfirstName" class="userValue"></span><br />
      							<label for="viewlastName" class="form-title">Last Name </label><span name="vlName" id="viewlastName" class="userValue"></span><br />
      							<label for="viewEmailAdd" class="form-title">Email</label><span name="vemail" id="viewEmailAdd" class="userValue"></span><br />
      							<label for="viewMobile" class="form-title">Mobile </label><span name="vmobile" id="viewMobile" class="userValue"></span>
      						</div>
      						<div class="columnTwo">	
      							<label for="viewUsername" class="form-title">Username </label><span name="vusername" id="viewUsername" class="userValue"></span><br />
      							<label for="assignSubjects" class="form-title">Assign Subjects</label><br>
                    <span name="assign-subjects" id="assignSubjects" class="userValue"></span><br />	
      						</div>

      					</div>
          		</form>
          	</div>

            <div class="class-so-far-table">
            <h3>Classes Covered So Far</h3>
            <div class="table-responsives">
              <table class="table table-striped table-sms">
                <thead>
                  <tr>
                    <th>Term</th>
                    <th>Subject</th>
                    <th>Class</th>
                    <th>Date</th>
                    <th>Time</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1,001</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                  </tr>
                  <tr>
                    <td>1,002</td>
                    <td>amet</td>
                    <td>consectetur</td>
                    <td>adipiscing</td>
                    <td>elit</td>
                  </tr>
                  <tr>
                    <td>1,003</td>
                    <td>Integer</td>
                    <td>nec</td>
                    <td>odio</td>
                    <td>Praesent</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          </div>

         
        </main>
  </body>

</html>