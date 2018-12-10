<?php
session_start();

if (!isset($_SESSION['id'])){
    header ("Location: index.php"); //Takes you back to the login screen if not signed in
}
?>