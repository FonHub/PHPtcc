<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>TCC GROUP</title>
    <?php include('../view/linkhead.php'); ?>

    <link rel="stylesheet" href="../assets/plugins/nestable/jquery-nestable.css" />

</head>

<body class="theme-orange">
    <!-- Top Bar -->
    <?php include('../view/topbar.php'); ?>


    <!-- Left Sidebar -->
    <?php include('../view/leftsidebar.php'); ?>


    <!-- Right Sidebar -->
    <?php include('../view/rightsidebar.php'); ?>




    <!-- Main Content  -->
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>
                        Master
                        <small class="text-muted">Welcome to TCC Application</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item"><a href="/stock"></a> Master</li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูล</li>
                    </ul>
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
                                <div id="company_detail">

                                    <!-- form Company -->
                                    <form class="form-horizontal __docLocation">
                                        <div class="block-header" style="padding-left: 0">
                                            <h2>Master กลุ่มบริษัท</h2>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>นิติบุคคล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="คำนำหน้าทะเบียนธุรกิจ">
                                                                <option>ห้างหุ้นส่วนสามัญนิติบุคคล (หสน.)</option>
                                                                <option>ห้างหุ้นส่วนจำกัด (หจก.)</option>
                                                                <option>บริษัทจำกัด (บจ.)</option>
                                                                <option>บริษัทมหาชนจำกัด (บมจ.)</option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>ประเภทประกอบการ (Sector)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="Sector">
                                                                <option>เกษตรและอุตสาหกรรมอาหาร</option>
                                                                <option>สินค้าอุปโภคบริโภค</option>
                                                                <option>ธุรกิจการเงิน</option>
                                                                <option>สินค้าอุตสาหกรรม </option>
                                                                <option>อสังหาริมทรัพย์และก่อสร้าง</option>
                                                                <option>ทรัพยากร</option>
                                                                <option>บริการ</option>
                                                                <option>เทคโนโลยี </option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจ</b>
                                                <div class="clearfix m-b-20">
                                                    <div class="dd">
                                                        <ol class="dd-list">
                                                            <li class="dd-item" data-id="1">
                                                                <div class="dd-handle">ไพรเวท คอมพานี</div>
                                                                <ol class="dd-list">
                                                                    <li class="dd-item" data-id="2">
                                                                        <div class="dd-handle">กลุ่มบริษัทลงทุน</div>
                                                                        <ol class="dd-list">
                                                                            <li class="dd-item" data-id="3">
                                                                                <div class="dd-handle">กลุ่มสิริวนา</div>
                                                                            </li>
                                                                            <li class="dd-item" data-id="4">
                                                                                <div class="dd-handle">กลุ่มทีซีซี คอร์ปอเรชั่น</div>
                                                                            </li>
                                                                            <li class="dd-item" data-id="5">
                                                                                <div class="dd-handle">กลุ่มอาคเนย์ แมเนจเม้นท์</div>
                                                                            </li>
                                                                            <li class="dd-item" data-id="6">
                                                                                <div class="dd-handle">กลุ่มถือหุ้นแอสเสท เวิรด์ คอร์ป</div>
                                                                            </li>
                                                                        </ol>
                                                                    </li>
                                                                    <li class="dd-item" data-id="7">
                                                                        <div class="dd-handle">กลุ่มทีซีซี แลนด์ </div>
                                                                    </li>
                                                                    <li class="dd-item" data-id="8">
                                                                        <div class="dd-handle">กลุ่มบริษัทบุคคล</div>

                                                                    </li>
                                                                    <li class="dd-item" data-id="9">
                                                                        <div class="dd-handle">กลุ่มทีซีซี แอสเซ็ทส์</div>
                                                                    </li>
                                                                    <li class="dd-item" data-id="10">
                                                                        <div class="dd-handle">อื่นๆ</div>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                            <li class="dd-item" data-id="11">
                                                                <div class="dd-handle">ไทยเบฟเวอเรจ</div>

                                                            </li>
                                                            <li class="dd-item" data-id="12">
                                                                <div class="dd-handle">อาคเนย์</div>
                                                            </li>
                                                            <li class="dd-item" data-id="13">
                                                                <div class="dd-handle">แอสเสท เวิรด์ คอร์ป</div>
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>ประเภทเอกสารที่จัดเก็บ</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="ประเภทเอกสารที่จัดเก็บ">
                                                                <option>สัญญาซื้อขายหุ้น</option>
                                                                <option>สมุดทะเบียนหุ้น</option>
                                                                <option>ใบหุ้น (ยกเลิก)</option>
                                                                <option>ใบหุ้น (ลงทุน)</option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>สถานที่เก็บเอกสาร(Location)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="สถานที่เก็บเอกสาร">
                                                                <option>อาคารสุรวงศ์ ห้อง A</option>
                                                                <option>อาคารสุรวงศ์ ห้อง B</option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>หมายเลขตู้เอกสาร</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="หมายเลขตู้เอกสาร">
                                                                <option>A01</option>
                                                                <option>B02 </option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">


                    </div>
                </div>
            </section>

            <!-- footer -->
            <?php include('../view/footer.php'); ?>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="../assets/plugins/nestable/jquery.nestable.js"></script> <!-- Jquery Nestable -->

    <script src="../assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
    <script src="../assets/js/pages/ui/sortable-nestable.js"></script>

</body>

</html>