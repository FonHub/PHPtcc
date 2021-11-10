﻿<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ทะเบียนบริษัท</title>
    <?php include('../view/linkhead.php'); ?>
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
                    <h2>ทะเบียนบริษัท
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">ทะเบียนบริษัท</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- search-->
            <section class="sec-search">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>ค้นหา</h2>
                            </div>
                            <div class="body">
                                <form class="form-horizontal __search">
                                    <div class="col-sm-12">
                                        <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">search</i></span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="พิมพ์รหัสบริษัท/ผู้ถือหุ้น,ชื่อบริษัท/ผู้ถือหุ้นภาษาไทย,ชื่อบริษัท/ผู้ถือหุ้นภาษาอังกฤษ,ชื่อค้นหาบริษัท/ผู้ถือหุ้น,เลขทะเบียนนิติบุคคล">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                            <div class="row clearfix">
                                                <div class="col-sm-3 form-control-label">
                                                    <label for="email_address_2">จาก</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control date" placeholder="30 ก.ค. 2550">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                            <div class="row clearfix">
                                                <div class="col-sm-3 form-control-label">
                                                    <label for="email_address_2">ถึง</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control date" placeholder="30 ต.ค. 2550">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <div class="form-line">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กลุ่มธุรกิจหลัก">
                                                        <option>ไพรเวท คอมพานี</option>
                                                        <option>ไทยเบฟเวอเรจ</option>
                                                        <option>อาคเนย์</option>
                                                        <option>แอสเสท เวิรด์ คอร์ป</option>
                                                        <option>เบอร์ลี่ ยุคเกอร์</option>
                                                        <option>อื่นๆ </option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <div class="form-line">
                                                <select class="form-control show-tick">
                                                    <optgroup label="ประเภทประกอบการ">
                                                        <option>กลุ่มบริษัทลงทุน</option>
                                                        <option>กลุ่มทีซีซี แลนด์ </option>
                                                        <option>กลุ่มบริษัทบุคคล</option>
                                                        <option>กลุ่มทีซีซี แอสเซ็ทส์</option>
                                                        <option>อื่นๆ </option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                            <div class="form-line">
                                                <select class="form-control show-tick">
                                                    <optgroup label="สถานะบริษัท">
                                                        <option>นายทะเบียน</option>
                                                        <option>ทะเบียนหุ้นกลาง</option>
                                                        <option>นายทะเบียน - หน่วยงานอื่น</option>
                                                        <option>ควบกิจการ</option>
                                                        <option>โอนกิจการ </option>
                                                        <option>รับโอนกิจการ</option>
                                                        <option>อยู่ระหว่างชำระบัญชี</option>
                                                        <option>เสร็จการชำระบัญชี</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-control text-align">
                                        <button type="button" class="btn btn-raised btn-default __redvitality waves-effect">ค้นหา</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- company -->
            <div id="company_status">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <div class="card">
                            <div class="header">
                                <div class="header-status">
                                    <h3>รายการทะบียนบริษัทเพิ่มล่าสุดทั้งหมด</h3>
                                    <span>302,240</span>
                                </div>
                                <ul class="header-dropdown m-r--5">
                                    <a href="company_AddEdit.php" class="btn btn-raised btn-default waves-effect">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                        <ul class="dropdown-menu slideUp ">
                                            <li><a href="javascript:void(0);">ปัจจุบัน</a></li>
                                            <li><a href="javascript:void(0);">สัปดาห์นี้</a></li>
                                            <li><a href="javascript:void(0);">เดือนนี้</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body table-responsive company-list">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:60px;">#</th>
                                            <th>วันที่</th>
                                            <th>ชื่อบริษัทภาษาไทย</th>
                                            <th>ชื่อบริษัทภาษาอังกฤษ</th>
                                            <th>เลขทะเบียนนิติบุคคล</th>
                                            <th>กลุ่มธุรกิจหลัก</th>
                                            <th>สถานะ</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>1</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม</td>
                                            <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม</td>
                                            <td>0102564000010</td>
                                            <td>ภัตตาคารและบาร์</td>
                                            <td>นายทะเบียน</td>
                                            <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>2</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>หจ.เดอะ ไลอ้อน มิลค์ที</td>
                                            <td>หจ.เดอะ ไลอ้อน มิลค์ที</td>
                                            <td>0103564000011</td>
                                            <td>ประกอบกิจการจำน่ายอาหารและเครื่องดื่ม ทุกชนิด</td>
                                            <td>นายทะเบียน</td>
                                            <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>3</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>หจ.เกตเวย์ แอคเคาน์ติ้ง</td>
                                            <td>หจ.เกตเวย์ แอคเคาน์ติ้ง</td>
                                            <td>0103564001734</td>
                                            <td>กิจกรรมเกี่ยวกับบัญชีการทำบัญชีและการตรวจสอบบัญชี การให้คำปรึกษาด้านภาษี</td>
                                            <td>นายทะเบียน</td>
                                            <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>4</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>บจ.เพชรดีไซน์ เฟอร์นิเจอร์ จำกัด</td>
                                            <td>บจ.เพชรดีไซน์ เฟอร์นิเจอร์ จำกัด</td>
                                            <td>0105564000152</td>
                                            <td>ประกอบกิจการผลิตเฟอร์นิเจอร์ไม้ชนิดใช้ในครัวเรือน</td>
                                            <td>นายทะเบียน</td>
                                            <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>5</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>บจ.ซีเอ็นที สตาร์ จำกัด</td>
                                            <td>บจ.ซีเอ็นที สตาร์ จำกัด</td>
                                            <td>0105564002171</td>
                                            <td>ประกอบกิจการนำเข้าและจำหน่ายสินค้า เช่น แผงโซล่าเซลล์ และอื่นๆ ภายในประเทศ</td>
                                            <td>นายทะเบียน</td>
                                            <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                    </tbody>
                                </table>
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