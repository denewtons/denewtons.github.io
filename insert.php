<?php
// database connection code
$db = mysqli_connect('localhost', 'password','payment');
$con = mysqli_connect('localhost', 'root', '','payment');
$Name = $_POST['Name'];
$ID_NO = $_POST['ID_NO'];
$Phone = $_POST['phone'];
$Amount = $_POST['Amount'];

// database insert SQL code
$sql = "INSERT INTO payment (`Name`, `ID_NO`, `phone`, `Amount`) VALUES ('Name','ID_NO' , 'phone', 'Amount')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Investment received successfully";
}
else{
    echo "incorrect details, try again";
}

?>