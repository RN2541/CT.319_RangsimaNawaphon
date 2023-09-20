<?php
include 'condb.php';
$ids=$_GET['id'];
$sql="SELECT * FROM product WHERE product_id='$ids' ";
$hand=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($hand);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Up stock</title>
    <!-- Bootstrap CSS 5.1.3 กับ 5.2.x  -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <!---เรียกใช้งานเทมเพลสในบูสแต็บ-->
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-5"> <!---ความกว้าง-->

            <div class="alert alert-primary mt-4 h3" role="alert">
  เพิ่มจำนวนสินค้าในสต็อก
</div>

                <form name="form1" method="post" action="update-Stock.php">
                    <div class="mb-3 mt-3"> <!---เว้นระยะห่าง-->
                        <label>รหัสสินค้า : </label>
                        <input type="text" name="pid" class="form-control" readonly value="<?=$row['product_id']?>">
                    </div>

                    <div class="mb-3"> <!---เว้นระยะห่าง-->
                        <label>ชื่อสินค้า : </label>
                        <input type="text" name="pname" class="form-control" readonly value="<?=$row['product_name']?>">
                    </div>

                    <div class="mb-3"> <!---เว้นระยะห่าง-->
                        <label>เพิ่มจำนวนสินค้า : </label>
                        <input type="text" name="pnum" class="form-control" required>
                    </div>

                    <input type="submit" name="submit" class="btn btn-success" value="Submit">
                    <a href="index.php" class="btn btn-danger">Cancle</a>

                </form>
            </div>
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