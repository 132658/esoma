<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>e-Examination: Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  </head>
  <body>
    <!-- start of header -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 jumbotron text-center">
          <h1>The e-Soma Examination Center<br><small>Making Examination Process as easy as Possible</small></h1>
        </div>
      </div>
    </div>
    <!-- end of header -->
    <!-- form -->
    <div class="container">
      <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <div class="panel panel-success">
            <div class="panel-heading text-center">The e-soma Examination Log In</div>
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
                    <label for="pass">Exam Name:</label>
                    <input type="code" name="code" class="form-control" id="pass" required>
                  </div>
                  <div class="well text-center">                    
                    <label class="radio-inline"><input type="radio" value="Examiner" name="optradio">Examiner</label>
                    <label class="radio-inline"><input type="radio" checked value="Student" name="optradio">Student</label>
                  </div>
                  <div class="text-center">
                    <input type="submit" class="btn btn-success" value="Log In">
                  </div>
                </form>
              </div>
          </div>
        </div>
        <div class="col-md-2">

        </div>
      </div>
    </div>
    <!-- end of form -->
    <footer style="background-color:#333;">
      <div class="container">
        <p class="text-center" style="font-size:20px;color:white;padding-top:10px;">The e-soma examination system<br>All rights reserved 2018</p>
      </div>
    </footer>

  </body>
</html>
<!-- start of the php script -->
<?php
  if (empty($_POST)) {
    exit();
  }

    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $role=$_POST['optradio'];
    $code=$_POST['code'];

    $db=mysqli_connect("localhost","root","","filesearch");

    $res=mysqli_query($db,"SELECT * FROM `user` WHERE name='$name' AND password='$pass' AND role='$role'");

    if (mysqli_num_rows($res)==1) {
      if ($role=="Teacher") {
        session_start();
        $_SESSION["Name"]=$name;
        $_SESSION['code']=$code;
        header("location:setting.php");
      }
      elseif ($role=="Examiner") {
        session_start();
        $_SESSION["Name"]=$name;
        $_SESSION['code']=$code;
        header("location:setting.php");
      }
      else {
        session_start();
        $_SESSION["Name"]=$name;
        $_SESSION["pass"]=$pass;
        $_SESSION["code"]=$code;
        header("location:exam.php");
      }
    }

 ?>
 <!-- end of the php script -->
