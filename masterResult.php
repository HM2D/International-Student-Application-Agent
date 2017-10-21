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

$major = $_SESSION['uname'][3];
$id = $_SESSION['uname'][0];
$fullName = $_SESSION['uname'][1];
$bakhsh = $_SESSION['uname'][7];

$con = db_connection();

$comboString = '';

 $x = bakhshMapping($bakhsh);

    for ($i = 0; $i < 5; $i++) {
        if (isset($x[$i])) {

            $comboString .= '<option value="' . $x[$i] . '">' . majorMapping($x[$i]) . '</option>';


        } else break;

    }








if(isset($_POST['getmajor'])){


    $majorNumber= $_POST['comboMajor'];
 $query = "select * from student,grade where student.id = grade.sid and student.major='$majorNumber' order by grade.total desc ";
   $rs = db_query($query,$con);
    $urow = $rs->fetch_assoc();

    if($rs){

        while($urow = $rs->fetch_assoc()){


            $fullNameStudent=$urow['fullName'];
            $studentMajor=$urow['major'];
            $studentId=$urow['ID'];
            $MSG .= '<tr class="gradeA">

                                             <td align="center">'.$counter.'</td>

                                              <td align="center">'.$fullNameStudent.'</td>




                                        </tr>' ;

            $counter=$counter+1;

        }


    }else
        echo "why!";


}




    include("masterResultView.php");


    ?>





