<?php

include 'userlayout/header.php';
// if (isset($_SESSION['status' == 1])) {
//     header('location: userindex.php');
// } 
// if (!isset($_SESSION['status' == 2])) {
//     header('location: backend/adminindex.php');
// } 

// if($_SESSION['status'] != 2){
//     echo "<script>";
//     echo "alert(\"คุณไม่ใช่ Admin!!\");";
//     echo "window.location=\"../login.php\"";
//     echo "</script>";
// }

// if (isset($_GET['logout'])){
//     session_destroy();
//     unset($_SESSION['username']);
//     header('location: ../login.php'); 
// }

?>

<body class="" style="font-family: Kanit Thin;min-height: 100%;">
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:;">คุณคือ : <strong><?php echo $_SESSION['username']; ?></a>
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Features</a>
    </li>
    <a href="api/logout.php" type="button" class="btn btn-outline-danger">ออกจากระบบ</a>

  </div>
</nav>
</div>
</nav> -->
    <nav class="navbar navbar-expand-lg" style="margin-bottom: 0px; font-family: Kanit Light; color: black; background-color: white;">
        <a style="color: black;" class="navbar-brand" href="userindex.php">|Good Dog Home|</a>
        <!-- <a onclick="gologin()" id="gologin" class="navbar-link" style="font-family: Kanit Thin;" href="userindex.php">ใช้บริการ</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item">
        <a class="nav-link" href="userindex.php">Home </a>
      </li> -->
                <!-- <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: Kanit thin;">
                            การจองของท่าน
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="userdepositorder.php">ฝากเลี้ยง</a>
                            <a class="dropdown-item" href="userserviceorder.php">สปาร์สุนัข</a>
                        </div>
                    </div>
                </li> -->
                <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
                <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#" style="padding-top: 20%;">
          <p>คุณคือ : <strong><?php echo $_SESSION['username']; ?></p>
        </a>
      </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="login.php" type="button" class="btn btn-danger" style="font-family: Kanit Thin;">ล็อคอิน</a>
                <a href="register.php" type="button" class="btn btn-danger" style="font-family: Kanit Thin;">สมัครสมาชิก</a>
            </form>
        </div>
    </nav>
    <div class="bg">
        <div class="" style="padding-top: 20%; padding-left: 15%; ">
            <h2 class="" style=" font-family: Kanit thin; color: black; font-size: 80px; text-shadow: 2px 1px 0px black;">Good Dog Home</h2>
            <hr style="width: 35%;">
            <p style="font-family: Kanit light; color: black; text-shadow: 2px 2px 0px white;">ร้านรับฝากเลี้ยงน้องหมา มีพี่ ๆ ดูแลอย่างใกล้ชิด มีสนามหญ้าให้น้อง ๆ ได้วิ่งเล่น ผ่อนคลาย</p>
            <p style="font-family: Kanit light; color: black; text-shadow: 2px 2px 0px white;">น้อง ๆ จะได้นอนห้องส่วนตัว แยกไซส์เล็ก-ใหญ่ ผู้ปกครองไว้ใจได้เลยค่ะ</p>
            <!-- <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#aboutstore" data-whatever="@mdo" style="font-family: Kanit light; color: black; border-radius: 100px; box-shadow:0px 0px 5px black ">รายละเอียด</button></a> -->
            <button type="button" class="btn btn-dark btn-lg" onclick="gologin()" style="font-family: Kanit light; color: white; border-radius: 100px; box-shadow:0px 0px 10px black">ใช้บริการ</button>
        </div>
        <!-- <div class="bottom-left">Bottom Left</div>
            <div class="top-left">Top Left</div>
            <div class="top-right">Top Right</div>
            <div class="bottom-right">Bottom Right</div>
            <div class="centered">Centered</div> -->

    </div>
    <!-- <div class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center" style="padding-top: 25px; background-color: #34495E;">
                    <p style="font-size: 25px; font-family: Kanit; color: #FDFDFD;"> ขั้นตอนที่ 1 <br> (เพิ่มสุนัข) </p>
                    <hr style="width: 35%; border: 1px solid white; margin-left: auto; margin-right: auto;">
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="text-center">
                <div class="d-flex">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="opacity: 0.7;">
                                <img src="images/dog1.jpg" class="d-block w-100" alt="Wild Landscape" />
                            </div>
                            <div class="carousel-item">
                                <img src="images/dog2.jpg" class="d-block w-100" alt="Camera" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="d-block w-100" alt="Exotic Fruits" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    <div class="container-fluid" style="background-color: #F4D03F;">
        <div class="row" style="padding-top: 25px;">
            <div class="col-md-12 text-center justify-content-center">

                <p style="font-family: Kanit medium; font-size: 35px;">เริ่มต้นใช้งาน</p>
                <hr style="width: 65%; margin-left: 18%;">
            </div>

            <div class="col-md-4 text-center d-flex justify-content-center">
                <div class="card text-center rounded-0" style="width: 20rem; margin-top: 3%; margin-left: 45%; margin-bottom: 10%; box-shadow: 0px 0px 10px #3C3B3D;">
                    <!-- <div class="numberCircle">2</div> -->
                    <img class="card-img-top rounded-0" src="images/logintest.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: Kanit; font-size: 20px;">สมัครสมาชิก/ล็อคอิน</h5>
                        <hr style="width: 75%; margin-left: 15%;">
                        <p class="card-text" style="font-family: Kanit Light; font-size: 16px;">เป็นส่วนหนึ่งกับพวกเราด้วยการสมัครสมาชิก และล็อคอิน เพื่อง่ายต่อการใช้งานในครั้งถัดไป</p>
                        <hr style="width: 75%; margin-left: 15%;">
                    </div>
                    <div class="card-footer">
                        <button onclick="gogo()" type="button" class="btn btn-warning btn-lg" style="font-family: Kanit Thin; color:black; box-shadow: 2px 2px 0px;">ล็อคอินเลย</button>
                        <!-- <a class="btn btn-danger" href="adddeposit.php">ทดสอบเพิ่มวันที่</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center justify-content-center">
                <div class="card text-center rounded-0" style="width: 20rem; margin-top: 3%;  margin-left: 25%;  margin-bottom: 10%; box-shadow: 0px 0px 10px #3C3B3D;">
                    <!-- <div class="numberCircle">2</div> -->
                    <img class="card-img-top rounded-0" src="images/dogcard2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: Kanit; font-size: 20px;">เพิ่มสุนัข</h5>
                        <hr style="width: 75%; margin-left: 15%;">
                        <p class="card-text" style="font-family: Kanit Light; font-size: 16px;">ลูกค้าสามารถเพิ่มสุนัขทั้งหมดที่ลูกค้ามีเพื่อเก็บเป็นข้อมูล สำหรับการใช้บริการในครั้งนี้และครั้งถัดไป</p>
                        <hr style="width: 75%; margin-left: 15%;">
                    </div>
                    <div class="card-footer">
                        <button type="button" data-toggle="modal" data-target="#adddog_detail" class="btn btn-warning btn-lg" style="font-family: Kanit Thin; color:black; box-shadow: 2px 2px 0px;">รายละเอียด</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center d-flex justify-content-center">
                <div class="card text-center rounded-0" style="width: 20rem; margin-top: 3%; margin-right: 40%;  margin-bottom: 10%; box-shadow: 0px 0px 10px #3C3B3D;">
                    <img class="card-img-top rounded-0" src="images/choose.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: Kanit; font-size: 20px;">เลือกบริการ</h5>
                        <hr style="width: 75%; margin-left: 15%;">
                        <p class="card-text" style="font-family: Kanit Light; font-size: 16px;">เลือกใช้บริการที่ต้องการ และเลือกวันที่จะเข้าใช้บริการได้เลย</p>
                        <hr style="width: 75%; margin-left: 15%;">
                    </div>
                    <div class="card-footer">
                        <button type="button" data-toggle="modal" data-target="#use_detail" class="btn btn-warning btn-lg" style="font-family: Kanit Thin; color:black; box-shadow: 2px 2px 0px;">รายละเอียด</button>
                    </div>
                </div>
            </div>

            <!-- <div class="col-6 text-center d-flex">
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
            </div> -->
            <!-- <div class="col-4 text-center d-flex align-items-stretch">
                <div class="card text-center rounded-0" style="width: 20rem; margin-left: auto; margin-right: auto; margin-top: 5%; box-shadow: 10px 10px 0px #3C3B3D;">
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
            <div class="col-4 text-center d-flex align-items-stretch">
                <div class="card text-center rounded-0" style="width: 20rem; margin-left: auto; margin-right: 50%; margin-top: 5%; box-shadow: 10px 10px 0px #3C3B3D;">
                    <img class="card-img-top rounded-0" src="images/bath_dog.jpg" alt="Card image cap">
                    <div class="numberCircle">2</div>
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: Kanit; font-size: 20px;">สปาร์สุนัข</h5>
                        <hr style="width: 75%; margin-left: 15%;">
                        <p class="card-text" style="font-family: Kanit Thin; font-size: 16px;">บริการอาบน้ำ ตัดขน ตัดเล็บสุนัขครบวงจร</p>
                        <hr style="width: 75%; margin-left: 15%;">
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-outline-info btn-lg" data-toggle="modal" data-target="#useservice" data-whatever="@mdo" style="font-family: Kanit Thin; box-shadow: 2px 2px 0px;">ใช้บริการ</button>
                    </div>
                </div>
            </div> -->

            <!-- <a class="btn btn-danger" href="adddeposit.php">ทดสอบเพิ่มวันที่</a>
            <p>ตารางสุนัขของท่าน</p>
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th>รหัสสุนัข</th>
                        <th>ชื่อสุนัข</th>
                        <th>พันธุ์สุนัข</th>
                        <th>น้ำหนักสุนัข</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM dog WHERE user_id = '$user_id' ";
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <th scope="row"> <?= $row["dog_id"] ?> </th>
                            <td><?= $row["dog_name"] ?></td>
                            <td><?= $row["dog_type"] ?></td>
                            <td><?= $row["dog_weight"] ?></td>
                            <?php
                            ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table> -->

            <!-- <div class="col-4 text-center">
                <a class="btn btn-danger" href="adddeposit.php">ทดสอบเพิ่มวันที่</a>
                <div class="d-flex">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#deposit" data-whatever="@mdo">ฝากเลี้ยง</button>
                </div>
                <div class="d-flex">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#useservice" data-whatever="@mdo">ใช้บริการ</button>
                </div>
            </div> -->
        </div>
    </div>
    <!-- <div class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center" style="padding-top: 25px; background-color: #34495E;">
                    <p style="font-size: 25px; font-family: Kanit; color: #FDFDFD;"> ขั้นตอนที่ 2 <br> (ใช้บริการ) </p>
                    <hr style="width: 35%; border: 1px solid white; margin-left: auto; margin-right: auto;">
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="text-center">
                <div class="d-flex">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-mdb-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="opacity: 0.7;">
                                <img src="images/dog1.jpg" class="d-block w-100" alt="Wild Landscape" />
                            </div>
                            <div class="carousel-item">
                                <img src="images/dog2.jpg" class="d-block w-100" alt="Camera" />
                            </div>
                            <div class="carousel-item">
                                <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="d-block w-100" alt="Exotic Fruits" />
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- <div class="container-fluid" style="background-color: #F4D03F;">
        <div class="row" style="padding-top: 25px;">
            <div class="col-6 text-center d-flex align-items-stretch">
                <div class="card text-center rounded-0" style="width: 20rem; margin-left: 50%; margin-right: auto; margin-top: 5%; margin-bottom: 10%; box-shadow: 10px 10px 0px #3C3B3D;">
                    <div class="numberCircle">2</div>
                    <img class="card-img-top rounded-0" src="images/deposit_dog.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: Kanit; font-size: 20px;">ฝากเลี้ยงสุนัข</h5>
                        <hr style="width: 75%; margin-left: 15%;">
                        <p class="card-text" style="font-family: Kanit Light; font-size: 16px;">บริการรับฝากเลี้ยงสุนัขแบบแยกห้อง พร้อมห้องปรับอากาศ ดูแลและปล่อยสุนัขอย่างเป็นเวลา</p>
                        <hr style="width: 75%; margin-left: 15%;">
                    </div>
                    <div class="card-footer">
                        <button onclick="gologin()" type="button" class="btn btn-outline-info btn-lg" style="font-family: Kanit Thin; box-shadow: 2px 2px 0px;">ฝากเลี้ยง</button>
                        
                    </div>
                </div>
            </div>
            <div class="col-6 text-center d-flex align-items-stretch">
                <div class="card text-center rounded-0" style="width: 20rem; margin-left: auto; margin-right: 50%; margin-top: 5%; margin-bottom: 10%; box-shadow: 10px 10px 0px #3C3B3D;">
                    <img class="card-img-top rounded-0" src="images/bath_dog.jpg" alt="Card image cap">
                    <div class="numberCircle">2</div>
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: Kanit; font-size: 20px;">สปาร์สุนัข</h5>
                        <hr style="width: 75%; margin-left: 15%;">
                        <p class="card-text" style="font-family: Kanit Light; font-size: 16px;">บริการอาบน้ำ ตัดขน ตัดเล็บสุนัขครบวงจร</p>
                        <hr style="width: 75%; margin-left: 15%;">
                    </div>
                    <div class="card-footer">
                        <button onclick="gologin()" type="button" class="btn btn-outline-info btn-lg" style="font-family: Kanit Thin; box-shadow: 2px 2px 0px;">ใช้บริการ</button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid" style="background-color: white;">
        <div class="row" style="padding-top: 25px; padding-bottom: 25px;">
            <div class="col-md-5 justify-content-center ">
                <hr style="width: 90%; margin-left: 10%; margin-top: 3%;">
            </div>
            <div class="col-md-2 text-center justify-content-center">
                <p style="font-family: Kanit medium; font-size: 35px;">เกี่ยวกับเรา</p>
                <!-- <hr style="width: 65%; margin-left: 18%;"> -->
            </div>
            <div class="col-md-5 justify-content-center ">
                <hr style="width: 90%; margin-right: 5%; margin-top: 3%;">
            </div>

            <div class="col-md-6 justify-content-center">
                <p style="font-family: Kanit light; margin-left: 45%;">
                    - รับฝากเลี้ยงน้องหมา​ ทุกขนาด​<br>
                    - นอนห้องแอร์ เย็นสบาย ไม่แออัด แอร์ 12,000 BTU <br>
                    - แยกบ้าน แยกห้อง​ น้องหมาพันธุ์เล็ก-ใหญ่ <br>
                    - มีถาดรองฉี่ พร้อมแผ่นซับ ให้บริการฟรี <br>
                    - เปลี่ยนและทำความสะอาด ชามข้าว​ ชามน้ำ​ เช้า -เย็น <br>
                    - ทางบ้านใช้น้ำกรอง ให้น้องกิน เพื่อสุขภาพปลอดเชื้อ <br>
                </p>
            </div>
            <div class="col-md-6 justify-content-center">
                <p style="font-family: Kanit light; margin-left: 15%;">
                    - พาวิ่งเล่น อย่างน้อย 4 เวลา(เช้า-เที่ยง-เย็น-ก่อนนอน) <br>
                    - ทำความสะอาดที่พักทุกวัน​ พ่นไบติคอล-​น้ำยาฆ่าเชื้อ <br>
                    - เจ้าของบ้านดูแลน้องๆ เอง พร้อมพี่เลี้ยง <br>
                    - น้องหมาขนสั้น ฝากเกิน 7 วัน อาบน้ำฟรี <br>
                    - มีบริการรับ-ส่ง เริ่มต้นที่ 80 บาท จ้า</p>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: white;">
        <div class="row" style="padding-top: 25px; padding-bottom: 25px;">
            <div class="col-md-5 justify-content-center ">
                <hr style="width: 90%; margin-left: 10%; margin-top: 3%;">
            </div>
            <div class="col-md-2 text-center justify-content-center">
                <p style="font-family: Kanit medium; font-size: 35px;">แกลเลอรี่</p>
            </div>
            <div class="col-md-5 justify-content-center ">
                <hr style="width: 90%; margin-right: 30%; margin-top: 3%;">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/gal1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/gal2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/gal3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="images/gal4.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <a data-toggle="modal" data-target="#r1">
                                    <img src="images/r1.jpg" class="w-100" alt="">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a data-toggle="modal" data-target="#r2">
                                    <img src="images/r2.jpg" class="w-100" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <a data-toggle="modal" data-target="#r3">
                                    <img src="images/r5.jpg" class="w-100" alt="">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a data-toggle="modal" data-target="#r4">
                                    <img src="images/r4.jpg" class="w-100" alt="">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('userlayout/footer.php') ?>

    <div class="modal fade" id="r1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-md-12">
                        <img src="images/r1.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="r2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-md-12">
                        <img src="images/r2.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="r3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-md-12">
                        <img src="images/r5.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="r4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="col-md-12">
                        <img src="images/r4.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>