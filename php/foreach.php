<?php

//duyệt mảng 1 chiều
$list = array(1, 2, 3, 4, 5);

$a = 0;
//bài toán tỉnh tổng
foreach ($list as $item) {
    $a += $item;
}
echo "tổng: " .$a;
echo "<br>";

// duyệt mảng nhiều chiều
$student = array(
    array("name" => "Nguyễn Văn A", "age" => 20, "address" => "Hà Nội"),
    array("name" => "Nguyễn Văn B", "age" => 21, "address" => "Hà Nội"),
    array("name" => "Nguyễn Văn C", "age" => 22, "address" => "Hà Nội"),
    array("name" => "Nguyễn Văn D", "age" => 23, "address" => "Hà Nội"),
    array("name" => "Nguyễn Văn E", "age" => 24, "address" => "Hà Nội"),
);

foreach ($student as $key => $value) {
    echo $key . " - " . $value['name'] . " - " . $value['age'] . " - " . $value['address'];
    echo "<br>";
}
