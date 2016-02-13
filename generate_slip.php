<?php
require 'connect.php';
if(isset($_POST['submit']))
{
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $rollnumber=$_POST['rollnumber'];
 $illness=$_POST['illness'];
 $doctor=$_POST['doctor'];
if($insert=$db->query("
INSERT INTO patient_name (firstname,lastname,doctor_name)
VALUES('{$firstname}','{$lastname}','{$doctor}')
"))
  echo "Name: ",$firstname," ",$lastname,'</br>';
  echo "RollNumber: ",$rollnumber,'</br>';
  echo "Illness: ",$illness,'</br>';
  echo "Doctor Name: ",$doctor,'</br>';
}
?>
