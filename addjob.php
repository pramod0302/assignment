<!DOCTYPE html>
<html>
<head>
  <title> Apply page</title>
  <link rel="stylesheet" type="text/css" href="applypage.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  </div>
  <div class="container">
    <div class="jumbotron">
      <center>
        <h1 class="display-4">ADD IT JOBS HERE</h1>
      </center>
    </div>

    <!-- <form> -->
      <form name='myform' action='jobApplySubmit.php'>
          <div class="form-group col-md-12">
            <label for="inputState">Catagory</label>
            <select id="inputState" class="form-control" name="qualification">
              <option selected>Choose...</option>
              <option>IT</option>
              <option>DESIGN</option>
              <option>COOKING</option>
              <option>DRIVING</option>
              <option>SERVICE</option>
              <option>ARCHITECT</option>
              <option>TEACHING</option>
            </select>
          </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Job position</label>
            <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Full Name">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputEmail4">Job description</label>
            <input type="text" class="form-control" id="inputEmail4" name="email" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Min experience</label>
          <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Enter your full address">
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity">Desired Education</label>
            <input type="text" class="form-control" name="exp" id="inputCity">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Salary</label>
            <select id="inputState" class="form-control" name="qualification">
              <option selected>Choose...</option>
              <option>20000-30000</option>
              <option>30000-40000</option>
              <option>40000-50000</option>
              <option>50000-60000</option>
              <option>60000-70000</option>
              <option>70000-80000</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputZip">Desired Experience in years</label>
            <input type="text" class="form-control" name="expyears"id="number of years">
          </div>
        </div>

          <center>
  <!--           <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Accept terms and condition
                </label>
              </div>
            </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
          </center>
        </form>
      <!-- </form> -->
  </div>
</body>
</html>