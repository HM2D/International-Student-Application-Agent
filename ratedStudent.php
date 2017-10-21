<?php
session_start();
include('dblib.php');
$con = db_connection();
$counter = 1;
$kol='';


if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginphp.php');




}
if(isset($_SESSION['msg'])){

    $msg = $_SESSION['msg'];
}else $msg='';

$userName = $_SESSION['uname'][1];
$id = $_SESSION['uname'][0];
$major = $_SESSION['uname'][5];
$fullName = $_SESSION['uname'][2];

$query = "SELECT * FROM Grade,student where student.ID = grade.SId and student.major=$major order by grade.total desc ";
$rs = db_query($query,$con);

$query1="Select Count(student.id) as Tedad from Grade,student where student.ID = grade.SId and student.major=$major";
$rs1 = db_query($query1,$con);
if($rs1){
    $row1 = $rs1->fetch_assoc();
    $kol=$row1['Tedad'];
}

if($rs) {

    while ($row = $rs->fetch_assoc()) {

        if ($row['SID'] == $id) {


            break;


        } else $counter = $counter + 1;


    }
}

$rate = $counter;


if(isset($_POST['eteraz'])){

    $query = "update student set eteraz='1' where id=$id";
    echo $id;
    $rs = db_query($query,$con);
    echo $query;

    header('location:eteraz.php');



}



if(isset($_POST['pEteraz'])){

    $query = "select * from student where id=$id";
    $rs = db_query($query,$con);
    if($rs){
        $row = $rs->fetch_assoc();
        if($row['eterazOk']==1){

            $_SESSION['msg']="اعتراض شما با موفقیت انجام شد";
            header('location:ratedStudent.php');


        }else{

            header('location:eterazNOT.php');

        }

    }



}







include('ratedStudentView.php');
//include('debug.php');

?>