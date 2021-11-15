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

                                <!-- form -->
                                <form class="form-horizontal box__director">
                                    <!-- row -->
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3">
                                            <b>วันที่ซื้อขาย<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="12 เม.ย.2564" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6">
                                            <b>ผู้ขาย<span class="red">*</span></b>
                                            <div class="form-line">
                                                <select class="form-control show-tick">
                                                    <optgroup label="บริษัทในกลุ่มทีซีซี ไพรเวท">
                                                        <option>บจ. ทีซีซี ไพรเวท จำกัด</option>
                                                        <option>บจ. ซีเอ็นที สตาร์ จำกัด</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <b>ผู้ซื้อ<span class="red">*</span></b>
                                            <div class="form-line">
                                                <select class="form-control show-tick">
                                                    <optgroup label="บริษัทในกลุ่มทีซีซี ไพรเวท">
                                                        <option>บจ. ซีเอ็นที สตาร์ จำกัด</option>
                                                        <option>บจ. ทีซีซี ไพรเวท จำกัด</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h20"></div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4">
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
                                        <div class="col-lg-4 col-md-4">
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
                                        <div class="col-lg-4 col-md-4">
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
                                    <div class="h20"></div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6">
                                            <b>จำนวนหุ้นที่ซื้อขาย <span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="15,000,000.00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <b>มูลค่าหุ้นที่ซื้อขาย<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="10.00" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h20"></div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4">
                                            <b>จำนวนเงินทั้งสิ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="15,000,000.00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>แนบเอกสาร<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="" />
                                                </div>
                                                <span class="input-group-addon"> <i class="zmdi zmdi-attachment-alt"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //row -->
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

</body>

</html>
<!-- end-->