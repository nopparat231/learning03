<meta charset="UTF-8" />
<?php include '../conn.php'; ?>

<?php

$id = $_GET['id'];


$sql ="DELETE FROM testing WHERE id = $id";

$result = mysqli_query( $con,$sql) or die("Error in query : $sql" .mysqli_error());


mysqli_close($con);


if($result){
	echo "<script>";
	echo "window.location ='index.php?showchoice_s'; ";
	echo "</script>";
} else {

	echo "<script>";
	echo "alert('ERROR!');";
	echo "window.location ='index.php?showchoice_s'; ";
	echo "</script>";
}
?>
