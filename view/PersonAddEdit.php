<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Person</title>
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
                        <small class="text-muted">Welcome to TCC Application</small>
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
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>ข้อมูลบุคคล</h2>
                            </div>
                            <div class="body">
                                <form class="form-horizontal __info">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6">
                                            <b>เลขบัตรประชาชน หรือ หมายเลขพาสปอร์ต</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="person_id" type="text" class="form-control ip" placeholder="1-11-01123-5540-9" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2">
                                            <div>
                                                <b>คำนำหน้าชื่อ</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" v-model="title_name">
                                                            <optgroup label="คำนำหน้าชื่อ">
                                                                <option>นาย</option>
                                                                <option>นาง</option>
                                                                <option>นางสาว</option>
                                                                <option>อื่นๆ</option>
                                                                <option>Mr.</option>
                                                                <option>Mrs.</option>
                                                                <option>Ms.</option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div>
                                                <b>ชื่อ </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input v-model="first_name" type="text" class="form-control" placeholder="ชนุชตร" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div>
                                                <b>นามสกุล </b>
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
                                            <b>สัญชาติ</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick" v-model="nationality">
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
                                        <div class="col-lg-3 col-md-3">
                                            <b>อาชีพ</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick" v-model="occupation">
                                                        <optgroup label="อาชีพ">
                                                            <option>ผู้ทำบัญชี</option>
                                                            <option>ข้าราชการ</option>
                                                            <option>เจ้าของกิจการ</option>
                                                            <option>พนักงานบริษัท</option>
                                                            <option>อื่นๆ</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <small>เลขผู้ทำบัญชี</small>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="152421115000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>หมายเลขโทรศัพท์</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="02-520-5000" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>หมายเลขโทรสาร</b>
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
                                            <h3>ที่อยู่ภาษาไทย</h3>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>เลขที</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="1  อาคารทีพี แอนด์ ที" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>หมู่ที่/หมู่บ้าน</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="ชั้นที่ 22 ซอยวิภาวดีรังสิต 19" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ถนน</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="วิภาวดีรังสิต" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>จังหวัด</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="กรุงเทพมหานคร" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>อำเภอ/เขต</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="พระนคร" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ตำบล/แขวง</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="เสาชิงช้า" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>รหัสไปรษณีย์</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="10200 " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Address English -->
                                        <div class="header-status">
                                            <h3>ที่อยู่ภาษาอังกฤษ</h3>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>เลขที</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>หมู่ที่/หมู่บ้าน</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ถนน</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>จังหวัด</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>อำเภอ/เขต</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ตำบล/แขวง</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>รหัสไปรษณีย์</b>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6">
                                                <b>แนบเอกสาร</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div v-if="isForeigners">
                                        <AddressForeigner />
                                    </div>

                                    <div class="btn-control">
                                        <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                        <a href="#cancel"></a><button type="reset" class="btn btn-raised bg-grey waves-effect">
                                            ยกเลิก
                                        </button>
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
                                <b>Unit number</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>Unit type</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>Street address</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3">
                                <b>City </b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>State / Province</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>ZIP code</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6">
                                <b>file</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                    <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>

                </div>
            </div>
        </div>
    </div>

</body>

</html>