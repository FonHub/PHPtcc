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
                    <h2>เงินลงทุน
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="../view/index.php"><i class="zmdi zmdi-home"></i> หน้าหลัก</a></li>
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

            <!-- stock -->
            <!-- stock detail-->
            <div id="company_detail" class="detail__box">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Investment">เงินลงทุน</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Tab panes 5-->
                                    <div role="tabpanel" class="tab-pane in active" id="Investment">
                                        <div class="body table-responsive company-list">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>วันที่</th>
                                                        <th>เลขทะเบียนนิติบุคคล</th>
                                                        <th>บริษัทเจ้าของหุ้น</th>
                                                        <th>ทุนจดทะเบียน(จัดตั้งบริษัท)</th>
                                                        <th>ทุนจดทะเบียน(ปัจจุบัน)</th>
                                                        <th>จำนวนหุ้นทั้งหมด</th>
                                                        <th>มูลค่าหุ้นละ</th>
                                                        <th>เพิ่มทุน</th>
                                                        <th>ลดทุน</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>18 ก.ย. 56</td><!-- ใบหุ้นลงวันที่-->
                                                        <td>0103564000029</td>
                                                        <td>บจ. ชิวา1982 จำกัด</td><!-- บริษัท-->
                                                        <td>30,000,000.00</td><!-- ทุนจดทะเบียน(จัดตั้งบริษัท)-->
                                                        <td>60,000,000.00</td><!-- ทุนจดทะเบียน(ปัจจุบัน)-->
                                                        <td>15,000,000.00</td><!-- จำนวนหุ้นทั้งหมด-->
                                                        <td>10.00</td><!-- มูลค่าหุ้นละ -->
                                                        <td>
                                                            <p class="font-bold col-teal">+15,000,000.00</p>
                                                        </td><!-- เพิ่มมูลค่า (บาท)-->
                                                        <td>-</td><!-- ลดทุน (บาท)-->
                                                        <td><a href="IncreaseHistory01.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">visibility</i></button></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1 ก.ย. 56</td><!-- ใบหุ้นลงวันที่-->
                                                        <td>บจ.ซีเอ็นที สตาร์ จำกัด</td><!-- บริษัท-->
                                                        <td>0103564000029</td>
                                                        <td>30,000,000.00</td><!-- ทุนจดทะเบียน(จัดตั้งบริษัท)-->
                                                        <td>40,000,000.00</td><!-- ทุนจดทะเบียน(ปัจจุบัน)-->
                                                        <td>10,000,000.00</td><!-- จำนวนหุ้นทั้งหมด-->
                                                        <td>10.00</td><!-- มูลค่าหุ้นละ -->
                                                        <td>-</td><!-- เพิ่มมูลค่า (บาท)-->
                                                        <td>
                                                            <p class="font-bold col-pink">-10,000,000.00</p>
                                                        </td><!-- ลดมูลค่า (บาท) -->
                                                        <td><a href="ReductionHistory01.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">visibility</i></button></a></td>
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