<?php include 'condb.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
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
        $query = $_GET['query'];
        $sql = "SELECT * FROM product_thai WHERE pro_name LIKE '%$query%' ORDER BY pro_id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-sm-3">
                    <div class="text-center">
                        <img src="img/<?= $row['img'] ?>" width="250px" height="250" class="mt-5 p-2 my-10" style="border-radius: 5%;">
                        <br>
                        <h5 class="text-success"><?= $row['pro_name'] ?></h5>
                        <a class="btn btn-outline-success mt-2" href="sh_product_detail.php?id=<?= $row['pro_id'] ?>"> รายละเอียด </a>
                    </div>
                    <br>
                </div>
                <?php
            }
        } else {
            echo "<div class='col'>ไม่พบข้อมูล</div>";
        }
        mysqli_close($conn);
        ?>
    </div>
</div>

</body>
</html>
