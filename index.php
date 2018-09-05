<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 05/09/2018
 * Time: 13:13
 */
include 'includes/connection.php';
include 'includes/BlogPostModel.php';
include 'includes/ViewPostPageModel.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP-Connection</title>
</head>
<body>
        <pre>
            <?php

                $posts = new ViewPostsPageModel();

                $posts->DisplayPosts();

            ?>
        </pre>
</body>
</html>