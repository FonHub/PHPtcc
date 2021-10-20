<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Person</title>
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
                    <h2>ทะเบียนบุคคล
                        <small class="text-muted">Welcome to TCC Application</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">ทะเบียนบุคคล</li>
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
                                                <input type="text" class="form-control" placeholder="">
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
                                        <a class="btn btn-raised btn-default __gold waves-effect" href="/PersonAddEdit">เพิ่มใหม่</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Person -->
            <div id="company_status">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <div class="card">
                            <div class="header">
                                <div class="header-status">
                                    <h3>รายการทะเบียนบุคคลเพิ่มล่าสุดทั้งหมด</h3>
                                    <span>2,240</span>
                                </div>
                                <ul class="header-dropdown m-r--5">
                                    <a href="PersonAddEdit.php" class="btn btn-raised btn-default waves-effect">
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
                                            <th style="width: 60px">#</th>
                                            <th>วันที่</th>
                                            <th>คำนำหน้าชื่อ</th>
                                            <th>ชื่อ</th>
                                            <th>นามสกุล</th>
                                            <th>สัญชาติ</th>
                                            <th>สถานะ</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>นาย</td>
                                            <td>วิชัย</td>
                                            <td>วชิรพงศ์</td>
                                            <td>ไทย</td>
                                            <td>กรรมการ</td>
                                            <td>
                                                <a href="PersonAddEdit.php" class="btn btn-raised btn-default waves-effect">
                                                    <i class="material-icons">mode_edit</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>นาง</td>
                                            <td>มณีรัตน์</td>
                                            <td>งามเรืองพงศ์</td>
                                            <td>ไทย</td>
                                            <td>กรรมการ</td>
                                            <td>
                                                <a href="PersonAddEdit.php" class="btn btn-raised btn-default waves-effect">
                                                    <i class="material-icons">mode_edit</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>MR.</td>
                                            <td>SUNSHINE </td>
                                            <td>TAGALOG </td>
                                            <td>english</td>
                                            <td>กรรมการ</td>
                                            <td>
                                                <a href="PersonAddEdit.php" class="btn btn-raised btn-default waves-effect">
                                                    <i class="material-icons">mode_edit</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>นาย</td>
                                            <td>ชนุชตร</td>
                                            <td>สุขสันต์</td>
                                            <td>ไทย</td>
                                            <td>กรรมการ</td>
                                            <td>
                                                <a href="PersonAddEdit.php" class="btn btn-raised btn-default waves-effect">
                                                    <i class="material-icons">mode_edit</i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>นางสาว </td>
                                            <td>กรรณธิมา</td>
                                            <td>คมแก้ว</td>
                                            <td>ไทย</td>
                                            <td>กรรมการ</td>
                                            <td>
                                                <a href="PersonAddEdit.php" class="btn btn-raised btn-default waves-effect">
                                                    <i class="material-icons">mode_edit</i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- footer -->
            <?php include('../view/footer.php'); ?>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>

</body>

</html>