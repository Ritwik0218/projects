<!DOCTYPE html>
<html>
<head>
    <title>My Blog - Post</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>My Blog</h1>
    </header>
    
    <div id="content">
        <?php
        $postId = $_GET['id'];
        $post = null;

        foreach ($posts as $p) {
            if ($p['id'] == $postId) {
                $post = $p;
                break;
            }
        }

        if ($post) {
            echo "<article>";
            echo "<h2>" . $post['title'] . "</h2>";
            echo "<p>" . $post['date'] . "</p>";
            echo "<p>" . $post['content'] . "</p>";
            echo "</article>";
        } else {
            echo "<p>Post not found.</p>";
        }
        ?>
    </div>

    <script src="script.js"></script>
</body>
</html>
