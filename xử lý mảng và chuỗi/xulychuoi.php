<?php 
    $gtri = 'Lập trình PHP';
    echo "Chào bạn đến với ngôn ngữ  $gtri <br/>"; 
    echo "Lập trình PHP \" Chào bạn đến với ngôn ngữ\" <br/>";

    // hàm  addcslashes
    echo addcslashes("Tran Kim Hung <br/>", 'o' );

    echo addcslashes("Tran Kim Hung ", 'a..z ');

    //Regular Expression trong PHP
    $a = '/kimhung/';
    $b = 'kimhung';
    if (preg_match($a, $b)){
        echo 'Chuỗi a có chứa chuỗi b <br/>';
    }else{
        echo '2 chuỗi không giống nhau <br/>';
    }

    // phạm vi của chuỗi
    $a = '/[a-z]/';  //kiểm tra chuỗi chữ thường
    $b = 'kimhung';
    if (preg_match($a, $b)){
            echo 'chuỗi có chữ thường <br/>';
        }else{
            echo 'chuỗi không có chữ thường <br/>';
        }

    $a = '/[A-Z]/';  //kiểm tra chuỗi chữ hoa
    $b = 'KIMHUNG';
    if (preg_match($a, $b)){
        echo 'chuỗi có chữ in hoa <br/>';
    }else{
        echo 'chuỗi có chữ in hoa <br/>';
    }

    $a = '/[0-9]/';  //kiểm tra chuỗi  dạng số
    $b = '035774';
    if (preg_match($a, $b)){
        echo 'đay là chuỗi ở dạng số <br/>';
    }else{
        echo 'đây không phải là chuỗi dạng số <br/>';
    }

    //Quy định chiều dài cho chuỗi
    $a = '/^[a-z]{4,7}$/'; 
    $b = 'kimhung';
    if (preg_match($a, $b)){
        echo 'đúng <br/>';
    }else{
        echo 'sai <br/>';
    }

    // kiểm tra ký tự đặt biệt
    $a = '/\./';
    $b = 'kimhung.';
    if (preg_match($a, $b)){
        echo 'Chuỗi regex so khớp <br/>';
    }else{
        echo 'không có ký tự đặt biệt <br/>';
    }

    // KIỂM TRA CHUỖI VỚI OR
    $a = '/^K|H$/'; // kiểm tra chuỗi ký tự có K hoặc H
    $b = 'KIMHUNG';
    if (preg_match($a, $b)){
        echo 'có <br/>';
    }else{
        echo 'không <br/>';
    }

    // một số ký tự kiểm tra với chiều dài không bị giới hạn

    $a = '/[a-z]*/'; // ký tự * đại diện cho ký tự null và nhiều ký tự
    $b = 'dsada';
    if (preg_match($a, $b)){
        echo 'đúng <br/>';
    }  

 
    $a = '/[a-z]+/';    // ký tự + đại diện cho một hoặc nhiều ký tự
    $b = 'h';
    if (preg_match($a, $b)){
        echo 'đúng <br/>';
    }

    $a = '/[a-z]?/'; // ký tự ? đại diện cho một hoặc không có ký tự nào
    $b = 's';
    if (preg_match($a, $b)){
        echo 'đúng <br/>';
    }
?>