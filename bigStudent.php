<?php
/**
 * Created by PhpStorm.
 * User: Mozhgan
 * Date: 6/15/15
 * Time: 2:08 PM
 */

session_start();
include('dblib.php');
include('functions.php');
$MSG='';
$majorTmp='';
$counter = 1;

if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginf.php');




}


$major = $_SESSION['uname'][3];
$id = $_SESSION['uname'][0];
$fullName = $_SESSION['uname'][1];

$FID=$_SESSION['FacultyID'];

$con = db_connection();
$query = " select * from student,Interview where student.id=Interview.sid and graded='1' and ok='1' and Interview.masterID=$FID ";
$con = db_connection();
$rs = db_query($query,$con);



if($rs){
    while($urow = $rs->fetch_assoc()){

        $fullNameStudent=$urow['fullName'];
        $studentMajor=$urow['major'];
        $studentId=$urow['SID'];

    $majorTmp = majorMapping($studentMajor);
        $MSG .=  '<tr class="gradeA">

                                             <td align="center">'.$counter.'</td>

                                              <td align="center">'.$fullNameStudent.'</td>

                                            <td align="center">'.$majorTmp.'</td>

                                            <td align="center"><form method="post">'."<button name='see' value='$studentId' type='submit'>نمایش</button>".'</form>'.'</td>


                                        </tr>';

        $counter=$counter+1;

    }


}else
    echo "why!";



while($row = $rs->fetch_assoc()){
    $name = $rs['fullName'];



}



if(isset($_POST['see'])){
    $_SESSION['SID'] = $_POST['see'];

    header('location:bigmark.php');

}


























include("bigStudentView.php");
//include("debug.php");