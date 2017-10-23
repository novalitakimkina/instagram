<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="signup";

$email=$_POST['email'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];

$conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
	die("connection failed:" .$conn->connect_error);
}
if(empty($email)){
echo"Data tidak ditemukan";
die();
}
if (empty($nama)){
echo"Data tidak ditemukan";
die();
}
if (empty($username)){
echo"Data tidak ditemukan";
die();
}
if (empty($password)){
echo"Data tidak ditemukan";
die();
}

$sql = "INSERT INTO tuser (email,nama,username,password)
VALUES('$email','$nama','$username','$password')";
if($conn->query($sql)=== TRUE){
echo "
<table>
<tr>
<td>Email Address</td><td>:</td><td>$email</td>
</tr>
<tr>
<td>Your Name</td><td> :</td><td>$nama</td>
</tr>
<tr>
<td>Username</td><td>:</td><td>$username</td>
</tr>
<tr>
<td>Create Password</td><td>:</td><td>$password</td>
</tr>
</table>";
}else{
echo "ERROR : " .sql."<br>".$conn->error;
}
$conn->close();
?>
</body>
</html>
