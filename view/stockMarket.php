<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ข้อมูลหุ้นตลาด</title>
    <?php include('../view/linkhead.php'); ?>
    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" />
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
                    <h2>ข้อมูลหุ้นตลาด
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a></li>
                        <li class="breadcrumb-item active">ข้อมูลหุ้นตลาด</li>
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
                                                        <option>จำนำ</option>
                                                        <option>ปลอดจำนำ</option>
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

            <!-- stockMarket -->
            <div id="company_status">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <div class="card">
                            <div class="header">
                                <div class="header-status">
                                    <h3>รายการทะบียนหุ้นตลาดเพิ่มล่าสุดทั้งหมด</h3>
                                    <span>302,240</span>
                                    <!--<span>{{ count }}</span>-->
                                </div>
                                <ul class="header-dropdown m-r--5">
                                    <a href="stockMarketAddEdit.php" class="btn btn-raised btn-default waves-effect">
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
                                            <th>ผู้ถือหุ้น</th>
                                            <th>เลขทะเบียนนิติบุคคล</th>
                                            <th>ผู้รับจำนำ</th>
                                            <th>กลุ่มธุรกิจหลัก</th>
                                            <th>หุ้นทั้งหมด</th>
                                            <th>มูลค่าหุ้นละ</th>
                                            <th>มูลค่ารวมทั้งหมด</th>
                                            <th>สถานะ</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>1</td>
                                            <td>15 เม.ย. 2564</td>
                                            <td>หจ.แอล.พี.เจ. คลาวด์</td>
                                            <td>0103564000029</td>
                                            <td>บจ.สหมิติ จำกัด</td>
                                            <td>บริการพื้นที่สำหรับจัดเก็บข้อมูลอิเล็กทรอนิคส์</td>
                                            <td>20,500,000</td>
                                            <td>10.000</td>
                                            <td>200,500,000</td>
                                            <td>จำนำ</td>
                                            <td><a href="stockMarketAddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>2</td>
                                            <td>15 เม.ย. 2564</td>
                                            <td>บจ.สตาร์ วีซ่า อินเตอร์เนชั่นแนล เซอร์วิส จำกัด</td>
                                            <td>0505564001589</td>
                                            <td>บจ.ช้างคู่ช้อป จำกัด</td>
                                            <td>บริการขอวีซ่า</td>
                                            <td>20,500,000</td>
                                            <td>10.000</td>
                                            <td>200,500,000</td>
                                            <td>จำนำ</td>
                                            <td><a href="stockMarketAddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>3</td>
                                            <td>15 เม.ย. 2564</td>
                                            <td>บจ.มิลเลี่ยนกรุ๊ป คอนซัลท์ จำกัด</td>
                                            <td>0505564001619</td>
                                            <td>บจ.ทรี ที พลัส แพ็ค จำกัด</td>
                                            <td>บริการขอวีซ่า</td>
                                            <td>50,000,000</td>
                                            <td>10.000</td>
                                            <td>50,000,000</td>
                                            <td>ปลอดจำนำ</td>
                                            <td><a href="stockMarketAddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>4</td>
                                            <td>15 เม.ย. 2564</td>
                                            <td>บจ.บีบี เบิร์ด กรุ๊ป จำกัด</td>
                                            <td>0505564001635</td>
                                            <td>บจ.ธารทอง โกลบอล จำกัด</td>
                                            <td>จำหน่ายผลิตภัณฑ์อาหารเสริมทุกชนิด</td>
                                            <td>50,000,000</td>
                                            <td>10.000</td>
                                            <td>50,000,000</td>
                                            <td>ปลอดจำนำ</td>
                                            <td><a href="stockMarketAddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>5</td>
                                            <td>15 เม.ย. 2564</td>
                                            <td>บจ.ฟาร์มเกษตร ทีทีที จำกัด</td>
                                            <td>0505564001643</td>
                                            <td>บจ.อินเตอร์ เรียลเอสเตท จำกัด</td>
                                            <td>จำหน่ายผลิตภัณฑ์อาหารเสริมทุกชนิด</td>
                                            <td>50,000,000</td>
                                            <td>10.000</td>
                                            <td>50,000,000</td>
                                            <td>จำนำ</td>
                                            <td><a href="stockMarketAddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- footer -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>

</body>

</html>