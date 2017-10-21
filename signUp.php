<?php

include('dblib.php');
session_start();


if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginphp.php');




}


//moshakhasate daneshju
if(isset($_POST['nextPage'])){
    $name = $_POST['name'];
    $family = $_POST['family'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $major = $_POST['major'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $userName=$_POST['userName'];
    $fullName = $name . " " . $family;

    $query = "insert into Student (fullName,email,age,major,gender,telNumber,graded,userName,eteraz,eterazCheck,ok) values ('$fullName','$email','$age','$major','$gender','$tel',false,'$userName',0,0,0)";
    $con=db_connection();
    if(db_query($query,$con)){

    }else echo "shit happened";

    //table(kardani,karshenasi)
    $AuniName = $_POST['AUniName'];
    $Aaverage = $_POST['Aaverage'];
    $Arank = $_POST['Arank'];
    $Asystem = $_POST['Asystem'];
    $AducNum = $_POST['AducNum'];
    $AducDate = $_POST['AducDate'];
    $BuniName = $_POST['BUniName'];
    $Baverage = $_POST['Baverage'];
    $Brank = $_POST['Brank'];
    $Bsystem = $_POST['Bsystem'];
    $BducNum = $_POST['BducNum'];
    $BducDate = $_POST['BducDate'];
    $key = "AducContent";
    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);

    $query2="select * from Student where userName='$userName'";
    if($check=db_query($query2,$con)) {
        $tmp = $check->fetch_assoc();
        $sid = $tmp['ID'];
    }else echo "couldn't fetch shit!";
    $query1 = "insert into Associatedegree (sid,educationType,rank,university,date,documentID,content,filename,average) values ('$sid','$Asystem','$Arank','$AuniName','$AducDate','$AducNum','$content','$fileName','$Aaverage')";

    $insert=db_query($query1,$con);

    $key = "BducContent";
    $fileName = $_FILES[$key]['name'];
    $tmpName  = $_FILES[$key]['tmp_name'];
    $fileSize = $_FILES[$key]['size'];
    $imageFileType = $_FILES[$key]['type'];

    $fp  = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);


    $query2 = "insert into bachelordegree (sid,educationType,rank,university,date,documentID,content,filename,average) values ('$sid','$Bsystem','$Brank','$BuniName','$BducDate','$BducNum','$content','$fileName','$Baverage')";
    $insert=db_query($query2,$con);



    fclose($fp);

    $_SESSION['SID'] = $sid;
    $_SESSION['userName']=$userName;
    $_SESSION['fullName']=$name." ".$family;
    header('location:signUp2.php');
}

include('signUpView.php');

//include('debug.php');









?>