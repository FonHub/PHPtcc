<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>เงินปันผล</title>
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
                        เงินปันผล
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
                                <!-- table-->
                                <div class="body table-responsive company-list">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width:60px;">#</th>
                                                <th>ผู้ถือหุ้น</th>
                                                <th>ทะเบียน</th>
                                                <th>ใบหุ้นเลขที่</th>
                                                <th>จำนวนหุ้นทั้งหมด</th>
                                                <th>เงินปันผล <br> มูลค่า(บาท/หุ้น)</th>
                                                <th>เงินปันผลรวม(บาท)</th>
                                                <th>วันปิดสมุดทะเบียน</th>
                                                <th>วันที่จ่ายเงินปันผล</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="data in dataTableShow" :key="data.id">
                                                <td>1</td>
                                                <td>บจ.ซีเอ็นที สตาร์ จำกัด</td>
                                                <td>10</td>
                                                <td>12</td>
                                                <td>65,799,996</td>
                                                <td>15.00</td>
                                                <td>986,999,940</td>
                                                <td>18 ก.ย. 56</td>
                                                <td>01 ธ.ค. 56</td>
                                            </tr>
                                            <tr v-for="data in dataTableShow" :key="data.id">
                                                <td>2</td>
                                                <td>บจ.เพชรดีไซน์ เฟอร์นิเจอร์ จำกัด</td>
                                                <td>11</td>
                                                <td>8</td>
                                                <td>1</td>
                                                <td>15.00</td>
                                                <td>15.00</td>
                                                <td>18 ก.ย. 56</td>
                                                <td>01 ธ.ค. 56</td>
                                            </tr>
                                        </tbody>
                                    </table>
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