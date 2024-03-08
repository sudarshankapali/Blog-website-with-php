<?php
session_start();
require './backend/session.php';
var_dump($combinedArray);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your Post</title>
    <link rel="stylesheet" href="./static/css/post.css">
</head>
<body>
    <main>
        <section class="form" title="form">
            <h1>Create Blog</h1>
            <div>
            <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST['editIndex'])){
                    $passing = $_POST['editIndex'];
                }
            }
            else{
                echo "edit index not set";
            }
            ?>
        <form action="./backend/editBackend.php" method="post">
            <label for="Heading">Enter your Blog title</label>
            <br />
            <input type="text" name="edited-heading">
            <br />
            <label for="Paragraph">Enter your paragraph</label>
            <br />
            <?php
            echo "<input type='text' name='edited-par'>";
            echo "<input type='hidden' name='editIndex' value='$passing'>";
            ?>
            <br />
            <button type="submit">Republish</button>
        </form>
        </div>
        </section>
    </main>
</body>
</html>