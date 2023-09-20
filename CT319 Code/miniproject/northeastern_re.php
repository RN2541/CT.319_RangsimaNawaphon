<?php include 'condb.php' ?> <!-- เรียกใช้งานตัวคอนดีบี -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Little Baby Shop</title>

<!-- Bootstrap CSS 5.1.3 กับ 5.2.x  -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
 <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>

  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <style>
        .text-center{
          transform: scale(1); /*  ขนาด ในการขยาย*/
          transition: 0.5s; /*  เวลาในการขยาย*/
          border-radius: 20%;
        }
        .text-center:hover{
          transform: scale(1.05); /*  ขนาด ในการขยาย*/
          transition: 0.5s; /*  เวลาในการขยาย*/
        }
        .text-success{
          margin-top: 20px;
        }
</style>

</head>


<body>
  <?php include 'menu.php'; ?>

  <div class="container">
    <br>
    <div class="row">
      <?php
      // นำเข้าไฟล์เชื่อมต่อฐานข้อมูล (ตัวแปร $conn)
      $sql = "SELECT * FROM product_thai WHERE type_id = 3 ORDER BY pro_id";

      $result = mysqli_query($conn, $sql);
      
      while ($row = mysqli_fetch_array($result)) {
      ?>

        <div class="col-md-3 m-4">
          <div class="text-center">
            <img src="img/<?= $row['img'] ?>" width="300px" height="220" class="mt-5 p-10 my-10" style="border-radius: 5%;"><br>

            <h5 class="text-success">
              <?= $row['pro_name'] ?>
            </h5>

            <a class="btn btn-outline-success mt-2" href="sh_product_detail.php?id=<?= $row['pro_id'] ?>"> Read More </a>
          </div>
          <br>
        </div>

      <?php
      }
      mysqli_close($conn);
      ?>
    </div>
  </div>

</body>


</html>