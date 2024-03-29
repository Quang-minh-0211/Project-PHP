<?php
require_once "database.php";
if ($conn->connect_error) {
    die("connect to database faile" . $conn->connect_error);
}
$soTienNhan = $_POST['soTienNhan'];
// Thực hiện truy vấn so sánh giá trị và lấy kết quả
$sql = "SELECT value_3 FROM buy_price WHERE ? BETWEEN value_1 AND value_2";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $soTienNhan);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$ketQua = $row['value_3'];
echo $ketQua;

// Đóng kết nối
$stmt->close();
$conn->close();
