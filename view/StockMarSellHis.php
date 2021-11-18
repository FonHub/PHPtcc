<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ประวัติการซื้อขาย</title>
    <?php include('../view/linkhead.php'); ?>

</head>

<body class="theme-orange">
    <!-- Top Bar -->
    <?php include('../view/topbar.php'); ?>


    <!-- Left Sidebar -->
    <?php include('../view/leftsidebar.php'); ?>


    <!-- Right Sidebar -->
    <?php include('../view/rightsidebar.php'); ?>

    <!-- Main Content -->
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>
                        ประวัติการซื้อขาย
                    </h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- main info-->
            <section class="sec-maininfo">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">

                            <div class="body">
                                <!-- table -->
                                <div class="row clearfix">
                                    <div class="body table-responsive stock_list">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>วันที่ซื้อขาย</th>
                                                    <th>ผู้ถือหุ้น</th>
                                                    <th>ผู้ซื้อ</th>
                                                    <th>เลขที่ใบหุ้น</th>
                                                    <th>ลักษณะหุ้น</th>
                                                    <th>มูลค่าหุ้นที่ซื้อขาย</th>
                                                    <th>จำนวนหุ้นที่ซื้อขาย</th>
                                                    <th>จำนวนเงินทั้งสิ้น</th>
                                                    <th>แนบเอกสาร</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>12 เม.ย.2564</td>
                                                    <td>บริษัทกลุ่มทีซีซี ไพรเวท จำกัด</td>
                                                    <td>บริษัท หนึ่ง </td>
                                                    <td>10</td>
                                                    <td>ปลอดจำนำ : ใบหุ้น (จัดเก็บสำนักงาน)</td>
                                                    <td>1.000</td>
                                                    <td>15,000,000.00</td>
                                                    <td>150,000,000.00</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td>12 เม.ย.2564</td>
                                                    <td>บริษัทกลุ่มทีซีซี ไพรเวท จำกัด</td>
                                                    <td>บริษัท สอง</td>
                                                    <td>10</td>
                                                    <td>ปลอดจำนำ : ใบหุ้น (จัดเก็บสำนักงาน)</td>
                                                    <td>1.000</td>
                                                    <td>100,000.00</td>
                                                    <td>100,000.00</td>
                                                    <td>-</td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- footer -->
            <?php include('../view/footer.php'); ?>
        </div>
    </section>



    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>

</body>

</html>
<!-- end-->