<?php

class User {
    public $username;
    public $password;
    public $auth = false;

    public function __construct() {}

    public function test () {
        $db = db_connect();
        $stmt = $db->prepare("SELECT * FROM users;");
        $stmt->execute();
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }
}
?>
