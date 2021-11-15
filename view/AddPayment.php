<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ชำระเพิ่ม</title>
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
                        ชำระหุ้น
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

                                <!-- form -->
                                <form class="form-horizontal box__director">
                                    <div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
                                                <b>วันที่เข้าเป็นผู้ถือหุ้น<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="disabled">
                                                        <input type="text" class="form-control" placeholder="30 ต.ค. 2550" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2">
                                                <b>วันที่ชำระหุ้น<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="30 ต.ค. 2550" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2"><b>ทะเบียน <span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="disabled">
                                                        <input type="text" class="form-control" placeholder="1" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6"><b>ผู้ถือหุ้น<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="disabled">
                                                        <input type="text" class="form-control" placeholder="นาย วิชัย วชิรพงศ์" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2"><b>ลำดับที่พิมพ์<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="disabled">
                                                        <input type="text" class="form-control ip" placeholder="1" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-1"><b>กำหนดเอง<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control ip" placeholder="1" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
                                                <b>ใบหุ้นเลขที่<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="1" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3">
                                                <b>จากหมายเลขหุ้นเลขที่<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="7499" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ถึงหมายเลขหุ้นเลขที่<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="9998" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>จำนวนหุ้น <span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="2,500" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
                                                <b>มูลค่าหุ้น<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control pdmg-0" placeholder="10.00" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ราคาตกลงซื้อขายมูลค่าหุ้นละ<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="1.00" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ยอดชำระ <span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="100,000" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>%การเรียกชำระ <span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="5" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 color-sum"><b>ยอดชำระรวมทั้งหมด<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="disabled">
                                                        <input type="text" class="form-control ip" placeholder="100,000" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 color-li"><b>ยอดค้างชำระรวมทั้งหมด<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="disabled">
                                                        <input type="text" class="form-control ip" placeholder="200,000" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- row -->
                                </form>
                                <div class="btn-control text-align">
                                    <a href="#cancel"></a><button type="reset" class="btn btn-raised bg-grey waves-effect">
                                        ยกเลิก
                                    </button>
                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Payment History -->
            <div id="company_detail">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>ประวัติการชำระเงิน</h2>
                            </div>
                            <div class="body">
                                <!-- table -->
                                <div class="body table-responsive company-list">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 60px">ครั้งที่</th>
                                                <th>วันที่</th>
                                                <th>ยอดชำระ</th>
                                                <th>%การเรียกชำระ</th>
                                                <th>ยอดชำระรวมทั้งหมด</th>
                                                <th>ยอดค้างชำระรวมทั้งหมด</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1 ต.ค. 2550</td>
                                                <td>100,000</td>
                                                <td>5</td>
                                                <td>200,000</td>
                                                <td>500,000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>1 ต.ค. 2550</td>
                                                <td>100,000</td>
                                                <td>5</td>
                                                <td>100,000</td>
                                                <td>600,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <?php include('../view/footer.php'); ?>
        </div>
    </section>



    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>

</body>

</html>
<!-- end-->