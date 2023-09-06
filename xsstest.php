<?php
  ini_set("session.cookie_httponly", "0");
  session_start();
?>
<html>
<head>
<title>XSSTest-1</title>
</head>
<body>
<div style="color: red;" align="center"><big> <span><big> Welcome!
This is SECURE PROGRAMMING Shopping Mall 購物中心大優惠</big> </span>
</big></div>
<p><span style="font-weight: bold; color: rgb(0, 0, 153);"> 參觀者 :</span>
<?php echo $_GET["user"]; ?> </p>
</body>
</html>