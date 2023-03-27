<?php
	$Name = $_POST['Name'];
	$Address = $_POST['Address'];
	$EMail = $_POST['EMail'];
	$Password = $_POST['Password'];
	$Telephone = $_POST['Telephone'];
	$Subject = $_POST['Subject'];
	$Comment = $_POST['Comment'];

$conn = new mysqli('localhost','root','','php');
$sql="INSERT INTO forms(Name,Address,EMail,Password,Telephone,Subject,Comment) VALUES('$Name','$Address','$EMail','$Password','$Telephone','$Subject','$Comment')";
$ss=mysqli_query($conn,$sql);
if($ss){
	echo "Form submited";
}
else{
	echo "Form not submited";
}
mysqli_close($conn);
?>