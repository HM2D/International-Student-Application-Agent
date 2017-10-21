<?php
session_start();
include('dblib.php');

$con = db_connection();
$query2= "Select content,fileName from ".$_SESSION['table']." where  ID= ".$_SESSION['contentID'];
//echo $_SESSION['contentID'];
//echo $query2;

$result2 = mysqli_query($con,$query2);

$row2 = $result2->fetch_assoc();
//var_dump($row2);
$content = $row2['content'];
$fileName = $row2['fileName'];
//echo $fileName;
//$image1 = '<img src="data:image/jpeg;base64,'.base64_encode( $content ).'"/>';

header('Content-type: application/pdf');
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Content-Disposition: inline;filename='".$fileName."'");
header("Content-length: ".strlen($content));

echo $content;
