<?php

include('dblib.php');
include('functions.php');
session_start();




if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginf.php');




}


//if(!isset($_SESSION['uname'][2])){

//  header('location:loginf.php');

//}
$MasterId =$_SESSION['FacultyID'];////needs verification
$id = $_SESSION['SID'];
$con = db_connection();
$query = "select * from student where ID='$id'";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
$gender = $row['gender'];
$fullName = $row['fullName'];
$tel = $row['telNumber'];
$email = $row['email'];
$majornumber = $row['major'];
$majorString = majorMapping($majornumber);
$query = "select * from major where id='$majornumber'";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
$major = $row['value'];
$query = "select * from bachelordegree where sid='$id' ";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
if($row['educationType']==1){
    $eduType = "روزانه";
}else $eduType = "شبانه";
if($row['rank']==4){
    $rank = ">3";
}else $rank = $row['rank'];
$bachelor = '<td>'.$row['university'].'</td><td>'.$row['average'].'</td><td>'.$rank.'</td><td>'.$eduType.'</td><td>'.$row['documentID'].'</td><td>'.$row['date'].'</td>';

$query = "select * from associatedegree where sid='$id' ";

$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
if($row['educationType']==1){
    $eduType = "روزانه";
}else $eduType = "شبانه";
if($row['rank']==4){
    $rank = ">3";
}else $rank = $row['rank'];
$associate = '<td>'.$row['university'].'</td><td>'.$row['average'].'</td><td>'.$rank.'</td><td>'.$eduType.'</td><td>'.$row['documentID'].'</td><td>'.$row['date'].'</td>';



$query = "select * from interview where sid='$id' ";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();

$interDate = $row['date'];

//echo $interDate;
$speech = $row['speech'];
$estedlal = $row['thought'];

$shiveRaftar = $row['behavior'];
$information = $row['information'];
$masterID = $row['masterID'];

$query = "select * from faculty where id='$MasterId'";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
$masterName = $row['fullName'];

$query = "select * from grade where id='$id'";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
$other = $row['other'];
$translation = $row['translation'];
$bookswritten= $row['bookWritten'];
$invention = $row['invention'];
$olympiad = $row['scientificOlympiad'];
$project = $row['project'];
$festival = $row['festival'];
$article = $row['articles'];
$article2 = $row['article2'];
$bachelorDegree =$row['bachelorDegree'];
$associateDegree = $row['associateDegree'];
$experience = $row['experience'];
$conferance =$row['conferance'];
$thesis = $row['thesis'];
$bachelorAverage = $row['bachelorAverage'];
$associateAverage =$row['associateAverage'];
$bachelorUni = $row['bachelorUni'];
$associateUni = $row['associateUni'];



include('bigMarkView.php');
//include('debug.php');
?>