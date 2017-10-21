<?php
include('dblib.php');
session_start();
$con = db_connection();
$sid = $_SESSION['contentID'];
$table = $_SESSION['table'];
$query4= "Select * from $table where id = $sid";

$rs = db_query($query4,$con);
$row = $rs->fetch_assoc();
$at1content = $row['content'];
$image3 = '<img src="data:image/jpeg;base64,'.base64_encode( $at1content ).'"/>';

?>



<!DOCTYPE html>
<html>
<head>
    <title>IMGViewer</title>
</head>
<body>
<?php echo $image3 ?>
</body>
</html>