<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>การควบบริษัท</title>
    <?php include('../view/linkhead.php'); ?>
    <!-- Multi Select Css -->
    <link rel="stylesheet" href="../assets/plugins/multi-select/css/multi-select.css">
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" />

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
                    <h2>การควบบริษัท
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="../view/index.php"><i class="zmdi zmdi-home"></i> หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="../view/company.php"></a> ทะเบียนบริษัท</li>
                        <li class="breadcrumb-item active">การควบบริษัท</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- company detail-->
            <div id="company_detail" class="detail__box">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Merger">การควบรวมบริษัท</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane in active" id="Merger">
                                        <!-- form -->
                                        <div class="row clearfix">
                                            <div class="col-lg-12">
                                                <form class="form-horizontal __companymerger">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-6 col-md-6"> <b>วันที่</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="1/7/2564">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-5 col-md-5">
                                                            <div style="padding: 20px 0px;border-bottom: 1px solid #ced4da;    margin-bottom: 30px;">
                                                                <div class="block-header">
                                                                    <h2>ข้อมูลบริษัทควบ</h2>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12"> <b>ค้นหา</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="พิมพ์ชื่อบริษัทหรือเลขนิติบุคคล">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="padding: 20px ;border-bottom: 1px solid #ced4da; margin: auto;"></div>
                                                        <div class="col-lg-5 col-md-5" style="padding: 20px 0px;border-bottom: 1px solid #ced4da; margin-bottom: 30px;">
                                                            <div class="block-header">
                                                                <h2>ข้อมูลบริษัทผู้ถือครอง</h2>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12"> <b>เลขทะเบียนนิติบุคคล</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="0105564001931">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12"> <b>ชื่อบริษัท</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="บจ.ธาระวี จำกัด">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>


                                                    <!-- Multi Select -->
                                                    <div class="row clearfix">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="card">

                                                                <div class="body">
                                                                    <select id="optgroup" class="ms" multiple="multiple">
                                                                        <optgroup label="ไพรเวท คอมพานี">
                                                                            <option value="AK"> <strong>0105564012240</strong> บจ.เอ็ม.โอ.เอ็น. คอนซัลแทนท์ กรุ๊ป จำกัด</option>
                                                                            <option value="HI"> <strong>0105564012258</strong>บจ.มั่งมี ซอฟต์แวร์ จำกัด</option>
                                                                        </optgroup>
                                                                        <optgroup label="ไทยเบฟเวอเรจ">
                                                                            <option value="CA"> <strong>0105564012266</strong>บจ.เอิร์ลเกรย์ จำกัด</option>
                                                                            <option value="NV"> <strong>0105564012274</strong>บจ.จตุรมิตรอสังหาริมทรัพย์ จำกัด</option>
                                                                            <option value="OR"> <strong>0105564012282</strong>บจ.เจ โอ เอ เวลเนส จำกัด</option>
                                                                            <option value="WA"> <strong>0105564012291</strong>บจ.ต้าไห่ เซ็นทรัล อโกร จำกัด</option>
                                                                        </optgroup>
                                                                        <optgroup label="อาคเนย์">
                                                                            <option value="AZ"><strong>0105564012401</strong>บจ.คีย์ สกิน (ประเทศไทย) จำกัด</option>
                                                                            <option value="CO"><strong>0105564012436</strong>บจ.ระยองมาสเตอร์ จำกัด</option>
                                                                            <option value="ID"><strong>0105564012444</strong>บจ.จิลา เจมส์ จำกัด</option>
                                                                            <option value="MT"><strong>0105564012517</strong>บจ.แอตแลนติส คอนสตรัคชั่น จำกัด</option>
                                                                            <option value="NE"><strong>0105564012533</strong>บจ.อาร์ยูเอ็นเอ็น กรุ๊ป จำกัด</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- #END# Multi Select -->
                                                    <!--กรณีต้องการใช้ข้อมูลบริษัทควบ -->

                                                    <div class="row clearfix">
                                                        <div class="col-lg-7 col-md-7"></div>
                                                        <div class="col-lg-5 col-md-5"> <b>กรณีต้องการใช้ข้อมูลบริษัทควบ </b>
                                                            <div class="row clearfix pt-10">
                                                                <div class="col-lg-12 col-md-12 ">
                                                                    <b>เลือกเลขทะเบียนนิติบุคคคล</b>
                                                                    <div class="form-group py-10">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="กรุณาเลือก">
                                                                                <option>0105564012444</option>
                                                                                <option>0105564012533 </option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="input-group">
                                                                        <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" />
                                                                        <label for="md_checkbox_21">ชื่อบริษัท</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-red" />
                                                                    <label for="md_checkbox_22">ที่อยู่บริษัท</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="btn-control text-align">
                                                        <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                                                        <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                                    </div>
                                                </form>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <p class="m-b-0">© 2021 <a href="#index" target="black">TCC GROUP</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script> <!-- Bootstrap Colorpicker Js -->
    <script src="../assets/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script> <!-- Input Mask Plugin Js -->
    <script src="../assets/plugins/multi-select/js/jquery.multi-select.js"></script> <!-- Multi Select Plugin Js -->
    <script src="../assets/plugins/jquery-spinner/js/jquery.spinner.js"></script> <!-- Jquery Spinner Plugin Js -->
    <script src="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../assets/plugins/nouislider/nouislider.js"></script> <!-- noUISlider Plugin Js -->

    <script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="../assets/js/pages/forms/advanced-form-elements.js"></script>

</body>

</html>