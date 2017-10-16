<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
$a=$_POST["foodname"];
//echo "<script> alert('hai');</script>";
$b=$_POST["foodrate"];
$c=$_POST["fdescription"];
$d=$_POST["category"];
$e=$_POST["quantity"];
$k=$_SESSION['login_id'];
$dt=$_POST["dt"];


$j="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
               move_uploaded_file($_FILES['photo']['tmp_name'], $j);


/*$sqll="SELECT `username` FROM `reg` WHERE username='$h'";
$result=mysqli_query($con,$sqll) or die("Connection Failed!");
$arr=mysqli_fetch_array($result);
if($arr)
{
	echo"<script>alert('Username already exist!!!');</script>)";
}
else{*/
$sql="INSERT INTO `fooditems`(`food_name`, `login_id`,`food_rate`, `food_description`, `food_category`, `food_quantity` , `food_image`,`fdate` ) VALUES ('$a','$k','$b','$c','$d','$e','$j','$dt')";
$result1=mysqli_query($con,$sql);




echo"<script>alert('Data Entered Successfully');</script>)";

}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>addfooditems</title>
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
    <!--banner-->

    <section id="addfooditems">
        <div class="bg-color" class="section-padding">
		<header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="#about">About</a>
                  <a href="#event">Event</a>
                  <a href="#menu-list">Menu</a>
                  <a href="#contact">Feedback </a>
                </div>
                <!-- Use any element to open the sidenav -->
                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center" style="padding:60px;">
                      <h1 class="header-h">KITCHEN TREASURES</h1>
                      <p class="header-p">Enjoy the taste of homely prepared food items</p>
                    </div>
                    <div class="col-md-12" style="padding-bottom:60px;">
                        <div class="item active left">
                          <div class="col-md-6 col-sm-6 left-images">
                           <img src="img/baby.jpg" class="img-responsive">
                         </div>
                         <div class="col-md-6 col-sm-6 details-text">
                          <div class="content-holder">
                            <h2 style="color:red;">ENTER THE FOOD ITEM</h2>
                            <p></p>

                            <form name="myform" action="#" method="POST" id="form" enctype="multipart/form-data">
                            <table allign="center">
							<tr>
							<td>FOOD NAME</td>
							<td><input type="text" name="foodname" id="foodname" placeholder="enter food name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" ></td>
							 <div class="validation"></div>
                        </div>
							</tr>
							<tr>
							<td>FOOD RATE</td>
							<td><input type="text" name="foodrate" id="foodrate" placeholder="enter rate of food" ></td>
							</tr>
              <tr>
              <td>FOOD DESCRIPTION</td>
              <td><input type="text" name="fdescription" id="fdescription" placeholder="specialities of food" ></td>
              </tr>
              <tr>
              <td>FOOD CATEGORY</td>
              <td>
<select name="category">
  <option value="Dinner">Dinner      </option>
  <option value="Lunch">Lunch        </option>
  <option value="Breakfast">Breakfast</option>
  <option value="Bakery">Bakery</option>

</select>
              </td>
              </tr>
              <tr>
              <td>FOOD QUANTITY</td>
              <td><input type="text" name="quantity" id="quantity" placeholder="quantity" ></td>
              </tr>
              <tr>
              <td>FOOD IMAGE</td>
              <td><input type="file" name="photo" id="photo" placeholder="" ></td>
              </tr>

              <tr>
                <td> Date </td>
                <td><input type="date"  name="dt" id="dt" ></td>
              </tr>




							</table>

                    	<div class="validation"></div>



                      <button class="btn btn-imfo btn-read-more" value="submit" name="submit">upload food items</button>

							<a class="btn btn-imfo btn-read-more" href="events-details.html">Reset </a>

                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
    <!--/ event -->
    <!-- menu -->

    <footer class="footer text-center">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 text-center">
                    <div class="widget">
                        <h4 class="widget-title">Kitchen Treasures</h4>
                        <address>Pathanamthitta<br>Kerala, kL 110013</address>
                        <div class="social-list">
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <p class="copyright clear-float">
                            © Kudumbasree org kerala government
                            <div class="credits">
                                <!--
                                    All the links in the footer should remain intact.
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Delicious
                                -->
                                Designed by <a href="https://bootstrapmade.com/">Rahul</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / footer -->

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

</body>
</html>
