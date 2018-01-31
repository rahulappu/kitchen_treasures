<?php

include 'dbcon.php';

session_start();
$w=$_SESSION['login_id'];

//object of db
if (isset($_POST['context'])) {

    switch ($_POST['context']) {
        case "fetch_event_from_event_type": save_register($con);
            break;
}
}
else{
echo "UnAuthorized Access";
die(); //deflt_fn to destroy
}

//function as mentioned in the case

function save_register($con) {

    //$requested_country = $_POST['index'];
    $requested_event_id = $_POST['event_main'];

    //$get_c = "SELECT `country_id`, `country_name`  FROM `country` WHERE `status`=1";
    $result5=mysqli_query($con,"select p_type_id,package_name FROM `package_type` where `event_id`='$requested_event_id'");

  //  $get_s = ("SELECT `state_id`, `state_name` FROM `state` WHERE `country_id`='$requested_country_id'  and `status`=1");
  //  $get_s->execute();
  //  $result_s = $get_s->fetchAll();
   $str = "";

  while($row=mysqli_fetch_array($result5))
  {
    $str .= $row['p_type_id'] . ":" . $row['package_name'] . ",";

    }
 echo rtrim($str, ',');
}
?>
