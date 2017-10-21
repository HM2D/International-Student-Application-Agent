<?php
/**
 * Created by PhpStorm.
 * User: Mozhgan
 * Date: 6/16/15
 * Time: 1:58 AM
 */
include('dblib.php');
session_start();

$fmsg='';




if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginf.php');




}

$id = $_SESSION['uname'][0];
$fullName=$_SESSION['uname'][1];
$role = $_SESSION['uname'][2];
$major = $_SESSION['uname'][3];

$degree = $_SESSION['uname'][4];

$query = "SELECT * FROM major where id='$major'";
$con = db_connection();
$rs = db_query($query,$con);

$user = mysqli_fetch_row($rs);
$majorVal=$user[0];

$fmsg=$fullName."  ,  ".$degree."   ".$majorVal;


if(isset($_POST['go'])) {

    header('location:bigFaculty.php');
}


if(isset($_POST['go3'])) {

    header('location:bigRate.php');
}





include("bigFirstView.php");
//include("debug.php");


?>