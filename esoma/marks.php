<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>e-Examination: Marks Center</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  </head>
  <body>
    <!-- start of header -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 jumbotron text-center">
          <h1>The e-Soma Examination System Marks Center<br><small>Making Examination Process as easy as Possible</small></h1>
        </div>
      </div>
    </div>
    <!-- end of header -->
    <div class="container">
      <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <div class="panel panel-success">
            <div class="panel-heading">Results</div>
            <div class="panel-body">
            <?php
              $db=mysqli_connect("localhost","root","","filesearch");
              $res=mysqli_query($db,"SELECT * FROM `marks`");
             // $cols=mysqli_fetch_array($res);
              echo "<table width=60% class='table table-bordered'>";
              while ($cols=mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>$cols[1]</td>";
                echo "<td>$cols[2]</td>";
                echo "<td>$cols[3]</td>";
                echo "<td>$cols[4]</td>";
                echo "</tr>";
              }
              echo "</table>";

            ?>
            </div>
          </div>
        </div>
        <div class="col-md-2">

        </div>
      </div>
    </div>
  </body>
</html>
