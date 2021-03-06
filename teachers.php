<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <!--  <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Teachers</title>
      <!-- Bootstrap core CSS -->
       <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/dashboard.css" rel="stylesheet">

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
            <h1 class="h2">Teachers</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary" onclick="window.location.href='create-user.php'">Create New</button>
              </div>
            </div>
          </div>
          <div class="user-info-body">
            <div class="row">
              <div class="column" style="background-color:#fff;">

                <div class="user-personal-info-box">
                    <img class="mb-4 user-icon-image" src="images/user_male.svg" alt="" width="80" height="80">
                    <div class="user-info-content">
                      <h5 class="user-full-name">Francis Olakunle</h5>
                      <span class="user-email">francola@gmail.com</span><br />
                      <span class="user-mobile">08022883311</span>
                    </div>

                    <div class="user-assigned-subjects">
                        <h6>Assigned Subject(s)</h6>
                        <span>Biology, Agriculture</span>
                    </div>

                    <div class="user-action_icons">
                        <button class="btn btn-warning"><i class="fa fa-envelope"></i></button>
                        <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-ban"></i></button>
                    </div>
                </div>
              </div>
              <div class="column" style="background-color:#fff;">
                <div class="user-personal-info-box">
                    <img class="mb-4 user-icon-image" src="images/user_female.svg" alt="" width="80" height="80">
                    <div class="user-info-content">
                       <h5 class="user-full-name">Faith Archibong</h5>
                       <span class="user-email">faitharchi@yahoo.com</span><br />
                       <span class="user-mobile">08032983425</span>
                    </div>

                     <div class="user-assigned-subjects">
                        <h6>Assigned Subject(s)</h6>
                        <span>Mathematics</span>
                     </div>
                     <div class="user-action_icons">
                        <button class="btn btn-warning"><i class="fa fa-envelope"></i></button>
                        <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger"><i class="fa fa-ban"></i></button>
                     </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>
</html>
