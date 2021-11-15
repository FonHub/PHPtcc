<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>การประชุมและผู้รับมอบฉันทะ</title>
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
                        การประชุมและผู้รับมอบฉันทะ
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
                                            <b>วันที่ประชุม<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="12 เม.ย.2564" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-5">
                                            <b>การประชุม<span class="red">*</span></b>
                                            <div class="form-line">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กรุณาเลือก">
                                                        <option>สามัญผู้ถือหุ้น</option>
                                                        <option>วิสามัญผู้ถือหุ้น</option>
                                                        <option>คณะกรรมการ</option>
                                                        <option>อื่นๆ(ระบุ)</option>
                                                    </optgroup>
                                                </select>
                                                <input type="text" class="form-control" placeholder="ระบุ" />
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <b>ครั้งที่<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="1/2564" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="h20"></div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6">
                                            <b> สถานที่ประชุม <span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="บริษัททีซีซี ไพรเวท" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <b>ผู้มอบฉันทะ (ผู้ถือหุ้น)<span class="red">*</span></b>
                                            <div class="form-line">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กรุณาเลือก">
                                                        <option>บริษัททีซีซี ไพรเวท</option>
                                                        <option>บจ.ซีเอ็นที สตาร์ จำกัด</option>
                                                        <option>บริษัทในกลุ่มทีซีซี ไพรเวท จำกัด</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6">
                                            <b> จำนวนหุ้นที่ถือสิ้น <span class="red">*</span></b>
                                            <div class="input-group">
                                                <div>
                                                    <input type="text" class="form-control" placeholder="15,000,000.00" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <b> คิดเป็นร้อยละ <span class="red">*</span></b>
                                            <div class="input-group">
                                                <div>
                                                    <input type="text" class="form-control" placeholder="20" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6">
                                            <b>ผู้รับมอบฉันทะเข้าร่วมประชุม<span class="red">*</span></b>
                                            <div class="form-line">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กรุณาเลือก">
                                                        <option>นาย วิชัย วชิรพงศ์</option>
                                                        <option>นาง มณีรัตน์ งามเรืองพงศ์</option>
                                                        <option>MR. SUNSHINE TAGALOG</option>
                                                    </optgroup>
                                                </select>
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