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
                                    <form class="form-horizontal marterperson">
                                        <div class="block-header">
                                            <h2>Master กลุ่มบริษัท</h2>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <input type="text" class="form-control disabled" placeholder="1" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>นิติบุคคล</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>ห้างหุ้นส่วนสามัญนิติบุคคล (หสน.)</option>
                                                            <option>ห้างหุ้นส่วนจำกัด (หจก.)</option>
                                                            <option>บริษัทจำกัด (บจ.)</option>
                                                            <option>บริษัทมหาชนจำกัด (บมจ.)</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
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
                                                    <input type="text" class="form-control disabled" placeholder="2" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>ประเภทประกอบการ (Sector)</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก Sector">
                                                            <option>เกษตรและอุตสาหกรรมอาหาร</option>
                                                            <option>สินค้าอุปโภคบริโภค</option>
                                                            <option>ธุรกิจการเงิน</option>
                                                            <option>สินค้าอุตสาหกรรม </option>
                                                            <option>อสังหาริมทรัพย์และก่อสร้าง</option>
                                                            <option>ทรัพยากร</option>
                                                            <option>บริการ</option>
                                                            <option>เทคโนโลยี </option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
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
                                                    <input type="text" class="form-control disabled" placeholder="3" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจหลัก</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก Group">
                                                            <option>ไพรเวท คอมพานี</option>
                                                            <option>ไทยเบฟเวอเรจ</option>
                                                            <option>อาคเนย์</option>
                                                            <option>แอสเสท เวิรด์ คอร์ป</option>
                                                            <option>เบอร์ลี่ ยุคเกอร์</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจย่อย</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก SupGroup">
                                                            <option>กลุ่มทีซีซี แลนด์</option>
                                                            <option>กลุ่มบริษัทลงทุน</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจย่อยระดับ 1</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>กลุ่มแลนด์แบงค์</option>
                                                            <option>กลุ่มทีซีซี แลนด์ ทีซีซี เอดับบลิว</option>
                                                            <option>กลุ่มพรรณธิอร</option>
                                                            <option>กลุ่มทีซีซี อินเตอร์เทรด</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจย่อยระดับ 2</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>กลุ่มโรงแรมในประเทศ</option>
                                                            <option>กลุ่มบริษัทที่ดิน</option>
                                                            <option>กลุ่มบริหารจัดการ</option>
                                                            <option>กลุ่มบริษัทลงทุนและอื่นๆ</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row clearfix supgroup_3">
                                            <div class="col-lg-1 col-md-1">
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจย่อยระดับ 3</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>กลุ่มโรงแรมไพรเวท</option>
                                                            <option>กลุ่มโรงแรมบริษัทแม่</option>
                                                            <option>กลุ่มโรงแรมไพรเวทภาคเหนือ</option>
                                                            <option>กลุ่มแอสเสท เวิรด์ เวกซ์</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
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
                                                    <input type="text" class="form-control disabled" placeholder="4" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>ประเภทเอกสารที่จัดเก็บ</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>สัญญาซื้อขายหุ้น</option>
                                                            <option>สมุดทะเบียนหุ้น</option>
                                                            <option>ใบหุ้น (ยกเลิก)</option>
                                                            <option>ใบหุ้น (ลงทุน)</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
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
                                                    <input type="text" class="form-control disabled" placeholder="5" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>สถานที่เก็บเอกสาร(Location)</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>อาคารสุรวงศ์ ห้อง A</option>
                                                            <option>อาคารสุรวงศ์ ห้อง B</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
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
                                                    <input type="text" class="form-control disabled" placeholder="6" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>หมายเลขตู้เอกสาร</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>A01</option>
                                                            <option>B02 </option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
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