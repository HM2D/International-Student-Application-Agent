<?php
/**
 * Created by PhpStorm.
 * User: Mozhgan
 * Date: 7/3/15
 * Time: 11:59 AM
 */



if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginphp.php');




}

include('eterazView.php');


?>