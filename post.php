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
        <form action="./backend/backend.php" method="post">
            <label for="Heading">Enter your Blog title</label>
            <br />
            <input type="text" name="heading">
            <br />
            <label for="Paragraph">Enter your paragraph</label>
            <br />
            <input type="text" name="paragraph">
            <br />
            <button type="submit">Publish</button>
        </form>
        </div>
        </section>
    </main>
</body>
</html>