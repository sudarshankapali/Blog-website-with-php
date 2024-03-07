<?php
session_start(); 
// $head = $_POST['heading'];
// $paragh = $_POST['paragraph'];
// $_SESSION['heading'] = $head;
// $_SESSION['paragraph'] = $paragh;
array_push($_SESSION['heading'],$_POST['heading']);
array_push($_SESSION['paragraph'],$_POST['paragraph']);
header('Location: /');
?>