<?php
session_start();
unset($_SESSION['amish']);
session_destroy();
header("Location:login");
?>