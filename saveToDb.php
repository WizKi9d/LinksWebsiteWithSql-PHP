<?php

$user = 'root';
$password = '';
$db = 'links';

$linkname = $_POST['linkname'];
$link = $_POST['link'];
$linkoption = $_POST['linkoption'];

$conn = new mysqli('localhost', $user, $password, $db);

if($conn-> connect_error) {
  die("connection failed; ". $conn-> connect_error);
}

$sql = "INSERT INTO `tbl_links` (`LinkOption`, `LinkName`, `LinkUrl`) VALUES ('$linkoption', '$linkname', '$link')";

if (mysqli_query($conn, $sql)) {
  echo json_encode("New record created successfully");
} else {
  echo json_encode("Error: " . $sql . "<br>" . mysqli_error($conn));
}

$conn->close();

?>
