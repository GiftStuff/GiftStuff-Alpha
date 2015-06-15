<?php

class connection {

    function __construct() {
	$this->servername = "localhost";
	$this->username = "root";
	$this->password = "file_get_contents('protected/database-pass.txt')";
	$this->dbname = "giftstuff";
    }

    final public static function connect() {
	$this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	if ($this->connection->connect_error) {
	    die("Connection failed: " . $this->connection->connect_error);
	} else {
	    return true;
	}
    }

    final public static function disconnect() {
	$this->connection->close();
    }

    final public static function query($sql) {
	return $this->connection->query($sql);
    }

}
