<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>staffhome</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- =======================================================
        Theme Name: Delicious
        Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
<body>
  <div class="bg-color">
    <header id="header">
        <div class="container">
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="userhome.php"> Home </a>

                <a href="logout.php">Logout</a>
            </div>
            <!-- Use any element to open the sidenav -->
            <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
    </header>
  <div class="container">
    <div class="inner text-center">
      <h1 class="logo-name">KITCHEN TREASURES</h1>
      <h2></h2>
<?php

    session_start();
    include './dbcon.php';
    if(isset($_POST['addtocart']))
    {
      $l="";
      $a=$_POST["rq"];
      //echo "<script> alert('hai');</script>";
      $b=$_POST["rr"];
      $c=$_POST["nm"];
      $d=$_POST["ql"];
      $k=$_SESSION['login_id'];
      $sql2="select * from `fooditems`";
      $result2=mysqli_query($con,$sql2);
      $row=mysqli_fetch_array($result2);

  $id=$_REQUEST['f_item_id'];

      $date=date('Y-m-d');

      $sql="INSERT INTO `foodorder`(`login_id`,`name`, `req_quantity`,`total`,`f_item_id`,`date`) VALUES ('$k','$c','$a','$b','$id','$date')";

      $sql3="UPDATE `fooditems` SET `food_quantity`=`food_quantity`-'$a'";
      $result=mysqli_query($con,$sql);

      $result3=mysqli_query($con,$sql3);

      if('$d'< 1)
      {
        $sql4="UPDATE `fooditems` SET `status`= 0";
        $result4=mysqli_query($con,$sql4);

      }


        echo"<script>alert('Added To Cart');</script>";



      }
      if(isset($_POST['submit']))
      {
        $pay=$_POST["pay"];
        //echo "<script> alert('hai');</script>";
        if($pay=='opay')
        {
        header('location:offpay.php');
        }
        if($pay=='epay')
        {
        header('location:onpay.php');
        }

      }





?>
<style>
fieldset {
  background-color: #FFFACD;
  color: #CD5C5C;
}
legend {
  padding: 2px;
  border: 1px solid green;
}
</style>
    <head>

    </head>
    <body>

        <div class="gl_userhome_container" name="gl_userhome_container">
        <?php

            if(isset($_GET['f_item_id'])){

                        $id=$_REQUEST['f_item_id'];
                      //  echo $id;
                        $sql1=mysqli_query($con,"SELECT * FROM `fooditems` WHERE f_item_id='$id'  order by food_name;");
                            $records1=mysqli_fetch_array($sql1)
        ?>
        <fieldset>
          <table>
          <tr>
              <td colspan="2" align="center">
              <img src="<?php echo "{$records1['food_image']}"; ?>" alt='' width="380" height="220" /></td>
          </tr>
          <table>
        </fieldset>
        <fieldset>
          <legend>Food Ordering</legend>
                <div class="gl_item_container">
                  <form name="myform" action="#" method="POST" id="form" enctype="multipart/form-data">

                    <table cellpadding="8px" style="font-size:20px;" align="left">
                      <tr>
                      <td>Name:</td>
                      <td><input type="text" name="nm" id="nm" value="<?php echo "{$records1['food_name']}"; ?>" readonly></td>
                      </tr>
                                <tr>
                                <td>Availability</td>
                                <td><input type="text" name="ql" id="ql" value="<?php echo "{$records1['food_quantity']}"; ?>" readonly></td>
                                </tr>
                                <tr>
                                <td>Price</td>
                                <td><input type="text" name="price" id="price" value=" <?php echo "{$records1['food_rate']}"; ?>" readonly></td>
                                </tr>


                                <tr>
                  							<td>Total</td>
                  							<td><input type="text" name="rr" id="rr" Required readonly></td></td>
                  							</tr>
                                <tr>
                                <td>Required</td>
                                <td><input type="number" name="rq" id="rq" placeholder="required quantity" min="0" max="<?php echo "{$records1['food_quantity']}"; ?>" Required value="1"></td>
                                </tr>
                                <tr>

                                  <tr>
                  							<td><input type="submit" class="btn btn-imfo btn-read-more" name="addtocart" value="Add To Cart"</a></td>
                  							<td><a href="listfood.php"><input type="button" class="btn btn-imfo btn-read-more" name="Add Another Items" value="Add More Items"</a></td>
                                <td><a href="mycart.php"><input type="button" class="btn btn-imfo btn-read-more" name="Cart" value="My Cart"</a></td>

                                </tr>

                    </table>

                  </fieldset>


                    <hr/>
                  </form>
                </div>


        <?php
                        }

        ?>
        </div>
    </body>
    <script src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
      $("#rq").on("change",function() {
        $index=$('#rq').val();
        $price=$('#price').val();
        $total=$index*$price;
        $("#rr").val($total);
      })
    })
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

    </body>
    </html>
