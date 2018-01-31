
          <?php
          include 'dbcon.php';

          session_start();
          $w=$_SESSION['login_id'];

          $result5=mysqli_query($con,"select * FROM `user_details` where `login_id`='$w'");
          while($row=mysqli_fetch_array($result5))
          {

            ?>



              <?php
            }
?>
            <?php
            if(isset($_POST['submit']))
            {

            $a=$_POST["name"];
            //echo "<script> alert('hai');</script>";
            $b=$_POST["date"];
            $c=$_POST["email"];
            $d=$_POST["phone"];
            $e=$_POST["event"];
            $f=$_POST["package"];
            $g=$_POST["number"];

            $h=$_SESSION['login_id'];


            /*$sqll="SELECT `username` FROM `reg` WHERE username='$h'";
            $result=mysqli_query($con,$sqll) or die("Connection Failed!");
            $arr=mysqli_fetch_array($result);
            if($arr)
            {
            	echo"<script>alert('Username already exist!!!');</script>)";
            }
            else{*/
            $sql2="select * from `package_type` where `p_type_id`=$f";
            $result2=mysqli_query($con,$sql2);
            $row=mysqli_fetch_array($result2);
            $amount=$row['amount'];
            $total=$amount * $g;
            $avg=10;
            echo $total;
            //
            //
            //   $l=$row["total"];
            //   $m=$row["f_item_id"];


            $sql="INSERT INTO `bulk_order`(`login_id`, `name`, `date`, `email`, `phone`, `event_type`, `event_package`, `num`) VALUES ('$h','$a','$b','$c','$d','$e','$f','$g')";
            $result1=mysqli_query($con,$sql);
            // $sql9="update `foodorder` set `status`=0 where `login_id`=$n";
            // $result9=mysqli_query($con,$sql9);

            echo "<script>window.location.href ='botransaction.php?amount=$total'</script>";

            echo"<script>alert('Success');</script>)";

            }


            ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="js/bvalidate.js"></script>

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
            <form action="" method="POST" id="form" name="form" enctype="multipart/form-data">

                <div class="col-md-8 col-sm-8">
                    <form action="" method="post" role="form" class="contactForm">
                    <div id="sendmessage">Your booking request has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                        <div class="form-group label-floating is-empty">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" onchange="f()" required />
                            <div class="validation"></div>
                        </div>

                    </div>

                    <div class="col-md-6 col-sm-6 contact-form">
                        <div class="form-group">
                          <?php
                          $date=date("Y-m-d");
                          $d=date('Y-m-d',strtotime($date. ' +10 days'))

                          ?>
                            <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required"  min="<?php echo $d ?>"  onchange="d()" required/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                        <div class="form-group">
                            <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"  required/>
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" onchange="p()"/>
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-md-12 contact-form">
                        <div class="form-group label-floating is-empty">
                          <tr>
                          <td>EVENT TYPE</td>
                          <td>
                            <select id="event_main" name="event" >
                              <option value="0">Select Event</option>
                            <?php
                            $result4=mysqli_query($con,"select event_id,event_name FROM `event_type`");


                            while($row=mysqli_fetch_array($result4))
                            {

                              ?>
                          <option value="<?php echo $row['event_id'];?>"><?php echo $row['event_name'];?></option>



                      <?php
                    }

                     ?>
                   </select>
                          </td>
                          </tr>                            <div class="validation"></div>
                        </div>

                    </div>
                    <div class="col-md-12 contact-form">
                        <div class="form-group label-floating is-empty">
                          <tr>
                          <td>PACKAGE TYPE</td>
                          <td>
                            <select id="package" name="package">
                              <option value="0">Select Package</option>

                            <?php
                            $result4=mysqli_query($con,"select p_type_id,package_name FROM `package_type`");


                            while($row=mysqli_fetch_array($result4))
                            {

                              ?>



                      <?php
                    }

                     ?>
                   </select>

                          </td>
                          </tr>                            <div class="validation"></div>
                        </div>

                        </div>
                        <div class="col-md-6 col-sm-6 contact-form pad-form">
                            <div class="form-group">
                              <tr>
                              <td>No Of Orders</td>
                              <td>
                            <select name="number">
                            <option value="50">50      </option>
                            <option value="100">100      </option>
                            <option value="150">150</option>
                            <option value="200">200</option>
                            <option value="500">500</option>
                            </select>
                              </td>
                              </tr>                                               <div class="validation"></div>
                            </div>
                    <div class="col-md-12 btnpad">
                        <div class="contacts-btn-pad">
                          <?php

                          ?>
                     <button class="btn btn-imfo btn-read-more" value="submit" name="submit">Place_Order</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="menu-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">View Our Packages</h1>
                    <br>Enjoy the taste of traditional foods and home made foods </p>
                </div>
                <div class="col-md-12  text-center gallery-trigger">
                    <ul>
                        <li><a class="filter" data-filter="all">Show All</a></li>
                        <li><a class="filter" data-filter=".category-1">Breakfast</a></li>
                        <li><a class="filter" data-filter=".category-2">Lunch</a></li>
                        <li><a class="filter" data-filter=".category-3">Dinner</a></li>
                    </ul>
                </div>
                <div id="Container">
                    <div class="mix category-1 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Idli vada</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price"> 20 rs</span>
                      </span>
                      <span class="menu-subtitle">Idli with curry</span>
                    </div>
                    <div class="mix category-1 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Egg curry and appam</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">50.99 rs</span>
                      </span>
                      <span class="menu-subtitle">delicious</span>
                    </div>
                    <div class="mix category-1 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">chappathi and veg kurma</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">40.99 rs</span>
                      </span>
                      <span class="menu-subtitle"></span>
                    </div>
                    <div class="mix category-1 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Egg curry and Idiyappam</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">30.00</span>
                      </span>
                      <span class="menu-subtitle">Its yummy</span>
                    </div>
                    <div class="mix category-2 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Mixed Fried Rice</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">120.00 rs</span>
                      </span>
                      <span class="menu-subtitle">vegetables ,dry fruits,meat</span>
                    </div>
                    <div class="mix category-2 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">dosa and chutney</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">30.99</span>
                      </span>
                      <span class="menu-subtitle"></span>
                    </div>
                    <div class="mix category-2 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">chicken sandwich</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">20.00 rs</span>
                      </span>
                      <span class="menu-subtitle">2 pieces of bread</span>
                    </div>
                    <div class="mix category-2 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">chicken noodles</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">120.00 rs</span>
                      </span>
                      <span class="menu-subtitle"></span>
                    </div>
                    <div class="mix category-3 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Bread and Egg Omlette</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">$20.99</span>
                      </span>
                      <span class="menu-subtitle">with tomato saus</span>
                    </div>
                    <div class="mix category-3 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Meals</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">40.00 rs</span>
                      </span>
                      <span class="menu-subtitle">with tasty side dishes prepared by different staffs</span>
                    </div>
                    <div class="mix category-3 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Fish Biriyani</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">120.00 rs</span>
                      </span>
                      <span class="menu-subtitle">tasty</span>
                    </div>
                    <div class="mix category-3 menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                        <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Kappa and Beef</a>
                        <span style="left: 166px; right: 44px;" class="menu-line"></span>
                        <span class="menu-price">90.00 rs</span>
                      </span>
                      <span class="menu-subtitle"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    / contact
    footer
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
    <script src="js/select.js"></script>

    <script src="contactform/contactform.js"></script>

</body>
</html>
