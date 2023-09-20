<?php 
include 'condb.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

//เข้ารหัส password ด้วย sha512
//$password = hash('sha512', $password);

$sql = "SELECT * FROM tb_employee WHERE username='$username' AND password ='$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$status=$row['status'];

if($row){
    $_SESSION["emp_username"] = $row['username'];
    $_SESSION["emp_password"] = $row['password'];
    $_SESSION["emp_userid"] = $row['id'];
    $_SESSION["emp_firstname"] = $row['name'];
    $_SESSION["emp_lastname"] = $row['lastname'];

    if($status == '1'){
        header("Location: index.php");
        exit;
    }
   
} else {
    $_SESSION["Error"] = "<p> Your username or password is invalid </p>";
    
    header("Location: login.php");
    exit;
}
?>