<?php
$linksFile = fopen("links.txt", "a");

$linkname = $_POST['linkname'];
$link = $_POST['link'];

fwrite($linksFile, $linkname);
fwrite($linksFile, ', ');
fwrite($linksFile, $link);

echo json_encode('back');

?>
