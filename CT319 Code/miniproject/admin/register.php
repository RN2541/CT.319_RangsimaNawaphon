<?php include 'condb.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php include 'menu1.php'; ?> 
    <div class="container"><br> <br>
        <div class="row">
            <div class="col-md-5 bg text-bg-light">

                <center>
                    <div class="alert alert-success  h4" role="alert">
                        สมัครสมาชิก
                    </div>
                </center>


                <form method="POST" action="insert_register.php" >
                    ชื่อ <input type="text" name="firstname" class="form-control" required>
                    <!--required เป็นคำสั่งห้ามเว้นว่าง-->
                    นามสกุล <input type="text" name="lastname" class="form-control" required><br>
                    กรุณาเลือก วัน/เดือน/ปีเกิด <input type="date" name="date" class="form-control" required>
                
                    เบอร์โทรศัพท์ <input type="number" name="phone" class="form-control" required>
                    ที่อยู่จัดส่งสินค้า <textarea class="form-control" name="address" row="3"></textarea>
                    Username <input type="text" name="username" maxlength="10" class="form-control" required>
                    Password <input type="password" name="password" maxlength="10" class="form-control" required><br>
                    
                    <center><input type="submit" name="submit" value="บันทึก" class="btn btn-primary">
                        <input type="reset" name="cancle" value="ยกเลิก" class="btn btn-danger">
                    </center>

                    <center><a href="login.php">Login</a></center>
                </form>

            </div>
        </div>

    </div>

</body>

</html>