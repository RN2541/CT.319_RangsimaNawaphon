<?php
session_start();
include 'condb.php';
$cusName = $_POST['cus_name'];
$cusAddress = $_POST['cus_add'];
$cusTel = $_POST['cus_tel'];
$dmonth = date("F");

$sql = "insert into tb_order(cus_name, address, telephone, total_price, order_status, dateMonth)
        values('$cusName', '$cusAddress', '$cusTel', '" . $_SESSION["sum_price"] . "', '1', '$dmonth')"; ///1ยังไม่ชำระเงิน
mysqli_query($conn, $sql);

$orderID = mysqli_insert_id($conn);
$_SESSION["order_id"] = $orderID;  //เช็คเงื่อนไข

for ($i = 0; $i <= (int) $_SESSION["intLine"]; $i++) {
    if (($_SESSION["strProductID"][$i]) != "") {
        //ดึงข้อมูลสินค้า
        $sql1 = "select * from product where product_id = '" . $_SESSION["strProductID"][$i] . "' "; //ดูแก้ตรง pro
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_array($result1);
        $price = $row1['product_price'];
        $total = $_SESSION["strQty"][$i] * $price;

        $sql2 = "insert into order_detail(orderID, pro_id, orderPrice, orderQty, Total)
                 values('$orderID', '" . $_SESSION["strProductID"][$i] . "', '$price',
                 '" . $_SESSION["strQty"][$i] . "', '$total')";
        if (mysqli_query($conn, $sql2)) {
            //ตัดสต๊อคสินค้า
            $sql3 = "update product set product_amount = product_amount - '" . $_SESSION["strQty"][$i] . "'
                     where product_id = '" . $_SESSION["strProductID"][$i] . "' ";
            mysqli_query($conn, $sql3);
        }
    }
}

// คืนค่าคำสั่งไปยังหน้าพิมพ์ใบสั่งซื้อ
echo "<script> window.location = 'print_order.php'; </script>";

mysqli_close($conn);
unset($_SESSION["intLine"]);
unset($_SESSION["strProductID"]);
unset($_SESSION["strQty"]);
unset($_SESSION["sum_price"]);
?>
