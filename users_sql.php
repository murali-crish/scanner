<?php
$con=mysqli_connect("localhost","root","mysql","sunil");
// Check connection
if (mysqli_connect_errno())
  {
  echo  " Database connection Failed";
  }

$sql="INSERT INTO  users (UserID,Username,Password,Name,Address1,Address2,City,State,Pincode,Datecreated,Datemodified,Status)
								VALUES ('$_POST[UserID]','$_POST[Username]','$_POST[Password]','$_POST[Name]','$_POST[Address1]','$_POST[Address2]','$_POST[City]',
								          '$_POST[State]','$_POST[Pincode]','$_POST[Datecreated]','$_POST[Datemodified]','$_POST[Status]')";
								
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>					
