<?php

//$list = array('anh', 'ds', 'nf', 'n', 'à');
?>

<html>

<head>
    <title>Nhúng dữ liệu mảng lên HTML</title>
</head>

<body>
    <h1>Bảng dữ liệu cần xuất</h1>
    <?php if (!empty($list)) { ?>
        <table border="1">
            <thead>
                <tr>
                    <td width="50">STT</td>
                    <td width="200">Số nguyên tố</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;

                foreach ($list as $value) {
                ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value; ?></td>
                    </tr>
            <?php
                }
            } else echo "Không tồn tại dữ liệu"; ?>
            </tbody>
        </table>
</body>

</html>

<?php
$student = array(
    array("name" => "Nguyễn Văn A", "age" => 20, "address" => "Hà Nội"),
    array("name" => "Nguyễn Văn B", "age" => 21, "address" => "Thanh Hóa"),
    array("name" => "Nguyễn Văn C", "age" => 22, "address" => "Hải Phòng"),
    array("name" => "Nguyễn Văn D", "age" => 23, "address" => "Bắc Ninh"),
    array("name" => "Nguyễn Văn E", "age" => 24, "address" => "Hà Nội"),
);
?>

<html>

<head>
    <title>Nhúng dữ liệu mảng nhiều chiều lên HTML</title>
</head>

<body>
    <h2> Bảng nhiều chiều</h2>
    <?php if (!empty($student)) { ?>
        <table border="1">
            <thead>
                <tr>
                    <td width="400">Name</td>
                    <td width="100">AGE</td>
                    <td width="500">ADDRESS</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($student as $value) {
                ?>
                    <tr>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['age']; ?></td>
                        <td><?php echo $value['address']; ?></td>
                    </tr>
            <?php
                }
            } else echo "Không tồn tại dữ liệu"; ?>
            </tbody>
        </table>
</body>

</html>