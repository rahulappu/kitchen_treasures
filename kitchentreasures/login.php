<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
$a=$_POST["uname"];
$b=$_POST["psw"];

$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$login_id=$row['login_id'];
	?>

	<?php
	if($a==  $row['email']&&$b==$row['password'])
	{
$_SESSION['email']= $a;
			if($a==  $row['email']&&$b==$row['password']&&$row['type_id']=='3')
	{
$_SESSION['email']= $a;
$_SESSION['login_id']=$login_id;

		 header('location:userhome.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE id=	$login_id";
         $result=mysqli_query($con,$sql1);
		 break;
	}

	if($a==  $row['email']&&$b==$row['password']&&$row['type_id']=='2')
	{
  $_SESSION['login_id']=$login_id;
		 header('location:staffhome.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE id=	$login_id";
         $result=mysqli_query($con,$sql1);
		 break;
	}
  if($a==  $row['email']&&$b==$row['password']&&$row['type_id']=='1')
	{

		$_SESSION['login_id']=$login_id;
		 header('location:admin.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE id=$i";
         $result=mysqli_query($con,$sql1);
		 break;
	}

	}
	else{

	//	echo <script> alert("inalid username and password");</script>;
		header('location:login.php');
	}
	?>



	<?php
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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



    <section id="login">
        <div class="bg-color" class="section-padding">
		<header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="index.html">Home</a>
                  <a href="#menu-list">Menu</a>
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
                           <img src="img/payasam.jpg" class="img-responsive">
                         </div>
                         <div class="col-md-6 col-sm-6 details-text">
                          <div class="content-holder">
                            <h2 style="color:red;">LOGIN HERE!!!</h2>
                            <p> kudumbasree in association with kitchen treasures are conducting traditional food festival,By this our Modern generation will get an oppurtunity to taste the traditional food items</p>

                            <form name="myform" action="#" method="POST" id="form" enctype="multipart/form-data">
                            <input type="text" name="uname"  id="uname" placeholder="Your user Name"  />
                            <input type="password" name="psw"  id="psw" placeholder="Your password"  />

							<div class="validation"></div>

<table>
  <tr>

    <button class="btn btn-imfo btn-read-more" value="submit" name="submit">Login</button>
            <td>	<a class="btn btn-imfo btn-read-more" href="userregistration.php">SIGN UP</a></td>
</tr>
</table>
</form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
