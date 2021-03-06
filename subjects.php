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
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
                <button class="btn btn-sm btn-outline-secondary" onclick="window.location.href='add-content.php'">Add Content</button>
              </div>
            </div>
          </div>

          <div class="class-details-form-container">

              <form method="post" action="home.html" id="psubjectForm" name="subjectForm">

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
                      <label for="topicsList" class="form-title">Topics</label>
                      <select class="custom-select d-block" id="topicsList">
                        <option>Choose Topic...</option>
                        <option>Anatomy</option>
                        <option>Cells</option>
                        <option>Reproductory System</option>
                      </select>
                  </div>

                </div>

                <div class="subjectsDetails">
                  <div class="columnSubjectOne"> 
                    <label for="assignedTeacher" class="form-title assigned-teacher-title">Assigned Teacher</label><br />
                    <span name="assigned-teacher" id="assignedTeacher" class="userValue"></span><br />

                    <label for="subjectClass" class="form-title">Class </label><span name="subjClass" id="subjectClass" class="userValue"></span><br />
                    <label for="subjectClassDate" class="form-title">Date </label><span name="subjClassDate" id="subjectClassDate" class="userValue"></span><br />
                    <label for="subjectClassDuration" class="form-title">Time Duration</label><span name="subjClassDuration" id="subjectClassDuration" class="userValue"></span><br /><br />
                    <label for="subjectContent" class="form-title">Content</label><span name="subjContent" id="subjectContent" class="userValue"></span>
                  </div>
                  <div class="columnSubjectTwo"> 
                     <label class="form-title">Image</label><br />
                     <!-- <div class="input-group">
                          <span class="input-group-btn">
                              <span class="btn btn-default btn-file">
                                  Browse… <input type="file" id="imgInp">
                              </span>
                          </span>
                          <input type="text" class="form-control" readonly>
                      </div> -->
                      <img id='img-display'/>
                  </div>

                </div>
              </form>
          </div

        </main>

      </div>

    </div>

  </body>

</html>