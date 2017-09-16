<?php


class DB_connect {
    private $conn;

    // Connecting to database
    public function connect() {
        require_once ("DB_config.php");

        // Connecting to mysql database
        $this->conn = new mysqli(clear219.dothome.co.kr, clear219, anstjdwo12, clear219);
        //memeber parameters return is able to this keyword -> localhost(DB connecting , DB ID, DB,password, DB name)
        // return database handler
        return $this->conn;
    }
}

?>
