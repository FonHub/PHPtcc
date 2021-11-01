<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ทะเบียนบุคคล</title>
    <?php include('../view/linkhead.php'); ?>
    <!-- Sweetalert Css -->
    <link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

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
                <!-- Thai Lang-->
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">

                            <div class="body">
                                <form class="form-horizontal __info">
                                    <div class="header-status">
                                        <h3>ข้อมูลบุคคลภาษาไทย</h3>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3">
                                            <b>เลขบัตรประชาชน<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="person_id" type="text" class="form-control ip" placeholder="1-11-01123-5540-9" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>วันหมดอายุบัตร<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="person_id" type="text" class="form-control ip" placeholder="1/1/2565" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>แนบเอกสาร<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="person_id" type="text" class="form-control ip" placeholder="" />
                                                </div>
                                                <span class="input-group-addon"> <i class="zmdi zmdi-attachment-alt"></i> </span>
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
                                            <div class="input-group pt-10">
                                                <small>เลขผู้ทำบัญชี</small>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="152421115000">
                                                </div>
                                            </div>
                                        </div>
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
                                                    <input type="text" class="form-control" placeholder="02-520-5000" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div v-if="!isForeigners">
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
                <!-- Eng Lang-->
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">

                            <div class="body">
                                <form class="form-horizontal __info">
                                    <div class="header-status">
                                        <h3>ข้อมูลบุคคลอังกฤษ</h3>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3">
                                            <b>Passport No.<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="person_id" type="text" class="form-control " placeholder="A123456" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>Date of expiry<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="person_id" type="text" class="form-control " placeholder="1/1/2565" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>File Upload<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="person_id" type="text" class="form-control " placeholder="" />
                                                </div>
                                                <span class="input-group-addon"> <i class="zmdi zmdi-attachment-alt"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 py-10px">
                                            <p><strong>Name</strong></p>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <b>Title Name<span class="red">*</span></b>
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
                                                <b>First Name <span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Mariah" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div>
                                                <b>Middle Name <span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Appen" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div>
                                                <b>Surname<span class="red">*</span></b>
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
                                            <b>Nationality<span class="red">*</span></b>
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
                                            <b>Occupation<span class="red">*</span></b>
                                            <div class="form-group">
                                                <select class="form-control show-tick" v-model="occupation">
                                                    <optgroup label="กรุณาเลือก">
                                                        <option>Commercial</option>
                                                        <option>Commerce</option>
                                                    </optgroup>
                                                </select><!-- From Master -->
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>Phone No.<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="02-520-5000" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>Email<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="02-520-5000" />
                                                </div>
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
                                                <b>Province<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Bangkok" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>District<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Bangrak" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>Sub-district<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="Si Phraya" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>Postal code<span class="red">*</span></b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="10500" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div v-if="isForeigners">
                                        <AddressForeigner />
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
            </section>

            <!-- footer -->
            <?php include('../view/footer.php'); ?>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>
    <!-- Modal -->
    <div class="modal fade" id="OutsideModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg box__director" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div v-if="!isForeigners">

                        <!-- Address English -->

                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3">
                                <b>Unit number<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>Unit type<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>Street address<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3">
                                <b>City <span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>State / Province<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>ZIP code<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6">
                                <b>file<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-align">
                    <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>
                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>

                </div>
            </div>
        </div>
    </div>

</body>

</html>