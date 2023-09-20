<?php 
include 'condb.php';

//รับค่าตัวแปลจากไฟล์ register
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];
$address = $_POST['address'];
$date = $_POST['date'];

//เข้ารหัส password ด้วย sha512
//$password = hash('sha512', $password);

//ตรวจสอบว่า username ซ้ำหรือไม่
$sql_check_username = "SELECT * FROM tb_employee WHERE username = '$username'";
$result_check_username = mysqli_query($conn, $sql_check_username);

if (mysqli_num_rows($result_check_username) > 0) {
    // ถ้ามี username นี้อยู่ในระบบแล้ว
    echo "<script> alert('Username นี้มีอยู่ในระบบแล้ว กรุณาใช้ชื่อผู้ใช้อื่น'); </script>";
    echo "<script> window.location='fr_employee.php'; </script>";
    exit; // ออกจากการทำงานเพื่อไม่ทำการ INSERT ข้อมูลซ้ำ
}

//คำสั่งเพิ่มข้อมูลลงตาราง member
$sql = "INSERT INTO tb_employee (name, lastname, telephone, username, password, address, date, status)
        VALUES ('$name', '$lastname', '$phone', '$username', '$password', '$address', '$date', '1')"; //แก้ไขจาก 0 เป็น 1
$result = mysqli_query($conn, $sql); // บันทึกข้อมูลลง database

if ($result) {
    echo "<script> alert('บันทึกข้อมูลเรียบร้อย'); </script>";
    echo "<script> window.location='fr_employee.php'; </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script> alert('บันทึกข้อมูลไม่ได้'); </script>";

}
mysqli_close($conn);
?>
