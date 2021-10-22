<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>เงินลงทุน</title>
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
                        <li class="breadcrumb-item active">เงินลงทุน</li>
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

            <!-- stock -->
            <div id="company_status">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <div class="card">
                            <div class="header">
                                <div class="header-status">
                                    <h3>เงินลงทุน</h3>
                                </div>
                                <ul class="header-dropdown m-r--5">
                                    <a href="stock_AddEdit.php" class="btn btn-raised btn-default waves-effect">
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
                                            <th>เลขทะเบียนนิติบุคคล</th>
                                            <th>บริษัทเจ้าของหุ้น</th>
                                            <th>กลุ่มธุรกิจหลัก</th>
                                            <th>ทุนจดทะเบียน (บาท)</th>
                                            <th>จำนวนหุ้นทั้งหมด</th>
                                            <th>จำนวนหุ้นที่ถือ</th>
                                            <th>มูลค่า (บาท)</th>
                                            <th>สัดส่วน</th>
                                            <th>มูลค่าหุ้นละ</th>
                                            <th>มูลค่าหุ้นที่ชำระแล้ว</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>1</td>
                                            <td>15/1/2564</td>
                                            <td>0103564000029</td>
                                            <td>หจ.แอล.พี.เจ. คลาวด์</td>
                                            <td>บริการพื้นที่สำหรับจัดเก็บข้อมูลอิเล็กทรอนิคส์</td>
                                            <td>30,000,000.00</td>
                                            <td>30,000,000.00</td>
                                            <td>30,000,000.00</td>
                                            <td>30,000,000.00</td>
                                            <td>100</td>
                                            <td>10.000</td>
                                            <td>30,000,000.00</td>
                                            <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>2</td>
                                            <td>15/1/2564</td>
                                            <td>0505564001589</td>
                                            <td>บจ.สตาร์ วีซ่า อินเตอร์เนชั่นแนล เซอร์วิส จำกัด</td>
                                            <td>บริการขอวีซ่า</td>
                                            <td>10,000,000.00</td>
                                            <td>10,000,000.00</td>
                                            <td>5,000,000.00</td>
                                            <td>5,000,000.00</td>
                                            <td>50</td>
                                            <td>10.000</td>
                                            <td>5,000,000.00</td>
                                            <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>3</td>
                                            <td>15/1/2564</td>
                                            <td>0505564001619</td>
                                            <td>บจ.มิลเลี่ยนกรุ๊ป คอนซัลท์ จำกัด</td>
                                            <td>บริการขอวีซ่า</td>
                                            <td>50,000,000.00</td>
                                            <td>50,000,000.00</td>
                                            <td>50,000,000.00</td>
                                            <td>20,000,000.00</td>
                                            <td>30</td>
                                            <td>10.000</td>
                                            <td>20,000,000.00</td>
                                            <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        


                                    </tbody>
                                </table>
                            </div>
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