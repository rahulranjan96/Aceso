<?php
require 'connect.php';
if(isset($_POST['submit']))
  { 
	$m_1=$_POST['med1'];
	$m_2=$_POST['med2'];
	$m_3=$_POST['med3'];
	$m_4=$_POST['med4'];
	$m_5=$_POST['med5'];
	$q1=$_POST['dos1'];
	$q2=$_POST['dos2'];
	$q3=$_POST['dos3'];
	$q4=$_POST['dos4'];
	$q5=$_POST['dos5'];
	$result=$db->query("SELECT * FROM medicines");
    $rows=$result->fetch_all(MYSQLI_ASSOC);
	$flag1=0;
	$flag2=0;
	$flag3=0;
	$flag4=0;
	$flag5=0;
	foreach($rows as $row){
		if(!empty($m_1)&&$flag1==0 && $row['name']==$m_1)
		{
			if($row['name']==$m_1)
		{
			$q_1=$row['quantity'];
			if($q_1-$q1>=0)
			{
			  $q_1=$q_1-$q1;
			  $db->query("UPDATE medicines SET quantity = '{$q_1}' WHERE name = '{$m_1}'");
			  
			}
			else echo $m_1," ","NOT AVAILABLE";
			$flag1=1;
		}
		else {
			echo $m_1," ","NOT AVAILABLE"; 
		}
		}
		if(!empty($m_2)&&$flag2==0 && $row['name']==$m_2){
		if($row['name']==$m_2)
		{
			$q_2=$row['quantity'];
			if($q_2-$q2>=0)
			{
			  $q_2=$q_2-$q2;
			  $db->query("UPDATE medicines SET quantity = '{$q_2}' WHERE name = '{$m_2}'");
			 
			}
			else echo $m_2," ","NOT AVAILABLEpo";
			 $flag2=1;
		}
		else {
			echo $m_2," ","NOT AVAILABLE"; 
		}
		}
		if(!empty($m_3)&&$flag3==0 && $row['name']==$m_3){
		if($row['name']==$m_3)
		{
			$q_3=$row['quantity'];
			if($q_3-$q3>=0)
			{
			  $q_3=$q_3-$q3;
			  $db->query("UPDATE medicines SET quantity = '{$q_3}' WHERE name = '{$m_3}'");
			 
			}
			else echo $m_3," ","NOT AVAILABLE";
			 $flag3=1;
		}
		else {
			echo $m_3," ","NOT AVAILABLE"; 
		
		}
		}
		if(!empty($m_4)&&$flag4==0 && $row['name']==$m_4){
		if($row['name']==$m_4)
		{
			$q_4=$row['quantity'];
			if($q_4-$q4>=0)
			{
			  $q_4=$q_4-$q4;
			  $db->query("UPDATE medicines SET quantity = '{$q_4}' WHERE name = '{$m_4}'");
			 
			}
			else echo $m_4," ","NOT AVAILABLE";
			 $flag4=1;
		}
		else {
			echo $m_4," ","NOT AVAILABLE"; 
		  
		}
		}
		if(!empty($m_5)&&$flag5==0 && $row['name']==$m_5){
		if($row['name']==$m_5)
		{
			$q_5=$row['quantity'];
			if($q_5-$q5>=0)
			{
			  $q_5=$q_5-$q5;
			  $db->query("UPDATE medicines SET quantity = '{$q_5}' WHERE name = '{$m_5}'");
			 
			}
			else echo $m_5," ","NOT AVAILABLE";
			 $flag5=1;
		}
		else {
			echo $m_5," ","NOT AVAILABLE"; 
		   
		}
		}
	}
	echo "Prescription".'</br>';
	if($flag1==1)
		echo $m_1," ",$q1,'</br>';
	if($flag2==1)
		echo $m_2," ",$q2,'</br>';
	if($flag3==1)
		echo $m_3," ",$q3,'</br>';
	if($flag4==1)
		echo $m_4," ",$q4,'</br>';
	if($flag5==1)
		echo $m_5," ",$q5,'</br>';
	if(!empty($_POST['suggestions']))
	echo $_POST['suggestions'];
  }
?>
<html>
<head><title>Doctor's Pad</title></head>
<body>
<form method="POST" action="doctor_pad.php">
Suggestions:<input type="text" name="suggestions" width="100" height="100"><br>
Medicines Dosage<br>
<input type="text" name="med1"><input type="text" name="dos1"><br>
<input type="text" name="med2"><input type="text" name="dos2"><br>
<input type="text" name="med3"><input type="text" name="dos3"><br>
<input type="text" name="med4"><input type="text" name="dos4"><br>
<input type="text" name="med5"><input type="text" name="dos5"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>

