<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TT</title>
    <?PHP
	if(isset($_POST['account'])){
	    header('location:login.php');
	    exit();
	}
    ?>
</head>
<body>
<center>
<form action="manage_send_meg.php" method="get"> 
    說點什麼： <input type="text" name="say"><br>
    <input type="submit" value="Submit"> <input type="submit" formaction="/login.php" value="登出"> 
</form>
<table border="2" width="300" height="100">
<tr><td align="center" valign="center">
<h1>留言板</h1>
<form action="clear.php">
<input type="submit" value="清空">
</form>
</td></tr>
</table>
<table border="2" width="300" height="500">
<tr><td align="left" valign="top">
<?PHP

$conn = mysqli_connect('localhost', 'root','career');
mysqli_select_db($conn,"board") or die("dberror".mysql_error());

$sql = "select * from test";

$test=mysqli_query($conn,$sql) or die("sqlerror");
$index=1;
while($row = $test->fetch_assoc()){
	if($row[say]!=""){
		echo '<h2>' .$row[name]." 說：".$row[say] ." ";
		echo '<form style="display:inline;" method="post" action="delete.php" ><button name="submit" type="submit" value='.$index.'>刪除</button></form>'.'</h2>';
	}
	$index+=1;
}
mysqli_close($conn);
?>
</td></tr>
</table>
</center>
</body>
</html>
