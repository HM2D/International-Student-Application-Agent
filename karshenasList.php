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


if(isset($_POST['logOut'])){

    session_destroy();
    header('location:loginf.php');




}



$MSG='';
$majorTmp='';
$counter = 1;
$ostadString = '';
$con = db_connection();
$major = $_SESSION['uname'][3];
$id = $_SESSION['uname'][0];
$fullName = $_SESSION['uname'][1];
$bakhsh=$_SESSION['uname'][7];

$query = "select * from faculty where role = 1 and bakhsh='$bakhsh' ";
$rs = db_query($query,$con);
if($rs){


    while($row = $rs->fetch_assoc())
{
      $ostadString .= '<option value="'. $row['ID'] .'">'. $row['fullName']. '        ---------- کد:' . $row['ID']   . '</option>';



}}

$x = bakhshMapping($bakhsh);
for($i=0;$i<6;$i++) {
    if (isset($x[$i])) {
        $query = "select * from student where ok='0' and student.major = '$x[$i]'";
        $rs = db_query($query, $con);


        if ($rs) {
            while ($urow = $rs->fetch_assoc()) {

                $fullNameStudent = $urow['fullName'];
                $studentMajor = $urow['major'];
                $studentId = $urow['ID'];
                $tel = $urow['telNumber'];
                $majorTmp = majorMapping($studentMajor);


                $MSG .= '<tr class="gradeA"><form method="post">

                                             <td align="center">' . '<input type="date" name="interDate" >' . '</td>

                                             <td align="center">' . '<input type="text" name="masterId" >' . '</td>

                                              <td align="center">' . $fullNameStudent . '</td>

                                                <td align="center">' . $majorTmp . '</td>

                                             <td align="center">' . $tel . '</td>

                                            <td align="center"><form method="post">' . "<button name='see' value='$studentId' type='submit'>تایید</button></form>" . '</form>' . '</td>


                                        </tr>';

                $counter = $counter + 1;

            }


        }
    }
}

while($row = $rs->fetch_assoc()){
    $name = $rs['fullName'];



}













if(isset($_POST['see'])){
    $id=$_POST['see'];

    $date=$_POST['interDate'];
    $master=$_POST['masterId'];
    echo $date ." ".$master." ".$id ;

    $query2 = "insert into interview (SID,masterId,date) values ($id,$master,$date)";
    $rs2 = db_query($query2,$con);




    $query = "update student set ok='1' where id=$id";
    $rs = db_query($query,$con);
    //echo $date;

    header('location:karshenasList.php');

}





include("test.php");
