<?php
require 'connect.php';
$name="lamak lathi";
$result=$db->query("SELECT * FROM patient_name");
 $rows=$result->fetch_all(MYSQLI_ASSOC);
 foreach($rows as $row){
	 if($row['doctor_name']==$name){
		echo $row['firstname']," ",$row['lastname'];
		echo "            ";
      echo '<a href="doctor_pad.php">Diagonise</a>';
echo '</br>';
 }
 }

?>