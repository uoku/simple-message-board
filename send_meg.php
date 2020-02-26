<?PHP
session_start();

if(!isset($_SESSION['account'])){
	header('location:login.php');
	exit();
}

$conn = mysqli_connect('localhost', 'root','career');

mysqli_select_db($conn,"board") or die("dberror".mysql_error());
$sql = "insert into test (name,say) values ('$_SESSION[account]','$_GET[say]')";

$test=mysqli_query($conn,$sql) or die("sqlerror");
mysqli_close($conn);
header("location:home.php");
?>
