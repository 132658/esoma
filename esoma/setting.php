<?php
// Starting session
   session_start();
   $examcode=$_SESSION["code"];
   if (isset($_SESSION["Name"])) {
   }
   else {
     header("location:index.php");
   }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>e-Examination: Exams Setting</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  </head>
  <body>
    <!-- start of header -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 jumbotron text-center">
          <h1>The e-Soma Examimation System Setting Center<br><small>Making Examination Process as easy as Possible</small></h1>
        </div>
      </div>
    </div>
    <!-- end of header -->
    <!-- Name of the Examiner -->
    <div class="panel panel-succes">
      <div class="panel-body">
        <?php

          // Accessing session data
          echo '<h2 class="text-success text-center"> '.$examcode.' This Is  ' . $_SESSION["Name"];
        ?>
      </div>
    </div>
    <!--end of student  -->
    <!-- start of the body -->
    <div class="container">
      <div class="row">
        <div class="col-md-3">
            <div class="panel panel-info">
              <div class="panel-heading text-center">Instructions</div>
              <div class="panel-body">
                  <ol>
                    <li>Please fill in all the spaces.</li>
                    <li>When filling the option boxes.. start with the Capital letter the choice with a period. e.g for choice A write:<span class="bg-danger">A. Samson</span></li>
                    <li>Press the Submit Button after filling all the Spaces</li>
                  </ol>
              </div>
            </div>
            <a href="marks.php"><button class="btn btn-success">Access Student's Examination Results</button></a><br><br>
            <a href="index.php"><button class="btn btn-success">Log Out</button></a><br><br>
            <div class="card">
              <div class="panel panel-primary">
                <div class="panel-body">
                  <center>Delete A Question</center><br>
                  <form method="GET" role="form" action="del.php">
                    <div class="form-group">
                      <input type="number" name="delnum" class="form-control" id="delnum" required placeholder="Question Number">
                    </div>
                    <div class="text-center">
                      <input type="submit" value="Delete" class="btn btn-success">
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-8">
          <!-- start of the setting panel -->
          <div class="panel panel-success">
            <div class="panel-heading text-center" style="width:100%;">The E-Soma Examination setting</div>
            <div class="panel-body">
              <form role="form" method="GET">
                <div class="form-group">
                  <label for="num">Question Number:</label>
                  <input type="number" name="num" class="form-control" id="num" required>
                </div>
                <div class="form-group">
                  <label for="ans">Correct Answer:</label>
                  <input type="text" name="ans" class="form-control" id="ans" required>
                </div>
                <div class="form-group">
                  <label for="quiz">The Question:</label><br>
                  <textarea name="quiz" rows="8" cols="100" id="quiz"></textarea required>
                </div>
                <div class="form-group">
                  <label for="optA">Option A:</label>
                  <input type="text" name="optA" class="form-control" id="optA" required>
                </div>
                <div class="form-group">
                  <label for="optB">Option B:</label>
                  <input type="text" name="optB" class="form-control" id="optB" required>
                </div>
                <div class="form-group">
                  <label for="optC">Option C:</label>
                  <input type="text" name="optC" class="form-control" id="optC" required>
                </div>
                <div class="form-group">
                  <label for="optD">Option D:</label>
                  <input type="text" name="optD" class="form-control" id="optD" required>
                </div>
                <div class="text-center">
                  <input type="submit" value="Submit the Question" class="btn btn-success">
                </div>
                <!-- php -->
                <?php
                  if (empty($_GET)) {
                    exit();
                  }
                  $num=$_GET['num'];
                  $ans=$_GET['ans'];
                  $quiz=$_GET['quiz'];
                  $optA=$_GET['optA'];
                  $optB=$_GET['optB'];
                  $optC=$_GET['optC'];
                  $optD=$_GET['optD'];

                  $db=mysqli_connect("localhost","root","","filesearch");

                  if ($examcode=="English") {
                    //start of the english
                    $res=mysqli_query($db,"SELECT * FROM `english` WHERE id='$num'");

                    if (mysqli_num_rows($res)==0) {
                        mysqli_query($db,"INSERT INTO `english`(`id`, `answer`, `quiz`, `A`, `B`, `C`, `D`) VALUES ('$num','$ans','$quiz','$optA','$optB','$optC','$optD')");
                      }
                        else {
                             echo "<h3 class='text-success text-center'>The Question Number Already Exist Use another Number</h3>";
                      }
                    //end of the English
                  }
                      
                  elseif ($examcode=="Mathematics") {
                    //start
                    $res=mysqli_query($db,"SELECT * FROM `math` WHERE id='$num'");

                    if (mysqli_num_rows($res)==0) {
                         mysqli_query($db,"INSERT INTO `math`(`id`, `answer`, `quiz`, `A`, `B`, `C`, `D`) VALUES ('$num','$ans','$quiz','$optA','$optB','$optC','$optD')");
                    }
                         else {
                             echo "<h3 class='text-success text-center'>The Question Number Already Exist Use another Number</h3>";
                    }
                    //end
                  }
                  
                  elseif ($examcode=="Kiswahili") {
                    //start
                    $res=mysqli_query($db,"SELECT * FROM `kiswahili` WHERE id='$num'");

                    if (mysqli_num_rows($res)==0) {
                        mysqli_query($db,"INSERT INTO `kiswahili`(`id`, `answer`, `quiz`, `A`, `B`, `C`, `D`) VALUES ('$num','$ans','$quiz','$optA','$optB','$optC','$optD')");
                    }
                        else {
                          echo "<h3 class='text-success text-center'>The Question Number Already Exist Use another Number</h3>";
                    }
                    //end
                  }
                  elseif ($examcode=="Science") {
                    //start
                    $res=mysqli_query($db,"SELECT * FROM `marklist` WHERE id='$num'");

                    if (mysqli_num_rows($res)==0) {
                      mysqli_query($db,"INSERT INTO `marklist`(`id`, `answer`, `quiz`, `A`, `B`, `C`, `D`) VALUES ('$num','$ans','$quiz','$optA','$optB','$optC','$optD')");
                    }
                      else {
                        echo "<h3 class='text-success text-center'>The Question Number Already Exist Use another Number</h3>";
                    }
                    //end
                  }
                  else{
                      $res=mysqli_query($db,"SELECT * FROM `socialstudies` WHERE id='$num'");

                      if (mysqli_num_rows($res)==0) {
                        mysqli_query($db,"INSERT INTO `socialstudies`(`id`, `answer`, `quiz`, `A`, `B`, `C`, `D`) VALUES ('$num','$ans','$quiz','$optA','$optB','$optC','$optD')");
                      }
                      else {
                          echo "<h3 class='text-success text-center'>The Question Number Already Exist Use another Number</h3>";
                      }
                  }


                 ?>
                <!-- end of php -->
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-1">

        </div>
      </div>
    </div>
    <!-- end of the body -->
    <footer style="background-color:#333;">
      <div class="container">
        <p class="text-center" style="font-size:20px;color:white;padding-top:10px;">The e-soma examination system<br>All rights reserved 2018</p>
      </div>
    </footer>
  </body>
</html>
