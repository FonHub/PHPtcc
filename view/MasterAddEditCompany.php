<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Master กลุ่มบริษัท</title>
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
                        Master กลุ่มบริษัท
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
                <!-- company detail-->
                <div id="company_detail">
                    <div class="row clearfix">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#MasterCompany">Masterบริษัท</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#MasterGroupTCC">Masterกลุ่มภายในองค์กร</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#MasterGroupDBD">Masterกลุ่มภายในองค์กร</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Tab panes 1-->
                                        <div role="tabpanel" class="tab-pane in active" id="MasterCompany">
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="card">
                                                        <div class="body">
                                                            <!-- Company -->
                                                            <form class="form-horizontal marterperson">
                                                                <div class="block-header">
                                                                    <h2>บริษัท</h2>
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
                                                                                    <option>บริษัทจำกัด (บจ.)</option>
                                                                                    <option>บริษัทมหาชนจำกัด (บมจ.)</option>
                                                                                    <option>ห้างหุ้นส่วนจำกัด (หจ.)</option>
                                                                                    <option>ธนาคารจำกัดมหาชน </option>
                                                                                    <option>มูลนิธิ </option>
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="5" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>รายละเอียดอำนาจกรรมการ</b>
                                                                        <div class="form-group">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="กรุณาเลือก">
                                                                                    <option>1</option>
                                                                                    <option>2</option>
                                                                                    <option>3</option>
                                                                                    <option>4</option>
                                                                                    <option>5</option>
                                                                                    <option>6</option>
                                                                                    <option>7</option>
                                                                                    <option>8</option>
                                                                                    <option>9</option>
                                                                                    <option>10</option>
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="2" disabled />
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="3" disabled />
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="4" disabled />
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="5" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>ชื่อบริษัทหลักทรัพย์</b>
                                                                        <div class="form-group">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="กรุณาเลือก">
                                                                                    <option>บริษัทหลักทรัพย์ไทยพาณิชย์ จำกัด</option>
                                                                                    <option>บริษัทหลักทรัพย์ธนชาต จำกัด (มหาชน) </option>
                                                                                    <option>บริษัทหลักทรัพย์ เมย์แบงก์ กิมเอ็ง (ประเทศไทย) จำกัด (มหาชน)</option>
                                                                                    <option> บริษัทหลักทรัพย์ ภัทร จำกัด (มหาชน)</option>
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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


                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab panes 2-->
                                        <div role="tabpanel" class="tab-pane " id="MasterGroupTCC">
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="card">
                                                        <div class="body">
                                                            <!-- Group -->
                                                            <form class="form-horizontal marterperson">
                                                                <div class="block-header">
                                                                    <h2>ประเภทธุรกิจ(ภายในองค์กร)
                                                                    </h2>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="1" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>ประเภทธุรกิจ(ภายในองค์กร)</b>
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="2" disabled />
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="3" disabled />
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="4" disabled />
                                                                        </div>
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="5" disabled />
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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

                                                                <div class="row clearfix supgroup_3">
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="6" disabled />
                                                                        </div>
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab panes 3-->
                                        <div role="tabpanel" class="tab-pane " id="MasterGroupDBD">
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="card">
                                                        <div class="body">
                                                            <!-- Group -->
                                                            <form class="form-horizontal marterperson">
                                                                <div class="block-header">
                                                                    <h2>ประเภทธุรกิจ(กรมพัฒนาธุรกิจการค้า)
                                                                    </h2>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="A" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>หมวดใหญ่</b>
                                                                        <div class="form-group">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="กรุณาเลือก Sector">
                                                                                    <option>เกษตรกรรม การป่าไม้และการประมง</option>
                                                                                    <option>การทําเหมืองแร่ และเหมืองหิน</option>
                                                                                    <option>การผลิต</option>
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="01" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>หมวดย่อย</b>
                                                                        <div class="form-group">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="กรุณาเลือก">
                                                                                    <option>การเพาะปลูกและการเลี้ยงสัตว์ การล่าสัตว์ และกิจกรรมบริการที่เกี่ยวข้อง</option>
                                                                                    <option>การทําเหมืองถ่านหิน และลิกไนต์</option>
                                                                                    <option>การผลิตผลิตภัณฑ์อาหาร</option>
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="011" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>หมู่ใหญ่</b>
                                                                        <div class="form-group">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="กรุณาเลือก">
                                                                                    <option>การปลูกพืชล้มลุก</option>
                                                                                    <option>การทําเหมืองถ่านหินคุณภาพสูง</option>
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="0111" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>หมู่ย่อย</b>
                                                                        <div class="form-group">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="กรุณาเลือก">
                                                                                    <option>การปลูกธัญพืช(ยกเว้น ข้าว) พืชตระกูลถั่วและพืชน้ำมัน</option>
                                                                                    <option>การทําเหมืองถ่านหินคุณภาพสูง</option>
                                                                                    <option>การฆ่าสัตว์และการบรรจุเนื้อสัตว์(ยกเว้น สัตว์ปีก)</option>
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>IDCode</b>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control disabled" placeholder="01111" disabled />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>กิจกรรม</b>
                                                                        <div class="form-group">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="กรุณาเลือก">
                                                                                    <option>การปลูกข้าวโพดที่ใช้เมล็ดแก่</option>
                                                                                    <option>การทําเหมืองถ่านหินคุณภาพสูง</option>
                                                                                    <option>การฆ่าสัตว์(ยกเว้น สัตว์ปีก)</option>
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
                                                                                    <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                                                </div>
                                                                            </div>
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