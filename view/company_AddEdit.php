<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>companyname</title>
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
                        ข้อมูลบริษัท
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/company"></a> ทะเบียนบริษัท
                        </li>
                        <li class="breadcrumb-item active">ทะเบียนบริษัท</li>
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
                                <div class="header-status">
                                    <h3>ข้อมูลบริษัท </h3>
                                </div>
                                <div class="col-lg-2 col-md-2 __Status">
                                    <div class="boxname_inner">
                                        <h3>สถานะ</h3>
                                        <div class="alert alert-company">
                                            <h2>นายทะเบียน</h2>
                                        </div>
                                    </div>
                                </div>
                                <form class="form-horizontal __info" @submit="onClickUpdate">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6">
                                            <b>เลขทะเบียนนิติบุคคล <span class="red">*</span></b>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 display-flex">
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control pd-l0" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6">
                                            <b>ชื่อบริษัทภาษาไทย<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="company_th" type="text" class="form-control ip" placeholder="บจ.ไพร์ม เอ็กซ์ จำกัด" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <b>นิติบุคคล<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>บริษัทจำกัด (บจ.)</option>
                                                            <option>บริษัทมหาชนจำกัด (บมจ.)</option>
                                                            <option>ห้างหุ้นส่วนจำกัด (หจ.)</option>
                                                            <option>ธนาคารจำกัดมหาชน</option>
                                                            <option>มูลนิธิ</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix py-10">
                                        <div class="col-lg-4 col-md-4">
                                            <b>Juristic ID </b>
                                            <div class="row clearfix">
                                                <div class="col-lg-12 col-md-12 display-flex">
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="width-45">
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="1" maxlength="1" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix py-10">
                                        <div class="col-lg-6 col-md-6">
                                            <b>Juristic Name </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="company_th" type="text" class="form-control ip" placeholder="Prime X Co., Ltd." />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <b>Juristic Type</b>
                                            <div class="input-group">
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>COMPANY LIMITED (CO., LTD.)</option>
                                                            <option>PUBLIC COMPANY LIMITED (PUB CO., LTD.)</option>
                                                            <option>PARTNERSHIP LIMITED (PART., LTD.)</option>
                                                            <option>BANK PUBLIC COMPANY LIMITED</option>
                                                            <option>FOUNDATION</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix py-10">
                                        <div class="col-lg-4 col-md-4">
                                            <b>ประเภทธุรกิจ(ภายในองค์กร)<span class="red">*</span></b>
                                            <div class="form-group">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กรุณาเลือก">
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
                                        <div class="col-lg-4 col-md-4">
                                            <b>ประเภทธุรกิจตอนจดทะเบียน(กรมพัฒฯ)<span class="red">*</span></b>
                                            <div class="display-flex">
                                                <div class="form-group width-100">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>01111</option>
                                                            <option>01112</option>
                                                            <option>01113</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>การปลูกข้าวโพดที่ใช้เมล็ดแก่</option>
                                                            <option>การปลูกธัญพืช (ยกเว้น ข้าวและข้าวโพด)</option>
                                                            <option>การปลูกพืชตระกูลถั่ว</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <b>ประเภทธุรกิจที่ส่งงบการเงินปีล่าสุด<span class="red">*</span></b>
                                            <div class="display-flex">
                                                <div class="form-group width-100">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>01111</option>
                                                            <option>01112</option>
                                                            <option>01113</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>การปลูกข้าวโพดที่ใช้เมล็ดแก่</option>
                                                            <option>การปลูกธัญพืช (ยกเว้น ข้าวและข้าวโพด)</option>
                                                            <option>การปลูกพืชตระกูลถั่ว</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix py-10">
                                        <div class="col-lg-4 col-md-4">
                                            <b>กลุ่มธุรกิจหลัก<span class="red">*</span></b>
                                            <div class="form-group">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กรุณาเลือก">
                                                        <option>ไพรเวท คอมพานี</option>
                                                        <option>ไทยเบฟเวอเรจ</option>
                                                        <option>อาคเนย์</option>
                                                        <option>แอสเสท เวิรด์ คอร์ป</option>
                                                        <option>เบอร์ลี่ ยุคเกอร์</option>
                                                    </optgroup>
                                                </select><!-- From Master -->
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <b>กลุ่มธุรกิจย่อย<span class="red">*</span></b>
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
                                    <div class="row clearfix py-10">
                                        <div class="col-lg-4 col-md-4">
                                            <b>กลุ่มธุรกิจย่อยระดับ 1<span class="red">*</span></b>
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
                                            <b>กลุ่มธุรกิจย่อยระดับ 2<span class="red">*</span></b>
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
                                            <b>กลุ่มธุรกิจย่อยระดับ 3<span class="red">*</span></b>
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
                                    </div>
                                    <div class="row clearfix py-10">
                                        <div class="col-lg-3 col-md-3">
                                            <b>ภาษีมูลค่าเพิ่ม<span class="red">*</span></b>
                                            <div class="box_flex">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="radio" class="with-gap" id="ig_radio">
                                                        <label for="ig_radio"></label>
                                                    </span>
                                                    <div class="form-line noborder">
                                                        <input type="text" class="form-control" placeholder="มี" />
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="radio" class="with-gap" id="ig_radio_2">
                                                        <label for="ig_radio_2"></label>
                                                    </span>
                                                    <div class="form-line noborder">
                                                        <input type="text" class="form-control" placeholder="ไม่มี" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <b>วันที่จดทะเบียน/วันจัดตั้ง<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="date_start" type="text" class="form-control date" placeholder="25/1/2560" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <b>วันปิดกิจการหรือควบรวมกิจการ/วันที่สิ้นสุด<span class="red">*</span></b>
                                            <div class="form-group">
                                                <div class="form-line disabled">
                                                    <input v-model="date_end" type="text" class="form-control date disabled" placeholder="disabled" disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-control text-align ">
                                        <a href="#symbol"></a><button type="submit" class="btn btn-raised btn-default __redvitality waves-effect">
                                            อัพเดตเข้าทะเบียนหุ้น
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- company detail-->
            <div id="company_detail">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#HeadAdd">ที่อยู่สำนักงานใหญ่</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#BranchAdd">ที่อยู่สาขา</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Director">กรรมการ</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Merger">การควบรวมบริษัท</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#NameHistory">เปลี่ยนชื่อบริษัท</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#AddHistory">ประวัติการเปลี่ยนที่อยู่บริษัท</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">ผู้ทำบัญชีและการเงิน</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Liquidate">วันชำระบัญชี</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#DocLocation">ที่เก็บเอกสาร</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#CashAccount">บัญชีหลักทรัพย์</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Note">บันทึกเพิ่มเติม</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="block-header">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6 col-sm-12">
                                                <h2>
                                                    ชื่อบริษัท
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab panes 1-->
                                    <div role="tabpanel" class="tab-pane in active" id="HeadAdd">
                                        <?php include('../view/companyaddedit_tap-1.php'); ?>
                                    </div>
                                    <!-- Tab panes 2-->
                                    <div role="tabpanel" class="tab-pane" id="BranchAdd">
                                        <?php include('../view/companyaddedit_tap-2.php'); ?>
                                    </div>
                                    <!-- Tab panes 3-->
                                    <div role="tabpanel" class="tab-pane" id="Director">
                                        <?php include('../view/companyaddedit_tap-3.php'); ?>
                                    </div>
                                    <!-- Tab panes 4-->
                                    <div role="tabpanel" class="tab-pane" id="Merger">
                                        <?php include('../view/companyaddedit_tap-4.php'); ?>
                                    </div>
                                    <!-- Tab panes 5-->
                                    <div role="tabpanel" class="tab-pane" id="NameHistory">
                                        <?php include('../view/companyaddedit_tap-6.php'); ?>
                                    </div>
                                    <!-- Tab panes 6-->
                                    <div role="tabpanel" class="tab-pane" id="AddHistory">
                                        <?php include('../view/companyaddedit_tap-7.php'); ?>
                                    </div>
                                    <!-- Tab panes 7-->
                                    <div role="tabpanel" class="tab-pane" id="Account">
                                        <?php include('../view/companyaddedit_tap-8.php'); ?>
                                    </div>
                                    <!-- Tab panes 8-->
                                    <div role="tabpanel" class="tab-pane" id="Liquidate">
                                        <?php include('../view/companyaddedit_tap-5.php'); ?>
                                    </div>
                                    <!-- Tab panes 9-->
                                    <div role="tabpanel" class="tab-pane" id="DocLocation">
                                        <?php include('../view/companyaddedit_tap-9.php'); ?>
                                    </div>
                                    <!-- Tab panes 10-->
                                    <div role="tabpanel" class="tab-pane" id="CashAccount">
                                        <?php include('../view/companyaddedit_tap-10.php'); ?>
                                    </div>
                                    <!-- Tab panes 11-->
                                    <div role="tabpanel" class="tab-pane" id="Note">
                                        <?php include('../view/companyaddedit_tap-11.php'); ?>
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
    </section>



    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>



</body>

</html>