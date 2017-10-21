<?php
/**
 * Created by PhpStorm.
 * User: Mozhgan
 * Date: 6/15/15
 * Time: 2:48 PM
 */
include("dblib.php");

session_start();



if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginphp.php');




}



if($_SESSION['SID']) {
    $studentId = $_SESSION['SID'];
    $conn = db_connection();
    $pass = randomPassword();
    $query = "update student set pass='$pass' where ID='$studentId'";
    $q = db_query($query, $conn);

    $fullName = $_SESSION['fullName'];
    $userName = $_SESSION['userName'];

    session_destroy();
}
else{
    header('location:loginphp.php');
}


function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}







include("paymentView.php");





?>