<?php

$Name=$_POST['user'];
$Email=$_POST['ema'];
$number=$_POST['num'];
$Person=$_POST['per'];
$Date=$_POST['dat'];
$Time=$_POST['tim'];
$Food=$_POST['foo'];
$Drink=$_POST['dri'];
//checking for empty
if(!empty($Name)|| !empty($Email)|| !empty($number)|| !empty($Person)|| !empty($Date)|| !empty($Time)|| !empty($Food)|| !empty($Drink)){
	$server="localhost";
	$username="root";
	$password="";
	$dbname="event";
	// create connection
	$conn=new mysqli($server,$username,$password,$dbname);
	if(mysqli_connect_error())

	{
		die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$SELECT="SELECT email from register where email=? limit 1";
		$INSERT="INSERT into register(name,email,phnumber,person,Doe,Toe,food,drink) values('$Name','$Email','$number','$Person','$Date','$Time','$Food','$Drink')";
		//prepare statement
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$Email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum=$stmt->num_rows;
		if($rnum==0){
			$stmt->close();
			$stmt=$conn->prepare($INSERT);

			$stmt->bind_param("ssiissss",$Name,$Email,$number,$Person,$Date,$Time,$Food,$Drink);
			$stmt->execute();
			echo"<font color='red'>new record inserted successfully";
		}
		else{
			echo"<font color='red'>you hav already send mail";
		}
		$stmt->close();
		$conn->close();
	}
}
else{
	echo"all field are required";
	die();
}
?>