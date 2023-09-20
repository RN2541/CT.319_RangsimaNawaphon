<?php
session_start();
include 'condb.php';
if (!isset($_SESSION["emp_userid"])) {
    header("Location: login.php");
    exit(); // ใส่ exit() เพื่อให้โปรแกรมหยุดทำงานทันทีหลังจากเปลี่ยนเส้นทาง
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>💗</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <!---เรียกใช้งานเทมเพลสในบูสแต็บ-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


    <!----ตัวกราฟหน้าแดชบอร์ด----->
    <script type="text/javascript" src="chart/jquery.min.js"></script>
    <script type="text/javascript" src="chart/Chart.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <?php include 'menu1.php'; ?> <!--แยกไฟล์เมนูออกจากตัวและทำการเรียกฟังก์ชันเมนูมาเเทน--->


    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        ข้อมูลประเพณีไทย
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>รูปภาพ</th>
                                    <th>รหัส</th>
                                    <th>ชื่อ</th>
                                    <th>รายละเอียด</th>
                                    <th>ประเภท</th>

                                </tr>
                            </thead>

                            <tfoot> <!--ในส่วนที่กดค้นหา (search) หน้า index admin--->
                                <tr>
                                    <th>product_id</th> <!--มาจาก database product--->
                                    <th>product_name</th>
                                    <th>product_detail</th>
                                    <th>type_name</th> <!--มาจาก database type--->
                                </tr>
                            </tfoot>

                            <tbody>
                                <?php
                                $sql = "SELECT * FROM product_thai p,type t WHERE p.type_id=t.type_id";
                                $hand = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($hand)) {
                                    ?>
                                <tr>
                                    <td><img src="../img/<?= $row['img'] ?>" width="100" height="100"> </td>
                                    <!--- เรียกใช้รูปภาพ img ในโฟลเดอร์นอกของหน้าขายสินค้า -->
                                        <td>
                                            <?= $row['pro_id'] ?>
                                        </td>
                                        <td>
                                            <?= $row['pro_name'] ?>
                                        </td>
                                        <td>
                                            <?= $row['pro_detail'] ?>
                                        </td>
                                        <td>
                                            <?= $row['type_name'] ?>
                                        </td>
                                       
                                    <?php
                                }
                                mysqli_close($conn);
                                ?>
                            </tbody>

                            </tbody>
                        </table>
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
