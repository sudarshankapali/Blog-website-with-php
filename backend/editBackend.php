<?php
require 'session.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['editIndex'])){
            // $editIndex = $_POST['editIndex'];
            //var_dump($_POST['editIndex']);
            $old_heading = $_POST['editIndex'];
            if(array_key_exists($old_heading,$combinedArrayReversed)){
                unset($combinedArrayReversed[$old_heading]);
            //var_dump($combinedArrayReversed);

            
            $_SESSION['heading'] = array_keys($combinedArrayReversed);
            $_SESSION['paragraph'] = array_values($combinedArrayReversed);
            //updating the session values
            array_push($_SESSION['heading'],$_POST['edited-heading']);
            array_push($_SESSION['paragraph'],$_POST['edited-par']);
            header('Location: /');
            }
        }
        else{
            echo "not set";
        }
    }
?>