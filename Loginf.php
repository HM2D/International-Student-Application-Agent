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
    header('location:loginf.php');




}




if(isset($_POST['Login'])){
    $userName = $_POST['userName'];
    $userName1 = mysql_real_escape_string($userName);
    $pass = $_POST['pass'];
    $pass1 = mysql_real_escape_string($pass);


    $query = "SELECT * FROM faculty where email='$userName1' and pass='$pass1'";
    //echo $query;
    $con = db_connection();
    $rs = db_query($query,$con);



    if($rs){
        $user = mysqli_fetch_row($rs);
        //echo "ok";

       // var_dump($user) ;
        //echo $user;

        $_SESSION['uname'] = $user;
        $id = $_SESSION['uname'][0];
        $fullName=$_SESSION['uname'][1];
        $role = $_SESSION['uname'][2];
        $bakhsh=$_SESSION['uname'][7];

        //$_SESSION['FID'] = $id;
        //$_SESSION['fullName'] = $fullName;



        echo $id . " ".$fullName." ".$role;

        if($role==1){

            header('location:facultyFirst.php');
            $_SESSION['bakhsh']=$bakhsh;

        }
        if($role==2){

            header('location:bigFirst.php');
            $_SESSION['bakhsh']=$bakhsh;

        }
        if($role==3){

            header('location:karshenas.php');
            $_SESSION['bakhsh']=$bakhsh;

        }
        if($role==4){
            header('location:admin.php');


        }


    }else{
        $_SESSION['result'] = " Invalid username or password";
    }


}else
    $_SESSION["result"]= "";

include('loginviewf.php');
//include('debug.php');

?>