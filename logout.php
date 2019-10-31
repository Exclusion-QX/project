<?php

session_start();
setcookie('username', 0, time() - 2592000, '/');
setcookie('id', $id, time() - 2592000, '/');
session_destroy();
header('Location: index.php');
exit;