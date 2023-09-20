<?php
include 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <!---เรียกใช้งานเทมเพลสในบูสแต็บ-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body>
    <?php include 'menu1.php'; ?>
    <div class="container px-4"> <!---ให้แสดงเต็มหน้าจอใส่  <div class="container-fluid px-4">---->
        <a class="btn btn-primary mt-4 mb-1" href="fr_product.php" role="button">Add+</a>
        <div class="card mb-4 mt-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                ประเพณีไทย
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>รูปภาพ</th>
                            <th>รหัส</th>
                            <th>ชื่อ</th>
                            <th>รายละเอียด</th>
                            <th>ภาค</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>

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

                                <td>
                                    <a href="edit_product.php?id=<?= $row['pro_id'] ?>" class="btn btn-success">Edit</a>
                                </td>

                                <td>
                                   <a href="delete_product.php?id=<?= $row['pro_id'] ?>" class="btn btn-danger">Delete</a>
                                </td>

                            </tr>
                            <?php
                        }
                        mysqli_close($conn);
                        ?>
                    </tbody>

                    </tbody>
                </table>
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