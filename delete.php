<?PHP
if(isset($_POST["submit"])){
	$conn = mysqli_connect('localhost', 'root','career');

	mysqli_select_db($conn,"board") or die("dberror".mysql_error());
	$sql = "update test set say='' where id = '$_POST[submit]'";

	$test=mysqli_query($conn,$sql) or die("sqlerror");
	mysqli_close($conn);
	header("location:manage_home.php");
}
else{
	echo "error";
}



?>
