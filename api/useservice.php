<?php
include 'server.php';
try {
    $dog_id = $_POST['dog_id'];
    $service_id = $_POST['service_id'];
    $us_date = $_POST['us_date'];
    $price = $_POST['price'];

    $sql = "INSERT INTO use_service (dog_id, service_id, us_date, us_price) VALUES ('$dog_id', '$service_id', '$us_date', '$price')";
    $query = mysqli_query($conn, $sql);

    // echo $price;

    if (!$query) {
        throw new Exception("จองบริการไม่สำเร็จ");
    }

    $data['success'] = true;
} catch (Exception $th) {
    $data['success'] = false;
    $data['msg'] = $th->getMessage();
}
echo json_encode($data);
