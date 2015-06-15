<?php

class connection {

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "giftstuff";

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
