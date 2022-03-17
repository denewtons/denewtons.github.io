<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form action="connection.php" method="post">
        <h2>SIGN UP</h2>
        <label>Username:</label><br>
        <input type="text" name="uname" required><br><br>
        <label>Phone Number:</label><br>
        <input type="tel" name="phone" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="pass" required><br> <br>
        <input type="submit" name="submit" value= "Sign Up."><br><br>
        <h4>Have an account: <a href="login.php">Login.</a></h4>
     </form>
</body>
</html>