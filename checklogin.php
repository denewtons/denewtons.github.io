<?php      
    include('conn.php');  
    $username = $_POST['uname'];  
    $password = $_POST['pass']; 

      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  

        //qwery database if details are inserted successfully      
        $sql = "select * from pie where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
		
			header('Location:payment.php');
			 echo '<script> alert("Login successful");</script>';
        }  
        else{  
			include('login.php');
            echo 'username of password is wrong.';  
        }     
?>  