<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
{
$sessname= $_SESSION['username'];
$conn= mysqli_connect("localhost", "root", "");
$db= mysqli_select_db($conn, "project");
$query= mysqli_query($conn, "SELECT shop_id FROM repair_services where username='$sessname'");
$row = $query->fetch_assoc();
$sess_id=$row['shop_id'];
}
?>
