<?php      
    include('conn.php');  
    $username = $_POST['uname'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        //$username = stripcslashes($username);  
        //$password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from pie where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);  
          
        if(mysqli_query($con, $sql)){ 
		
			header('Location:home.html');
		    echo "<p style="."color:yellowgreen;"."> hi $username, wwelcome to pie investment.</p>"; 
        }  
        else{ 
           // include('index.html'); 
            echo "<p style="."color:red;"."> Login failed. Invalid username or password.</p>";  
        }     
?>  