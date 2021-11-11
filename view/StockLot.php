<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ผู้ถือหุ้น</title>
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
                    <h2>ผู้ถือหุ้น
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="../view/index.php"><i class="zmdi zmdi-home"></i> หน้าหลัก</a></li>
                        <li class="breadcrumb-item"><a href="../view/stock.php"></a> ทะเบียนหุ้น</li>
                        <li class="breadcrumb-item active">ผู้ถือหุ้น</li>
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
            <!-- stock detail-->
            <div id="company_detail" class="detail__box">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Lot">เจ้าของหุ้น</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane in active" id="Lot">
                                        <div class="body table-responsive company-list">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th style="width:60px;">#</th>
                                                        <th>วันประชุม</th>
                                                        <th>นิติบุคคล/บุคคล</th>
                                                        <th>ชื่อบริษัทภาษาไทย</th>
                                                        <th>เลขทะเบียนนิติบุคคล</th>
                                                        <th>กลุ่มธุรกิจหลัก</th>
                                                        <th>ใบหุ้นลงวันที่</th>
                                                        <th>ใบหุ้นเลขที่</th>
                                                        <th>สถานะหุ้น</th>
                                                        <th>จำนวนหุ้น</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="data in dataTableShow" :key="data.id">
                                                        <td>1</td>
                                                        <td>12 เม.ย.2564</td>
                                                        <td>บจ.ภัทโสภณ จำกัด</td>
                                                        <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม</td>
                                                        <td>0102564000010</td>
                                                        <td>ภัตตาคารและบาร์</td>
                                                        <td>1/10/2564</td>
                                                        <td>1</td>
                                                        <td>จองหุ้น</td>
                                                        <td>2,500</td>
                                                        <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                                    </tr>
                                                    <tr v-for="data in dataTableShow" :key="data.id">
                                                        <td>2</td>
                                                        <td>12 เม.ย.2564</td>
                                                        <td>นาย วิชัย วชิรพงศ์</td>
                                                        <td>หจ.เดอะ ไลอ้อน มิลค์ที</td>
                                                        <td>0103564000011</td>
                                                        <td>จำน่ายอาหารและเครื่องดื่มทุกชนิด</td>
                                                        <td>1/10/2564</td>
                                                        <td>2</td>
                                                        <td>จองหุ้น</td>
                                                        <td>1,000</td>
                                                        <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                                    </tr>
                                                    <tr v-for="data in dataTableShow" :key="data.id">
                                                        <td>3</td>
                                                        <td>12 เม.ย.2564</td>
                                                        <td>บจ.พรอสเพอรัส วิน 168 จำกัด</td>
                                                        <td>หจ.เกตเวย์ แอคเคาน์ติ้ง</td>
                                                        <td>0103564001734</td>
                                                        <td>การทำบัญชีและการตรวจสอบบัญชี</td>
                                                        <td>1/10/2564</td>
                                                        <td>3</td>
                                                        <td>รับโอน</td>
                                                        <td>1,000</td>
                                                        <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                                    </tr>
                                                    <tr v-for="data in dataTableShow" :key="data.id">
                                                        <td>4</td>
                                                        <td>12 เม.ย.2564</td>
                                                        <td>บจ.ณัฐปภัสร์ 59 จำกัด</td>
                                                        <td>บจ.เพชรดีไซน์ เฟอร์นิเจอร์ จำกัด</td>
                                                        <td>0105564000152</td>
                                                        <td>ผลิตเฟอร์นิเจอร์ไม้ในครัวเรือน</td>
                                                        <td>1/10/2564</td>
                                                        <td>4</td>
                                                        <td>รับโอน</td>
                                                        <td>1,000</td>
                                                        <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                                    </tr>
                                                    <tr v-for="data in dataTableShow" :key="data.id">
                                                        <td>5</td>
                                                        <td>12 เม.ย.2564</td>
                                                        <td>บจ.วันดีดีโก จำกัด</td>
                                                        <td>บจ.ซีเอ็นที สตาร์ จำกัด</td>
                                                        <td>0105564002171</td>
                                                        <td>นำเข้าและจำหน่ายสินค้า</td>
                                                        <td>1/10/2564</td>
                                                        <td>5</td>
                                                        <td>จองหุ้น</td>
                                                        <td>2,500</td>
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