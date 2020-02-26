<?PHP
session_start();
if(!(isset($_POST['account']))){
	header("location:login.php");
	exit();
}
$conn = mysqli_connect('localhost', 'root','career');
$ans=null;
mysqli_select_db($conn,"board") or die("dberror".mysql_error());
$sql = "select * from management where name = '$_POST[account]' and password = '$_POST[password]'" or die("ssserror");
$result=mysqli_query($conn,$sql) or die("sqlerror");
$ans = mysqli_fetch_assoc($result);
if($ans==null){
	$_SESSION["check"]="Wrong account or password";
	header("location:login.php");
}else{
	$_SESSION["check"]="";	
	header("location:manage_home.php");
}
mysqli_close($conn);

if(count($_POST)>0){
	$_POST = array();
}
?>
