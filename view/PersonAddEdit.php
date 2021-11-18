<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ทะเบียนบุคคล</title>
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
                        ทะเบียนบุคคล
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/person"></a> ทะเบียนบุคคล
                        </li>
                        <li class="breadcrumb-item active">ข้อมูลบุคคล</li>
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
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#LangThai">ข้อมูลบุคคลภาษาไทย</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#LangEng">ข้อมูลบุคคลภาษาอังกฤษ</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#PersonNameHis">ประวัติการเปลี่ยนชื่อ</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#PersonAddHis">ประวัติการเปลี่ยนที่อยู่</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#PersonInvestmentHis">ประวัติเงินลงทุน</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <!-- Tab panes 1-->
                                        <div role="tabpanel" class="tab-pane in active" id="LangThai">
                                            <!-- Thai Lang-->
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="card">

                                                        <div class="body">
                                                            <form class="form-horizontal __info">
                                                                <div class="header-status">
                                                                    <h3>ข้อมูลส่วนบุคคล</h3>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>รหัสประจำตัวส่วนบุคคล<span class="red">*</span></b>
                                                                        <div class="input-group">
                                                                            <div>
                                                                                <input type="text" class="form-control" placeholder="0001" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <b>เลขบัตรประชาชน<span class="red">*</span></b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="1-11-01123-5540-9" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>วันเกิด<span class="red">*</span></b>
                                                                        <div class="input-group">
                                                                            <div class="form-line disabled">
                                                                                <input type="text" class="form-control" placeholder="30 ต.ค. 2550" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>อายุ<span class="red">*</span></b>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="45" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>วันหมดอายุบัตร<span class="red">*</span></b>
                                                                        <div class="input-group">
                                                                            <div class="form-line disabled">
                                                                                <input type="text" class="form-control" placeholder="30 ต.ค. 2550" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row clearfix">

                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>คำนำหน้าชื่อ<span class="red">*</span></b>
                                                                        <!-- From Master -->
                                                                        <select class="form-control show-tick" v-model="title_name">
                                                                            <optgroup label="คำนำหน้าชื่อ">
                                                                                <option>นาย</option>
                                                                                <option>นาง</option>
                                                                                <option>นางสาว</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <div>
                                                                            <b>ชื่อ <span class="red">*</span></b>
                                                                            <div class="input-group">
                                                                                <div class="form-line">
                                                                                    <input v-model="first_name" type="text" class="form-control" placeholder="ชนุชตร" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <div>
                                                                            <b>นามสกุล <span class="red">*</span></b>
                                                                            <div class="input-group">
                                                                                <div class="form-line">
                                                                                    <input v-model="last_name" type="text" class="form-control" placeholder="สุขสันต์" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="row clearfix">
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>สัญชาติ<span class="red">*</span></b>
                                                                        <div class="form-group">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="กรุณาเลือก">
                                                                                    <option>ไทย</option>
                                                                                    <option>อังกฤษ</option>
                                                                                    <option>จีน</option>
                                                                                </optgroup>
                                                                            </select><!-- From Master -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <b>อาชีพ<span class="red">*</span></b>
                                                                        <div class="form-group">
                                                                            <select class="form-control show-tick" v-model="occupation">
                                                                                <optgroup label="กรุณาเลือก">
                                                                                    <option>ข้าราชการ</option>
                                                                                    <option>เจ้าของกิจการ</option>
                                                                                    <option>พนักงานเอกชน</option>
                                                                                </optgroup>
                                                                            </select><!-- From Master -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <div class="input-group pt-10">
                                                                            <small>เลขผู้ทำบัญชี</small>
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="152421115000">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <b>โทรศัพท์<span class="red">*</span></b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="02-520-5000" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <b>อีเมล์<span class="red">*</span></b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="mail@email.com" />
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
                                                                </div>
                                                                <div>
                                                                    <!-- Address Thai -->
                                                                    <div class="header-status">
                                                                        <h3>ที่อยู่</h3>
                                                                    </div>
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
                                                                    </div>
                                                                </div>
                                                                <div class="btn-control text-align">
                                                                    <a href="#cancel"></a><button type="reset" class="btn btn-raised bg-grey waves-effect">
                                                                        ยกเลิก
                                                                    </button>
                                                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab panes 2-->
                                        <div role="tabpanel" class="tab-pane " id="LangEng">
                                            <!-- Eng Lang-->
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="card">

                                                        <div class="body">
                                                            <form class="form-horizontal __info">
                                                                <div class="header-status">
                                                                    <h3>Personal Data</h3>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>ID running</b>
                                                                        <div class="input-group">
                                                                            <div>
                                                                                <input type="text" class="form-control " placeholder="0001" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <b>Passport No.</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control " placeholder="A123456" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>Birthday</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line disabled">
                                                                                <input type="text" class="form-control" placeholder="1/1/1980" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-1 col-md-1">
                                                                        <b>Age</b>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="45" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>Date of expiry</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control " placeholder="30 ต.ค. 2550" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12 py-10px">
                                                                        <p><strong>Name</strong></p>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>Title Name</b>
                                                                        <!-- From Master -->
                                                                        <select class="form-control show-tick" v-model="title_name">
                                                                            <optgroup label="คำนำหน้าชื่อ">
                                                                                <option>Mr.</option>
                                                                                <option>Mrs.</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <div>
                                                                            <b>First Name</b>
                                                                            <div class="input-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" placeholder="Mariah" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <div>
                                                                            <b>Middle Name</b>
                                                                            <div class="input-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" placeholder="Appen" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <div>
                                                                            <b>Surname</b>
                                                                            <div class="input-group">
                                                                                <div class="form-line">
                                                                                    <input type="text" class="form-control" placeholder="Caraiban" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="row clearfix">
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>Nationality</b>
                                                                        <div class="form-group">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="กรุณาเลือก">
                                                                                    <option>Thai</option>
                                                                                    <option>British Virgin Islands</option>
                                                                                </optgroup>
                                                                            </select><!-- From Master -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <b>Occupation</b>
                                                                        <div class="form-group">
                                                                            <select class="form-control show-tick" v-model="occupation">
                                                                                <optgroup label="กรุณาเลือก">
                                                                                    <option>Commercial</option>
                                                                                    <option>Commerce</option>
                                                                                </optgroup>
                                                                            </select><!-- From Master -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <b>Phone No.</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="02-520-5000" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-3">
                                                                        <b>Email</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="mail@email.com" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>File Upload</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control " placeholder="" />
                                                                            </div>
                                                                            <span class="input-group-addon"> <i class="zmdi zmdi-attachment-alt"></i> </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div v-if="!isForeigners">
                                                                    <!-- Address English -->
                                                                    <div class="header-status">
                                                                        <h3>Address</h3>
                                                                    </div>
                                                                    <div class="row clearfix">
                                                                        <div class="col-lg-3 col-md-3">
                                                                            <b>House No.</b>
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
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>File Upload</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control " placeholder="" />
                                                                            </div>
                                                                            <span class="input-group-addon"> <i class="zmdi zmdi-attachment-alt"></i> </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="btn-control text-align">
                                                                    <a href="#cancel"></a><button type="reset" class="btn btn-raised bg-grey waves-effect">
                                                                        ยกเลิก
                                                                    </button>
                                                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab panes 3-->
                                        <div role="tabpanel" class="tab-pane " id="PersonNameHis">
                                            <!-- table -->
                                            <div class="body table-responsive company-list">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 60px">ครั้งที่</th>
                                                            <th>วันที่เริ่มต้น</th>
                                                            <th>วันที่สิ้นสุด</th>
                                                            <th>ชื่อเดิม</th>
                                                            <th>เอกสารแนบ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>1 ต.ค. 2550</td>
                                                            <td>1 ต.ค. 2550</td>
                                                            <td>นาย เอ็กซ์ สุขสันต์ </td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>12/2/2545</td>
                                                            <td>1 ต.ค. 2550</td>
                                                            <td>นาย กันต์ชัย สุขสันต์ </td>
                                                            <td>-</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Tab panes 4-->
                                        <div role="tabpanel" class="tab-pane " id="PersonAddHis">
                                            <!-- table -->
                                            <div class="body table-responsive company-list">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 60px">ครั้งที่</th>
                                                            <th>วันที่เริ่มต้น</th>
                                                            <th>วันที่สิ้นสุด</th>
                                                            <th>ที่อยู่เดิม</th>
                                                            <th>เอกสารแนบ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>1 ต.ค. 2550</td>
                                                            <td>1 ต.ค. 2550</td>
                                                            <td>257/6 หมู่ที่ 14 ถนนมิตรภาพ ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40000</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>12/2/2545</td>
                                                            <td>1 ต.ค. 2550</td>
                                                            <td>449 ซอยอินทามระ 41 แขวงดินแดง เขตดินแดง กรุงเทพมหานคร 10400</td>
                                                            <td>-</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Tab panes 5-->
                                        <div role="tabpanel" class="tab-pane " id="PersonInvestmentHis">
                                            <!-- table -->
                                            <div class="body table-responsive company-list">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>ใบหุ้นที่เลข</th>
                                                            <th>วันที่เข้าเป็นผู้ถือหุ้น</th>
                                                            <th>ใบหุ้นลงวันที่</th>
                                                            <th>วันที่โอน</th>
                                                            <th>จำนวนหุ้น</th>
                                                            <th>บริษัทที่ลงทุน</th>
                                                            <th>สัดส่วนที่ถือ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>1 ก.ย. 56</td>
                                                            <td>30 ก.ย. 56</td>
                                                            <td>30 ก.ย. 56</td>
                                                            <td>60,000,000.00</td>
                                                            <td>บจ.ซีเอ็นที สตาร์ จำกัด</td>
                                                            <td>60</td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>1 ก.ย. 55</td>
                                                            <td>30 ก.ย. 55</td>
                                                            <td>30 ก.ย. 55</td>
                                                            <td>1,000,000.00</td>
                                                            <td>บจ.ชิวา1982 จำกัด</td>
                                                            <td>5</td>
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