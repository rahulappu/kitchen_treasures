

<!DOCTYPE html>
<html lang="en">
  <head>
<script>
function p(){

	  var val_phone= /^[0-9]{9,12}$/;
	 $cn= document.getElementById('cn').value;

	 if(!val_phone.test($cn)){

      alert("enter valid card number or lack of sufficient digits");
	   document.getElementById('cn').value='';
	   $("#cn").focus();
      return false;
    }

}
</script>
  <div class="container">
    <div class="inner text-center">
    <center>  <h1 class="logo-name">KITCHEN TREASURES</h1></center>
    <center>   <td><a href="listfood.php"><input type="button" class="btn btn-imfo btn-read-more" name="listfood" value="Add Another Item"</a></td>
   <td><a href="userhome.php"><input type="button" class="btn btn-imfo btn-read-more" name="index" value="GoTo HOME"></a></td>
   <td><a href="mycart.php"><input type="button" class="btn btn-imfo btn-read-more" name="index" value="View My Cart"></a></td></center>
      <h2></h2>
        <?php

        $k="";
        $w="";
        if(isset($_POST['remove']))
        {
        $w=$_SESSION['login_id'];
        $e=$_POST['orderid'];
        $a=$_POST['rq'];

        $sql= "select * from `foodorder` WHERE `login_id`='$w' and `order_id`='$e'";
        $result1=mysqli_query($con,$sql);
        // $sql3="UPDATE `fooditems` SET `food_quantity`=`food_quantity`+'$a'";
        // $result3=mysqli_query($con,$sql3);



        echo"<script>alert('Removed From The Cart');</script>";

        }




        ?>

        <style>
        fieldset {
          background-color: #FFFACD;
          color: black;
        }
        legend {
          padding: 2px;
          border: 1px solid green;
        }
        </style>
        <body>
          <?php
          include 'dbcon.php';

          session_start();
          $w=$_SESSION['login_id'];

          $result5=mysqli_query($con,"select * FROM `user_details` where `login_id`='$w'");
          while($row=mysqli_fetch_array($result5))
          {

            ?>

              <fieldset>
                <legend>Personal Details:</legend>
                <table>
                  <tr>
                    <td>  Name </td>
                    <td><input type="text" value="<?php echo $row['u_fname'];?>" readonly></td>
                  </tr>
                  <tr>
                    <td>   House name </td>
                    <td><input type="text" value="<?php echo $row['u_housename'];?>" readonly></td>
                  </tr>
                  <tr>
                    <td>   City </td>
                    <td><input type="text" value="<?php echo $row['u_city'];?>" readonly></td>
                  </tr>
                  <tr>
                    <td>   District </td>
                    <td><input type="text" value="<?php echo $row['u_district'];?>" readonly></td>
                  </tr>
                  <tr>
                    <td>Phone </td>

                    <td><input type="text" value="<?php echo $row['u_phone'];?>" readonly></td>
                  </tr>

                </table>
              </fieldset>
              <?php
            }
            ?>
            <?php
            if(isset($_POST['submit']))
            {

            $a=$_POST["bname"];
            //echo "<script> alert('hai');</script>";
            $c=$_POST["ct"];
            $d=$_POST["cn"];
            $dt=$_POST["dt"];
            $n=$_SESSION['login_id'];



            /*$sqll="SELECT `username` FROM `reg` WHERE username='$h'";
            $result=mysqli_query($con,$sqll) or die("Connection Failed!");
            $arr=mysqli_fetch_array($result);
            if($arr)
            {
            	echo"<script>alert('Username already exist!!!');</script>)";
            }
            else{*/
            $sql2="select * from `foodorder` where `login_id`=$n";
            $result2=mysqli_query($con,$sql2);
            $row=mysqli_fetch_array($result2);


              $l=$row["total"];
              $m=$row["f_item_id"];


            $sql="INSERT INTO `transaction`(`bankname`, `cardtype`,`cardnumber`, `login_id`,`total`,`tdate`,`f_item_id`,`type`) VALUES ('$a','$c','$d','$n','$l','$dt','$m','online')";
            $result1=mysqli_query($con,$sql);
            $sql9="update `foodorder` set `status`=0 where `login_id`=$n";
            $result9=mysqli_query($con,$sql9);
            echo"<script>alert('Success');</script>)";

            }


            ?>

            <form action="#" method="POST" id="form" name="form" enctype="multipart/form-data">
              <fieldset>
                <legend>Transaction Details:</legend>
                <table>

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
                    <td><input type="text"  name="cn" id="cn" onchange="p()"></td>
                  </tr>
                  <tr>
                    <td> Date </td>
                    <td><input type="date"  name="dt" id="dt" ></td>
                  </tr>
                </table>
              </fieldset>
            <table>

              <fieldset>

                <input  type="submit" name="submit" id="submit" value="submit"  >
              </fieldset>
            </form>



          <script>
          function check(element) {
            var cb1 = document.getElementById("checkbox1");
            var cb2 = document.getElementById("checkbox2");
            var sub = document.getElementById("submit");
            if (cb1.checked == true)
            sub.disabled = false;
            else
            sub.disabled = true;
          }
          </script>
        </body>
        </html>

</script>
  </body>
  </html>
