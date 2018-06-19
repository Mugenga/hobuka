<?php

class Conn
{
	// Server Info
	public $server;
	public $user;
	public $password;

	//connection
	public $conn;

	function __construct()
	{
		$this->server = "localhost";
		$this->user = "root";
		$this->password = "";

		// Creating a connection
		$this->conn = mysqli_connect($this->server, $this->user, $this->password);
		// Checking the connection
		if (!$this->conn) die("Connection failed: " . mysqli_connect_error());

		if(!mysqli_select_db($this->conn, "ElectriData")) die("Not connected to default database");
	} 

}


$conn = new Conn();
$connection = $conn->conn;

// var_dump($connection);

?>