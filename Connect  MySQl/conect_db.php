<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	try {

		$conn = new PDO("mysql:host=$servername;dbname=libmanagement", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "kết nối database thành công";

	} catch(PDOException $e) {
		echo "kết nỗi không thành công hoặc tên dbname bị sai: " . $e->getMessage();
	}
?>