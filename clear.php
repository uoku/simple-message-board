<?PHP
$conn = mysqli_connect('localhost', 'root','career');

mysqli_select_db($conn,"board") or die("dberror".mysql_error());
$sql = "truncate table test";

$test=mysqli_query($conn,$sql) or die("sqlerror");

mysqli_close($conn);
header("location:manage_home.php");
?>
