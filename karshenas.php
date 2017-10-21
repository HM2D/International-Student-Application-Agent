<?php
/**
 * Created by PhpStorm.
 * User: Mozhgan
 * Date: 6/25/15
 * Time: 11:29 PM
 */

session_start();


if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginf.php');




}




if(isset($_POST['go'])) {

    header('location:karshenasList.php');
}































include("karshenasView.php");

?>