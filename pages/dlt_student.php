<?php
include ("../connection.php");
include("session.php");



$ids = $_GET['id'];

$sql = "DELETE FROM `student` WHERE `student`.`id` = {$ids}";
$query1 = mysqli_query($con, $sql);
if ($query1) {
    header("Location:index.php");
}

?>