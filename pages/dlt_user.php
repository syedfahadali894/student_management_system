<?php
include ("../connection.php");
include("session.php");



$ids = $_GET['id'];

$sql = "DELETE FROM `login` WHERE `login`.`id` = {$ids}";
$query1 = mysqli_query($con, $sql);
if ($query1) {
    header("Location:index_user.php");
}

?>