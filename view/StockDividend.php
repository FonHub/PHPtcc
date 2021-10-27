<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>เงินปันผล</title>
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
                    <h2>เงินปันผล
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="../view/index.php"><i class="zmdi zmdi-home"></i> หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="../view/stock.php"></a> ทะเบียนหุ้น</li>
                        <li class="breadcrumb-item active">เงินปันผล</li>
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
                                    <div class="btn-control text-align">
                                        <button type="button" class="btn btn-raised btn-default __redvitality waves-effect">ค้นหา</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- stock -->
            <!-- stock detail-->
            <div id="company_detail" class="detail__box">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Dividend">เงินปันผล</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Tab panes 5-->
                                    <div role="tabpanel" class="tab-pane in active" id="Dividend">
                                        <div class="body table-responsive company-list">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th style="width:60px;">#</th>
                                                        <th>เลขทะเบียนนิติบุคคล</th>
                                                        <th>บริษัทเจ้าของหุ้น</th>
                                                        <th>กลุ่มธุรกิจหลัก</th>
                                                        <th>เงินปันผล</th>
                                                        <th>วันที่ประกาศ</th>
                                                        <th>วันที่ปันผล</th>
                                                        <th>วันที่ส่งเงิน</th>
                                                        <th>วันที่ชำระเงิน</th>
                                                        <th>วันกำหนดจ่ายเงิน</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="data in dataTableShow" :key="data.id">
                                                        <td>1</td>
                                                        <td>0103564000029</td>
                                                        <td>หจ.แอล.พี.เจ. คลาวด์</td>
                                                        <td>บริการพื้นที่จัดเก็บข้อมูลอิเล็กทรอนิคส์</td>
                                                        <td>1,000,000.00</td>
                                                        <td>1/10/2564</td>
                                                        <td>1/11/2564</td>
                                                        <td>1/11/2564</td>
                                                        <td>1/1/2565</td>
                                                        <td>1/1/2565</td>
                                                        <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                                    </tr>
                                                    <tr v-for="data in dataTableShow" :key="data.id">
                                                        <td>2</td>
                                                        <td>0505564001589</td>
                                                        <td>บจ.สตาร์ วีซ่า อินเตอร์เนชั่นแนล เซอร์วิส จำกัด</td>
                                                        <td>บริการขอวีซ่า</td>
                                                        <td>100,000.00</td>
                                                        <td>1/5/2560</td>
                                                        <td>1/6/2560</td>
                                                        <td>1/7/2560</td>
                                                        <td>1/8/2560</td>
                                                        <td>1/8/2560</td>
                                                        <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                                    </tr>
                                                    <tr v-for="data in dataTableShow" :key="data.id">
                                                        <td>3</td>
                                                        <td>0505564001619</td>
                                                        <td>บจ.มิลเลี่ยนกรุ๊ป คอนซัลท์ จำกัด</td>
                                                        <td>บริการขอวีซ่า</td>
                                                        <td>200,000.00</td>
                                                        <td>1/5/2560</td>
                                                        <td>1/6/2560</td>
                                                        <td>1/7/2560</td>
                                                        <td>1/8/2560</td>
                                                        <td>1/8/2560</td>
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
                </div>
            </div>
            <!-- //stock -->
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