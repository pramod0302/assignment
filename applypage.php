<!DOCTYPE html>
<html>
<head>
  <title>Apply page</title>
</head>
</body>
    <form name='myform' action='homepage.php'>
      <button class="HOME">HOME</button>
    </form>
    <form name='myform' action='successpage.php'>
      <center>
        <h1> REGISTRATION FORM</h1> </center>
        <hr>
        <label> Firstname </label> 
        <input type="text" name="firstname" placeholder= "Firstname" size="15"  /> 
        <label> DOB: </label> 
        <input type="text" name="DOB" placeholder="DOB" size="10"  /> 
        <label> Lastname: </label>  
        <input type="text" name="lastname" placeholder="Lastname" size="15" /> 
        <button class='button' type='submit'>SUBMIT</button>
      </center>

      <label> 
      Course :
      </label>

      Education :
      <textarea cols="50" rows="4" placeholder="Education" value="Education" >
      </textarea>
      <select>
        <option value="Course">Course</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="B.Tech">B.Tech</option>
        <option value="MBA">MBA</option>
        <option value="MCA">MCA</option>
        <option value="M.Tech">M.Tech</option>
      </select><br>
      <label> experince: </label>  
            <input type="text" name="experince" placeholder="experince" size="15" /> 
      <select>
        <option value="expected salary">expected salary</option>
         <option value="maximum">max</option>
        <option value="minimum">min</option>
        
      </select>
      <div>
      <label> 
      Gender :
      </label><br>
      <input type="radio" value="Male" name="gender" checked > Male 
      <input type="radio" value="Female" name="gender"> Female 
      <input type="radio" value="Other" name="gender"> Other<br>

      </div>
      </label> 
      Phone :
      <input type="text" name="country code" placeholder="Country Code"  value="+91" size="2"/> 
      <input type="text" name="phone" placeholder="phone no." size="10"/ > 
      Current Address :
      <textarea cols="80" rows="5" placeholder="Current Address" value="address" >
      </textarea>

        <!-- <button type="button" onclick="alert">submit!</button> -->
      <button class='button' type='submit'>SUBMIT</button>
    </form>
   
  </body>
</html>

