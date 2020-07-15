<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>e-Examination: Registration</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  </head>
  <body>
    <!-- start of header -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 jumbotron text-center">
          <h1>The e-Soma Examination Registration<br><small>Making Examination Process as easy as Possible</small></h1>
        </div>
      </div>
    </div>
    <!-- end of header -->
    <!-- start of the body -->
      <div class="container">
        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8">
            <div class="panel panel-success">
              <div class="panel-heading">Registration</div>
              <div class="panel-body">
                <form role="form" method="POST">
                  <div class="form-group">
                    <label for="name">User Name:</label>
                    <input type="Text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group">
                    <label for="pass">Password:</label>
                    <input type="password" name="pass" class="form-control" id="pass" required>
                  </div>
                  <div class="form-group">
                    <label for="pass1">Confirm Password:</label>
                    <input type="password" name="pass1" class="form-control" id="pass1" required>
                  </div>
                  <label for=""class="text-center">Select Your Role</label>
                  <div class="well text-center">                   
                    <label class="radio-inline"><input type="radio" value="Examiner" name="optradio">Examiner</label>
                    <label class="radio-inline"><input type="radio" checked value="Student" name="optradio">Student</label>
                  </div>
                  <div class="text-center">
                    <input type="submit" class="btn btn-success" value="Register">
                  </div>
                  <!-- start of the php script -->
                  <?php
                  if (empty($_POST)) {
                    exit();
                  }
                  $name=$_POST['name'];
                  $pass=$_POST['pass'];
                  $pass1=$_POST['pass1'];
                  $role=$_POST['optradio'];

                  $db=mysqli_connect("localhost","root","","filesearch");

                  if ($pass===$pass1) {
                      mysqli_query($db,"INSERT INTO `user`(`name`, `password`, `role`) VALUES ('$name','$pass','$role')");
                      header("location:index.php");
                  }
                  else {
                    echo "<h3 class='text-success text-center'>The Passwords do Not Match</h3>";
                  }

                   ?>
                  <!-- end of the php script -->
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-2">

          </div>
        </div>
      </div>
    <!-- end of the body -->
  </body>
</html>
