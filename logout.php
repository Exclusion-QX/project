<?php

session_start();

/*$cook_val = array('cook_id' => $id, 'cook_name' => $username, 'cook_numbProducts' => $numbProducts);

setcookie('purchaser', serialize($cook_val), time() -259000, '/');*/

setcookie('username', $username, time() - 2592000, '/');
setcookie('id', $id, time() - 2592000, '/');
setcookie('number', $number, time() - 2592000, '/');
setcookie('login', $login, time() - 2592000, '/');
setcookie('group', $group, time() - 2592000, '/');
session_destroy();
header('Location: index.php');
exit;