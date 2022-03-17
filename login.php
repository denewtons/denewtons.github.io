<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <form action="checklogin.php" method="post">
        <h2>LOGIN</h2>
        <label>Username:</label>
        <input type="text" name="uname"><br><br>
        <label>Password:</label>
        <input type="password" name="pass"><br> 
        <input type="submit" name="submit" value= "Login"><br>
        <h4>Have no account: <a href="register.php">Sign Up</a></h4>
     </form>
</body>
</html>