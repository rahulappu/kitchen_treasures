<?php
include 'dbcon.php';
session_start();

if(!isset($_SESSION['email']))
{
	header("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>viewstaff</title>
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
    <section id="viewst">
        <header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="userhome.php">Home</a>
                  <a href="listfood.php">View Food Items</a>
                  <a href="feedback.php">Send Feedback</a>
									<a href="logout.php">Logout</a>
                </div>
                <!-- Use any element to open the sidenav -->
                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
        <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h2 class="logo-name">YOUR BOOKING HISTORY</h2>
					     <td><a href="userhome.php"><input type="button" class="btn btn-imfo btn-read-more" name="index" value="GoTo HOME"></a></td>
					     <td><a href="mycart.php"><input type="button" class="btn btn-imfo btn-read-more" name="index" value="View My Cart"></a></td>

						 </center>


              <br><br>
              <table border='1' align='center'  height="70" width="800" >
                <tr>
                  <td><B><i>ID</td>

                  <td><B><i>FOOD NAME</td>
                    <td><B><i>REQUIRED QUANTITY</td>

                  <td><B><i>TOTAL</td>
                    <td><B><i>DATE OF ORDER</td>
                </tr>
              <?php
              include 'dbcon.php';
              $k=$_SESSION['login_id'];
              $result=mysqli_query($con,"select * from foodorder where `login_id`=$k");



              while($row=mysqli_fetch_array($result))
              {

            ?>
            <form name="form" action="#" method="POST" id="form">


<tr>
  <td><?php echo $row['order_id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['req_quantity'];?></td>
<td><?php echo $row['total'];?></td>
<td><?php echo $row['date'];?></td>

</tr>
</form>

<?php
}
?>
</table>


</center>

	 </div>


        </div>

        </center>

          </div>
          </form>

        </div>



      </div>
    </section>
    <!-- / banner -->
    <!--about-->


    <!-- / footer -->

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

</body>
</html>
