<?php
session_start();
if(!isset($_SESSION['heading'])){
    $_SESSION['heading'] = ["This is heading template 2","This is heading template 2"];
    $_SESSION['paragraph'] = ["This is paragraph template 1","This is paragraph template 2"];
}
$combinedArray = array_combine($_SESSION['heading'], $_SESSION['paragraph']);
$combinedArrayReversed = array_reverse($combinedArray);
//var_dump($combinedArray);
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
                        <button>Edit</button>
                        <button>Delete</button>
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