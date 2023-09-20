<?php include 'condb.php' ?> <!-- เรียกใช้งานตัวคอนดีบี -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Little Baby Shop</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .row:hover {
            transform: scale(1.05);
            /*  ขนาด ในการขยาย*/
            transition: 0.5s;
            /*  เวลาในการขยาย*/
        }
    </style>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <div class="row mt-4">
            <?php
            $ids = $_GET['id']; //กดสินค้าตัวไหนก็จะส่ง id ตัวนั้นขึ้นมาตรงรายละเอียด
            $sql = "SELECT product_thai.*, type.type_name FROM product_thai INNER JOIN type ON product_thai.type_id = type.type_id WHERE product_thai.pro_id = '$ids'"; //ดึงรูปสินค้ามา
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
            ?>

            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <img src="img/<?= $row['img'] ?>" width="100%" style="border-radius:2%"/>
            </div>


            <div class="col-md-7">
                <br>
                <?php
                // เพิ่มโค้ดนี้เพื่อให้รหัสสินค้ารันแต่ไม่แสดงผล
                $row['pro_id'];
                ?>
                <br>


                <h5 class="text-success">
                    <?= $row['pro_name'] ?>
                </h5><br>

                ประเพณี :
                <?= $row['type_name'] ?> <br><br>


                <?= $row['pro_detail'] ?> <br><br>


            </div>
        </div>
    </div>

    <?php
    mysqli_close($conn);
    ?>

</body>

</html>