<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>

<body onload=window.print()>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-primary card-outline ">
                    <div class="card-header noprint">
                        <h5 class="m-0 noprint">รายงานข้อมูล <a onClick="window.print()"><i class="fas fa-print float-right"></i></a></h5>



                    </div>
                    <div class="card-body">

                        <img src="./img/logo.png">
                        <div style="margin-left:3rem;margin-top:3rem">

                            <?php
                            if (isset($_GET['pla_id']) <> '') {
                                include './conn.php';
                                $la_id = $_GET['pla_id'];
                                $sqlhkan_la = " SELECT * FROM kan_la INNER JOIN user ON kan_la.la_user_id = user.user_id WHERE la_id = '$la_id' ";
                                $qryhkan_la = mysqli_query($conn, $sqlhkan_la);
                                $la = mysqli_fetch_assoc($qryhkan_la);

                            ?>


                                <h3 style="margin-left:3rem;margin-bottom:2rem">รายงานข้อมูลการลา</h3>
                                <table class="font-weight-bold">
                                    <tbody>
                                        <tr>
                                            <td style="width: 150px;height:40px">รหัสบัตรประชาชน</td>
                                            <td>: <u><?= $la['user_data_id_card']; ?></u> </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;height:40px">ชื่อ</td>
                                            <td>:  <u><?= $la['first_name'] . '&nbsp;&nbsp;&nbsp;' . $la['last_name']; ?></u></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;height:40px">ประเภทการลา</td>
                                            <td>
                                                <?php if ($la['la_type'] == 0) : ?>
                                                    <p> : <u> พักร้อน </u> </p>
                                                <?php elseif ($la['la_type'] == 1) : ?>
                                                    <p> :  <u> กิจ </u> </p>
                                                <?php elseif ($la['la_type'] == 2) : ?>
                                                    <p> :  <u>ปวย </u> </p>
                                                <?php elseif ($la['la_type'] == 3) : ?>
                                                    <p> :  <u>
                                                        <font color="red">ยกเลิก</font> </u>
                                                    </p>
                                                <?php endif ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;height:40px">วันที่เริ่มลา</td>
                                            <td>: <u> <?= $la['la_start']; ?></u></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;height:40px">วันที่สิ้นสุดการลา </td>
                                            <td>: <u> <?= $la['la_end']; ?></u></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;height:40px">จำนวนวันที่ลา</td>
                                            <td>: <u> <?= $la['la_total']; ?></u></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 150px;height:40px">จำนวนวันคงเหลือ </td>
                                            <td>: <u> <?= $la['la_balance']; ?></u></td>
                                        </tr>

                                    </tbody>
                                </table>

                            <?php } elseif (isset($_GET['kanzon_id']) <> '') {
                                // include './conn.php';
                                // $la_id = $_GET['pla_id'];
                                // $sqlhkan_la = " SELECT * FROM kanzon INNER JOIN user ON kan_la.la_user_id = user.user_id WHERE la_id = '$la_id' ";
                                // $qryhkan_la = mysqli_query($conn, $sqlhkan_la);
                                // $la = mysqli_fetch_assoc($qryhkan_la);

                            ?>


                                <h3 style="margin-left:3rem;margin-bottom:3rem">รายงานข้อมูลการสอน</h3>

                                <p class="font-weight-bold">รหัสบัตรประชาชน : <?= $la['user_data_id_card']; ?> </p>
                                <p class="font-weight-bold">ชื่อ : <?= $la['user_data_id_card']; ?> </p>
                                <p class="font-weight-bold">ประเภทการลา : <?= $la['la_start']; ?> </p>
                                <p class="font-weight-bold">วันที่เริ่มลาวันที่สิ้นสุดการลา : <?= $la['la_end']; ?> </p>
                                <p class="font-weight-bold">จำนวนวันที่ลา : <?= $la['la_total']; ?> </p>
                                <p class="font-weight-bold">จำนวนวันคงเหลือ : <?= $la['la_balance']; ?> </p>


                            <?php } else {
                                echo 'ไม่มีข้อมูลการลา';
                            } ?>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>


</body>

</html>