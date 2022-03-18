<?php      
include('conn.php'); 
if(isset($_POST['submit']))
{
    $name = $_POST['name'];   
    $idnumber = $_POST['idnumber'];  
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];  

$sql="INSERT INTO people(name,idnumber,phone,amount) VALUES('$name','$idnumber','$phone','$amount')";
$result=mysqli_query($con,$sql);
if(($result)){
   // include('index.html');
	echo "Thank you '$name' for investing '$amount' into pie: You will receive a return program via sms in five minutes.";
}
else{

    echo '<script> alert("ERROR:Please insert correct values in all fields!!! ");</script>';

}
}
mysqli_close($con);
 ?>