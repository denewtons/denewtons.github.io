<?php      
    include('conn.php');  
    $username = $_POST['uname']; 
    $phonenumber = $_POST['phone']; 
    $password = $_POST['pass']; 

      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $phonenumber = stripcslashes($phonenumber);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  

        //insert into database user details
        $sql = "INSERT INTO pie (username, phonenumber, password) VALUES ('$username','$phonenumber' ,'$password' )";
        $results = mysqli_query($con, $sql);
        if (mysqli_query($con, $sql)){
            header('Location:payment.php');
			 echo 'Hi $username, welcome to pie investment';
        }
        
        if (isset($_POST['username_check'])) {
            $username = $_POST['username'];
            $sql = "SELECT * FROM pie WHERE username='$username'";
            $results = mysqli_query($con, $sql);
            if (mysqli_num_rows($results) > 0) {
              echo "taken";	
            }else{
              echo 'not_taken';
            }
            exit();
        }
        if (isset($_POST['phonenumber_check'])) {
            $phonenumber = $_POST['phonenumber'];
            $sql = "SELECT * FROM users WHERE phonenumber='$phonenumber'";
            $results = mysqli_query($con, $sql);
            if (mysqli_num_rows($results) > 0) {
              echo "taken";	
            }else{
              echo 'not_taken';
            }
            exit();
        }
        if (isset($_POST['save'])) {
            $username = $_POST['username'];
            $phonenumber = $_POST['phonenumber'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM pie WHERE username='$username'";
            $results = mysqli_query($con, $sql);
            if (mysqli_num_rows($results) > 0) {
              echo "exists";	
              exit();
            }
        } 
?>  