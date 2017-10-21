<?php
/**
 * Created by PhpStorm.
 * User: Mozhgan
 * Date: 7/1/15
 * Time: 4:41 PM
 */



if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginphp.php');




}










include('notRatedStudentView.php');

?>