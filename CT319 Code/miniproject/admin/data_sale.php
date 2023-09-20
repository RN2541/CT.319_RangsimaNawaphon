<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost", "root", "", "datadb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sqlQuery = "SELECT SUM(total_price) as sumTotal, dateMonth FROM tb_order GROUP BY dateMonth ORDER BY dateMonth";

$result = mysqli_query($conn, $sqlQuery);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>
