<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  <link rel="stylesheet" type="text/css" href= "homepage.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script type="text/javascript" src="homepage.js"></script>
</head>
<body>

<div class="container">
    <div class="jumbotron">
      <center>
        <h1 class="display-4">JOB PORTAL PAGE</h1>
      </center>
      <p> </p>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Home</a>
        <a class="navbar-brand" href="aboutus.php">About</a>
        <a class="navbar-brand" href="Contact.php">Contact</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!--           <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>

      </nav>
    </div>

    <div>
    </div>
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'IT')" id="defaultOpen">IT Jobs</button>
      <button class="tablinks" onclick="openCity(event, 'design')">Design</button>
      <button class="tablinks" onclick="openCity(event, 'cooking')">Cooking</button>
      <button class="tablinks" onclick="openCity(event, 'driving')">Driving</button>
      <button class="tablinks" onclick="openCity(event, 'service')">Service</button>
      <button class="tablinks" onclick="openCity(event, 'architect')">Architect</button>
      <button class="tablinks" onclick="openCity(event, 'Teaching')">Teaching</button>
    </div>

    <div id="IT" class="tabcontent">
      <h3>IT COMPANY JOBS</h3>
      <p>Check the following IT company jobs <a href="ITcompany.php">here</a></p>
    </div>

    <div id="design" class="tabcontent">
      <h3>Desing jobs</h3>
      <p>Check the following design company jobs <a href="design.php">here</a></p>
    </div>

    <div id="cooking" class="tabcontent">
      <h3>Cooking jobs</h3>
      <p>Check the following cooking jobs <a href="cooking.php">here</a></p>
    </div>

    <div id="driving" class="tabcontent">
      <h3>Driving jobs</h3>
      <p>Check the following driving jobs <a href="driving.php">here</a></p>
    </div>

    <div id="service" class="tabcontent">
      <h3>Service jobs</h3>
      <p>Check the following service company jobs <a href="service.php">here</a></p>
    </div>

    <div id="architect" class="tabcontent">
      <h3>Architect jobs</h3>
      <p>Check the following IT architect jobs <a href="architect.php">here</a></p>
    </div>

    <div id="Teaching" class="tabcontent">
      <h3>Teaching jobs</h3>
      <p>Check the following Teaching jobs <a href="teaching.php">here</a></p>
    </div>

  </div>
  <script>
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
</body>
</html>

