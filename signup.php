<?php
session_start();

if(isset($_POST['signup'])) {
    include_once("db.php");

$username = $_POST['username'];
$password = $_POST['password'];

$password = md5($password);

$id = '0';

$sql = "INSERT INTO users (id, username, password) VALUES ('$id', '$username', '$password')";
$result = $db->query($sql);
header("Location: index.php");
}
?>

<!DOCTYPE html>
<html
>
<head>
    <meta charset="UTF-8">
    <title>Sign UP</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>

<h1 style="text-align:center;color:blue;margin-left:30px">SignUP for website.</h1>
    <form style="text-align:center;" action="signup.php" method="post" enctype="multipart/form-data">
        <input placeholder="Username" name="username" type="text" autofocus>
        <br>
        <input placeholder="Password" name="password" type="password">
        <br>
        <input name="signup" type="submit" value="Sign UP" id="clickmetosignupbox">
    </form>

</body>
</html>