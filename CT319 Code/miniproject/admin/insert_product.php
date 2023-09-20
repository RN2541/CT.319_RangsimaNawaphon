<?php
include 'condb.php';
$p_name = $_POST['pname'];
$detail = $_POST['detail'];
$typeID = $_POST['typeID'];



// รับค่าหน้า fr_product.php 

// ตรวจสอบว่ามีการอัปโหลดไฟล์รูปภาพหรือไม่ อัพโหลดรูปภาพ
if (isset($_FILES['file1']) && is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $original_image_name = basename($_FILES['file1']['name']);
    $image_upload_path = "./image/" . $original_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'], $image_upload_path);
    $img = $original_image_name;
} else {
    $product_image = "";
}

// คำสั่งเพิ่มข้อมูลในตาราง product
$sql = "INSERT INTO product_thai(pro_name,pro_detail,type_id,img) 
    VALUES ('$p_name','$detail','$typeID','$img')";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script> alert ('บันทึกข้อมูลเรียบร้อย'); </script>";
    echo "<script> window.location = 'showproduct1.php' ; </script>";
} else {
    echo "<script> alert ('ไม่สามารถบันทึกข้อมูลได้'); </script>";
}

?>

