
          <?php
          error_reporting(0);
          include 'dbcon.php';
          session_start();
          $w=$_SESSION['login_id'];
        $amount=$_REQUEST['amount'];
?>
            <?php
            if(isset($_POST['submit']))
            {

              $w=$_SESSION['login_id'];

            $a=$_POST["ta"];
            //echo "<script> alert('hai');</script>";
            $b=$_POST["ap"];
            $c=$_POST["bname"];
            $d=$_POST["payment"];
            $e=$_POST["ct"];
            $f=$_POST["cn"];
            $g=$_POST["dt"];


            $h=$_SESSION['login_id'];



            /*$sqll="SELECT `username` FROM `reg` WHERE username='$h'";
            $result=mysqli_query($con,$sqll) or die("Connection Failed!");
            $arr=mysqli_fetch_array($result);
            if($arr)
            {
            	echo"<script>alert('Username already exist!!!');</script>)";
            }
            else{*/
            // $sql2="select * from `foodorder` where `login_id`=$n";
            // $result2=mysqli_query($con,$sql2);
            // $row=mysqli_fetch_array($result2);
            //
            //
            //   $l=$row["total"];
            //   $m=$row["f_item_id"];



          //  $sql="INSERT INTO `bulk_order`(`login_id`, `name`, `date`, `email`, `phone`, `event_type`, `event_package`, `num`) VALUES ('$h','$a','$b','$c','$d','$e','$f','$g')";
          $sql2="select * from `bulk_order` where `login_id`=$w";
          $result2=mysqli_query($con,$sql2);
          $row=mysqli_fetch_array($result2);


            $l=$row["bo_id"];


        $sql="INSERT INTO `botransaction`(`bo_id`, `login_id`, `amount`, `advance`, `bname`, `payment`, `cardtype`, `cardnumber`, `date`, `status`) VALUES ('$l','$h','$a','$b','$c','$d','$e','$f','$g','1')";
        $result1=mysqli_query($con,$sql);
            // $sql9="update `foodorder` set `status`=0 where `login_id`=$n";
            // $result9=mysqli_query($con,$sql9);
            echo"<script>alert('Success');</script>)";

            }


            ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bulkorder</title>
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
    <section id="">
      <div class="bg-color">
        <header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="userhome.php">Home</a>
                  <a href="logout.php">Logout</a>
                  <a href="#menu-list">Menu</a>
                  <a href="login.html">login</a>
                </div>
                <!-- Use any element to open the sidenav -->
                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
 <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="header-h">Kitchen Treasures</h1>
                    <br>Suggestions for including new food items to the menu are expecting from the customers. </p>
                </div>
            </div>
            <div class="row msg-row">
                <div class="col-md-4 col-sm-4 mr-15">
                  <div class="media-2">
                      <div class="media-left">
                          <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                      </div>

                      <div class="media-body">
                        <a href="#menu-list">  <button class="btn btn-danger" value="submit" name="menu">View Our Packages</button> </a>
                          <p class="light-blue regular alt-p">Special Packages Added - <span class="contacts-sp">Phone Booking</span></p>
                      </div>
                  </div>
                  <div class="media-2">
                      <div class="media-left">
                          <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                      </div>

                      <div class="media-body">
                          <h4 class="dark-blue regular">Phone Numbers</h4>
                          <p class="light-blue regular alt-p">+440 875369208 - <span class="contacts-sp">Phone Booking</span></p>
                      </div>
                  </div>


                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Opening Hours</h4>
                            <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
                            <p class="light-blue regular alt-p">
                                 Friday and Sunday 08:00 - 03.00
                            </p>
                        </div>
                    </div>
                </div>
                <form action="#" method="POST" id="form" name="form" enctype="multipart/form-data">

                <div class="col-md-8 col-sm-8">
                    <form action="" method="post" role="form" class="contactForm">
                    <div id="sendmessage">Your booking request has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                      <fieldset>
                        <legend>Transaction Details:</legend>
                        <table>
                          <tr>
                            <td> Total Amount </td>
                            <td><input type="text"  name="ta" id="ta" value="<?php echo $amount;  ?>" readonly></td>
                          </tr>
                          <tr>
                            <td> Advance Payment </td>
                            <td><input type="text"  name="ap" id="ap" value="<?php echo $amount;  ?>" readonly></td>
                          </tr>
                            <td>Bank</td>

                            <td><select name="bname">

                              <option value="Federal">Federal Bank     </option>
                              <option value="HDFC">HDFC Bank       </option>
                              <option value="ICICI">ICICI Bank       </option>
                              <option value="State">State  Bank       </option>
                            </select></td>
                          </tr>

                          <tr>
                            <td>Payment Method</td>

                            <td><select name="payment">

                              <option value="Debit">Debit     </option>
                              <option value="Credit">Credit        </option>


                            </select></td>
                          </tr>
                          <tr>
                            <td>Card Type</td>

                            <td><select name="ct">
                              <option value="">--select--   </option>

                              <option value="visa">visa     </option>
                              <option value="mastercard">mastercard        </option>
                              <option value="rupay">rupay        </option>

                            </select></td>
                          </tr>
                          <tr>
                            <td> Card Number </td>
                            <td><input type="text"  name="cn" id="cn" onchange="p()" required></td>
                          </tr>
                          <tr>
                            <td> Date </td>
                            <td><input type="date"  name="dt" id="dt" required></td>
                          </tr>
                        </table>
                      </fieldset>
                    <table>

                      <fieldset>
                    <div class="col-md-12 btnpad">
                        <div class="contacts-btn-pad">
                     <button class="btn btn-imfo btn-read-more" value="submit" name="submit">Place_Order</button>
                        </div>
                    </div>
                    </form>

                </div>

            </div>

        </div>



                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </section>

    <!-- / footer -->
	<script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/select.js"></script>

    <script src="contactform/contactform.js"></script>

</body>
</html>
