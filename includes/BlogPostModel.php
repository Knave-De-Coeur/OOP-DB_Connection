<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 05/09/2018
 * Time: 17:07
 */

class BlogPostModel extends Connection {

    protected function GetAllPosts() {
        $sqlQuery = "SELECT * FROM posts";
        $result = $this->connect()->query($sqlQuery);

        // check if there were any records returned
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }

            return $data;
        } else {
            return null;
        }
    }
}