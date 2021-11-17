<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>จำนำ</title>
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
                        จำนำ
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
                                    <!-- row -->

                                    <div class="row clearfix">
                                        <div class="col-lg-1 col-md-1">
                                            <b>ลำดับที่ <span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="1" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <b>เลขที่ใบหุ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="10" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <b>จำนวนหุ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="10" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>วันที่ออกใบหุ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="12 เม.ย.2564" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>วันที่จำนำ<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="12 เม.ย.2564" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <b>ผู้รับจำนำ<span class="red">*</span></b>
                                            <div class="form-line">
                                                <select class="form-control show-tick">
                                                    <optgroup label="ธนาคาร">
                                                        <option>ธนาคารกสิกรไทย</option>
                                                        <option>ธนาคารไทยพาณิชย์</option>
                                                    </optgroup>
                                                    <optgroup label="ผู้รับจำนำ">
                                                        <option>บจ. ทีซีซี ไพรเวท จำกัด</option>
                                                        <option>บจ. ซีเอ็นที สตาร์ จำกัด</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h20"></div>
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-5">
                                            <b>ค้ำประกัน<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="ชื่อบริษัท / ชื่อย่อ" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>วันที่ปลดจำนำ<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="12 เม.ย.2564" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <b>แนบเอกสาร<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="" />
                                                </div>
                                                <span class="input-group-addon"> <i class="zmdi zmdi-attachment-alt"></i> </span>
                                            </div>
                                        </div>
                                    </div>
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
            <!-- History -->
            <div id="company_detail">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>ประวัติหุ้น</h2>
                            </div>
                            <div class="body">
                                <!-- table -->
                                <div class="body table-responsive company-list">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 60px">ครั้งที่</th>
                                                <th>วันที่ออกใบหุ้น</th>
                                                <th>เลขที่ใบหุ้น</th>
                                                <th>หมายเลขหุ้น</th>
                                                <th>จำนวนหุ้น</th>
                                                <th>วันที่ปลดจำนำ</th>
                                                <th>แนบเอกสาร</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1 ต.ค. 2550</td>
                                                <td>1</td>
                                                <td>5</td>
                                                <td>200,000</td>
                                                <td>1 ต.ค. 2560</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>1 ต.ค. 2550</td>
                                                <td>1</td>
                                                <td>5</td>
                                                <td>200,000</td>
                                                <td>1 ต.ค. 2560</td>
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
            <!-- footer -->
            <?php include('../view/footer.php'); ?>
        </div>
    </section>



    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>

</body>

</html>
<!-- end-->