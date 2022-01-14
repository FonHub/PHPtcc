<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>เปลี่ยนชื่อบริษัท</title>
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
                    <h2>เปลี่ยนชื่อบริษัท
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="../view/index.php"><i class="zmdi zmdi-home"></i> หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="../view/company.php"></a> ทะเบียนบริษัท</li>
                        <li class="breadcrumb-item active">เปลี่ยนชื่อบริษัท</li>
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
                                    <div class="btn-control">
                                        <button type="button" class="btn btn-raised btn-default __redvitality waves-effect">ค้นหา</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- company detail-->
            <div id="company_detail" class="detail__box">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#NameHistory">เปลี่ยนชื่อบริษัท</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane in active" id="NameHistory">
                                        <!-- table -->
                                        <div class="body table-responsive company-list">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 60px">ครั้งที่</th>
                                                        <th>วันที่เริ่มต้น</th>
                                                        <th>วันที่สิ้นสุด</th>
                                                        <th>เลขทะเบียนนิติบุคคคล</th>
                                                        <th>ชื่อเดิมภาษาไทย</th>
                                                        <th>ชื่อเดิมภาษาอังกฤษ</th>
                                                        <th>เอกสารแนบ</th>
                                                        <th>หมายเหตุ</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>1 ต.ค. 2540</td>
                                                        <td>1 ต.ค. 2550</td>
                                                        <td>0105564001931</td>
                                                        <td>หจ.พ.พัฒนรักษ์</td>
                                                        <td>Pattanarak LP</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>1 ต.ค. 2550</td>
                                                        <td>1 ต.ค. 2560</td>
                                                        <td>0105564001931</td>
                                                        <td>บจ.จีจี เกฮลอท จำกัด</td>
                                                        <td>GG GEHLOT CO., LTD.</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Modal Large Size -->
                                    <div class="modal fade" id="syncNamecompany" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg box__director" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="syncNamecompany">เปลี่ยนแปลงชื่อบริษัท</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal _namehistory">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-1 col-md-1">
                                                                <div><b>ครั้งที่<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control " placeholder="1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3">
                                                                <div><b>เลขทะเบียนนิติบุคคคล<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control " placeholder="0105564001931">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4"> <b>วันที่เริ่มต้น<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="1 ก.ค. 2560 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4"> <b>วันที่สิ้นสุด<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="30 ต.ค. 2550 ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-6 col-md-6"> <b>ชื่อเดิมภาษาไทย<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="บจ.คิด ตรึก ตรอง จำกัด">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6"> <b>ชื่อเดิมภาษาอังกฤษ<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="Think Truong Co., Ltd.">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-6 col-md-6"> <b>ชื่อใหม่ภาษาไทย<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="บจ.ที โรบอติคส์ จำกัด">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6"> <b>ชื่อใหม่ภาษาอังกฤษ<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="บจ.ที โรบอติคส์ จำกัด">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-6 col-md-6"> <b>เอกสารแนบ<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6"> <b>หมายเหตุ<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>
                                                    <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
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