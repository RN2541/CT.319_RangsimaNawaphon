<?php
session_start();
if (!isset($_SESSION["emp_userid"])) {
    header("Location: login.php");
    exit(); //ใส่ exit() เพื่อให้โปรแกรมหยุดทำงานทันทีหลังจากเปลี่ยนเส้นทาง
}
?>    <!--ต้องมีรหัส admin เท่านั้นถึงจะสามารถเข้าถึงได้ ถ้าเป็นบุคคลทั่วไปไม่สามารถเข้าถึงได้-->

<?php include 'condb.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Report</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <!---เรียกใช้งานเทมเพลสในบูสแต็บ-->
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="sb-nav-fixed">
    <?php include 'menu1.php'; ?>         <!--แยกไฟล์เมนูออกจากตัวและทำการเรียกฟังก์ชันเมนูมาเเทน--->

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <div class="card mb-4 mt-4">
                    <div class="card-header">
                       
                        <br>
                        <div>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                        <center>
                    <div class="alert alert-success  h4" role="alert">
                        เพิ่มข้อมูลพนักงาน
                    </div>
                </center>
                        <form method="POST" action="insert_register.php">
                    ชื่อ <input type="text" name="firstname" class="form-control" required>
                    <!--required เป็นคำสั่งห้ามเว้นว่าง-->
                    นามสกุล <input type="text" name="lastname" class="form-control" required>
                    กรุณาเลือก วัน/เดือน/ปีเกิด <input type="date" name="date" class="form-control" required>
                
                    เบอร์โทรศัพท์ <input type="number" name="phone" class="form-control" required>
                    ที่อยู่พนักงาน <textarea class="form-control" name="address" row="3"></textarea>
                    Username <input type="text" name="username" maxlength="10" class="form-control" required>
                    Password <input type="password" name="password" maxlength="10" class="form-control" required><br>
                    
                    <center><input type="submit" name="submit" value="บันทึก" class="btn btn-primary">
                        <input type="reset" name="cancle" value="ยกเลิก" class="btn btn-danger">
                    </center>          
                </form>
                </div>
                </div>
                        
                        </div>
                    </div>
                </div>
        </main>
        <?php include 'footer.php'; ?> <!--แยกไฟล์footerออกจากตัวและทำการเรียกฟังก์ชันfooterมาเเทน--->

    </div>
    </div>
</body>


</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>

<script>
    function del(mypage) {
        Swal.fire({
            title: 'คุณต้องการยกเลิกใบสั่งซื้อสินค้าหรือไม่?',
            text: 'การยกเลิกจะทำให้ใบสั่งซื้อไม่ถูกส่งไป',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ใช่',
            cancelButtonText: 'ไม่',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = mypage;
            }
        });
    }

    function del1(mypage1) {
        var agree = confirm('คุณต้องการปรับสถานะการชำระเงินหรือไม่?');  ///คอนเฟมข้อความ
        if (agree) {
            window.location = mypage1;
        }
    }
</script>