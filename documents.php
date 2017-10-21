<?php
/**
 * Created by PhpStorm.
 * User: HM2D
 * Date: 7/3/15
 * Time: 9:28 AM
 */
include('dblib.php');

session_start();

$string2='';
$string3='';
$string = '';
$MasterId = $_SESSION["uname"][0];////needs verification
$id = $_SESSION['SID'];
$interDate='';
$con = db_connection();

$query = "select * from student where ID='$id'";
$rs = db_query($query,$con);
$row = $rs->fetch_assoc();
$gender = $row['gender'];
$fullName = $row['fullName'];
$query = "select * from associateDegree where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){

    $_SESSION['table'] = "associateDegree";
    $_SESSION['contentID'] = $row['ID'];


    $string3 .= ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right: -15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">مدرک کاردانی</font>



             </span><iframe src="data:image/jpeg;base64,'.base64_encode( $row['content'] ).'" style="width:600px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}






$query = "select * from bachelorDegree where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){

    $_SESSION['table'] = "BachelorDegree";
    $_SESSION['contentID'] = $row['ID'];


    $string3 .= ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right: -15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">مدرک کارشناسی</font>



             </span><iframe src="data:image/jpeg;base64,'.base64_encode( $row['content'] ).'" style="width:600px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}








/////thesis
$query = "select * from thesis where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){

    $_SESSION['table'] = "thesis";
    $_SESSION['contentID'] = $row['ID'];

    $fullDes = $row['description']. "\r\n تاریخ: " . $row['date'] . "\r\n استاد مشاور". $row['supervisor'] ;
    $string2 = ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right: -15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">پایان نامه</font>


<textarea style="width:270px; height:180px; float:right; margin-right: 20px; margin-top: 50px;">'. $fullDes .'</textarea><button name="thesis" value='.$row['ID'].'  class="active" type="submit"  style="float: right; margin-right: -150px; margin-top: 270px;">مشاهده کامل</button>


             </span><iframe src="data:image/jpeg;base64,'.base64_encode( $row['content'] ).'" style="width:320px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}
////degreeLanguage
$query = "select * from degreeLanguage where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){

    $_SESSION['table'] = "degreeLanguage";
    $_SESSION['contentID'] = $row['ID'];

    $fullDes = $row['description']. "\r\n تاریخ: " . $row['date'] . "\r\n نوع". $row['type'];
    $string2 .= ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right: -15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">مدرک زبان</font>


<textarea style="width:270px; height:180px; float:right; margin-right: 20px; margin-top: 50px;">'. $fullDes .'</textarea><button name="degreeLanguage" value='.$row['ID'].' type="submit" class="active" style="float: right; margin-right: -150px; margin-top: 270px;">مشاهده کامل</button>


             </span><iframe src="data:image/jpeg;base64,'.base64_encode( $row['content'] ).'" style="width:320px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}

///BooksWritten
$query = "select * from BooksWritten where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){

    $_SESSION['table'] = "Bookswritten";
    $_SESSION['contentID'] = $row['ID'];

    $fullDes = $row['description']. "\r\n تاریخ: " . $row['date'] . "\r\n موضوع". $row['title'];
    $string .= ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right: -15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">تالیف کتاب</font>


<textarea style="width:270px; height:180px; float:right; margin-right: 20px; margin-top: 50px;">'. $fullDes .'</textarea><button name="BooksWritten" value='.$row['ID'].' class="active" type="submit" style="float: right; margin-right: -150px; margin-top: 270px;">مشاهده کامل</button>


             </span><iframe src="PDFviewer.php" style="width:320px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}
///ScientificOlympiad
$query = "select * from ScientificOlympiad where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){

    $_SESSION['table'] = "ScientificOlympiad";
    $_SESSION['contentID'] = $row['ID'];

    $fullDes = $row['description']. "\r\n تاریخ: " . $row['date'] . "\r\n موضوع". $row['title'];
    $string2 .= ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right: -15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">المپیاد علمی</font>


<textarea style="width:270px; height:180px; float:right; margin-right: 20px; margin-top: 50px;">'. $fullDes .'</textarea><button name="ScientificOlympiad" value='.$row['ID'].'  class="active"  type="submit" style="float: right; margin-right: -150px; margin-top: 270px;">مشاهده کامل</button>


             </span><iframe src="data:image/jpeg;base64,'.base64_encode( $row['content'] ).'" style="width:320px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}
///invention
$query = "select * from invention where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){

    $_SESSION['table'] = "invention";
    $_SESSION['contentID'] = $row['ID'];

    $fullDes = $row['description']. "\r\n تاریخ: " . $row['date'];
    $string2 .= ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right:-15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">اختراع</font>


<textarea style="width:270px; height:180px; float:right; margin-right: 20px; margin-top: 50px;">'. $fullDes .'</textarea><button name="invention" value='.$row['ID'].'  class="active" type="submit" style="float: right; margin-right: -150px; margin-top: 270px;">مشاهده کامل</button>


             </span><iframe src="data:image/jpeg;base64,'.base64_encode( $row['content'] ).'" style="width:320px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}

///translation
$query = "select * from translation where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){

    $_SESSION['table'] = "translation";
    $_SESSION['contentID'] = $row['ID'];

    $fullDes = $row['description']. "\r\n تاریخ: " . $row['date'];
    $string .= ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right: -15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">ترجمه</font>


<textarea style="width:270px; height:180px; float:right; margin-right: 20px; margin-top: 50px;">'. $fullDes .'</textarea><button name="translation" value='.$row['ID'].'  class="active" type="submit" style="float: right; margin-right: -150px; margin-top: 270px;">مشاهده کامل</button>


             </span><iframe src="PDFviewer.php" style="width:320px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}





////Project

$query = "select * from project where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){
    $_SESSION['table'] = "project";
    $_SESSION['contentID'] = $row['ID'];

    $fullDes = $row['description']. "\r\n تاریخ: " . $row['date'] . "\r\n موضوع". $row['title'] ;
    $string .= ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right: -15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">پروژه</font>


<textarea style="width:270px; height:180px; float:right; margin-right: 20px; margin-top: 50px;">'. $fullDes .'</textarea><button class="active"  name="project" value='.$row['ID'].'  type="submit"  style="float: right; margin-right: -150px; margin-top: 270px;">مشاهده کامل</button>


             </span><iframe src="PDFviewer.php" style="width:320px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}










///festival
$query = "select * from festival where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){

    $_SESSION['table'] = "festival";
    $_SESSION['contentID'] = $row['ID'];

    $fullDes = $row['description']. "\r\n تاریخ: " . $row['date'] . "\r\n مکان". $row['placeTaken'];
    $string2 .= ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right: -15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">جشنواره</font>


<textarea style="width:270px; height:180px; float:right; margin-right: 20px; margin-top: 50px;">'. $fullDes .'</textarea><button name="festival" value='.$row['ID'].' class="active" type="submit" style="float: right; margin-right: -150px; margin-top: 270px;">مشاهده کامل</button>


             </span><iframe src="data:image/jpeg;base64,'.base64_encode( $row['content'] ).'" style="width:320px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}
///experience
$query = "select * from experience where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){
    $_SESSION['contentID'] = $row['ID'];

    $_SESSION['table'] = "experience";
    $fullDes = $row['description']. "\r\n تاریخ: " . $row['date'] . "\r\n مدت". $row['timeSpan'];
    $string2 .= ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right: -15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">سابقه</font>


<textarea style="width:270px; height:180px; float:right; margin-right: 20px; margin-top: 50px;">'. $fullDes .'</textarea><button class="active" name="experience" value='.$row['ID'].' type="submit" style="float: right; margin-right: -150px; margin-top: 270px;">مشاهده کامل</button>


             </span><iframe src="data:image/jpeg;base64,'.base64_encode( $row['content'] ).'" style="width:320px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}





///Article
$query = "select * from Article where SID= '$id'";
$rs = db_query($query,$con);
while($row = $rs->fetch_assoc()){
    $fullDes = $row['description']. "\r\n تاریخ: " . $row['data'] . "\r\n نوع". $row['type'] ;
    $_SESSION['contentID'] = $row['ID'];
    $_SESSION['table'] = "Article";
    $string .= ' <div style="border: solid darkgrey 2px; border-radius: 10px;  width: 850px; float: right; margin-right: -15px; height: 350px;" name="mydiv">


              <font size=4 style="float: right; margin-right: 20px; margin-top: 10px;"><span style="float:right;">مقاله</font>


<textarea style="width:270px; height:180px; float:right; margin-right: 20px; margin-top: 50px;">'. $fullDes .'</textarea><button name="article" value='.$row['ID'].' type="submit" class="active" onclick="PDFviewer.php" style="float: right; margin-right: -150px; margin-top: 270px;">مشاهده کامل</button>


             </span><iframe src="PDFviewer.php" style="width:320px; height:270px; float:left; margin-left:80px; margin-top:30px;"></iframe>

            </div><br><br>';

}





if(isset($_POST['Bduc'])){

    $_SESSION['documentSID'] = $_POST['Bduc'];
    header('location:BachelorDocument.php');

}
if(isset($_POST['Aduc'])){

    $_SESSION['documentSID'] = $_POST['Aduc'];
    header('location:associateDocument.php');

}

if(isset($_POST['article'])){

    $_SESSION['contentID']= $_POST['article'];
    $_SESSION['table'] = "article";
    header('location:PDFviewer.php');

}

if(isset($_POST['experience'])){

    $_SESSION['contentID']= $_POST['experience'];
    $_SESSION['table'] = "experience";
    header('location:IMGviewer.php');

}


if(isset($_POST['festival'])){

    $_SESSION['contentID']= $_POST['festival'];
    $_SESSION['table'] = "festival";
    header('location:IMGviewer.php');

}

if(isset($_POST['project'])){

    $_SESSION['contentID']= $_POST['project'];
    $_SESSION['table'] = "project";
    header('location:PDFviewer.php');

}


if(isset($_POST['translation'])){

    $_SESSION['contentID']= $_POST['translation'];
    $_SESSION['table'] = "translation";
    header('location:PDFviewer.php');

}


if(isset($_POST['invention'])){

    $_SESSION['contentID']= $_POST['invention'];
    $_SESSION['table'] = "invention";
    header('location:PDFviewer.php');

}


if(isset($_POST['ScientificOlympiad'])){

    $_SESSION['contentID']= $_POST['ScientificOlympiad'];
    $_SESSION['table'] = "ScientificOlympiad";
    header('location:IMGviewer.php');

}

if(isset($_POST['BooksWritten'])){

    $_SESSION['contentID']= $_POST['BooksWritten'];
    $_SESSION['table'] = "BooksWritten";
    header('location:PDFviewer.php');

}
if(isset($_POST['degreeLanguage'])){

    $_SESSION['contentID']= $_POST['degreeLanguage'];
    $_SESSION['table'] = "degreeLanguage";
    header('location:IMGviewer.php');

}
if(isset($_POST['thesis'])){

    $_SESSION['contentID']= $_POST['thesis'];
    $_SESSION['table'] = "thesis";
    header('location:IMGviewer.php');

}


include('documentsView.php');