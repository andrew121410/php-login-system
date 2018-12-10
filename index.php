<?php
    session_start();

    if(isset($_POST['login'])) {
        include_once("db.php");
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $username = stripslashes($username);
        $password = stripslashes($password);
        
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);

        $password = md5($password);

        $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $id = $row['id'];
        $db_password = $row['password'];

        if($password == $db_password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header("Location: daddy.php");
        } else {
            echo "You didn't enter the correct details!";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1 id="logintowebsitetext">Login to website.</h1>

<form class="form" action="index.php" enctype="multipart/form-data" method="post">
<input name="username" type="text" autofocus="" placeholder="Username" id="usernamebox" /> <br /> 
<input name="password" type="password" placeholder="Password" id="passwordbox" /><br> 
<input name="login" type="submit" value="Login" id="loginbox" />
<br>
<br>
<input onclick="signup()" name="signup1" type="submit" value="Click me to sign up!" id="clickmetosignupbox"></form>
    
    <script>
    function signup(){
        document.write("Signing Up Page..");
    location.href = 'signup.php';
    }
    </script>
    
</body>
</html>