<?php 
if(isset($_GET['id']))
{
include ("connect.php");

$id = $_GET['id'];
$sql = "SELECT name, type, size, path FROM upload WHERE id = '$id'";
$res=$conn->query($sql); 
$row = mysqli_fetch_array($res);
$name=$row['name'];
$size=$row['size'];
$type=$row['type'];
$filePath=$row['path'];
header("Content-Disposition: attachment; filename=$name");
header("Content-length: $size");
header("Content-type: $type");

readfile($path);

exit;
}
?>