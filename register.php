<?php
$username = $_POST['username'];
$password = $_POST['password'];

//connect to database
$db = mysqli_connect('localhost', 'password','register');

//insert into database
$query = "INSERT INTO register (username, password) VALUES ('$username', '$password')";
mysqli_execute($db, $query);
$query = mysqli_query($con, $sql);

if($query){
	echo "details received";
}
else{
    echo "incorrect details, try again";
}
?>