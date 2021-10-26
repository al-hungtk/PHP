<?php 
    $mang = array("php","oop","mvc");
    print_r($mang); 
    echo("<br/>");

    // count($array)
    $array=[  
        'ngon ngữ php',
        'chao mừng bạn đến '
    ];
    echo count($array); // đếm trong mảng có bao nhiêu phần tử
    echo("<br/>");

    // array_values($array)
    $array = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến'
    ];
    print_r(array_values($array)); // đưa về mảng tuần tự
    echo("<br/>");

    // array_shift($array)
    $array = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến'
    ];
    print_r(array_shift($array)); // xoá phần tử đầu tiên và  hiện thị phần đã xoá
    echo("<br/>");

    // array_unshift($array, $var, $var)
    $array = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến',
        'arr3' =>'ngon ngữ php',
        'arr4' => 'chao mừng bạn đến',
    ];
    print_r(array_unshift($array)); //  thêm 1 hoặc nhiều phần tử vào trong mảng và  hiện thị số phần tử được thêm
    echo("<br/>");

    // array_rand($array, $number) 
    $array = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến',
    ];
    print_r(array_rand($array));
    echo("<br/>");
    print_r(array_rand($array, 2)); //  lấy ra một vị trong mảng với biến $number là số lượng muốn lấy
    echo("<br/>");


    // array_merger($array,$array...)
    $array = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến'
    ];
    $array1 = ['kimhung'];
    print_r(array_merge($array, $array1)); // dùng để gộp  nhiều mảng thành 1 mảng 
    echo("<br/>");

    // array_flip($array)
    $array = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến'
    ];
    print_r(array_flip($array)); // dùng để chuyên đổi key thành giá trị và ngược lại 
    echo("<br/>");

    // sort($array) array_reverse($array)

    $array = [9,8,7,6,5,4,3,2,1,0];
    sort($array);   // dùng để xắp xếp lại mảng theo thứ tự tăng dần và trả kết về true hoặc false
    print_r($array);
    echo("<br/>");
    print_r(array_reverse($array)); // dùng để đảo ngược vị trong mảng ngược lại với sort
    echo("<br/>");
    
    // array_search($keyword,$array)
    $array = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến'
    ];
    print_r(array_search('ngon ngữ php', $array)); // dùng để tìm kiếm giá trị trong 1 mảng và trả về key kết  quả tìm kiếm
    echo("<br/>");

    // array_unique($array)
    $array = [
        'arr1' =>'ngon ngữ php',
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến',
        'arr2' => 'chao mừng bạn đến',
    ];
    print_r(array_unique($array, 0)); // có tác dụng xoá bỏ các phần tử bị trùng lặp và hiến thị ra 1 kết qủa sau khi được loại bỏ
    echo("<br/>");

    // in_array($value,$array)
    $array = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến',
    ];
    print_r(in_array('ngon ngữ php', $array)); // kiểm tra mảng đó  có tồn tại giá trị và trả về kết quả true false
    echo("<br/>");

    // array_diff_assoc($array1,$array2,...)
    $array1 = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến',
    ];
    $array2 = [
        'arr3' => 'chao mừng bạn đến',
        'arr4' => 'chao mừng bạn đến',
    ];
    print_r(array_diff($array1, $array2)); // dùng để xử lý các phần tử có trong mảng array mà không bị trùng lặp ở các mảng array khác
    echo("<br/>");

    // array_intersect_assoc($array1,$array2,..)
    $array1 = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến',
    ];
    $array2 = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến',
    ];
    print_r(array_intersect_assoc($array1, $array2)); // dùng để kiểm tra các mảng có chứa phần tử key và giá trị giống nhau và trả về một mảng
    echo("<br/>");

    // array_push($array,$var,$var...)
    $array = [
        'arr1' =>'ngon ngữ php',
        'arr2' => 'chao mừng bạn đến',
    ];
    print_r(array_push($array, 'đã thêm phần tử')); // dùng để thêm phần tử vào cuối mảng và trả về số lượng phần tử trong  mảng sau khi được thêm
    echo("<br/>");

?>