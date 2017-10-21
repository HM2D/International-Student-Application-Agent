<?php 

include('dblib.php');
session_start();

//if(!isset($_SESSION['uname'][2])){

  //  header('location:loginf.php');

//}
$MasterId = $_SESSION["uname"][0];////needs verification
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
$query = "select * from major where id='$majornumber'";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
$major = $row['value'];
$query = "select * from bachelordegree where sid='$id' ";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
$bachelor = '<td>'.$row['university'].'</td><td>'.$row['average'].'</td><td>'.$row['rank'].'</td><td>'.$row['educationType'].'</td><td>'.$row['documentID'].'</td><td>'.$row['rate'].'</td>';

$query = "select * from associatedegree where sid='$id' ";
$row = $rs->fetch_assoc();
$rs = db_query($query,$con);
$associate = '<td>'.$row['university'].'</td><td>'.$row['average'].'</td><td>'.$row['rank'].'</td><td>'.$row['educationType'].'</td><td>'.$row['documentID'].'</td><td>'.$row['rate'].'</td>';



$query = "select * from interview where sid='$id' ";
$row = $rs->fetch_assoc();
$rs = db_query($query,$con);
$interDate = $row['date'];
$speech = $row['speech'];
$estedlal = $row['thought'];
$shiveRaftar = $row['behaviour'];
$information = $row['information'];
$masterID = $row['masterID'];
$query = "select * from faculty where id='$MasterId'";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
$masterName = $row['fullName'];
$query = "select * from grade where id='$id'";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
$other = $rs['other'];
$translation = $rs['translation'];
$bookswritten= $rs['bookwritten'];
$invention = $rs['invention'];
$olympiad = $rs['scientificOlympiad'];
$project = $rs['project'];
$festival = $rs['festival'];
$article = $rs['articles'];
$article2 = $rs['article2'];
$bachelorDegree = $rs['bachelorDegree'];
$associateDegree = $rs['associateDegree'];
$experience = $rs['experience'];
$conferance = $rs['conferance'];
$thesis = $rs['thesis'];
$bachelorAverage = $rs['bachelorAverage'];
$associateAverage = $rs['associateAverage'];
$bachelorUni = $rs['bachelorUni'];
$associateUni = $rs['associateUni'];



include('rateBoss.php');

?>