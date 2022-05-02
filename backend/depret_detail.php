<?php include 'layout/header.php'; ?>

<body class="bodyfont">
    <div class="wrapper">

        <?php include 'layout/navside.php'; ?>

        <div class="main-panel">
            <!-- Navbar -->
            <?php include 'layout/nav.php'; ?>
            <!-- End Navbar -->

            <!-- Content -->
            <div class="content">
                <div class="row">
                    <?php
                    $dep_id = $_GET['dep_id'];
                    $sql = "SELECT * FROM deposit WHERE dep_id = '$dep_id'";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>

                        <div class="col-md-6">
                            <h4 class="title" style="color: black;">ยืนยันการคืนสุนัข</h4>
                        </div>
                        <div class="col-md-3">

                        </div>

                        <div class="col-md-3" style="padding-top: 1%;">
                            <div class="form-group">
                                <!-- <input type="hidden" name="dep_id" value="<?= $row['dep_id']; ?>" id="dep_id"> -->
                                <button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#return">อัพเดทสถานะ</button>
                            </div>
                        </div>
                </div>
                <div class="modal fade" id="return" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">กรอกชื่อผู้รับ/ส่งสุนัข</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="post" action="../api/return/dep_returndb.php">
                                    <div class="row">
                                        <input type="hidden" name="dep_id" value="<?= $row['dep_id']; ?>" id="dep_id">
                                        <div class="col-md-12">
                                            <label for="us_basisimage" class="form-label">ชื่อผู้ส่ง :</label>
                                            <input type="text" name="sender_name" id="sender_name" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="us_basisimage" class="form-label">ชื่อผู้รับสุนัขคืน :</label>
                                            <input type="text" name="reciever_name" id="reciever_name" class="form-control">
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="return" class="btn btn-primary btn-lg">บันทึก</button>
                                <button type="reset" class="btn btn-dark btn-lg">ล้างค่า</button>
                                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">ปิด</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <hr>
            <div class="col-md-12">
                <div class="card">
                    <div id="accordion">
                        <div class="card">

                            <div class="row">
                                <div class="col-md-12 ml-5 pt-3">
                                    <h4 style="font-family: Kanit;">รายละเอียดการจอง</h4>

                                </div>

                            </div>
                            <div class="card-body">
                                <div class="content table-full-width">
                                    <table class="table table-striped table-bordered ">
                                        <thead>
                                            <tr align="center">
                                                <th style="width: 5%;">รหัสการจอง</th>
                                                <th style="width: 10%;">วันที่เข้าใช้บริการ</th>
                                                <th style="width: 10%;">วันที่สิ้นสุด</th>
                                                <th style="width: 10%;">บริการส่งสุนัขคืน</th>
                                                <th style="width: 10%;">สถานะ</th>
                                                <th style="width: 5%;">ราคา</th>
                                                <th style="width: 20%;">หลักฐานการโอนเงิน</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT *, dog.image FROM deposit INNER JOIN room ON deposit.room_id = room.room_id INNER JOIN dog ON deposit.dog_id = dog.dog_id INNER JOIN user ON dog.user_id = user.user_id WHERE dep_id = '$dep_id'";
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <tr align="center">
                                                    <td><?= $row["dep_id"] ?></td>
                                                    <td><?= $row["dep_sdate"] ?></td>
                                                    <td><?= $row["dep_edate"] ?></td>
                                                    <td><?= $row["dep_deliver"] ?></td>
                                                    <td><?= $row["status_name"] ?></td>
                                                    <td><?= $row["dep_price"] ?></td>
                                                    <td>
                                                        <?php
                                                        if (!empty($row["dep_basis"])) {
                                                            echo '<img src="../api/pay/uploads/' . $row['dep_basis'] . '" style="width: 300px; height: 350px;" alt="">';
                                                        } else {
                                                            echo '<p style="color: red;"><i style="margin-right: 1%;" class="fa fa-times-circle-o fa-lg" aria-hidden="true" ></i>ไม่มีหลักฐานการโอน</p>';
                                                        }
                                                        ?>
                                                    </td>

                                                    <?php
                                                    ?>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-md-12 ml-5 pt-3">
                                    <h4 style="font-family: Kanit;">รายละเอียดสุนัข</h4>

                                </div>

                            </div>

                            <div class="card-body">
                                <div class="content table-full-width">
                                    <table class="table table-striped table-bordered ">
                                        <thead>
                                            <tr align="center">
                                                <th style="width: 5%;">รหัสสุนัข</th>
                                                <th style="width: 10%;">ชื่อ</th>
                                                <th style="width: 10%;">พันธุ์</th>
                                                <th style="width: 10%;">น้ำหนัก (กก.)</th>
                                                <th style="width: 5%;">อายุ (ปี)</th>
                                                <th style="width: 10%;">โรคประจำตัว/แพ้อาหาร</th>
                                                <th style="width: 20%;">รูปสุนัข</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT *, dog.image FROM deposit INNER JOIN room ON deposit.room_id = room.room_id INNER JOIN dog ON deposit.dog_id = dog.dog_id INNER JOIN user ON dog.user_id = user.user_id WHERE dep_id = '$dep_id'";
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <tr align="center">
                                                    <td><?= $row["dog_id"] ?></td>
                                                    <td><?= $row["dog_name"] ?></td>
                                                    <td><?= $row["dog_type"] ?></td>
                                                    <td><?= $row["dog_weight"] ?></td>
                                                    <td><?= $row["dog_age"] ?></td>
                                                    <td><?= $row["dog_sickness"] ?></td>
                                                    <td>
                                                        <?php
                                                        if (!empty($row["image"])) {
                                                            echo '<img src="../api/dog/uploads/' . $row['image'] . '" style="width: 300px; height: 350px;" alt="">';
                                                        } else {
                                                            echo '<p style="color: red;"><i style="margin-right: 1%;" class="fa fa-times-circle-o fa-lg" aria-hidden="true" ></i>ยังไม่มีรูปสุนัข</p>';
                                                        }
                                                        ?>
                                                    </td>

                                                    <?php
                                                    ?>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 ml-5 pt-3">
                                    <h4 style="font-family: Kanit;">รายละเอียดเจ้าของ</h4>

                                </div>

                            </div>
                            <div class="card-body">
                                <div class="content table-full-width">
                                    <table class="table table-striped table-bordered ">
                                        <thead>
                                            <tr align="center">
                                                <th style="width: 10%;">รหัสเจ้าของ</th>
                                                <th style="width: 10%;">ชื่อผู้ใช้งาน</th>
                                                <th style="width: 15%;">อีเมล์</th>
                                                <th style="width: 25%;">ชื่อ-นามสกุลจริง</th>
                                                <th style="width: 40%;">ที่อยู่</th>

                                                <!-- <th style="width: 20%;">รูปสุนัข</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT *, dog.image FROM deposit INNER JOIN room ON deposit.room_id = room.room_id INNER JOIN dog ON deposit.dog_id = dog.dog_id INNER JOIN user ON dog.user_id = user.user_id WHERE dep_id = '$dep_id'";
                                            $query = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <tr align="center">
                                                    <td><?= $row["user_id"] ?></td>
                                                    <td><?= $row["username"] ?></td>
                                                    <td><?= $row["email"] ?></td>
                                                    <td><?= $row["fullname"] ?></td>
                                                    <td><?= $row["address"] ?></td>

                                                    <!-- <td><?= $row["dep_price"] ?></td> -->
                                                    <!-- <td>
                                                            <?php
                                                            if (!empty($row["dep_basis"])) {
                                                                echo '<img src="../api/dog/uploads/' . $row['image'] . '" style="width: 300px; height: 250px;" alt="">';
                                                            } else {
                                                                echo '<p style="color: red;"><i style="margin-right: 1%;" class="fa fa-times-circle-o fa-lg" aria-hidden="true" ></i>ไม่มีหลักฐานการจอง</p>';
                                                            }
                                                            ?>
                                                        </td> -->

                                                    <?php
                                                    ?>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            </div>
        </div>

        <?php include 'layout/footer.php'; ?>

</body>

</html>