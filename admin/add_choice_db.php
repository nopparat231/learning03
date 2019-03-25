<meta charset="UTF-8" />

<?php include '../conn.php'; ?>
<?php

error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting( error_reporting() & ~E_NOTICE );

$choice_name = $_POST['choice_name'];
$video = $_POST['video'];



$sql ="INSERT INTO choice (choice_name,  video) VALUES ('$choice_name', '$video')";
$result = mysqli_query( $con,$sql) or die("Error in query : $sql" .mysqli_error());

mysqli_close($con);

if($result){
	echo "<script>";
	echo "alert('เพิ่ม หมวดหมู่ เรียบร้อยแล้ว');";
	echo "window.location ='index.php?showchoice'; ";
	echo "</script>";
} else {
	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='index.php?showchoice'; ";
	echo "</script>";
}
?>