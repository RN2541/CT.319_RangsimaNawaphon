<?php
include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <!-- Bootstrap CSS 5.1.3 กับ 5.2.x  -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <style>
    .centered {
        vertical-align: middle;
    }
</style>

</head>

<body>
<div class="container">
<div class="alert alert-success h4 text-center mb-4 mt-4"  role="alert">
                    แสดงข้อมูลสินค้า
                </div>

    <a class="btn btn-outline-primary mb-4" href="../admin/showproduct1.php" role="button">ย้อนกลับ</a>&nbsp;&nbsp;
<table class="table table-hover">

        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ประเภทสินค้า</th>
            <th>ราคาขาย</th>
            <th>ราคาทุน</th>
            <th>จำนวน</th>
            <th>รูปภาพ</th>
            <th>แก้ไข</th>
        </tr>
        
        <?php
        $sql="SELECT * FROM product ,type WHERE product.type_id = type.type_id  ";
        $hand = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($hand)){
        ?>
        <tr>
    <td class="centered"><?=$row['product_id']?></td>
    <td class="centered"><?=$row['product_name']?></td>
    <td class="centered"><?=$row['type_name']?></td>
    <td class="centered"><?=$row['product_price']?></td>
    <td class="centered"><?=$row['cost']?></td>
    <td class="centered"><?=$row['product_amount']?></td>
    <td class="centered"><img src="img/<?=$row['product_image']?>" width="150px" height="150px"></td>
    <td class="centered"><a href="edit_product.php?id=<?=$row['product_id']?>" class="btn btn-warning" > Edit </a></td>
</tr>

        <?php
        }
        mysqli_close($conn);
        ?>
    </table>

    <!----  <a class="btn btn-success mb-4" href="fr_product.php" role="button">Add+</a> --->
</div>

</div>
</body>

</html>