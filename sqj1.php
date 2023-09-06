<?php
if (isset($_POST["login"]))
{
        $link = mysqli_connect('localhost', 'secpro', 'Snsysu001');
	mysqli_set_charset('utf8', $link);
	$db_selected = mysqli_select_db($link, 'Secure_Programming_Test');
	
	$query = "SELECT * FROM member WHERE username='" . $_POST["username"] . 

		"' AND password='" . $_POST["password"] . "'";

	$result = mysqli_query($link, $query) 
		or die("MySQL Query Error : " . mysqli_error() . "   SQL: " . $q
uery);
	
	$match_count = mysqli_num_rows($result);

	if ($match_count) 
	{
		mysqli_free_result($result);
		
		mysqli_close($link);
		header("Location: http://120.113.173.21/sqj1_s.php?user=" . $_PO
ST["username"]);
	}
	else
	{
		header("Location: http://" . $_SERVER["HTTP_HOST"] . $_SERVER["S
CRIPT_NAME"]); 
	}
}
?>
<html>
<head>
<title>SQL Injection Test 1</title>
</head>
<body>
<div style="text-align: center;"><span>
<big style="font-weight: bold; color: red;"><big><big>SQL Injection 練習</big></
big></big><br>
<br>
請輸入登入的帳號與密碼</span><br>
</div>
<br>
<form method="post" name="form1" id="form1">
<table align="center">
 <tbody>
 <tr>
   <td align="left" valign="top">
     <div> &nbsp;&nbsp;UserID&nbsp; <input name="username" id="username" type="t
ext"> </div>
   </td>
   <td align="left" valign="top">
     <div> &nbsp;&nbsp;Password&nbsp; <input name="password" id="password" type=
"password"> </div>
   </td>
   <td align="center" valign="middle"> <input name="login" id="login" value="Log
in" type="submit"> </td>
  </tr>
 </tbody>
</table>
</form>
<div style="text-align: center;"><br>
<span style="font-weight: bold; color: rgb(0, 102, 0);">請勿隨意嘗試 SQL Injecti
on 攻擊 </span>
<br style="font-weight: bold; color: rgb(0, 102, 0);">
<span style="font-weight: bold; color: rgb(0, 102, 0);">密碼錯誤三次將會暫停使用
</span>
</div>
</body>
</html>