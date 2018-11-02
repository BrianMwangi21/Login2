<?php
include "db.php";
session_start();
if (!isset($_SESSION['Email']) && !isset($_SESSION['Password'])) {
    header('location:index.php');
}
?>