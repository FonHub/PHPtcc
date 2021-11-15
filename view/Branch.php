<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ชื่อบริษัท-ชื่อสาขา</title>
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
                        ข้อมูลสาขา
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#"></a> สาขา
                        </li>
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
                                <h2>ข้อมูลสาขา</h2>
                            </div>
                            <div class="body">

                                <!-- form -->
                                <form class="form-horizontal __HeadAdd">
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4">
                                            <b>ชื่อสาขาภาษาไทย<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="company_th" type="text" class="form-control ip" placeholder="บจ.ไพร์ม เอ็กซ์ จำกัด" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <b>ชื่อสาขาภาษาอังกฤษ<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="company_en" type="text" class="form-control ip" placeholder="บจ.ไพร์ม เอ็กซ์ จำกัด" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>ภาษีมูลค่าเพิ่ม<span class="red">*</span></b>
                                            <div class="box_flex">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="radio" class="with-gap" id="ig_radio_b1">
                                                        <label for="ig_radio_b1"></label>
                                                    </span>
                                                    <div class="form-line noborder">
                                                        <input type="text" class="form-control" placeholder="มี" />
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input type="radio" class="with-gap" id="ig_radio__b2">
                                                        <label for="ig_radio__b2"></label>
                                                    </span>
                                                    <div class="form-line noborder">
                                                        <input type="text" class="form-control" placeholder="ไม่มี" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2">
                                            <b>แนบเอกสาร<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="" />
                                                </div>
                                                <span class="input-group-addon"> <i class="zmdi zmdi-attachment-alt"></i> </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <b>วันที่จดทะเบียนจัดตั้ง<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="disabled">
                                                    <input type="text" class="form-control" placeholder="30 ต.ค. 2550" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <b>วันที่เปลี่ยนแปลง<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line disabled">
                                                    <input type="text" class="form-control" placeholder="30 ต.ค. 2550" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Address Thai -->
                                    <div class="header-status">
                                        <h3>ที่อยู่ภาษาไทย</h3>
                                    </div>
                                    <div>
                                        <!-- Address Thai -->

                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>บ้านเลขที่<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="1" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>หมู่ที่/หมู่บ้าน</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="-" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>อาคาร/หมู่บ้าน</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="TCC" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>ชั้น</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="1" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ซอย</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="-" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ถนน</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="สุรวงศ์" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>จังหวัด<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="กรุงเทพมหานคร" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>อำเภอ/เขต<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="บางรัก" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ตำบล/แขวง<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="สี่พระยา" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>รหัสไปรษณีย์<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="10500" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Address English -->
                                    <div class="header-status">
                                        <h3>ที่อยู่ภาษาอังกฤษ</h3>
                                    </div>
                                    <div>
                                        <!-- Address English -->

                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>House No.<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="1" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>Village No.</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="-" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>Building/Village</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="TCC" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>Floor</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="1st" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>Soi</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="-" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>Road</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Surawong" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>Province</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Bangkok" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>District</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Bangrak" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>Sub-district</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Si Phraya" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>Postal code</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="10500" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header-status">
                                            <h3>ข้อมูลเพิ่มเติม</h3>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3"> <b>โทรศัพท์<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3"> <b>อีเมล์<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
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
                                            <div class="col-lg-2 col-md-2">
                                                <b>วันที่จดทะเบียนจัดตั้ง<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="disabled">
                                                        <input type="text" class="form-control" placeholder="30 ต.ค. 2550" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2">
                                                <b>วันที่เปลี่ยนแปลง<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line disabled">
                                                        <input type="text" class="form-control" placeholder="30 ต.ค. 2550" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

            <!-- Branch -->
            <div id="company_detail">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <!-- table -->
                                <div class="body table-responsive company-list">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 60px">ครั้งที่</th>
                                                <th>วันที่เริ่มต้น</th>
                                                <th>วันที่สิ้นสุด</th>
                                                <th>เปลี่ยนชื่อ</th>
                                                <th>เปลี่ยนที่อยู่</th>
                                                <th>เอกสารแนบ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1 ต.ค. 2550</td>
                                                <td>1 ต.ค. 2550</td>
                                                <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม </td>
                                                <td>257/6 หมู่ที่ 14 ถนนมิตรภาพ ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40000</td>
                                                <td>ใบเปลี่ยนชื่อ, ใบเปลี่ยนที่อยู่</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>12/2/2545</td>
                                                <td>1 ต.ค. 2550</td>
                                                <td>-</td>
                                                <td>999 ชั้น 5 ห้อง 5 บี 1 ถนนเพลินจิต แขวงลุมพินี เขตปทุมวัน กรุงเทพมหานคร 10330</td>
                                                <td>ใบเปลี่ยนที่อยู่</td>
                                            </tr>
                                        </tbody>
                                    </table>
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