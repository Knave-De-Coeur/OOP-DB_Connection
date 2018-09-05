<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 05/09/2018
 * Time: 17:31
 */

class ViewPostsPageModel extends BlogPostModel {
    public function DisplayPosts() {
        $posts = $this->GetAllPosts();

        foreach ($posts as $post) {
            echo $post['ID'] . "<br />";
            echo "<h1>" . $post['Title'] . "</h1>" . "<br />";
            echo $post['Body'] . "<br />";
            echo $post['Created_On'] . "<br />";
        }
    }
}