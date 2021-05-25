<!DOCTYPE html>
<html>
<head>
  <title> Home Page </title>
<style>
body {
  background-color: lightblue;
}
h1 {
  color: white;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}
</style>
</head>
<body>

</body>
</html>



</body>
</html>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 20px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>
  <center>
      <h2> JOB PORTAL</h2> </center>

<div class="navbar">
  <button class="HOME">HOME</button>
  <button class="CONTACT">CONTACT</button>
  <button class="ABOUT US">ABOUT US</button>
  <button class="APPLY">APPLY</button>
</div>

</body>
</html> 


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: right;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-right: : none;
  height: 300px;
}
</style>
</head>
<body>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'IT company')" id="defaultOpen">IT company</button>
  <button class="tablinks" onclick="openCity(event, 'software Engineering')">software Engineering</button>
  <button class="tablinks" onclick="openCity(event, 'civil Engineering')">civil Engineering</button>
  <button class="tablinks" onclick="openCity(event, 'mechanical Engineering')">mechanical Engineering</button>
</div>

<!DOCTYPE html>
<html>
<head>
<style>

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 2px 2px;
  cursor: pointer;
}
</style>
</head>
<body>



</body>
</html>


<div id="IT company" class="tabcontent">
  <form name='myform' action='applypage.php'>
    <h3>IT company</h3>
    <p>Information technology is the broad subject concerned with all aspects of managing and processing information.</p>
    <button class='button' type='submit'>APPLY</button>
  </form>
</div>

<div id="software Engineering" class="tabcontent">
  <form name='myform' action='applypage2.php'>
  <h3>software Engineering</h3>
  <p>software Engineering is an engineering branch related to the evolution of software product using well-defined scientific principles, techniques, and procedures.</p> 
  <button class='button' type='submit'>APPLY</button>
</div>

<div id="civil Engineering" class="tabcontent">
  <form name='myform' action='applypage3.php'>
  <h3>civil Engineering</h3>
  <p>civil Engineering means it deals with the design, construction, and maintenance of the physical and naturally built environment, including public works such as roads, bridges, canals, dams, airports, sewerage systems, pipelines, structural components of buildings, and railways.</p>
  <button class='button' type='submit'>APPLY</button>
</div>

<div id="mechanical Engineering" class="tabcontent">
  <form name='myform' action='applypage4.php'>
  <h3>mechanical Engineering</h3>
  <p>mechanical Engineering means it deals with the design, construction, and maintenance of the physical and naturally built environment, including public works such as roads, bridges, canals, dams, airports, sewerage systems, pipelines, structural components of buildings, and railways.</p>
  <button class='button' type='submit'>APPLY</button>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 

