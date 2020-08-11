<?php

$user = 'root';
$password = '';
$db = 'links';

$conn = new mysqli('localhost', $user, $password, $db);

if($conn-> connect_error) {
  die("connection failed; ". $conn-> connect_error);
}

$sql_ls = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'ls')";
$sql_entertainment = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'entertainment')";
$sql_work = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'work')";
$sql_dev = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'dev')";
$sql_design = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'design')";
$sql_other = "SELECT Linkname, LinkUrl FROM `tbl_links` WHERE LinkOption = 'other')";

if (mysqli_query($conn, $sql)) {
  echo json_encode("New record created successfully");
} else {
  echo json_encode("Error: " . $sql . "<br>" . mysqli_error($conn));
}

$conn->close();

?>
