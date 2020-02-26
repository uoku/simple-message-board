<?PHP
session_start();
if(!(isset($_POST[account_create]))){
	header("location:login.php");
	exit();
}
if($_POST['account_create']=="" || !(strpos($_POST['account_create'],'<')) || !(strpos($_POST['account_create'],'>' )) || !(strpos($_POST['account_create'],'!')) ){
	$_SESSION["check"]="account can't be null or include '!' '<' or '>'";
	header("location:login.php");
	exit();
}
$conn = mysqli_connect('localhost', 'root','career');
$ans=null;
mysqli_select_db($conn,"board") or die("dberror".mysql_error());
$sql = "select * from account where account = '$_POST[account_create]'" or die("ssserror");
$result=mysqli_query($conn,$sql) or die("sqlerror");
$ans = mysqli_fetch_assoc($result);
if($ans==null){ // can create	
	$sql="insert into account (account,password) values ('$_POST[account_create]','$_POST[password_create]')";
	$rs=mysqli_query($conn,$sql) or die("asdfqwer");
	$_SESSION["check"]="success";
	header("location:login.php");
}else{ // can not create
	$_SESSION["check"]="account had been used";
	header("location:login.php");
}
mysqli_close($conn);
if(count($_POST)>0){
	$_POST=array();
}
?>
