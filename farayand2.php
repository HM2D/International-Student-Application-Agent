<?php
/**
 * Created by PhpStorm.
 * User: Mozhgan
 * Date: 6/15/15
 * Time: 2:08 PM
 */

session_start();
include('dblib.php');
$MSG='';
$majorTmp='';
$counter = 1;
$major = $_SESSION['uname'][3];
$id = $_SESSION['uname'][0];
$fullName = $_SESSION['uname'][1];
$con = db_connection();
$query = "select * from student where major='$major' and graded='0'";
$con = db_connection();
$rs = db_query($query,$con);

;

if($rs){
    while($urow = $rs->fetch_assoc()){

        $fullNameStudent=$urow['fullName'];
        $studentMajor=$urow['major'];
        $studentId=$urow['ID'];



        $query1 = "select * from major where ID='$studentMajor'";
        $rs1 = db_query($query1,$con);
        $urow1 = $rs1->fetch_assoc();
        $majorTmp=$urow1['value'];

        $MSG .=  '<tr class="gradeA">

                                             <td align="center">'.$counter.'</td>

                                              <td align="center">'.$fullNameStudent.'</td>

                                            <td align="center">'.$majorTmp.'</td>


                                        </tr>';

        $counter=$counter+1;

    }


}else
    echo "why!";



while($row = $rs->fetch_assoc()){
    $name = $rs['fullName'];



}






























include("farayand2View.php");
//include("debug.php");