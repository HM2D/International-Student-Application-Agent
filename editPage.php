<?php

include('dblib.php');
include('functions.php');
session_start();

//if(!isset($_SESSION['uname'][2])){

//  header('location:loginf.php');

//}



if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginf.php');




}



$MasterId = $_SESSION["uname"][0];////needs verification
$id =$_SESSION['editId'];
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



$query = "select * from Interview where sid='$id' ";
$rs = db_query($query,$con);

if($rs){
    $row = $rs->fetch_assoc();
    $interDate=$row['date'];
}


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

if(isset($_POST['edit'])){

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
    $bookswritten = $_POST['bookWritten'];
    $translation = $_POST['translation'];
    $other = $_POST['other'];
    $information = $_POST['information'];
    $shiveRaftar = $_POST['shiveRaftar'];
    $estedlal = $_POST['estedlal'];
    $bayan = $_POST['bayan'];

    $totalInterview = $bayan + $estedlal + $shiveRaftar + $information;
    $con = db_connection();
    $total = $experience + $thesis + $bachelorDegree + $bachelorAverage + $bachelorUni + $associateAverage + $associateDegree + $associateUni + $translation + $bookswritten + $invention + $project + $degreelanguage + $article2 + $article1 + $festival + $olympiad + $totalInterview;
    $query =  "update Grade set experience=$experience,thesis=$thesis,bachelorDegree=$bachelorDegree,associatedEGREE='$associateDegree',translation='$translation',BOOKwRITTEN='$bookswritten',INVENTION='$invention',PROJECT='$project',DEGREELANGUAGE='$degreelanguage',ARTICLES='$article1',FESTIVAL='$festival',SCIENTIFICOLYMPIAD='$olympiad',other='$other',article2='$article2',conferance='$conferance',bachelorAverage='$bachelorAverage',associateAverage='$associateAverage',total='$total'
                       where  sid = $id ";

    $rs = db_query($query,$con);

    $query = "update interview
    set grade=$total,information=$information,behavior=$shiveRaftar,speech=$bayan,thought=$estedlal  where sid=$id";
    $rs = db_query($query,$con);

    $query = "update student
    set eterazCheck = 1 , eterazOk=1 where student = '$id'";
    $rs = db_query($query,$con);

    header('location:facultyFirst.php');

}

$query = "select * from grade where sid='$id'";
$rs = db_query($query,$con);



if($rs) {

    $row = $rs->fetch_assoc();
    echo "ok";
    $other = $row['other'];
    echo $id;
    echo $row['other'];
    echo $row['bookWritten'];

    $bookWritten = $row['bookWritten'];
    $invention = $row['invention'];
    $olympiad = $row['scientificOlympiad'];
    $project = $row['project'];
    $festival = $row['festival'];
    $article = $row['articles'];
    $article2 = $row['article2'];
    $bachelorDegree = $row['bachelorDegree'];
    $associateDegree = $row['associateDegree'];
    $experience = $row['experience'];
    $conferance = $row['conferance'];
    $degreeLanguage=$row['degreeLanguage'];
    $thesis = $row['thesis'];
    $translation=$row['translation'];
    $bachelorAverage = $row['bachelorAverage'];
    $associateAverage = $row['associateAverage'];
    $bachelorUni = $row['bachelorUni'];
    $associateUni = $row['associateUni'];

}


$query = "select * from Interview where sid='$id'";
$rs = db_query($query,$con);


if($rs) {

    $row = $rs->fetch_assoc();
    $information=$row['information'];
    $behavior=$row['behavior'];
    $speech=$row['speech'];
    $thought=$row['thought'];






}






if(isset($_POST['noEdit'])){

    $query = "update student
    set eterazCheck = 1,eterazok=0 where student.id = '$id'";

    $rs = db_query($query,$con);

    header('location:facultyFirst.php');


}



if(isset($_POST['documents'])){

    header('location:documents.php');




}








include("editPageView.php");
//include('debug.php');

?>
