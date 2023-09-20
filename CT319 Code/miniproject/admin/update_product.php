<?php
include 'condb.php';

// Debugging setup
error_reporting(E_ALL);
ini_set('display_errors', 1);

$proid = $_POST['proid'];
$proname = $_POST['pname'];
$typeid = $_POST['typeID'];
$detail = $_POST['detail'];

// Check if a new image is uploaded
if (isset($_FILES['file1']) && is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $original_image_name = basename($_FILES['file1']['name']);
    $image_upload_path = "./image/" . $original_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'], $image_upload_path);
    $img = $original_image_name;
} else {
    $img = $_POST['txtimg']; // Use the existing image if no new image is uploaded
}

$sql = "UPDATE product_thai SET 
    pro_name = '$proname',  
    type_id = '$typeid',
    img = '$img',
    pro_detail = '$detail'
    WHERE pro_id = '$proid' ";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script> alert ('แก้ไขข้อมูลเรียบร้อย'); </script>";
    echo "<script> window.location = 'showproduct1.php'; </script>";
} else {
    echo "<script> alert ('ไม่สามารถแก้ไขข้อมูลได้'); </script>";
}

mysqli_close($conn);
?>
