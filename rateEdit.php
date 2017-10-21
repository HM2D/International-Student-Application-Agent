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
$bookswritten = $_POST['bookswritten'];
$translation = $_POST['translation'];
$other = $_POST['other'];
$information = $_POST['information'];
$shiveRaftar = $_POST['shiveRaftar'];
$estedlal = $_POST['estedlal'];
$bayan = $_POST['bayan'];
 $interviewDate = $_POST['interviewDate'];
$totalInterview = $bayan + $estedlal + $shiveRaftar + $information;
    $con = db_connection();
    $total = $experience + $thesis + $bachelorDegree + $bachelorAverage + $bachelorUni + $associateAverage + $associateDegree + $associateUni + $translation + $bookswritten + $invention + $project + $degreelanguage + $article2 + $article1 + $festival + $olympiad + $totalInterview;
   $query =  "update Grade
				      set experience='$experience',thesis='$thesis',bachelorDegree='$bachelorDegree',associatedEGREE='$associateDegree',TRANSLATION='$translation',BOOKwRITTEN='$bookswritten',INVENTION='$invention',PROJECT='$project',DEGREELANGUAGE='$degreelanguage',ARTICLES='$article1',FESTIVAL='$festival',SCIENTIFICOLYMPIAD='$olympiad',unikarshenasi='$bachelorUni',uniKardani='$associateUni',other='$other',article='$article2',conferance='$conferance',bachelorAverage='$bachelorAverage',associateAverage='$associateAverage',bachelorUni='$bachelorUni',associateUni='$associateUni',total='$total'
                       where  sid = '$id' ";

    $rs = db_query($query,$con);
    $query = "update interview
    set totalInterview= '$totalInterview' where sid='$id'";
    $rs = db_query($query,$con);
    $query = "update student
    set eterazChek = 1 where student = '$id'";
    $rs = db_query($query,$con);



}

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




include('rateviewtest.php');

?>