<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TT</title>
</head>
<body>
<center>
<table width="300" height="80" border="1">
 <tr><td align="center" valign="center">簡易留言板</td></tr>
</table>
<form action="check_login.php" method="post">
    名稱： <input type="text" name="account"><br>
    密碼： <input type="text" name="password"><br>
    <input type="submit" value="登入"><br>
</form>
<form action="regist.php" method="post">
    名稱： <input type="text" name="account_create"><br>
    密碼： <input type="text" name="password_create"><br>
    <input type="submit" value="註冊"><br>
</form>
<form action="manage_login.php"  method="post">
    名稱： <input type="text" name="account"><br>
    密碼： <input type="text" name="password"><br>
     <input type="submit" value="管理員登入">
</form>
<h3><?php
session_start();
echo $_SESSION["check"];  
?></h3>
</center>
</body>
</html>
