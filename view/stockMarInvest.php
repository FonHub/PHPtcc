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
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_mk1">
                                                    <label for="ig_radio_mk1">จำนำ</label>
                                                </span>
                                                <a href="../view/stockMarPledged.php" target="_blank" style="margin-left: 60px;"><span class="red">*</span></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <input type="radio" class="with-gap" id="ig_radio_mk2">
                                                    <label for="ig_radio_mk2">ปลอดจำนำ</label>
                                                    <a href="../view/stockMarPledgedCancel.php" target="_blank" style="margin-left: 5px;"><span class="red">*</span></a>
                                                </span>
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