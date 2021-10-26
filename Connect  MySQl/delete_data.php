<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PHP";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        // đặt chế độ lỗi PDO thành ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql câu lệnh để xóa bản ghi
        $sql = "DELETE FROM student WHERE id=1";


        // sử dụng execute () vì không có kết quả nào được trả về
        $conn->exec($sql);
        echo "xoá thông tin học sinh thành công";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>