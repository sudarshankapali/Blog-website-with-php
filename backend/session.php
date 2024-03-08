<?php
session_start();
if(!isset($_SESSION['heading'])){
    $_SESSION['heading'] = ["This is heading template 2","This is heading template 2"];
    $_SESSION['paragraph'] = ["This is paragraph template 1","This is paragraph template 2"];
}
$combinedArray = array_combine($_SESSION['heading'], $_SESSION['paragraph']);
$combinedArrayReversed = array_reverse($combinedArray);
?>