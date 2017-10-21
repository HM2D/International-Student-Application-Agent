<?php

include('dblib.php');
include('functions.php');

session_start();


if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginphp.php');




}




//moshakhasate daneshju
if(isset($_POST['send'])){
    $con = db_connection();
    $sid = $_SESSION['SID'];

    for($x=0; $x<=20;$x++){
    //echo $x . "helloy ";

    //english
    if(isset($_POST['englishDes'.$x])){
    $englishDes = $_POST['englishDes'. $x];
    $englishDate = $_POST['englishDate'. $x];
    $englishType = $_POST['englishType' . $x];
    $englishIns = $_POST['englishIns'. $x];
    //echo $x."got in";
    if($_FILES['englishFile'.$x ]['name'] != null){
    uploadattachEng($x,$sid,$englishDate,$englishDes,$englishType,$englishIns);
    }
    }


    //EXp
    if(isset($_POST['expDes'.$x])){
        $expDes = $_POST['expDes'. $x];
        $expCourse = $_POST['expCourse'. $x];
        $expTime = $_POST['expTime' . $x];
        $expDate = $_POST['expDate'. $x];
        $expIns = $_POST['expIns'. $x];
       // echo $x."got in";
        if($_FILES['expFile'.$x ]['name'] != null){
            uploadattachExp($x,$sid,$expDate,$expDes,$expCourse,$expTime,$expIns);
        }
    }




    //thesis
    if(isset($_POST['thDes'.$x])){
        $thDes = $_POST['thDes'. $x];
        $thSub = $_POST['thSub'. $x];
        $thSup = $_POST['thSup' . $x];
        $thDate = $_POST['thDate'. $x];
        //echo $x."got in";
        if($_FILES['thFile'.$x ]['name'] != null){
            uploadattachTh($x,$sid,$thDes,$thSub,$thSup,$thDate);
        }
    }




    //ARTICLE
    if(isset($_POST['artDes'.$x])){
        $artDes = $_POST['artDes'. $x];
        $artType = $_POST['artType'. $x];
        $artDate = $_POST['artDate' . $x];
        //echo $x."got in";
        if($_FILES['artFile'.$x ]['name'] != null){
            uploadattachArt($x,$sid,$artDes,$artDate,$artType);
        }
    }


    //translation
    if(isset($_POST['trDes'.$x])){
        $trDes = $_POST['trDes'. $x];
        $trDate = $_POST['trDate'. $x];
        $trBookName = $_POST['trBookName' . $x];
        $trLan = $_POST['trLan' . $x];
        $trWriter = $_POST['trWriter' . $x];
        //echo $x."got in";
        if($_FILES['trFile'.$x ]['name'] != null){
            uploadattachTr($x,$sid,$trDes,$trDate,$trBookName,$trLan,$trWriter);
        }
    }



    //invention
    if(isset($_POST['inDes'.$x])){
        $inDes = $_POST['inDes'. $x];
        $inDate = $_POST['inDate'. $x];
        //echo $x."got in";
        if($_FILES['inFile'.$x ]['name'] != null){
            uploadattachIn($x,$sid,$inDes,$inDate);
        }
    }



    //festival
    if(isset($_POST['fsDes'.$x])){
        $fsDes = $_POST['fsDes'. $x];
        $fsPlaceTaken = $_POST['fsPlaceTaken'. $x];
        $fsDate = $_POST['fsDate'. $x];
        //echo $x."got in";
        if($_FILES['fsFile'.$x ]['name'] != null){
            uploadattachFs($x,$sid,$fsDate,$fsDes,$fsPlaceTaken);
        }
    }


    //project
    if(isset($_POST['prDes'.$x])){
        $prDes = $_POST['prDes'. $x];
        $prTitle = $_POST['prTitle'. $x];
        $prDate = $_POST['prDate'. $x];
        //echo $x."got in";
        if($_FILES['prFile'.$x ]['name'] != null){
            uploadattachPr($x,$sid,$prDate,$prDes,$prTitle);
        }
    }



    //ScientificOlympiad
    if(isset($_POST['olDes'.$x])){
        $olDes = $_POST['olDes'. $x];
        $olTitle = $_POST['olTitle'. $x];
        $olDate = $_POST['olDate'. $x];
        $olIns = $_POST['olIns'. $x];
        //echo $x."got in";
        if($_FILES['olFile'.$x ]['name'] != null){
            uploadattachOl($x,$sid,$olDes,$olDate,$olIns,$olTitle);
        }
    }



    //BooksWritten
    if(isset($_POST['bookDes'.$x])){
        $bookDes = $_POST['bookDes'. $x];
        $bookTitle = $_POST['bookTitle'. $x];
        $bookDate = $_POST['bookDate'. $x];
        $bookVolume = $_POST['bookVolume'. $x];
        //echo $x."got in";
        if($_FILES['bookFile'.$x ]['name'] != null){
            uploadattachBook($x,$sid,$bookDes,$bookDate,$bookVolume,$bookTitle);
        }
    }



}
    header('location:payment.php');
}

















include('signUpView2.php');

//include('debug.php');



?>