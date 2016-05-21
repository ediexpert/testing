<?php session_start();
include("connection.php");
 
 session_destroy();
?>
<script> window.location.href = "signin.php" ;</script>