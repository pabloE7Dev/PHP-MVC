<?php
require_once __DIR__ . '/../config/config.php';


session_start();

unset($_SESSION['idusuarios']);
unset($_SESSION['idempresa']);
unset($_SESSION['user']);
unset($_SESSION['password']);
session_destroy();
header('Location:' . URL . 'login');
exit();
?>
