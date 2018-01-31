<?php
include 'dbcon.php';
session_start();
if(!isset($_SESSION['login_id']))
{
  header("location:login.php");
}
// echo $_SESSION['login_id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>admin</title>
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
    <section id="admin">
      <div class="bg-color">
        <header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="staffregistration.php">Add Staff Members</a>

                  <a href="viewstaff.php">View Staff Details</a>
                
                  <a href="editfooditems.php">Edit food Details</a>
                  <a href="viewbulorders.php">view bulk orders</a>
                  <a href="assigntask.php">Assign task to members</a>
                  <a href="logout.php">Logout</a>

                </div>
                <!-- Use any element to open the sidenav -->


                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
        <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h2 class="logo-name">KITCHEN TREASURES</h2>

          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- / banner -->
    <!--about-->

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
