
<?php
include '../server.php';

$dep_id = $_POST["dep_id"];
$chkdeliver = "SELECT dep_deliver as deliver FROM deposit WHERE dep_id = '$dep_id'";
$chkdeliverquery = mysqli_query($conn, $chkdeliver);
$chkdeliverresult = mysqli_fetch_assoc($chkdeliverquery);

// echo '<pre>'; print_r($chkdeliverresult); echo '</pre>';


// $sql = "UPDATE deposit SET dep_status= 3, status_name = 'กำลังส่งสุนัขคืน' WHERE dep_id='$dep_id' AND dep_status = 2 AND dep_deliver = 'ต้องการ' " ;
// $query = mysqli_query($conn,$sql) ;

if ($chkdeliverresult['deliver'] != "ต้องการ") {
    $sql = "UPDATE deposit SET dep_status= 3, status_name = 'สิ้นสุดการให้บริการ' WHERE dep_id='$dep_id' AND dep_status = 2 AND dep_deliver != 'ต้องการ' ";
    $query = mysqli_query($conn, $sql);
    // $result = mysqli_fetch_assoc($query);
    if ($query) {
        $data['success'] = true;
    } else {
        $data['success'] = false;
    }
    echo json_encode($data);
} elseif ($chkdeliverresult['deliver'] == "ต้องการ") {
    $sql2 = "UPDATE deposit SET dep_status= 3, status_name = 'กำลังนำสุนัขไปส่ง' WHERE dep_id='$dep_id' AND dep_status = 2";
    $query2 = mysqli_query($conn, $sql2);
    // $result = mysqli_fetch_assoc($query);
    if ($query2) {
        $data['success'] = true;
    } else {
        $data['success'] = false;
    }
    echo json_encode($data);
}
?>