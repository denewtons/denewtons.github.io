 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pieinvestment</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
<a href="login.php" target="_blank"> LOGIN AGAIN </a>   
<a href="viewcomments.php" target="_blank"> VIEW COMMENTS</a>
<h1>Form to Submit My Remarks</h1>
<center> 
<form method= 'POST' action='insert.php'>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="email">Email Address:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="gender">Gender:</label>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br><br>
  <label for="">Age: </label>
  <select id="age" name="age">
  <option value="under18" selected>Under 18</option>
  <option value="under30">Under 30</option>
  <option value="under60">Under 60</option>
  <option value="over60">Over 60</option>
</select><br><br>
<legend>Please Comment Here</legend>
<label for="comments">Comments/ Remarks: </label><br>
<textarea name="comments"></textarea><br>
 <br>
  <input type="submit" name="submit" value="Submit My Remarks">
</form>
</center>
</body>
</html>