<?php


//Mảng 1 chiều
$list = array(1, 2, 3, 4, 5);
$list[3]=6;
$list[] = 7;
echo "<pre>";
print_r($list);
echo "</pre>";


$class = array(
    'id' => 1,
    'name' => 'bla chi ahfb',
    'diachi' => 'Hà Nội',
);
// echo $class['diachi'];
// echo "<br>";

$class['sdt'] = '0987654321';
$class['diachi'] = 'Hà Nội 2';//Ghi đè

echo "<pre>";
print_r($class);
echo "</pre>";

// // mảng nhiều chiều
$student = array(
    array("name" => "Nguyễn Văn A", "age" => 20, "address" => "Hà Nội"),
    array("name" => "Nguyễn Văn B", "age" => 21, "address" => "Hà Nội"),
    array("name" => "Nguyễn Văn C", "age" => 22, "address" => "Hà Nội"),
    array("name" => "Nguyễn Văn D", "age" => 23, "address" => "Hà Nội"),
    array("name" => "Nguyễn Văn E", "age" => 24, "address" => "Hà Nội"),
);

$student[0]['name'] = 'Nguyễn Văn A 2';
$student[1] = array("name" => "Nguyễn Văn A 3", "age" => 20, "address" => "Hà Nội");
echo $student[0]["name"];
echo "<br>";
print_r($student[1]);

//xóa phần tử trong mảng
unset($student[0]);
echo "<pre>";
print_r($student);
echo "</pre>";
