<?php

include('dblib.php');
include('functions.php');
session_start();


if(isset($_SESSION['msg1'])){
    $msg = $_SESSION['msg1'];


}else $msg = '';

//moshakhasate daneshju
if(isset($_POST['nextPage'])){

    $bakhsh = '';
    $name = $_POST['name'];
    $family = $_POST['family'];
    $major = $_POST['major'];
    $email = $_POST['email'];
    $fullName = $name . " " . $family;
    $role = $_POST['role'];
    $degree = $_POST['madrak'];
    $pass = $_POST['pass'];
    for($x=0;$x < 68 ; $x++){
        $y = bakhshMapping($x);
        for($z=0;$z<5;$z++){
            if(isset($y[$z]) && $y[$z]== $major)
            {
                $bakhsh = $x;

            }


        }
    }

    $query = "insert into Faculty (fullname,role,major,degree,email,pass,bakhsh) values ('$fullName','$role','$major','$degree','$email','$pass','$bakhsh')";


    $con=db_connection();
    $rs = db_query($query,$con);
   $_SESSION['msg1'] = "با موفقیت انجام شد";

}



include('AdminSignUp.php');

//include('debug.php');









?>