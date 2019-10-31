<?php 
session_start();
$username = $_SESSION['name'];
$id = $_SESSION['id'];
setcookie('username', $username, time() + 60 * 60 * 24 * 7, '/');
setcookie('id', $id, time() + 60 * 60 * 24 * 7, '/');
?>
<?php



if (isset($_SESSION['name'])) {

	require ("header.php");
	require ("functions.php");
?>

<?php


   $name = $_SESSION['name'];
   $id = $_SESSION['id'];
   $email = $_SESSION['email'];
   $login = $_SESSION['login'];
   echo "<br/><br/><br/>С возвращением. $login,<br/>
   Ваше имя $name,<br/>
   Ваша почта '$email'и Ваш id '$id'.";


echo "<a href='logout.php' class='btn btn-lg btn-primary'> Выйти </a>";
require ("footer.php");
}
?>