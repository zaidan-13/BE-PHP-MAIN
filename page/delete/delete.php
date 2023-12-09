<?php
include("../../config/config.php");

$id = $_GET["id"];

$deleteQuery = "DELETE FROM member WHERE id= $id";
mysqli_query($mysqli, $deleteQuery);
header("Location: ../../index.php");