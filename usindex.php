<?php
include('userlayout/header.php');

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if ($_SESSION['status'] == 0) {
    echo "<script>";
    echo "alert(\"กรุณารอการยืนยันจาก admin\");";
    echo "window.location=\"login.php\"";
    echo "</script>";
} elseif ($_SESSION['status'] == 2) {
    header('location: backend/adminindex.php');
} else {
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
$user_id = $_SESSION['user_id'];
?>

<body class="" style="font-family: Kanit Thin;min-height: 100%;">
    <?php include('userlayout/nav.php') ?>
    <div class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center" style="padding-top: 25px; background-color: #34495E;">
                    <p style="font-size: 25px; font-family: Kanit; color: #FDFDFD;"> ขั้นตอนที่ 1 <br> (เพิ่มสุนัข) </p>
                    <hr style="width: 35%; border: 1px solid white; margin-left: auto; margin-right: auto;">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #F4D03F;">
        <div class="row" style="padding-top: 25px;">


            <div class="col-md-6 text-center ">
                <div class="card text-center rounded-0" style="width: 20rem;  margin-left: 50%; margin-right: auto; margin-top: 5%; margin-bottom: 5%; box-shadow: 10px 10px 0px #3C3B3D;">
                    <img class="card-img-top rounded-0" src="images/dog_dep3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <div class="numberCircle">1</div>
                        <h5 class="card-title" style="font-family: Kanit; font-size: 20px;">โปรดเพิ่มสุนัขของท่าน</h5>
                        <hr style="width: 75%; margin-left: 15%;">
                        <p class="card-text" style="font-family: Kanit Thin; font-size: 16px;">เพิ่มสุนัขสำหรับใช้บริการในครั้งหน้าและอัพเดทข้อมูลส่วนตัวเพื่อเก็บเป็นข้อมูลการเติบโตให้กับสุนัขของท่าน</p>
                        <hr style="width: 75%; margin-left: 15%;">
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#uadddog" data-whatever="@mdo" style="font-family: Kanit thin;">เพิ่มสุนัข</button>
                    </div>
                </div>
            </div>
            <?php
            $sql = "SELECT * FROM dog WHERE user_id = '$user_id'";
            $query = mysqli_query($conn, $sql);
            if ($query != "") {
            }
            ?>
            <div class="col-6 text-center d-flex">
                <table class="table table-dark table-striped" style="margin-right: 30%; margin-left: auto; margin-top: 5%; margin-bottom: 5%;">
                    <thead>
                        <tr>
                            <th>ชื่อสุนัข</th>
                            <th>พันธุ์สุนัข</th>
                            <th>น้ำหนักสุนัข (กิโลกรัม)</th>
                            <th>อายุสุนัข (ปี)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM dog WHERE user_id = '$user_id' ";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <th scope="row"> <?= $row["dog_name"] ?> </th>
                                <td><?= $row["dog_type"] ?></td>
                                <td><?= $row["dog_weight"] ?></td>
                                <td><?= $row["dog_age"] ?></td>
                                <?php
                                ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center" style="padding-top: 25px; background-color: #34495E;">
                    <p style="font-size: 25px; font-family: Kanit; color: #FDFDFD;"> ขั้นตอนที่ 2 <br> (ใช้บริการ) </p>
                    <hr style="width: 35%; border: 1px solid white; margin-left: auto; margin-right: auto;">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #F4D03F;">
        <div class="row" style="padding-top: 25px;">
            <div class="col-6 text-center d-flex align-items-stretch">
                <div class="card text-center rounded-0" style="width: 20rem; margin-left: 50%; margin-right: auto; margin-top: 5%; margin-bottom: 10%; box-shadow: 10px 10px 0px #3C3B3D;">
                    <div class="numberCircle">2</div>
                    <img class="card-img-top rounded-0" src="images/deposit_dog.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: Kanit; font-size: 20px;">ฝากเลี้ยงสุนัข</h5>
                        <hr style="width: 75%; margin-left: 15%;">
                        <p class="card-text" style="font-family: Kanit Thin; font-size: 16px;">บริการรับฝากเลี้ยงสุนัขแบบแยกห้อง พร้อมห้องปรับอากาศ ดูแลและปล่อยสุนัขอย่างเป็นเวลา</p>
                        <hr style="width: 75%; margin-left: 15%;">
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-info btn-lg" data-toggle="modal" data-target="#deposit" data-whatever="@mdo" style="font-family: Kanit Thin; box-shadow: 2px 2px 0px;">ฝากเลี้ยง</button>
                    </div>
                </div>
            </div>
            <div class="col-6 text-center d-flex align-items-stretch">
                <div class="card text-center rounded-0" style="width: 20rem; margin-left: auto; margin-right: 50%; margin-top: 5%; margin-bottom: 10%; box-shadow: 10px 10px 0px #3C3B3D;">
                    <img class="card-img-top rounded-0" src="images/bath_dog.jpg" alt="Card image cap">
                    <div class="numberCircle">2</div>
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: Kanit; font-size: 20px;">สปาสุนัข</h5>
                        <hr style="width: 75%; margin-left: 15%;">
                        <p class="card-text" style="font-family: Kanit Thin; font-size: 16px;">บริการอาบน้ำ ตัดขน ตัดเล็บสุนัขครบวงจร</p>
                        <hr style="width: 75%; margin-left: 15%;">
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-info btn-lg" data-toggle="modal" data-target="#useservice" data-whatever="@mdo" style="font-family: Kanit Thin; box-shadow: 2px 2px 0px;">ใช้บริการ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('userlayout/footer.php') ?>

</body>

</html>