<?php
session_start();
include('dblib.php');


if(isset($_POST['test'])){
    $key = "myfile";
    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];
    $con = db_connection();

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);

    $query2 = "insert into test (content,filename) values ('$content','$fileName')";
    $_SESSION['table'] = "test";
    $rs = db_query($query2,$con);
    $query = "select * from test where filename = '$fileName'";
    $rs = db_query($query,$con);
    $row = $rs->fetch_assoc();
    $_SESSION['contentID'] = $row['ID'];
    fclose($fp);
//$image1 = '<img src="data:image/jpeg;base64,'.base64_encode( $content ).'"/>';
   header('location:PDFviewer.php');

}
include('debug.php');
include("test.html");
?>






