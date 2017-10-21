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

$major = $_SESSION['uname'][3];
$id = $_SESSION['uname'][0];
$fullName = $_SESSION['uname'][1];

if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginf.php');




}





$con = db_connection();
$query = "select * from faculty where id!=$id and role!=3";
$con = db_connection();
$rs = db_query($query,$con);



if($rs){
    while($urow = $rs->fetch_assoc()){

        $fullNameStudent=$urow['fullName'];
        $studentMajor=$urow['major'];
        $studentId=$urow['ID'];
        $deg=$urow['degree'];

        $majorTmp=majorMapping($studentMajor);



        $MSG .=  '<tr class="gradeA">



                                              <td align="center">'.$fullNameStudent.'</td>

                                            <td align="center">'.$majorTmp.'</td>

                                             <td align="center">'.$deg.'</td>

                                            <td align="center"><form method="post">'."<button name='see' value='$studentId' type='submit'>دانشجویان</button>".'</form>'.'</td>


                                        </tr>';

        $counter=$counter+1;

    }


}else
    echo "why!";



while($row = $rs->fetch_assoc()){
    $name = $rs['fullName'];



}



if(isset($_POST['see'])){
    $_SESSION['FacultyID'] = $_POST['see'];

    header('location:bigStudent.php');

}


























include("bigFacultyView.php");
//include("debug.php");