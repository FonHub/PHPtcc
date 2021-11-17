<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ปลอดจำนำ</title>
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
                        ปลอดจำนำ
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
                                    <div class="row clearfix py-10px mb-bt10">
                                        <div class="col-lg-2 col-md-2">
                                            <b>ปลอดจำนำ : <span class="red">*</span></b>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="input-group input-group-lg margin-b0">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_mk1">
                                                    <label for="ig_radio_mk1">ออกใบหุ้น</label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="input-group input-group-lg margin-b0">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_mk2">
                                                    <label for="ig_radio_mk2">หุ้นอยู่ในบริษัทหลักทรัพย์</label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
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
                                            <b>หมายเลขหุ้น</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="1500" />
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
                                    </div>
                                    <div class="row clearfix">
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
                                    <div class="h20"></div>
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-5">
                                            <b>ปลอดจำนำ : <span class="red"> ใบหุ้น (จัดเก็บสำนักงาน)*</span></b>
                                            <div class="input-group input-group-lg margin-b0">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_cf1">
                                                    <label for="ig_radio_cf1"></label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h20"></div>

                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4"> <b>สถานที่เก็บเอกสาร<span class="red">*</span></b>
                                            <div class="form-group">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กรุณาเลือก">
                                                        <option>อาคารสุรวงศ์ ห้อง A</option>
                                                        <option>อาคารสุรวงศ์ ห้อง B</option>
                                                    </optgroup>
                                                </select><!-- From Master -->
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4"> <b>หมายเลขตู้เอกสาร<span class="red">*</span></b>
                                            <div class="form-group">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กรุณาเลือก">
                                                        <option>A01</option>
                                                        <option>B02 </option>
                                                    </optgroup>
                                                </select><!-- From Master -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12"> <b>หมายเหตุ<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h20"></div>
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-5">
                                            <b>ปลอดจำนำ : <span class="red"> ใบหุ้น (ฝากธนาคาร)*</span></b>
                                            <div class="input-group input-group-lg margin-b0">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_cf2">
                                                    <label for="ig_radio_cf2"></label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h20"></div>
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3">
                                            <b>วันที่ฝาก<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="12 เม.ย.2564" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <b>ผู้รับฝาก<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="ชื่อธนาคาร/ชื่อย่อ" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>วันที่ถอน<span class="red">*</span></b>
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
                                    <div class="h20"></div>
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-5">
                                            <b>ปลอดจำนำ : <span class="red"> หุ้นอยู่ในบริษัทหลักทรัพย์*</span></b>
                                            <div class="input-group input-group-lg margin-b0">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_cf3">
                                                    <label for="ig_radio_cf3"></label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h20"></div>
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3">
                                            <b>วันที่นำหุ้นเข้าบริษัทหลักทรัพย์<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="12 เม.ย.2564" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-5">
                                            <b>ชื่อบริษัทหลักทรัพย์<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="บริษัทหลักทรัพย์จัดการกองทุน" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5">
                                            <b>จำนวนหุ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="10,000,000.00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 master_function">
                                            <!-- bar function-->
                                            <div class="btn_function">
                                                <div class="__box">
                                                    <div class="_add">
                                                        <button type="button" class="btn btn-default"><i class="material-icons">add</i></button>
                                                    </div>
                                                </div>
                                                <div class="__box">
                                                    <div class="_remove">
                                                        <button type="button" class="btn btn-default"><i class="material-icons">remove</i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-5">
                                            <b>ชื่อบริษัทหลักทรัพย์<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="บริษัทหลักทรัพย์จัดการกองทุน" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5">
                                            <b>จำนวนหุ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="10,000,000.00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 master_function">
                                            <!-- bar function-->
                                            <div class="btn_function">
                                                <div class="__box">
                                                    <div class="_add">
                                                        <button type="button" class="btn btn-default"><i class="material-icons">add</i></button>
                                                    </div>
                                                </div>
                                                <div class="__box">
                                                    <div class="_remove">
                                                        <button type="button" class="btn btn-default"><i class="material-icons">remove</i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-control text-align">
                                        <a href="#cancel"></a><button type="reset" class="btn btn-raised bg-grey waves-effect">
                                            ยกเลิก
                                        </button>
                                        <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                    </div>
                                </form>
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
                                                <th>สถานที่ใบหุ้น</th>
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
                                                <td>ใบหุ้น : จัดเก็บสำนักงาน</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>1 ต.ค. 2550</td>
                                                <td>1</td>
                                                <td>5</td>
                                                <td>200,000</td>
                                                <td>ใบหุ้น : ฝากธนาคาร</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>15 ต.ค. 2550</td>
                                                <td>1</td>
                                                <td>5</td>
                                                <td>200,000</td>
                                                <td>ใบหุ้น : เข้าบริษัทหลักทรัพย์</td>
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