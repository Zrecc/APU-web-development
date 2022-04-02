<?php
include("conn.php");
$sql = "UPDATE contacts SET 
contact_name='$_POST[name]', 
contact_phone='$_POST[phone_num]', 
contact_email='$_POST[email_address]', 
contact_address='$_POST[home_address]', 
contact_gender='$_POST[gender]', 
contact_relationship='$_POST[relationship]', 
contact_dob='$_POST[dob]' 
WHERE id=$_POST[id];";
if (mysqli_query($con, $sql)) {
mysqli_close($con);
header('Location: view.php');
}
?>