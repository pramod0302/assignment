<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
}
</style>
<div id="IT company" class="tabcontent">
  <form name='myform' action='homepage.php'>
</head>
<body>

<button class="HOME">HOME</button>

</body>
<form name='myform' action='IT company.php'>
    <div class="jumbotron">
</html>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: lightblue;
}
.container {
    padding: 50px;
  background-color: pink;
}

input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: orange;
  outline: none;
}
 div {
      padding: 10px 0;
      }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #dcdcdc;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
</style>
<form name='myform' action='homepage.php'>
</head>
<body>
  <center>
      <h1> PROFILE</h1> </center>
      <hr>
      <h2>References</h2>
      <label> Fullname </label> 
      <input type="text" name="fullname" placeholder= "Fullname" size="15" required /> 
      <select>
        <option value="relationtype">relationtype</option>
        <option value="work reference">work reference</option>
        <option value="education reference">education reference</option>
        <option value="personal reference">personal refernce</option>
      </select> <br><br>
      <label> current company </label> 
      <input type="text" name="current company" placeholder= "current company" size="15" required /> 
      <label> DOB: </label> 
      <input type="text" name="DOB" placeholder="DOB" size="10" required /> 
      <input type="text" name="phone" placeholder="phone no." size="10"/ required> 
      <label> description </label> 
      <input type="text" name="description" placeholder= "description" size="15" required /> 
    <div>
      <h3>Education</h3>
<label> 
Course :
</label>

<select>
  <option value="Course">Course</option>
  <option value="diploma">diploma</option>
  <option value="secondary school">secondary school</option>
  <option value="higher secondary school">higher secondary school</option>
  <option value="bachelors">bachelors</option>
  <option value="masters">masters</option>
  <option value="others">others</option>
</select><br><br>
<label> what did u learn? </label>  
      <input type="text" name="what did u learn?" placeholder="what did u learn?" size="15"required /> 
<label> experince: </label>  
      <input type="text" name="experince" placeholder="experince" size="15"required /> 
      <label> where did u work before? </label>  
      <input type="text" name="where did u work before?" placeholder="where did u work before?" size="15"required /> 
</div>
<div>
<label> 
Gender :
</label><br>
<input type="radio" value="Male" name="gender" checked > Male 
<input type="radio" value="Female" name="gender"> Female 
</div>
</label> 
Current Address :
<textarea cols="80" rows="5" placeholder="Current Address" value="address" required>
</textarea>
<h4>Resume</h4>
<form action="/action_page.php">
  <input type="file" id="myFile" name="filename">
  </form><br><br>

<button type="button" onclick="alert">submit!</button>
 
</body>
</html>
