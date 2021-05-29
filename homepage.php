<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href= "homepage.css"><title>Home Page</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script type="text/javascript" src="homepage.js"></script>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <!-- Top horizontal navbar -->
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <!-- <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div> -->
  <!--       <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div> -->
      </div>

      <center>
        <h1 class="display-4">JOB PORTAL PAGE</h1>
      </center>
  <!--     <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </p> -->
    </div>

  <!-- Vertical navbar -->
  <!--   <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false">IT jobs</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Designer</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Cooking</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Driving</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Service</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Architect</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Teaching</a>
    </div> -->
  <!--   <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
   -->
    <div class="tab">
      <!-- openCity(onclick, 'IT'); -->
      <!-- window.openCity(onclick, 'IT'); -->
      <script type="text/javascript" language="JavaScript">
        // var evt = document.createEvent("MouseEvents");
        // var evt = new MouseEvent("click", {
        //     view: window,
        //     bubbles: true,
        //     cancelable: true,
        //     clientX: 20,
        //     /* whatever properties you want to give it */
        // });
      // var event = target.ownerDocument.createEvent('MouseEvents'),
      // options = options || {},
      // opts = { // These are the default values, set up for un-modified left clicks
      //   type: 'click',
      //   canBubble: true,
      //   cancelable: true,
      //   view: target.ownerDocument.defaultView,
      //   detail: 1,
      //   screenX: 0, //The coordinates within the entire page
      //   screenY: 0,
      //   clientX: 0, //The coordinates within the viewport
      //   clientY: 0,
      //   ctrlKey: false,
      //   altKey: false,
      //   shiftKey: false,
      //   metaKey: false, //I *think* 'meta' is 'Cmd/Apple' on Mac, and 'Windows key' on Win. Not sure, though!
      //   button: 0, //0 = left, 1 = middle, 2 = right
      //   relatedTarget: null,
      // };
        initCity('IT');
      </script>

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

