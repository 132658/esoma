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
    <title>e-Examination</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  </head>
  <body>
    <!-- start of header -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 jumbotron text-center">
          <h1>The e-Soma Examination System<br><small>Making Examination Process as easy as Possible</small></h1>
        </div>
      </div>
    </div>
    <!-- end of header -->
    <!-- Name of the student -->
    <div class="panel panel-succes">
      <div class="panel-body">
        <?php
          // Accessing session data
          echo '<h2 class="text-success text-center"> This Is ' . $_SESSION["Name"] . ' Admission ' . $_SESSION["pass"];
        ?>
      </div>
    </div>
    <!--end of student  -->
    <!-- start of the body section -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-9">
          <div class="panel panel-success">
            <div class="panel-heading">Answer all The questions Below</div>
            <div class="panel-body">
            <?php
              $db=mysqli_connect("localhost","root","","filesearch");
              if ($examcode=="English") {
                $res=mysqli_query($db,"SELECT * FROM `english`");
              }
              elseif ($examcode=="Kiswahili") {
                $res=mysqli_query($db,"SELECT * FROM `kiswahili`");
              }
              elseif ($examcode=="Mathematics") {
                $res=mysqli_query($db,"SELECT * FROM `math`");
              }
              elseif ($examcode=="Science") {
                $res=mysqli_query($db,"SELECT * FROM `marklist`");
              }
              else{
                $res=mysqli_query($db,"SELECT * FROM `socialstudies`");
              }
              //$col=mysqli_fetch_array($res);
              echo "<table width=100%>";
              while ($col=mysqli_fetch_array($res)) {
                echo "<table width=100% class='table table-bordered'>";
                echo "<tr>";
                echo "<th>Question:$col[0]</th><br>";
                echo "<tr>";
                echo "<tr>";
                echo "<td>$col[2]</td>";
                echo "</tr>";
                echo "</table>";
                echo "";
                echo "<table width=100% class='table table-bordered'>";
                echo "<tr>";
                echo "<td>$col[3]</td>";
                echo "<td>$col[4]</td>";
                echo "<td>$col[5]</td>";
                echo "<td>$col[6]</td>";
                echo "</tr>";
                echo "</table>";
                echo "<br><hr>";
              }
              echo "</table>";
             ?>
           </div>
         </div>
        </div>
        <div class="col-md-3 text-center">
          <div class="panel panel-success">
            <div class="panel-heading text-center">Answer Sheet</div>
            <div class="panel-body">
          <form action="data.php" method="GET">
              1. <input type="text" name="a1" value=""><br><br>
              2. <input type="text" name="a2" value=""><br><br>
              3. <input type="text" name="a3" value=""><br><br>
              4. <input type="text" name="a4" value=""><br><br>
              5. <input type="text" name="a5" value=""><br><br>
              6. <input type="text" name="a6" value=""><br><br>
              7. <input type="text" name="a7" value=""><br><br>
              8. <input type="text" name="a8" value=""><br><br>
              9. <input type="text" name="a9" value=""><br><br>
              10.<input type="text" name="a10" value=""><br><br>
              11.<input type="text" name="a11" value=""><br><br>
              12.<input type="text" name="a12" value=""><br><br>
              13.<input type="text" name="a13" value=""><br><br>
              14.<input type="text" name="a14" value=""><br><br>
              15.<input type="text" name="a15" value=""><br><br>
              16.<input type="text" name="a16" value=""><br><br>
              17.<input type="text" name="a17" value=""><br><br>
              18.<input type="text" name="a18" value=""><br><br>
              19.<input type="text" name="a19" value=""><br><br>
              20.<input type="text" name="a20" value=""><br><br>
              21.<input type="text" name="a21" value=""><br><br>
              22.<input type="text" name="a22" value=""><br><br>
              23.<input type="text" name="a23" value=""><br><br>
              24.<input type="text" name="a24" value=""><br><br>
              25.<input type="text" name="a25" value=""><br><br>
              26.<input type="text" name="a26" value=""><br><br>
              27.<input type="text" name="a27" value=""><br><br>
              28.<input type="text" name="a28" value=""><br><br>
              29.<input type="text" name="a29" value=""><br><br>
              30.<input type="text" name="a30" value=""><br><br>
              31.<input type="text" name="a31" value=""><br><br>
              32.<input type="text" name="a32" value=""><br><br>
              33.<input type="text" name="a33" value=""><br><br>
              34.<input type="text" name="a34" value=""><br><br>
              35.<input type="text" name="a35" value=""><br><br>
              36.<input type="text" name="a36" value=""><br><br>
              37.<input type="text" name="a37" value=""><br><br>
              38.<input type="text" name="a38" value=""><br><br>
              39.<input type="text" name="a39" value=""><br><br>
              40.<input type="text" name="a40" value=""><br><br>
              41.<input type="text" name="a41" value=""><br><br>
              42.<input type="text" name="a42" value=""><br><br>
              43.<input type="text" name="a43" value=""><br><br>
              44.<input type="text" name="a44" value=""><br><br>
              45.<input type="text" name="a45" value=""><br><br>
              46.<input type="text" name="a46" value=""><br><br>
              47.<input type="text" name="a47" value=""><br><br>
              48.<input type="text" name="a48" value=""><br><br>
              49.<input type="text" name="a49" value=""><br><br>
              50.<input type="text" name="a50" value=""><br><br>
              <input type="submit" class="btn btn-success" name="" value="Submit">
          </form>
        </div>
      </div>
        </div>
      </div>
    </div>
    <footer style="background-color:#333;">
      <div class="container">
        <p class="text-center" style="font-size:20px;color:white;padding-top:10px;">The e-soma examination system<br>All rights reserved 2018</p>
      </div>
    </footer>
  </body>
</html>
