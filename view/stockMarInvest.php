<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ผู้ถือหุ้น</title>
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
                        ผู้ถือหุ้น
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
                                        <div class="col-lg-5 col-md-5">
                                            <b>ชื่อผู้ถือหุ้น<span class="red">*</span></b>
                                            <div class="form-line">
                                                <select class="form-control show-tick">
                                                    <optgroup label="บริษัทในกลุ่มทีซีซี ไพรเวท">
                                                        <option>บจ. ทีซีซี ไพรเวท จำกัด</option>
                                                        <option>บจ. ซีเอ็นที สตาร์ จำกัด</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>เลขทะเบียนนิติบุคคล<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div>
                                                    <input type="text" class="form-control" placeholder="0103564000011" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <b> เลขทะเบียนผู้ถือหุ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="001775" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6">
                                            <b>จำนวนหุ้นที่ถือทั้งสิ้น <span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="15,000,000.00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <b>คิดเป็นร้อยละ<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div>
                                                    <input type="text" class="form-control" placeholder="100" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <b>สถานะหุ้นที่ลงทุน<span class="red">*</span></b>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon flip" onclick="showPlFunction()">
                                                    <input type="radio" class="with-gap" id="ig_radio_mk1">
                                                    <label for="ig_radio_mk1">จำนำ</label>
                                                </span>
                                                <a href="../view/stockMarPledged.php" target="_blank" style="margin-left: 60px;"><span class="red">*</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon flip" onclick="showPdFunction()">
                                                    <input type="radio" class="with-gap" id="ig_radio_mk2">
                                                    <label for="ig_radio_mk2">ปลอดจำนำ</label>
                                                    <a href="../view/stockMarPledgedCancel.php" target="_blank" style="margin-left: 5px;"><span class="red">*</span></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //row -->
                                </form>

                                <!-- form Pledged -->
                                <form class="form-horizontal box__director" id="panel1">
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
                                    <div class="btn-control text-align">
                                        <a href="#cancel"></a><button type="reset" class="btn btn-raised bg-grey waves-effect">
                                            ยกเลิก
                                        </button>
                                        <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                    </div>

                                </form>

                                <!-- form PledgedCancel -->
                                <form class="form-horizontal box__director" id="panel2">
                                    <!-- row -->
                                    <div class="row clearfix py-10px">
                                        <div class="col-lg-2 col-md-2">
                                            <b>ปลอดจำนำ : <span class="red">*</span></b>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="input-group input-group-lg margin-b0">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_sn1">
                                                    <label for="ig_radio_sn1">ออกใบหุ้น</label>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="input-group input-group-lg margin-b0">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_sn2">
                                                    <label for="ig_radio_sn2">หุ้นอยู่ในบริษัทหลักทรัพย์</label>
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
                                            <div class="input-group input-group-lg margin-b0">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_cf1">
                                                    <label for="ig_radio_cf1"></label>
                                                </span>
                                                <b class="padleft_25 ">ปลอดจำนำ : <span class="red"> ใบหุ้น (จัดเก็บสำนักงาน)*</span></b>
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
                                            <div class="input-group input-group-lg margin-b0">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_cf2">
                                                    <label for="ig_radio_cf2"></label>
                                                </span>
                                                <b class="padleft_25 ">ปลอดจำนำ : <span class="red"> ใบหุ้น (ฝากธนาคาร)*</span></b>
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
                                            <div class="input-group input-group-lg margin-b0">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_cf3">
                                                    <label for="ig_radio_cf3"></label>
                                                </span>
                                                <b class="padleft_25 ">ปลอดจำนำ : <span class="red"> หุ้นอยู่ในบริษัทหลักทรัพย์*</span></b>
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
            <!-- footer -->
            <?php include('../view/footer.php'); ?>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>
    <script>
        function showPlFunction() {
            document.getElementById("panel1").style.display = "block";
        }
    </script>
    <script>
        function showPdFunction() {
            document.getElementById("panel2").style.display = "block";
        }
    </script>
</body>

</html>
<!-- end-->