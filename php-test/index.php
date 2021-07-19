<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="discription" content="이 페이지는 테스트 페이지로 사용됩니다">
    <title>My Main page</title>
    <link href="https://fonts.googleapis.com/css2?family=Notable&display=swap" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
  </head>
<body>
<?php
echo "<h2>PHP Test Page!</h2>";
echo "<br>현재 접속 중인 Pod의 name은 ";
echo gethostname();
echo "입니다<br>";
echo "<br>현재 접속 중인 Pod의 IP는 ";
echo $_SERVER['SERVER_ADDR'];
echo "입니다<br>";
echo "<br>당신은  ";
echo $_SERVER['REMOTE_ADDR'];
echo "를 통하여 접속중입니다<br>";
echo "지금은 장마기간으로 비가 많이 온다<br>";
 ?> 
</body>
</html>
