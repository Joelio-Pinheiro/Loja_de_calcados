<?php
session_start();
unset($_SESSION['email']);  
unset($_SESSION['nome']);
$_SESSION['logado'] = false;
header('location: index.php');
exit;
?>