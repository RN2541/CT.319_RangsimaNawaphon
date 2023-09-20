<?php
include 'condb.php';

// รับค่า pro_id จาก URL
$pro_id = $_GET['id'];

// สร้างคำสั่ง SQL สำหรับลบสินค้า
$sql = "DELETE FROM product_thai WHERE pro_id = '$pro_id'";

// ลบสินค้า
if (mysqli_query($conn, $sql)) {
    // ลบสำเร็จ
    echo "<script>alert('ลบสินค้าเรียบร้อยแล้ว'); window.location = 'showproduct1.php';</script>";
} else {
    // ไม่สามารถลบได้
    echo "<script>alert('เกิดข้อผิดพลาดในการลบสินค้า'); window.location = 'showproduct1.php';</script>";
}

mysqli_close($conn);
?>
