<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>การซื้อขายหุ้น</title>
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
                        การซื้อขายหุ้น
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
                                <!-- bar function-->
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 bar-header">
                                        <h2>ลักษณะใบหุ้น ซื้อ-ขาย </h2>
                                    </div>
                                    <div class="master_function">
                                        <div class="btn_function">
                                            <div class="__box width80 ">
                                                <div class="_Sell">
                                                    <a href="stockMarSellbay.php">
                                                        <button type="button" class="btn  ">
                                                            <i class="material-icons">sync</i><br>
                                                            <span class="function-name ">ทั้งจำนวน</span>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="__box width80 bg-red">
                                                <div class="_addlot">
                                                    <a href="#">
                                                        <button type="button" class="btn ">
                                                            <i class="material-icons">content_cut</i><br>
                                                            <span class="function-name color-wh">แยกใบหุ้น </span>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- form Split -->
                                <form class="form-horizontal box__director">
                                    <!-- No.1 -->
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 bar-header">
                                            <h2>รายการที่ <span>1</span></h2>
                                        </div>
                                        <div class="col-lg-5 col-md-5">
                                            <div class="block-header">
                                                <h2>ผู้ถือหุ้น </h2>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2">
                                                    <b>ลำดับที่<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div>
                                                            <input type="text" class="form-control" placeholder="1" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3">
                                                    <b>ใบหุ้นเลขที่<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div>
                                                            <input type="text" class="form-control" placeholder="2" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3">
                                                    <b>มูลค่าหุ้น<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div>
                                                            <input type="text" class="form-control" placeholder="10.00" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-10 col-md-12">
                                                    <b>ผู้ถือหุ้น<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div>
                                                            <input type="text" class="form-control" placeholder="บจ.ณัฐปภัสร์ 59 จำกัด" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12">
                                                    <b> ลักษณะหุ้น<span class="red">*</span></b>
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="บริษัทในกลุ่มทีซีซี ไพรเวท">
                                                                <option>ใบหุ้นเก็บที่สำนักงาน</option>
                                                                <option>ใบหุ้นฝากธนาคาร</option>
                                                                <option>หุ้นอยู่ในบริษัทหลักทรัพย์</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h20"></div>
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6">
                                                    <b> เลขที่ใบหุ้น<span class="red">*</span></b>
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="เลขที่ใบหุ้น">
                                                                <option>0001</option>
                                                                <option>0002</option>
                                                                <option>0003</option>
                                                                <option>0004</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <b> จำนวนหุ้นที่ถือ<span class="red">*</span></b>
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="จำนวนหุ้นที่ถือ">
                                                                <option>10,000.000.00</option>
                                                                <option>20,000.000.00</option>
                                                                <option>50,000.000.00</option>
                                                                <option>30,000.000.00</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 color-sum"><b>จำนวนหุ้นคงเหลือ<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="disabled">
                                                            <input type="text" class="color-sum" placeholder="9,600,000">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                            <div class="row clearfix ">
                                                <div class=" col-lg-3 col-md-3 block-header">
                                                    <h2>ผู้ซื้อ</h2>
                                                </div>
                                                <div class="col-lg-3 col-md-3 master_function">
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
                                                <div class="col-lg-3 col-md-3">
                                                    <b>ใบหุ้นลงวันที่<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="22 ธ.ค. 60" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3">
                                                    <b>วันที่ซื้อขาย<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="2 พ.ย. 60" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3">
                                                    <b>มูลค่าหุ้นที่ซื้อขาย<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="1.00" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12">
                                                    <b>ผู้ซื้อ<span class="red">*</span></b>
                                                    <div class="form-group">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="บริษัท">
                                                                <option> บจ.ณัฐปภัสร์ 59 จำกัด </option>
                                                                <option> บจ.พรอสเพอรัส วิน 168 จำกัด </option>
                                                            </optgroup>
                                                            <optgroup label="บุคคล">
                                                                <option> นาย วิชัย วชิรพงศ์</option>
                                                                <option> MR. SUNSHINE TAGALOG</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h20"></div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12">
                                                    <b>จำนวนหุ้นที่ซื้อขาย<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="400,000" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <b>จำนวนเงินทั้งสิ้น*<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="400,000" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <b>แนบเอกสาร <span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="" />
                                                        </div>
                                                        <span class="input-group-addon"> <i class="zmdi zmdi-attachment-alt"></i> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //No.1 -->
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-5">
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                            <div class="row clearfix ">
                                                <div class=" col-lg-3 col-md-3 block-header">
                                                    <h2>ผู้ซื้อ</h2>
                                                </div>
                                                <div class="col-lg-3 col-md-3 master_function">
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
                                                <div class="col-lg-3 col-md-3">
                                                    <b>ใบหุ้นลงวันที่<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="22 ธ.ค. 60" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3">
                                                    <b>วันที่ซื้อขาย<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="2 พ.ย. 60" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3">
                                                    <b>มูลค่าหุ้นที่ซื้อขาย<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="1.00" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12">
                                                    <b>ผู้ซื้อ<span class="red">*</span></b>
                                                    <div class="form-group">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="บริษัท">
                                                                <option> บจ.ณัฐปภัสร์ 59 จำกัด </option>
                                                                <option> บจ.พรอสเพอรัส วิน 168 จำกัด </option>
                                                            </optgroup>
                                                            <optgroup label="บุคคล">
                                                                <option> นาย วิชัย วชิรพงศ์</option>
                                                                <option> MR. SUNSHINE TAGALOG</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h20"></div>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12">
                                                    <b>จำนวนหุ้นที่ซื้อขาย<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="400,000" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <b>จำนวนเงินทั้งสิ้น*<span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="400,000" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <b>แนบเอกสาร <span class="red">*</span></b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="" />
                                                        </div>
                                                        <span class="input-group-addon"> <i class="zmdi zmdi-attachment-alt"></i> </span>
                                                    </div>
                                                </div>
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
            <!-- footer -->
            <?php include('../view/footer.php'); ?>
        </div>
    </section>



    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>
    <script>
        function showSplFunction() {
            document.getElementById("panel3").style.display = "block";
        }
    </script>

</body>

</html>
<!-- end-->