<?php
include ("../connection.php");

session_start();
if (isset($_SESSION['admin']) == null) {
  header("Location: ../login.php");
}
?>