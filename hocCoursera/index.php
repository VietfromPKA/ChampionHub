<?php
    // phpinfo(); // in thông tin php đang dùng trên hệ thống

    echo "Hello, World!<br>"; // in ra chuỗi "Hello, World!" trên trình duyệt web
    $var = " Mình là Vũ Quốc Việt <br>"; 
    echo $var; // in ra giá trị của biến $var trên trình duyệt web

    $num = 21;
    $pi = 3.24;
    $name ="cac so nguyen va so thuc";
    $colors = array("black", "red", "green", "yellow", "blue");

    if($num > 21){
        echo "Giá trị của biến num lớn hơn 21 <br>";
    }elseif($num < 21){
        echo "Giá trị của biến num nhỏ hơn 21 <br>";
    }else{
        echo "Giá trị của biến num bằng 21  <br>";
    }

//vòng lặp
    for($i = 0; $i < count($colors); $i++){
        echo "Màu sắc: ". $colors[$i]. "<br>";
    }

    foreach($colors as $col){
        echo "Màu sắc: ". $col. "<br>";
    }

    function getName($name){
        echo "Tên của bạn là: ". $name. "<br>";
    }

    getName("Nguyễn Thành Lâm");
    getName("Nguyễn Duy Việt Bách");
    

?> 