<?php
    session_start();
    $code=$_SESSION["code"];

    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    $a4=$_GET['a4'];
    $a5=$_GET['a5'];
    $a6=$_GET['a6'];
    $a7=$_GET['a7'];
    $a8=$_GET['a8'];
    $a9=$_GET['a9'];
    $a10=$_GET['a10'];
    $a11=$_GET['a11'];
    $a12=$_GET['a12'];
    $a13=$_GET['a13'];
    $a14=$_GET['a14'];
    $a15=$_GET['a15'];
    $a16=$_GET['a16'];
    $a17=$_GET['a17'];
    $a18=$_GET['a18'];
    $a19=$_GET['a19'];
    $a20=$_GET['a20'];
    $a21=$_GET['a21'];
    $a22=$_GET['a22'];
    $a23=$_GET['a23'];
    $a24=$_GET['a24'];
    $a25=$_GET['a25'];
    $a26=$_GET['a26'];
    $a27=$_GET['a27'];
    $a28=$_GET['a28'];
    $a29=$_GET['a29'];
    $a30=$_GET['a30'];
    $a31=$_GET['a31'];
    $a32=$_GET['a32'];
    $a33=$_GET['a33'];
    $a34=$_GET['a34'];
    $a35=$_GET['a35'];
    $a36=$_GET['a36'];
    $a37=$_GET['a37'];
    $a38=$_GET['a38'];
    $a39=$_GET['a39'];
    $a40=$_GET['a40'];
    $a41=$_GET['a41'];
    $a42=$_GET['a42'];
    $a43=$_GET['a43'];
    $a44=$_GET['a44'];
    $a45=$_GET['a45'];
    $a46=$_GET['a46'];
    $a47=$_GET['a47'];
    $a48=$_GET['a48'];
    $a49=$_GET['a49'];
    $a50=$_GET['a50'];

    $sum=0;
    $db=mysqli_connect("localhost","root","","filesearch");
    //$res=mysqli_query($db,"SELECT * FROM `marklist` WHERE id='1'");

    if ($code=="English") {
        // start of the if
        for ($t=1; $t <=50 ; $t++) {
          $res=mysqli_query($db,"SELECT * FROM `english` WHERE id='$t'");
          $cols=mysqli_fetch_array($res);
            $cm="a".$t;
            //echo "$cm";
            if ($cols[1]===$$cm) {
              $sum=$sum + 2;
              //echo "$sum";
            }
            else {
              $sum=$sum+0;
            }
        }
        //end
    }
    elseif ($code=="Kiswahili") {
        // start 
        for ($t=1; $t <=50 ; $t++) {
          $res=mysqli_query($db,"SELECT * FROM `kiswahili` WHERE id='$t'");
          $cols=mysqli_fetch_array($res);
            $cm="a".$t;
            //echo "$cm";
            if ($cols[1]===$$cm) {
              $sum=$sum + 2;
              //echo "$sum";
            }
            else {
              $sum=$sum+0;
            }
        }
        // end
    }
    elseif ($code=="Science") {
       // start 
        for ($t=1; $t <=50 ; $t++) {
          $res=mysqli_query($db,"SELECT * FROM `marklist` WHERE id='$t'");
          $cols=mysqli_fetch_array($res);
            $cm="a".$t;
            //echo "$cm";
            if ($cols[1]===$$cm) {
              $sum=$sum + 2;
              //echo "$sum";
            }
            else {
              $sum=$sum+0;
            }
        }
        // end 
    }
    elseif ($code=="Mathematics") {
        // start 
        for ($t=1; $t <=50 ; $t++) {
          $res=mysqli_query($db,"SELECT * FROM `math` WHERE id='$t'");
          $cols=mysqli_fetch_array($res);
            $cm="a".$t;
            //echo "$cm";
            if ($cols[1]===$$cm) {
              $sum=$sum + 2;
              //echo "$sum";
            }
            else {
              $sum=$sum+0;
            }
        }
        // end 
    }
    else{
        // start 
        for ($t=1; $t <=50 ; $t++) {
          $res=mysqli_query($db,"SELECT * FROM `socialstudies` WHERE id='$t'");
          $cols=mysqli_fetch_array($res);
            $cm="a".$t;
            //echo "$cm";
            if ($cols[1]===$$cm) {
              $sum=$sum + 2;
              //echo "$sum";
            }
            else {
              $sum=$sum+0;
            }
        }
        // end 
    }

    $name=$_SESSION["Name"];
    $adm=$_SESSION["pass"];
    $mks=mysqli_query($db,"SELECT * FROM `marks` WHERE `adm`='$adm' AND `Subject`='$code'");
    $cont=mysqli_num_rows($mks);
    if ($cont==0) {
      mysqli_query($db,"INSERT INTO `marks`(`name`, `adm`, `Subject`, `mark`) VALUES ('$name','$adm','$code','$sum')");
      session_destroy();
      header("location:index.php");
    }
    else {
        echo "<h1 style='font-size:200px; text-align:center;'>The records already exist</h1>";
        header("refresh:5;index.php");
    }
 ?>
