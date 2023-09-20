<?php
include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
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

<body>
<?php include 'menu1.php'; ?> 
<div class="container px-4"> <!---ให้แสดงเต็มหน้าจอใส่  <div class="container-fluid px-4">---->
<div class="card mb-4 mt-4">


    <div class="container">
        <div class="row">
            <div class="col-sm-6"> <!---6 ความยาวของหน้าจอ---->
                <div class="alert alert-primary h4 text-center mb-4 mt-4"  role="alert">
                    เพิ่มข้อมูล
                </div>

                <form name="form1" method="post" action="insert_product.php" enctype="multipart/form-data">
                    <label>ชื่อ : </label>
                    <input type="text" name="pname" class="form-control" placeholder="กรุณาระบุชื่อ" required><br>

                    <label>รายละเอียด : </label>
<textarea name="detail" class="form-control" placeholder="กรุณาระบุรายละเอียด" rows="5" required></textarea><br>




                    <label>ประเภท : </label>
                    <select class="form-select" name="typeID">
                        <option selected>กรุณาเลือก</option>

                        <?php
                        $sql = "SELECT * FROM type ORDER BY type_name";
                        $hand = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($hand)) {
                            ?>
                            <option value="<?= $row['type_id'] ?>"><?= $row['type_name'] ?></option>
                            <?php
                        }
                        mysqli_close($conn);
                        ?>
                    </select>
                    <br><br>
                   
                    <label>รูปภาพ : </label>
                    <input type="file" name="file1" required><br><br><br>

                    <button type="submit" class="btn btn-primary"  href="showproduct1.php">submit</button>
                    <a class="btn btn-danger" href="showproduct1.php" role="button">Cancel</a>

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