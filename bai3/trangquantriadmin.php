<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang Quan Tri</title>
</head>
<body>
<?php
if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
echo "Xin chào: ".$_COOKIE['username'];
echo "<br><a href='logout.php'>Logout</a>";
}
else{
if(isset($_SESSION['username']) and isset($_SESSION['password'])){
echo "Xin chào: ".$_SESSION['username'];
echo "<br><a href='logout.php'>Logout</a>";
}
else
echo "<script>alert('Bạn chưa đăng nhập'); 
location.href='dangnhap.php';</script>";
}
?>

<?php 
if (isset($_SESSION['username']) && isset($_SESSION['password']))
echo $_SESSION['username'];
else
{
echo "<script language='javascript'>alert('Ban chua dang nhap - Vui long dang nhap 
lai');";
echo "location.href='dangnhap.php';</script>";
}
?>

<?php
session_start();
session_destroy();
setcookie('username','', time() -1);
setcookie('password','', time() -1);
echo "<script>alert('Logout Successfull.'); location.href='dangnhap.php';</script>";
?>
<a href="logout.php" >Thoat ra </a>
</body>
</html>