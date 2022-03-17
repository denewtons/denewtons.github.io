<?php      
include('conn.php'); 
if(isset($_POST['submit']))
{
    $name = $_POST['name'];  
    $email = $_POST['email'];  
    $gender = $_POST['gender'];  
    $age = $_POST['age'];
    $comments = $_POST['comments'];  

$sql1="INSERT INTO people(name,email,gender,age) VALUES('$name','$email','$gender','$age')";
$sql2="INSERT INTO feedback(name,comments) VALUES('$name','$comments')";
$result2=mysqli_query($con,$sql2);
$result1=mysqli_query($con,$sql1);

if(($result1)){
	echo '<script> alert("Feedback well received!!! ");</script>';
	include("loggedin.php");
}
else{

    echo '<script> alert("ERROR:Please insert correct values in all fields!!! ");</script>';

}
}
mysqli_close($con);
 ?>