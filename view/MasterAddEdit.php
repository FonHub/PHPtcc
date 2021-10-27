<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>TCC GROUP</title>
    <?php include('../view/linkhead.php'); ?>

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
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
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

                                    <!-- form Person -->
                                    <form class="form-horizontal __docLocation">
                                        <div class="block-header" style="padding-left: 0">
                                            <h2>Master ทะเบียนบุคคล</h2>
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
                                                <b>คำนำหน้าชื่อ</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="คำนำหน้าชื่อ">
                                                                <option>นาย</option>
                                                                <option>นาง</option>
                                                                <option>นางสาว</option>
                                                                <option>อื่นๆ</option>
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
                                                <b>สัญชาติ</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="สัญชาติ">
                                                                <option>ไทย</option>
                                                                <option>อังกฤษ</option>
                                                                <option>จีน</option>
                                                                <option>อื่นๆ</option>
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
                                        </div> <!-- สัญชาติ -->

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
                                                <b>อาชีพ</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="อาชีพ">
                                                                <option>ข้าราชการ</option>
                                                                <option>เจ้าของกิจการ</option>
                                                                <option>พนักงานเอกชน</option>
                                                                <option>อื่นๆ</option>
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

                                        <div class="btn-control">
                                            <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect">
                                                บันทึก
                                            </button>
                                            <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                ยกเลิก
                                            </button>
                                        </div>
                                    </form>
                                    <br />
                                    <hr />
                                    <br />
                                    <!-- form Company -->
                                    <form class="form-horizontal __docLocation">
                                        <div class="block-header" style="padding-left: 0">
                                            <h2>Master ทะเบียนบริษัท</h2>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
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
                                                <b>เพิ่มนิติบุคคล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
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
                                                        <select class="form-control show-tick" v-model="operate_type">
                                                            <optgroup label="ประเภทประกอบการ">
                                                                <option>กลุ่มบริษัทลงทุน</option>
                                                                <option>กลุ่มทีซีซี แลนด์</option>
                                                                <option>กลุ่มบริษัทบุคคล</option>
                                                                <option>กลุ่มทีซีซี แอสเซ็ทส์</option>
                                                                <option>อื่นๆ</option>
                                                            </optgroup>
                                                        </select> <!-- Merge DBD-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่มประเภทประกอบการ (Sector)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจหลัก (Group)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" v-model="business_core">
                                                            <optgroup label="กลุ่มธุรกิจหลัก">
                                                                <option>ไพรเวท คอมพานี</option>
                                                                <option>ไทยเบฟเวอเรจ</option>
                                                                <option>อาคเนย์</option>
                                                                <option>แอสเสท เวิรด์ คอร์ป</option>
                                                                <option>เบอร์ลี่ ยุคเกอร์</option>
                                                                <option>อื่นๆ</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่มกลุ่มธุรกิจหลัก (Group)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจย่อย (SupGroup)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" v-model="subsidiary">
                                                            <optgroup label="กลุ่มธุรกิจย่อย">
                                                                <option>กลุ่ม 1</option>
                                                                <option>กลุ่ม 2</option>
                                                                <option>อื่นๆ</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่มธุรกิจย่อย (SupGroup)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="btn-control">
                                            <a href="#save"></a><button type="button" class="btn btn-raised btn-default  __redvitality waves-effect">
                                                บันทึก
                                            </button>
                                            <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                ยกเลิก
                                            </button>
                                        </div>
                                    </form>
                                    <br />
                                    <hr />
                                    <br />
                                    <!-- form Stock -->
                                    <form class="form-horizontal __docLocation">
                                        <div class="block-header" style="padding-left: 0">
                                            <h2>Master ทะเบียนบหุ้น</h2>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
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
                                                <b>เพิ่มนิติบุคคล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
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
                                                        <select class="form-control show-tick" v-model="operate_type">
                                                            <optgroup label="ประเภทประกอบการ">
                                                                <option>กลุ่มบริษัทลงทุน</option>
                                                                <option>กลุ่มทีซีซี แลนด์</option>
                                                                <option>กลุ่มบริษัทบุคคล</option>
                                                                <option>กลุ่มทีซีซี แอสเซ็ทส์</option>
                                                                <option>อื่นๆ</option>
                                                            </optgroup>
                                                        </select> <!-- Merge DBD-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่มประเภทประกอบการ (Sector)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจหลัก (Group)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" v-model="business_core">
                                                            <optgroup label="กลุ่มธุรกิจหลัก">
                                                                <option>ไพรเวท คอมพานี</option>
                                                                <option>ไทยเบฟเวอเรจ</option>
                                                                <option>อาคเนย์</option>
                                                                <option>แอสเสท เวิรด์ คอร์ป</option>
                                                                <option>เบอร์ลี่ ยุคเกอร์</option>
                                                                <option>อื่นๆ</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่มกลุ่มธุรกิจหลัก (Group)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจย่อย (SupGroup)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" v-model="subsidiary">
                                                            <optgroup label="กลุ่มธุรกิจย่อย">
                                                                <option>กลุ่ม 1</option>
                                                                <option>กลุ่ม 2</option>
                                                                <option>อื่นๆ</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่มธุรกิจย่อย (SupGroup)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="btn-control">
                                            <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect">
                                                บันทึก
                                            </button>
                                            <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                ยกเลิก
                                            </button>
                                        </div>
                                    </form>
                                    <!-- form Stock Market-->
                                    <form class="form-horizontal __docLocation">
                                        <div class="block-header" style="padding-left: 0">
                                            <h2>Master ทะเบียนบหุ้นตลาด</h2>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
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
                                                <b>เพิ่มสถานที่เก็บเอกสาร(Location)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
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
                                                        <select class="form-control show-tick" v-model="operate_type">
                                                            <optgroup label="ประเภทประกอบการ">
                                                                <option>กลุ่มบริษัทลงทุน</option>
                                                                <option>กลุ่มทีซีซี แลนด์</option>
                                                                <option>กลุ่มบริษัทบุคคล</option>
                                                                <option>กลุ่มทีซีซี แอสเซ็ทส์</option>
                                                                <option>อื่นๆ</option>
                                                            </optgroup>
                                                        </select> <!-- Merge DBD-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่มประเภทประกอบการ (Sector) </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจหลัก (Group)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" v-model="business_core">
                                                            <optgroup label="กลุ่มธุรกิจหลัก">
                                                                <option>ไพรเวท คอมพานี</option>
                                                                <option>ไทยเบฟเวอเรจ</option>
                                                                <option>อาคเนย์</option>
                                                                <option>แอสเสท เวิรด์ คอร์ป</option>
                                                                <option>เบอร์ลี่ ยุคเกอร์</option>
                                                                <option>อื่นๆ</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <b>เพิ่มกลุ่มธุรกิจหลัก (Group)</b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2">
                                                    <b>IDCode</b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <b>กลุ่มธุรกิจย่อย (SupGroup)</b>
                                                    <div class="input-group">
                                                        <div class="form-line">
                                                            <select class="form-control show-tick" v-model="subsidiary">
                                                                <optgroup label="กลุ่มธุรกิจย่อย">
                                                                    <option>กลุ่ม 1</option>
                                                                    <option>กลุ่ม 2</option>
                                                                    <option>อื่นๆ</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <b>เพิ่มธุรกิจย่อย (SupGroup)</b>
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="btn-control">
                                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect">
                                                        บันทึก
                                                    </button>
                                                    <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                        ยกเลิก
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
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