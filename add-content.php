<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <!--  <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Subjects</title>
     <!-- Bootstrap core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/dashboard.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/subjects.css" rel="stylesheet">

       <!-- Custom styles for this template -->
      <link href="css/users.css" rel="stylesheet">

      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <script src="js/bootstrap.min.js"></script>

      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!--  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>  

      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script> -->

      <script type="text/javascript">
        $(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
        });
    </script>


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
            <h1 class="h2">Subjects Details</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               <!-- <button class="btn btn-sm btn-outline-secondary" onclick="window.location.href='create-user.html'">Add Content</button> -->
              </div>
            </div>
          </div>

          <div class="class-details-form-container">

              <form method="post" action="home.html" id="subjectForm" name="subjectForm">
                <div class="subjectsTopicsContainer">

                  <div class="subjectsContainer">
                      <label for="subjectList" class="form-title">Subjects</label>
                      <select class="custom-select d-block" id="subjectList">
                        <option>Choose Subject...</option>
                        <option>Agriculture</option>
                        <option>Biology</option>
                        <option>Chemistry</option>
                      </select>
                  </div>

                   <div class="topicsContainer">
                     <label for="topicTitle" class="form-title">Topic</label>
                     <input type="text" name="topicTitle" id="topicTitle" class="form-control">
                  </div>

                </div>

                <div class="subjectsDetails">
                  <div class="columnSubjectOne"> 

                    
                     <label for="subjectClassList" class="form-title">Class </label>
                     <select class="custom-select d-block" id="subjectClassList">
                        <option>Choose Class...</option>
                        <option>Class 1A</option>
                        <option>Class 1B</option>
                        <option>Class 2A</option>
                        <option>Class 2B</option>
                      </select><br />
                    <label class="form-title">Date </label> 
                     <div class='col-sm-6'>
                      <div class="form-group">
                          <div class='input-group date' id='datetimepicker3'>
                              <input type='text' class="form-control" />
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-time"></span>
                              </span>
                          </div>
                      </div>
                  </div><br />

                    <label class="form-title">Time Duration</label>
                    <div class="timeContainer">
                      <div class="fromTime">
                        <div class='col-sm-6'>
                          <div class="form-group">
                              <div class='input-group date' id='datetimepickerfrom'>
                                  <input type='text' class="form-control" />
                                  <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-time"></span>
                                  </span>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="toTime">
                        <div class='col-sm-6'>
                          <div class="form-group">
                              <div class='input-group date' id='datetimepickerto'>
                                  <input type='text' class="form-control" />
                                  <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-time"></span>
                                  </span>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <span name="subjClassDuration" id="subjectClassDuration" class="userValue"></span><br /><br />
                    <label for="subjectContent" class="form-title">Content</label><span name="subjContent" id="subjectContent" class="userValue"></span>

                    
                  </div>
                  <div class="columnSubjectTwo"> 
                     <label class="form-title">Upload Image</label><br />
                        <div class="input-group">
                          <span class="input-group-btn">
                              <span class="btn btn-default btn-file">
                                  Browse… <input type="file" id="imgInp">
                              </span>
                          </span>
                          <input type="text" class="form-control" readonly>
                        </div> 
                      <img id='img-upload'/>
                  </div>
                </div>
              </form>
          </div
        </main>

      </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.es.min.js"></script>
   <!-- <script >
        $(function () {
            $('#datetimepicker3').datepicker({
                format: "dd/mm/yyyy",
                language: "es",
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>  -->

    <script type="text/javascript">
        $(function () {
            $('#datetimepickerfrom').datetimepicker({
                format: 'LT'
            });
        });
    </script>

      <script type="text/javascript">
      $(function () {
          $('#datetimepickerto').datetimepicker({
              format: 'LT'
          });
      });
    </script>
  </body>

</html>