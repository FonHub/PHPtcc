﻿<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>การควบบริษัท</title>
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
                    <h2>Dashboard
                        <small class="text-muted">Welcome to TCC Application</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="../view/index.php"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="../view/company.php"></a> ทะเบียนบริษัท</li>
                        <li class="breadcrumb-item active">การควบบริษัท</li>
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
                                                            <input type="text" class="form-control date" placeholder="30/07/2017">
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
                                                            <input type="text" class="form-control date" placeholder="30/07/2021">
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
                                    <div class="btn-control">
                                        <button type="button" class="btn btn-raised btn-default __redvitality waves-effect">ค้นหา</button>
                                        <a class="btn btn-raised btn-default __gold waves-effect" href="../view/company_AddEdit.php">เพิ่มใหม่</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- NameHistory -->
            <div id="company_detail" class="detail__box">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div id="Merger">
                                <!-- bar control-->
                                <div class="row clearfix">
                                    <div class="col-sm-12 col-md-12 col-lg-12 btn_control">
                                        <div class="__save"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">save</i> </button></div>
                                        <div class="__new"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">insert_drive_file</i> </button></div>
                                        <div class="__close"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">clear</i> </button></div>
                                        <div class="__exit"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">exit_to_app</i> </button></div>
                                    </div>
                                </div>
                                <!-- bar function-->
                                <div class="btn_function">
                                    <div class="__box">
                                        <div class="_update">
                                            <i class="material-icons">sync</i>
                                            <span class="function-name">Update</span>
                                        </div>
                                    </div>
                                    <div class="__box">
                                        <div class="_add">
                                            <i class="material-icons">add</i>
                                            <span class="function-name">Add</span>
                                        </div>
                                    </div>
                                    <div class="__box">
                                        <div class="_remove">
                                            <i class="material-icons">remove</i>
                                            <span class="function-name">Remove</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- form -->
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <form class="form-horizontal __companymerger">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6">
                                                    <div style="padding: 20px 0px;border-bottom: 1px solid #ced4da;    margin-bottom: 30px;">
                                                        <div class="block-header">
                                                            <h2>ข้อมูลบริษัทควบ</h2>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12"> <b>เลขทะเบียนนิติบุคคคล</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="0105564001922">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12"> <b>ชื่อบริษัท</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="เลือกบริษัท">
                                                                                <option>บจ.เอ็มเอ็ม.เฮลท์พลัส จำกัด</option>
                                                                                <option>บริษัทบุรีการช่อง</option>
                                                                                <option>บริษัทนคร ฟิล์ม</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12"> <b>กรณีต้องการใช้ข้อมูลบริษัทนี้</b>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="input-group">
                                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" />
                                                                            <label for="md_checkbox_21">ชื่อบริษัท</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-red" />
                                                                        <label for="md_checkbox_22">ที่อยู่บริษัท</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding: 20px 0px;border-bottom: 1px solid #ced4da;    margin-bottom: 30px;">

                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12"> <b>เลขทะเบียนนิติบุคคคล</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="0105564001931">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12"> <b>ชื่อบริษัท</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="เลือกบริษัท">
                                                                                <option>บจ.วรเมธเจริญรุ่งเรือง จำกัด</option>
                                                                                <option>บริษัทบุรีการช่อง</option>
                                                                                <option>บริษัทนคร ฟิล์ม</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12"> <b>กรณีต้องการใช้ข้อมูลบริษัทนี้</b>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="input-group">
                                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" />
                                                                            <label for="md_checkbox_21">ชื่อบริษัท</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-red" />
                                                                        <label for="md_checkbox_22">ที่อยู่บริษัท</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding: 20px 0px;border-bottom: 1px solid #ced4da;    margin-bottom: 30px;">

                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12"> <b>เลขทะเบียนนิติบุคคคล</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="0105564001957">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12"> <b>ชื่อบริษัท</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="เลือกบริษัท">
                                                                                <option>บจ.บียอนด์ ดี จำกัด</option>
                                                                                <option>บริษัทบุรีการช่อง</option>
                                                                                <option>บริษัทนคร ฟิล์ม</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12"> <b>กรณีต้องการใช้ข้อมูลบริษัทนี้</b>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="input-group">
                                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" />
                                                                            <label for="md_checkbox_21">ชื่อบริษัท</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-red" />
                                                                        <label for="md_checkbox_22">ที่อยู่บริษัท</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-lg-6 col-md-6" style="padding: 20px 0px;border-bottom: 1px solid #ced4da;    margin-bottom: 30px;">
                                                    <div class="block-header">
                                                        <h2>ข้อมูลบริษัทผู้ถือครอง</h2>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-12 col-md-12"> <b>วันที่</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="1/7/2564">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-12 col-md-12"> <b>เลขทะเบียนนิติบุคคคล</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="0105564001931">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-12 col-md-12"> <b>ชื่อบริษัท</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <select class="form-control show-tick">
                                                                        <optgroup label="เลือกบริษัท">
                                                                            <option>บจ.ธาระวี จำกัด</option>
                                                                            <option>บริษัทบุรีการช่อง</option>
                                                                            <option>บริษัทนคร ฟิล์ม</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-12 col-md-12"> <b>กรณีต้องการใช้ข้อมูลบริษัทนี้</b>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="input-group">
                                                                        <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" />
                                                                        <label for="md_checkbox_21">ชื่อบริษัท</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <input type="checkbox" id="md_checkbox_22" class="filled-in chk-col-red" />
                                                                    <label for="md_checkbox_22">ที่อยู่บริษัท</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="btn-control">
                                                <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                                <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                                            </div>
                                        </form>



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