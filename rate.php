<?php

include('dblib.php');
include('functions.php');
session_start();

//if(!isset($_SESSION['uname'][2])){

//  header('location:loginf.php');

//}
$string2='';
$rank='';
$string3='';
$MasterId = $_SESSION["uname"][0];////needs verification
$id = $_SESSION['SID'];
$interDate='';
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




if(isset($_POST['grade'])){
    echo "okkkkk";
    $associateAverage = $_POST['associateAverage'];
    $bachelorAverage = $_POST['bachelorAverage'];
    $associateUni = $_POST['associateUni'];
    $bachelorUni = $_POST['bachelorUni'];
    $thesis = $_POST['thesis'];
    $conferance = $_POST['conferance'];
    $experience = $_POST['experience'];
    $bachelorDegree = $_POST['bachelorDegree'];
    $associateDegree = $_POST['associateDegree'];
    $degreelanguage = $_POST['degreeLanguage'];
    $article1 = $_POST['article1'];
    $article2 = $_POST['article2'];
    $festival = $_POST['festival'];
    $project = $_POST['project'];
    $olympiad = $_POST['olympiad'];
    $invention = $_POST['invention'];
    $bookswritten = $_POST['bookswritten'];
    $translation = $_POST['translation'];
    $other = $_POST['other'];
    $information = $_POST['information'];
    $shiveRaftar = $_POST['shiveRaftar'];
    $estedlal = $_POST['estedlal'];
    $bayan = $_POST['bayan'];

    $totalInterview = $bayan + $estedlal + $shiveRaftar + $information;
    $con = db_connection();
    $total = $experience + $thesis + $bachelorDegree + $bachelorAverage + $bachelorUni + $associateAverage + $associateDegree + $associateUni + $translation + $bookswritten + $invention + $project + $degreelanguage + $article2 + $article1 + $festival + $olympiad + $totalInterview;

    $query = "Insert into Grade(sid,experience,thesis,masterID,conferance,bachelorDegree,associatedEGREE,bacheloruni,associateuni,bachelorAverage,associateAverage,TRANSLATION,BOOKwRITTEN,INVENTION,PROJECT,DEGREELANGUAGE,ARTICLES,article2,FESTIVAL,SCIENTIFICOLYMPIAD,other,total) VALUES('$id','$experience','$thesis','$MasterId','$conferance,''$degreeKarshenasi','$degreeKardani','$bachelorUni','$associateUni','$bachelorAverage','$associateAverage','$translation','$bookswritten','$invention','$project','$degreelanguage','$article1','$article2','$festival','$olympiad','$other','$conferance','$total')";
    //other,unikarshenasi,unikardani
    $rs = db_query($query,$con);
    $query = "insert into interview(SID,masterid,GRADE,DATE,information,behavior,speech,thought) values ('$id','$MasterId','$totalInterview','$interviewDate','$information','$shiveRaftar','$bayan','$estedlal')";

    $rs = db_query($query,$con);
    $query = "update student set graded=1 where id=$id";
    $rs = db_query($query,$con);

    header('location:studentList.php');

}




$query = "select * from interview where sid='$id'";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
$interDate = $row['date'];
$string = "";
$fullDes = "";
////////////////////////


if(isset($_POST['documents'])){

    header('location:documents.php');




}




















include('rateview.php');

?>