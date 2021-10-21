<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>บริษัทเจ้าของหุ้น</title>
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
                        <li class="breadcrumb-item active">บริษัทเจ้าของหุ้น</li>
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
                            <div id="Lot">
                                <div>
                                    <!-- bar control-->
                                    <div class="row clearfix">
                                        <div class="col-sm-12 col-md-12 col-lg-12 btn_control">
                                            <div class="__save"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">save</i> </button></div>
                                            <div class="__new"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">insert_drive_file</i> </button></div>
                                            <div class="__close"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">clear</i> </button></div>
                                            <div class="__exit"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">exit_to_app</i> </button></div>
                                        </div>
                                    </div>

                                    <!-- table -->
                                    <div class="body table-responsive stock_list">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>วันลงทะเบียน</th>
                                                    <th>วันประชุม</th>
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>19/5/2504</td>
                                                    <td>บจ.พรอสเพอรัส วิน 168 จำกัด </td>
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

                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>19/5/2504</td>
                                                    <td>บจ.ภัทโสภณ จำกัด </td>
                                                    <td>8</td>
                                                    <td>1</td>
                                                    <td>1/6/2504</td>
                                                    <td>2</td>
                                                    <td>จองหุ้น</td>
                                                    <td>1</td>
                                                    <td>5000</td>
                                                    <td>6000</td>
                                                    <td>10.000</td>
                                                    <td>1,000</td>

                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>19/5/2504</td>
                                                    <td>บจ.วันดีดีโก จำกัด</td>
                                                    <td>8</td>
                                                    <td>1</td>
                                                    <td>1/6/2504</td>
                                                    <td>2</td>
                                                    <td>จองหุ้น</td>
                                                    <td>8</td>
                                                    <td>6000</td>
                                                    <td>7000</td>
                                                    <td>10.000</td>
                                                    <td>1,000</td>

                                                </tr>
                                                <tr>
                                                    <td>19/2/2504</td>
                                                    <td>19/5/2504</td>
                                                    <td>นาย วิชัย วชิรพงศ์ </td>
                                                    <td>8</td>
                                                    <td>1</td>
                                                    <td>1/6/2504</td>
                                                    <td>2</td>
                                                    <td>จองหุ้น</td>
                                                    <td>8</td>
                                                    <td>7000</td>
                                                    <td>8000</td>
                                                    <td>10.000</td>
                                                    <td>1,000</td>

                                                </tr>
                                                <tr>
                                                    <td>19/8/2504</td>
                                                    <td>30/9/2504</td>
                                                    <td>บจ.ณัฐปภัสร์ 59 จำกัด</td>
                                                    <td>8</td>
                                                    <td>1</td>
                                                    <td>30/9/2504</td>
                                                    <td>2</td>
                                                    <td>จองหุ้น</td>
                                                    <td>8</td>
                                                    <td>2500</td>
                                                    <td>3500</td>
                                                    <td>10.000</td>
                                                    <td>1,000</td>

                                                </tr>
                                            </tbody>
                                        </table>
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