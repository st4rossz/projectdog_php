
<?php
include '../server.php';

$dep_id = $_POST["dep_id"];
$sender_name = $_POST["sender_name"];
$reciever_name = $_POST["reciever_name"];
$sql1 = "UPDATE deposit SET dep_status= 3, status_name = 'สิ้นสุดการให้บริการ' WHERE dep_id='$dep_id' AND dep_status = 2 AND dep_deliver ='ต้องการ'";
$sql2 = "INSERT INTO dep_return (sender_name, reciever_name, dep_id) VALUES ('$sender_name','$reciever_name','$dep_id')";
$query1 = mysqli_query($conn, $sql1);
$query2 = mysqli_query($conn, $sql2);
if ($query1 and $query2) {
    $data['success'] = true;
} else {
    $data['success'] = false;
}
echo json_encode($data);
?> 