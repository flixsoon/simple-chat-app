<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:http://localhost/really/Chat"); //to redirect back to "http://localhost/Shop" after logging out
exit();
?>