<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 05/09/2018
 * Time: 17:03
 */

//
//if(!$connection = mysqli_connect('localhost', 'root', '', 'oopblog')){
//    die("Error: Cannot connect to host <br />" . mysqli_error($connection));
//}

class Connection {
    private $servername;
    private $username;
    private $password;
    private $database;

    protected function connect() {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'oopblog';

        $con = new mysqli($this->servername, $this->username, $this->password, $this->database);

        return $con;
    }
}