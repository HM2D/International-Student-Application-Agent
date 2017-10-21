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
$con = db_connection();
$query = "select * from student where major='$major' and graded='1' and eterazcheck='0'";
$con = db_connection();
$rs = db_query($query,$con);


if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginf.php');




}




if($rs){
    while($urow = $rs->fetch_assoc()){

        $fullNameStudent=$urow['fullName'];
        $studentMajor=$urow['major'];
        $studentId=$urow['ID'];
        $majorTmp=majorMapping($studentMajor);




        $MSG .=  '<tr class="gradeA">

                                             <td align="center">'.$counter.'</td>

                                              <td align="center">'.$fullNameStudent.'</td>

                                            <td align="center">'.$majorTmp.'</td>

                                            <td align="center"><form method="post">' . "<button name='see' value='$studentId' type='submit'>تایید</button></form>" . '</form>' . '</td>


                                        </tr>';

        $counter=$counter+1;

    }


}else
    echo "why!";






if(isset($_POST['see'])){
    $_SESSION['editId']=$_POST['see'];

    header('location:editPage.php');


}






include("editView.php");
//include("debug.php");
?>