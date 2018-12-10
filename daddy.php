<?php
include_once('loginchecker.php');
?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Nothing!</title>
</head>

<body>
<h1>You Are Logged In.</h1>
<button onclick="logout()">Click Me To LogOut.</button>

<script>
function logout(){
    document.write("Logging Out.");
    location.href = 'logout.php';
}
</script>

</body>
<html>