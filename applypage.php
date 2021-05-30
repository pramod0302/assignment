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
    <div class="jumbotron">
      <center>
        <h1 class="display-4">APPLY PAGE</h1>
      </center>
      <p> </p>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="homepage.php">Home</a>
        <a class="navbar-brand" href="#">About</a>
        <a class="navbar-brand" href="applypage.php">Apply</a>
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

    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Enter your full address">
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputCity">Previous experience</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Qualification</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>BCA</option>
            <option>MCA</option>
            <option>EC</option>
            <option>CS</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputZip">Experience in years</label>
          <input type="text" class="form-control" id="number of years">
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
          <form name='myform' action='homepage.php'>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
        </center>
      </form>
  </div>
</body>
</html>