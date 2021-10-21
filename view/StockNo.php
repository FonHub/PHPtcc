<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>รายละเอียดใบหุ้น</title>
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
                        <li class="breadcrumb-item"><a href="../view/stock.php"></a> ทะเบียนหุ้น</li>
                        <li class="breadcrumb-item active">รายละเอียดใบหุ้น</li>
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


            <div id="company_detail" class="detail__box">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <!-- Content -->
                            <div id="StockNo">
                                <div>
                                    <!-- bar control-->
                                    <div class="row clearfix">
                                        <div class="col-sm-12 col-md-12 col-lg-12 btn_control">
                                            <div class="__save">
                                                <button type="button" class="btn btn-raised waves-effect">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                            <div class="__new">
                                                <button type="button" class="btn btn-raised waves-effect">
                                                    <i class="material-icons">insert_drive_file</i>
                                                </button>
                                            </div>
                                            <div class="__close">
                                                <button type="button" class="btn btn-raised waves-effect">
                                                    <i class="material-icons">clear</i>
                                                </button>
                                            </div>
                                            <div class="__exit">
                                                <button type="button" class="btn btn-raised waves-effect">
                                                    <i class="material-icons">exit_to_app</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- bar function-->
                                    <div class="btn_function">
                                        <div class="__box" style="width: 120px">
                                            <div class="_Sell">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#CreateNewLotModal">
                                                    <i class="material-icons" style="padding: 7px 20px;">add</i>
                                                    <span class="function-name">เพิ่ม</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="__box" style="width: 120px">
                                            <div class="_Sell">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#StockNoModal">
                                                    <i class="material-icons" style="padding: 7px 20px;">sync</i>
                                                    <span class="function-name">ซื้อขาย</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="__box" style="width: 120px">
                                            <div class="_reduction">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#IncreaseModal" style="margin-top: 10px">
                                                    <i class="material-icons">trending_up</i><br>
                                                    <span class="function-name">เพิ่มทุน</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="__box" style="width: 120px">
                                            <div class="_reduction">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ReductionModal" style="margin-top: 10px">
                                                    <i class="material-icons">trending_down</i><br>
                                                    <span class="function-name">ลดทุน</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="__box">
                                            <div class="_print" style="margin-top: 15px">
                                                <i class="material-icons">print</i>
                                                <span class="function-name">พิมพ์</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- table -->
                                    <div class="body table-responsive stock_list">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>วันลงทะเบียน</th>
                                                    <th>วันประชุม</th>
                                                    <th>วันขาดประชุม</th>
                                                    <th>นิติบุคคล/บุคคล</th>
                                                    <th>ทะเบียน</th>
                                                    <th>ลำดับที่พิมพ์</th>
                                                    <th>ใบหุ้นลงวันที่</th>
                                                    <th>ใบหุ้นเลขที่</th>
                                                    <th>จองหุ้น <br> /รับโอน</th>
                                                    <th>Pay Type</th>
                                                    <th>Start No.</th>
                                                    <th>End No.</th>
                                                    <th>มูลค่าหุ้น</th>
                                                    <th>จำนวนหุ้น</th>
                                                    <th>Sell To</th>
                                                    <th>Sell <br /> Start No.</th>
                                                    <th>Sell <br /> End No.</th>
                                                    <th>ใบหุ้นใหม่เลขที่</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>19/5/2504</td>
                                                    <td>-</td>
                                                    <td>บจ.พรอสเพอรัส วิน 168 จำกัด (หลังควบ)</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>1/6/2504</td>
                                                    <td>1</td>
                                                    <td>จองหุ้น</td>
                                                    <td>1</td>
                                                    <td>2500</td>
                                                    <td>5000</td>
                                                    <td>10.000</td>
                                                    <td>2,500</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                            <label for="md_checkbox_21"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>19/5/2504</td>
                                                    <td>-</td>
                                                    <td>นาย วิชัย วชิรพงศ์</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                    <td>1/6/2504</td>
                                                    <td>2</td>
                                                    <td>จองหุ้น</td>
                                                    <td>1</td>
                                                    <td>5000</td>
                                                    <td>6000</td>
                                                    <td>10.000</td>
                                                    <td>1,000</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                            <label for="md_checkbox_21"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>19/5/2504</td>
                                                    <td>-</td>
                                                    <td>นาง มณีรัตน์ งามเรืองพงศ์</td>
                                                    <td>3</td>
                                                    <td>1</td>
                                                    <td>1/6/2504</td>
                                                    <td>2</td>
                                                    <td>จองหุ้น</td>
                                                    <td>8</td>
                                                    <td>6000</td>
                                                    <td>7000</td>
                                                    <td>10.000</td>
                                                    <td>1,000</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                            <label for="md_checkbox_21"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>19/5/2504</td>
                                                    <td>-</td>
                                                    <td>MR.SUNSHINE TAGALOG</td>
                                                    <td>4</td>
                                                    <td>1</td>
                                                    <td>1/6/2504</td>
                                                    <td>2</td>
                                                    <td>จองหุ้น</td>
                                                    <td>8</td>
                                                    <td>7000</td>
                                                    <td>8000</td>
                                                    <td>10.000</td>
                                                    <td>1,000</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                            <label for="md_checkbox_21"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>30/9/2504</td>
                                                    <td>-</td>
                                                    <td>บจ.พรอสเพอรัส วิน 168 จำกัด (หลังควบ)</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>30/9/2504</td>
                                                    <td>1</td>
                                                    <td>โอนหุ้น</td>
                                                    <td>1</td>
                                                    <td>2500</td>
                                                    <td>5000</td>
                                                    <td>10.000</td>
                                                    <td>2,500</td>
                                                    <td>บจ.ณัฐปภัสร์ 59 จำกัด</td>
                                                    <td>2500</td>
                                                    <td>3500</td>
                                                    <th>9</th>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                            <label for="md_checkbox_21"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>30/9/2504</td>
                                                    <td>-</td>
                                                    <td>บจ.ณัฐปภัสร์ 59 จำกัด</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>30/9/2504</td>
                                                    <td>1</td>
                                                    <td>รับโอน</td>
                                                    <td>1</td>
                                                    <td>2500</td>
                                                    <td>3500</td>
                                                    <td>10.000</td>
                                                    <td>2,500</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <th>9</th>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                            <label for="md_checkbox_21"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>30/9/2504</td>
                                                    <td>-</td>
                                                    <td>บจ.อายู สตูดิโอ จำกัด</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>30/9/2504</td>
                                                    <td>1</td>
                                                    <td>หุ้นเพิ่มทุน </td>
                                                    <td>1</td>
                                                    <td>2500</td>
                                                    <td>3500</td>
                                                    <td>10.000</td>
                                                    <td>2,500</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <th>9</th>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                            <label for="md_checkbox_21"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>30/9/2504</td>
                                                    <td>-</td>
                                                    <td>บจ.4 สมาร์ท พลัส จำกัด</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>30/9/2504</td>
                                                    <td>1</td>
                                                    <td>หุ้นลดทุน </td>
                                                    <td>1</td>
                                                    <td>2500</td>
                                                    <td>3500</td>
                                                    <td>10.000</td>
                                                    <td>2,500</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <th>9</th>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                            <label for="md_checkbox_21"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>30/9/2504</td>
                                                    <td>-</td>
                                                    <td>บจ.พลัส มิราเคิล จำกัด</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>30/9/2504</td>
                                                    <td>1</td>
                                                    <td>หุ้นควบ </td>
                                                    <td>1</td>
                                                    <td>2500</td>
                                                    <td>3500</td>
                                                    <td>10.000</td>
                                                    <td>2,500</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <th>9</th>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                            <label for="md_checkbox_21"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>30/9/2504</td>
                                                    <td>-</td>
                                                    <td>บจ.ชิวา1982 จำกัด</td>
                                                    <td>1</td>
                                                    <td>1</td>
                                                    <td>30/9/2504</td>
                                                    <td>1</td>
                                                    <td>หุ้นคงเหลือ </td>
                                                    <td>1</td>
                                                    <td>2500</td>
                                                    <td>3500</td>
                                                    <td>10.000</td>
                                                    <td>2,500</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <th>9</th>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                            <label for="md_checkbox_21"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Modal Create New Lot -->
                                    <div class="modal fade" id="CreateNewLotModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg box__director" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="largeModalLabel">
                                                        Create New Lot
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal box__director">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2">
                                                                <b>เลือกวันประชุม </b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="วันที่ประชุมล่าสุด">
                                                                                <option> 1/10/2560</option>
                                                                                <option> 1/9/2560</option>
                                                                                <option> 1/8/2560</option>
                                                                                <option> 1/7/2560</option>
                                                                                <option> 1/6/2560</option>
                                                                                <option> 1/5/2560</option>
                                                                                <option> 1/4/2560</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- row -->
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect">
                                                        บันทึก
                                                    </button>
                                                    <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                        ยกเลิก
                                                    </button>
                                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">
                                                        ปิด
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal StockNo -->
                                    <div class="modal fade" id="StockNoModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg box__director" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="largeModalLabel">
                                                        การซื้อขายหุ้น
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal box__director">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2">
                                                                <b>ใบหุ้นเลขที่</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="1 " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4">
                                                                <b>ใบหุ้นลงวันที่</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="1/6/2504" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- row -->
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4">
                                                                <b>Sell To</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="บริษัท">
                                                                                <option> บจ.ณัฐปภัสร์ 59 จำกัด </option>
                                                                                <option> บจ.พรอสเพอรัส วิน 168 จำกัด </option>
                                                                            </optgroup>
                                                                            <optgroup label="บุคคล">
                                                                                <option> นาย วิชัย วชิรพงศ์</option>
                                                                                <option> MR. SUNSHINE TAGALOG</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3">
                                                                <b>Sell Start No.</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="2500" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3">
                                                                <b>Sell End No.</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="3500" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 col-md-1">
                                                                <!-- bar function-->
                                                                <div class="btn_function" style="border-bottom: 0;margin-bottom: 0;padding: 20px 0;">
                                                                    <div class="__box" style="height: 35px;width: 35px;padding: 0;margin: 0;margin-right: 10px;">
                                                                        <div class="_add" style="margin-top: 5px;">
                                                                            <i class="material-icons">add</i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="__box" style="height: 35px;width: 35px;padding: 0;margin: 0;">
                                                                        <div class="_remove" style="margin-top: 5px;">
                                                                            <i class="material-icons">remove</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- row -->
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4">
                                                                <b>Sell To</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="บุคคล">
                                                                                <option> นาย วิชัย วชิรพงศ์</option>
                                                                                <option> MR. SUNSHINE TAGALOG</option>
                                                                            </optgroup>
                                                                            <optgroup label="บริษัท">
                                                                                <option> บจ.ณัฐปภัสร์ 59 จำกัด </option>
                                                                                <option> บจ.พรอสเพอรัส วิน 168 จำกัด </option>
                                                                            </optgroup>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3">
                                                                <b>Sell Start No.</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="3500" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3">
                                                                <b>Sell End No.</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="4500" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 col-md-1">
                                                                <!-- bar function-->
                                                                <div class="btn_function" style="border-bottom: 0;margin-bottom: 0;padding: 20px 0;">
                                                                    <div class="__box" style="height: 35px;width: 35px;padding: 0;margin: 0;margin-right: 10px;">
                                                                        <div class="_add" style="margin-top: 5px;">
                                                                            <i class="material-icons">add</i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="__box" style="height: 35px;width: 35px;padding: 0;margin: 0;">
                                                                        <div class="_remove" style="margin-top: 5px;">
                                                                            <i class="material-icons">remove</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- row -->
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-4">
                                                                <b>Sell To</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="บุคคล">
                                                                                <option></option>
                                                                                <option> นาย วิชัย วชิรพงศ์</option>
                                                                                <option> MR. SUNSHINE TAGALOG</option>
                                                                            </optgroup>
                                                                            <optgroup label="บริษัท">
                                                                                <option> บจ.ณัฐปภัสร์ 59 จำกัด </option>
                                                                                <option> บจ.พรอสเพอรัส วิน 168 จำกัด </option>
                                                                            </optgroup>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3">
                                                                <b>Sell Start No.</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3">
                                                                <b>Sell End No.</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 col-md-1">
                                                                <!-- bar function-->
                                                                <div class="btn_function" style="border-bottom: 0;margin-bottom: 0;padding: 20px 0;">
                                                                    <div class="__box" style="height: 35px;width: 35px;padding: 0;margin: 0;margin-right: 10px;">
                                                                        <div class="_add" style="margin-top: 5px;">
                                                                            <i class="material-icons">add</i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="__box" style="height: 35px;width: 35px;padding: 0;margin: 0;">
                                                                        <div class="_remove" style="margin-top: 5px;">
                                                                            <i class="material-icons">remove</i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect">
                                                        บันทึก
                                                    </button>
                                                    <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                        ยกเลิก
                                                    </button>
                                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">
                                                        ปิด
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Reduction-->
                                    <div class="modal fade" id="IncreaseModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg box__director" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="largeModalLabel">
                                                        การเพิ่มทุน
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal box__director">

                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2">
                                                                <b>ใบหุ้นเลขที่</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="1 " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4">
                                                                <b>ใบหุ้นลงวันที่</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="30/10/2504" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- row -->
                                                        <div class="row clearfix">

                                                            <div class="col-lg-4 col-md-4">
                                                                <b>เพิ่มมูลค่าหุ้น (Par Value) </b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="5.000" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4">
                                                                <b>เพิ่มจํานวนหุ้น</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="1000" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- row -->
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect">
                                                        บันทึก
                                                    </button>
                                                    <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                        ยกเลิก
                                                    </button>
                                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">
                                                        ปิด
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Reduction-->
                                    <div class="modal fade" id="ReductionModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg box__director" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="largeModalLabel">
                                                        การลดทุน
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal box__director">

                                                        <div class="row clearfix">
                                                            <div class="col-lg-2 col-md-2">
                                                                <b>ใบหุ้นเลขที่</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="1 " />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4">
                                                                <b>ใบหุ้นลงวันที่</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="30/10/2504" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- row -->
                                                        <div class="row clearfix">

                                                            <div class="col-lg-4 col-md-4">
                                                                <b>ลดมูลค่าหุ้น (Par Value) </b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="5.000" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4">
                                                                <b>ลดจํานวนหุ้น</b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="1000" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- row -->
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect">
                                                        บันทึก
                                                    </button>
                                                    <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                        ยกเลิก
                                                    </button>
                                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">
                                                        ปิด
                                                    </button>
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