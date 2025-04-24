<!DOCTYPE html>
<html lang="en">  
 <link rel="stylesheet" type="text/css" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu</title>
</head>
<body>
    
    <nav>
        <ul>
             <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
<h1>Welcome to My Website</h1>
   <form method="GET" action="">
        <label>Username:</label>
        <input type="text" name="username"><br><br>

        <label>Password:</label>
        <input type="text" name="password"><br><br>

        <input type="submit" value="Login">
    </form>

    <?php
    if (isset($_GET['username']) && isset($_GET['password'])) {
        $username = $_GET['username'];
        $password = $_GET['password'];
        echo "<script>alert('Username: $username | Password: $password');</script>";
    }
    ?>
  </body>
  




</html>
