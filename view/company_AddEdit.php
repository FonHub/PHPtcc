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
                        <small class="text-muted">Welcome to TCC Application</small>
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
                            <div class="header">
                                <h2>ข้อมูลบริษัท </h2>
                            </div>
                            <div class="body">
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
                                            <b>เลขทะเบียนนิติบุคคล </b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="old_juristic_id" type="text" class="form-control ip" placeholder="0105564002147" maxlength="13" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <b>นิติบุคคล</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="คำนำหน้าทะเบียนธุรกิจ">
                                                            <option>
                                                                ห้างหุ้นส่วนสามัญนิติบุคคล (หสน.)
                                                            </option>
                                                            <option>ห้างหุ้นส่วนจำกัด (หจก.)</option>
                                                            <option>บริษัทจำกัด (บจ.)</option>
                                                            <option>บริษัทมหาชนจำกัด (บมจ.)</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6">
                                            <b>ชื่อบริษัทภาษาไทย</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="company_th" type="text" class="form-control ip" placeholder="บจ.ไพร์ม เอ็กซ์ จำกัด" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <b>ชื่อบริษัทภาษาอังกฤษ</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="company_en" type="text" class="form-control ip" placeholder="บจ.ไพร์ม เอ็กซ์ จำกัด" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4">
                                            <b>ประเภทประกอบการ</b>
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
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <b>กลุ่มธุรกิจหลัก</b>
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
                                            <b>กลุ่มธุรกิจย่อย</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กลุ่มบริษัทลงทุน">
                                                            <option>กลุ่มสิริวนา</option>
                                                            <option>กลุ่มทีซีซี คอร์ปอเรชั่น</option>
                                                            <option>กลุ่มอาคเนย์ แมเนจเม้นท์</option>
                                                            <option>กลุ่มถือหุ้นแอสเสท เวิรด์ คอร์ป</option>
                                                        </optgroup>
                                                        <optgroup label="กลุ่มทีซีซี แลนด์">
                                                            <option>กลุ่มทีซีซี แลนด์ ทีซีซี เอดับบลิว</option>
                                                            <option>กลุ่มพรรณธิอร</option>
                                                            <option>กลุ่มทีซีซี อินเตอร์เทรด</option>
                                                            <option>กลุ่มแลนด์แบงค์</option>
                                                            <option style="margin-left: 20px;">- กลุ่มบริษัทที่ดิน</option>
                                                            <option style="margin-left: 20px;">- กลุ่มบริหารจัดการ </option>
                                                            <option style="margin-left: 20px;">- กลุ่มบริษัทลงทุนและอื่นๆ </option>
                                                            <option>กลุ่มทรัพย์กทม. ปริมณฑล และ ภาคเหนือ </option>
                                                            <option style="margin-left: 20px;">- กลุ่มทรัพย์กทม. ปริมณฑล และ ภาคเหนือบริษัทแม่ </option>
                                                            <option style="margin-left: 20px;">- กลุ่มบริหารทรัพย์สินภาคเหนือ </option>
                                                            <option style="margin-left: 20px;">- กลุ่มบริหารทรัพย์สินรอบบ้าน </option>
                                                            <option style="margin-left: 20px;">- กลุ่มบริหารทรัพย์สินกรุงเทพฯและปริมณฑล </option>
                                                            <option>กลุ่มโรงแรม ช็อปปิ้ง อพาร์ตเม้นท์ </option>
                                                            <option style="margin-left: 20px;">- กลุ่มโรงแรมในประเทศ</option>
                                                            <option style="margin-left: 40px;"> -- กลุ่มโรงแรมบริษัทแม่ </option>
                                                            <option style="margin-left: 40px;"> -- กลุ่มโรงแรมไพรเวท </option>
                                                            <option style="margin-left: 40px;"> -- กลุ่มโรงแรมไพรเวทภาคเหนือ </option>
                                                            <option style="margin-left: 40px;"> -- กลุ่มแอสเสท เวิรด์ เวกซ์ </option>
                                                            <option style="margin-left: 20px;">- กลุ่มศูนย์การค้าและตลาด </option>
                                                            <option style="margin-left: 40px;"> -- กลุ่มศูนย์การค้าบริษัทแม่ </option>
                                                            <option style="margin-left: 40px;"> -- กลุ่มช้อปปิ้งไพรเวท </option>
                                                            <option style="margin-left: 40px;"> -- กลุ่มช้อปปิ้งภาคเหนือ </option>
                                                            <option style="margin-left: 40px;"> -- กลุ่มช้อปปิ้งลงทุนอื่นๆ</option>
                                                            <option style="margin-left: 20px;">- กลุ่มพัฒนาที่อยู่อาศัย</option>
                                                            <option style="margin-left: 40px;"> -- กลุ่มพัฒนที่อยู่อาศัยบริษัทแม่ </option>
                                                            <option style="margin-left: 40px;"> -- กลุ่มอพาร์ทเม้นท์และคอนโดปล่อยเช่า </option>
                                                            <option style="margin-left: 40px;"> -- กลุ่มที่พักอาศัยเพื่อขาย </option>

                                                        </optgroup>



                                                    </select> <!-- From Master -->
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2">
                                            <b>ภาษี</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick" v-model="vat_company">
                                                        <optgroup label="ภาษี">
                                                            <option>มี</option>
                                                            <option>ไม่มี</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5">
                                            <b>วันที่ขึ้นทะเบียนนิติบุคคล</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="date_start" type="text" class="form-control date" placeholder="25/1/2560" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5">
                                            <b>วันปิดกิจการหรือควบรวมกิจการ</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="date_end" type="text" class="form-control date disabled" placeholder="" disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-control">
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
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Liquidate">วันชำระบัญชี</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#NameHistory">ประวัติการเปลี่ยนแปลงชื่อ</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#AddHistory">ประวัติการเปลี่ยนที่อยู่บริษัท</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">ผู้ทำบัญชีและการเงิน</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#DocLocation">ที่เก็บเอกสาร</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Tab panes 1-->
                                    <?php include('../view/companyaddedit_tap-1.php'); ?>
                                    <!-- Tab panes 2-->
                                    <?php include('../view/companyaddedit_tap-2.php'); ?>
                                    <!-- Tab panes 3-->
                                    <?php include('../view/companyaddedit_tap-3.php'); ?>
                                    <!-- Tab panes 4-->
                                    <?php include('../view/companyaddedit_tap-4.php'); ?>
                                    <!-- Tab panes 5-->
                                    <?php include('../view/companyaddedit_tap-5.php'); ?>
                                    <!-- Tab panes 6-->
                                    <?php include('../view/companyaddedit_tap-6.php'); ?>
                                    <!-- Tab panes 7-->
                                    <?php include('../view/companyaddedit_tap-7.php'); ?>
                                    <!-- Tab panes 8-->
                                    <?php include('../view/companyaddedit_tap-8.php'); ?>
                                    <!-- Tab panes 9-->
                                    <?php include('../view/companyaddedit_tap-9.php'); ?>
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

    <script src="../assets/plugins/editable-table/mindmup-editabletable.js"></script> <!-- Editable Table Plugin Js -->
    <script src="../assets/js/pages/tables/editable-table.js"></script>


</body>

</html>