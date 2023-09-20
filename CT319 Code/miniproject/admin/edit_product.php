<?php
include 'condb.php';
$idpro = $_GET['id'];

$sql1 = "SELECT * FROM product_thai WHERE pro_id='$idpro'";
$result = mysqli_query($conn, $sql1);
$rs = mysqli_fetch_array($result);
$p_typeID = $rs['type_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <!---เรียกใช้งานเทมเพลสในบูสแต็บ-->
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .btn-up {
    margin-top: -30px; /* ปรับค่าตามต้องการให้ปุ่มขยับขึ้นหรือลง */
}
</style>
    
</head>

<body>

<?php include 'menu1.php'; ?> 
<div class="container px-4"> <!---ให้แสดงเต็มหน้าจอใส่  <div class="container-fluid px-4">---->
<div class="card mb-4 mt-4">


    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="alert alert-primary h4 text-center mb-4 mt-4" role="alert">
                แก้ไขข้อมูล
                </div>
                <!----- <input type="hidden" name="id" value="<?= $row['id'] ?>">  ----->

                <form name="form1" method="post" action="update_product.php" enctype="multipart/form-data">
                    <label>ชื่อ: </label>
                    <input type="text" name="pname" class="form-control" value="<?= $rs['pro_name'] ?>"><br>

                    <label>รายละเอียด :</label>
<textarea name="detail" class="form-control" rows="5"><?= $rs['pro_detail'] ?></textarea><br>


                    <label>ประเภท : </label>
                    <select class="form-select" name="typeID">
                        <?php
                        $sql = "SELECT * FROM type ORDER BY type_name";
                        $hand = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hand)) {
                            $ttypeID = $row['type_id'];
                            ?>
                            <option value="<?= $row['type_id'] ?>" <?php if($p_typeID==$ttypeID){echo "selected=selected";}?> >    
                            <?= $row['type_name'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
<br>
                    <label>Product Image: </label><br>
                    <img src="img/<?= $rs['img'] ?>" width="180"><br><br>
                    <input type="file" name="file1" required><br><br>
                    <input type="hidden" name="txtimg" class="form-control" value="<?= $rs['img'] ?>"><br>

                    <input type="hidden" name="proid" value="<?= $idpro ?>">

                    <button type="submit" class="btn btn-primary btn-up">Update</button>

                    <a class="btn btn-danger btn-up" href="showproduct1.php" role="button">Cancel</a>
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