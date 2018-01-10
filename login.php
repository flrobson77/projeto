<?php
$servidor = "localhost";
$user = "fulano";
$pass = "123456";
$conn = mysqli_connect($servidor, $user, $pass);
$banco = mysqli_select_db($conn, brasil);

$users = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * from login WHERE usuario = '$users' AND senha = '$password';";

$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query)==1)
{
	header("location:admin.php");
}
else
{
	echo "Usuario $users ou senha não válidos";
}
?>
