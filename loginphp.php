<?php
/**
 * Created by PhpStorm.
 * User: Mozhgan
 * Date: 6/15/15
 * Time: 2:13 PM
 */
include('dblib.php');

session_start();


if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginphp.php');




}





if(isset($_POST['Login'])){
    $userName = $_POST['userName'];
    $userName1 = mysql_real_escape_string($userName);
    $pass = $_POST['pass'];
    $pass1 = mysql_real_escape_string($pass);

    $query = "SELECT * FROM Student where userName='$userName' and pass='$pass'";
    //echo $query;

    $con = db_connection();
    $rs = db_query($query,$con);



    if($rs){
        $user = mysqli_fetch_row($rs);

        $_SESSION['uname'] = $user;
        $id = $_SESSION['uname'][0];
        $userName2=$_SESSION['uname'][1];


        //$_SESSION['result'] = "hello";
        //header('location:final.php');
        if($_SESSION['uname'][8] == 1){

            header('location:ratedStudent.php');


        }else header('location:notRatedStudent.php');


    }else{
        $_SESSION['result'] = " Invalid username or password";


    }


}else {
    $_SESSION['result'] = "";
}


include('login.php');


?>