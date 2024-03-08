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
    <meta
    name="description"
    content="A blog website to express your thoughts and publish your passion your way!!!">
    <title>Blog</title>
    <link rel="stylesheet" href="./static/css/style.css">
</head>
<body>
    <main>
        <section class="header" title="navigation">
            <div>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="./post.php">Create</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </section>
        <!--End of navigation section-->
        <section class="hero" title="hero-section" id="home">
            <div>
                <h1>Express your thoughts</h1>
                <p>Publish your passion</p>
            </div>
            <div class="blog-container">
                <?php
                foreach($combinedArrayReversed as $heading=>$paragraph){
                    echo
                    "<div class='blog-posts' title='Blog-post'>
                        <h1>$heading</h1>
                        <p>$paragraph</p>
                        <form action='./edit.php' method='post'>
                        <button type='submit'>Edit</button>
                        </form>
                        <form action='./backend/delete.php' method='post'>
                        <input type='hidden' name='deleteIndex' value='$heading'>
                        <button type='submit'>Delete</button>
                        </form>
                    </div>";
                }
                ?>
            </div>
        </section>
        <!--End of hero section-->
        <section title="footer" >
            <footer>
                <h1>Publish your thoughts</h1>
                <div>
                    <ul>
                        <li>About</li>
                        <li>copyright @2024</li>
                    </ul>
                </div>
            </footer>
        </section>
    </main>
</body>
</html>