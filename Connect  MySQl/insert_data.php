<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PHP";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO student (firstname, lastname, email, age)
        VALUES ('Trần', 'Kim Hùng', 'trankimhung799@gmail.com',11)";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "thêm dữ liệu thành công";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>