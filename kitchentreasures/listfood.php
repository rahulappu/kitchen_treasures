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
<style>
div.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color:white;
}

/* Style the buttons inside the tab */
div.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
div.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 250px;
  height: 350px;
  background-color: #FFFACD;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>

<body>




  </section>
  <div class="tab">
    <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'Bakery')">Bakery</button>
    <button class="tablinks" onclick="openCity(event, 'BreakFast')">BreakFast</button>
    <button class="tablinks" onclick="openCity(event, 'Lunch')">Lunch</button>
    <button class="tablinks" onclick="openCity(event, 'Dinner')">Dinner</button>

  </div>

  <div id="Bakery" class="tabcontent">
    <?php
    include 'dbcon.php';

    $result4=mysqli_query($con,"select * FROM `fooditems` WHERE `food_category`='Bakery' and `status`='1'");
    while($row=mysqli_fetch_array($result4))
    {

      ?>

      <div class="gallery">
        <a target="_blank" href=<?php echo "viewdes.php?f_item_id={$row['f_item_id']} & food_category={$row['food_category']}" ?>
          <a target="_blank" href=<?php echo "viewdes.php?food_category={$row['food_category']}" ?>
           <?php echo"{$row['food_name']}"; ?> >
          <td><img src="<?php echo $row['food_image']?>" height="300px" width="250px"/></td>
        </a>
        <div class="desc" >
          <table>
            <tr>
              <td>ITEM:</td>
              <td><?php echo $row['food_name'];?></td>
            </tr>
            <tr>
              <td>DESC:</td>
              <td><?php echo $row['food_description'];?></td>
            </tr>
            <tr>
              <td>RATE:</td>
              <td><?php echo $row['food_rate'];?></td>
            </tr>
            <tr>
              <td>DATE:</td>
              <td><?php echo $row['fdate'];?></td>
            </tr>
          </table>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
  <div id="BreakFast" class="tabcontent">
    <?php

    $result1=mysqli_query($con,"select * FROM `fooditems` WHERE `food_category`='Breakfast'");



    while($row=mysqli_fetch_array($result1))
    {

      ?>

      <div class="gallery">
        <a target="_blank" href=<?php echo "viewdes.php?f_item_id={$row['f_item_id']}" ?> <?php echo"{$row['food_name']}"; ?> >
          <td><img src="<?php echo $row['food_image']?>" height="300px" width="250px"/></td>
        </a>
        <div class="desc" >
          <table>
            <tr>
              <td>ITEM:</td>
              <td><?php echo $row['food_name'];?></td>
            </tr>
            <tr>
              <td>DESC:</td>
              <td><?php echo $row['food_description'];?></td>
            </tr>
            <tr>
              <td>RATE:</td>
              <td><?php echo $row['food_rate'];?></td>
            </tr>
            <tr>
              <td>DATE:</td>
              <td><?php echo $row['fdate'];?></td>
            </tr>
          </table>
        </div>
      </div>
      <?php
    }
    ?>
  </div>

  <div id="Lunch" class="tabcontent">
    <?php
    $result2=mysqli_query($con,"select * FROM `fooditems` WHERE `food_category`='Lunch'");
    while($row=mysqli_fetch_array($result2))
    {

      ?>

      <div class="gallery">
        <a target="_blank" href=<?php echo "viewdes.php?f_item_id={$row['f_item_id']}" ?> <?php echo"{$row['food_name']}"; ?> >
          <td><img src="<?php echo $row['food_image']?>" height="300px" width="250px"/></td>
        </a>
        <div class="desc" >
          <table>
            <tr>
              <td>ITEM:</td>
              <td><?php echo $row['food_name'];?></td>
            </tr>
            <tr>
              <td>DESC:</td>
              <td><?php echo $row['food_description'];?></td>
            </tr>
            <tr>
              <td>RATE:</td>
              <td><?php echo $row['food_rate'];?></td>
            </tr>
            <tr>
              <td>DATE:</td>
              <td><?php echo $row['fdate'];?></td>
            </tr>
          </table>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
  <div id="Dinner" class="tabcontent">
    <?php

    $result3=mysqli_query($con,"select * FROM `fooditems` WHERE `food_category`='Dinner'");


    while($row=mysqli_fetch_array($result3))
    {

      ?>

      <div class="gallery">
        <a target="_blank" href=<?php echo "viewdes.php?f_item_id={$row['f_item_id']}" ?> <?php echo"{$row['food_name']}"; ?> >
          <td><img src="<?php echo $row['food_image']?>" height="300px" width="250px"/></td>
        </a>
        <div class="desc" >
          <table>
            <tr>
              <td>ITEM:</td>
              <td><?php echo $row['food_name'];?></td>
            </tr>
            <tr>
              <td>DESC:</td>
              <td><?php echo $row['food_description'];?></td>
            </tr>
            <tr>
              <td>RATE:</td>
              <td><?php echo $row['food_rate'];?></td>
            </tr>
            <tr>
              <td>DATE:</td>
              <td><?php echo $row['fdate'];?></td>
            </tr>
          </table>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
  <?php

  if(isset($_POST['submit']))
  {


  }

  ?>

  <form name="myform" action="#" method="POST" id="form" enctype="multipart/form-data">

  </form>
</body>
<script>
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/custom.js"></script>
<script src="contactform/contactform.js"></script>

</body>
</html>
