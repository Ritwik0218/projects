<?php
$posts = [
    [
        "id" => 1,
        "title" => "First Blog Post",
        "date" => "June 1, 2023",
        "content" => "This is my first blog post. Welcome to my blog!"
    ],
    [
        "id" => 2,
        "title" => "Second Blog Post",
        "date" => "June 2, 2023",
        "content" => "This is my second blog post. Stay tuned for more updates!"
    ]
];

foreach ($posts as $post) {
    echo "<article>";
    echo "<h2>" . $post['title'] . "</h2>";
    echo "<p>" . $post['date'] . "</p>";
    echo "<p>" . $post['content'] . "</p>";
    echo "<a href='post.php?id=" . $post['id'] . "'>Read more</a>";
    echo "</article>";
}
?>
