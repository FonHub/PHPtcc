<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ใบหุ้น</title>
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
                    <h2>ใบหุ้น
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="../view/index.php"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="../view/stock.php"></a> ทะเบียนหุ้น</li>
                        <li class="breadcrumb-item active">ใบหุ้น</li>
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
            <!-- stock detail-->
            <div id="company_detail" class="detail__box">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#StockNo">ใบหุ้น</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Tab panes 3-->
                                    <div role="tabpanel" class="tab-pane in active" id="StockNo">
                                        <div class="body table-responsive company-list">
                                            <!-- table -->
                                            <div class="body table-responsive stock_list">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>เข้าเป็นผู้ถือหุ้นโดย</th>
                                                            <th>ใบหุ้นลงวันที่</th>
                                                            <th>ผู้ถือหุ้น</th>
                                                            <th>ใบหุ้นเลขที่</th>
                                                            <th>มูลค่าหุ้น</th>
                                                            <th>หุ้นหมายเลข จาก-ถึง</th>
                                                            <th>จำนวนหุ้น</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>เพิ่มทุน</td> <!-- เข้าเป็นผู้ถือหุ้นโดย -->
                                                            <td>18 ก.ย. 56</td><!-- ใบหุ้นลงวันที่ -->
                                                            <td>จองหุ้น/เพิ่มทุน </td><!-- ผู้ถือหุ้น -->
                                                            <td>15</td><!-- ใบหุ้นเลขที่ -->
                                                            <td>10.00</td><!-- มูลค่าหุ้น -->
                                                            <td>118400007-184200004</td><!-- หุ้นหมายเลข จาก-ถึง -->
                                                            <td>65,799,996</th><!-- จำนวนหุ้น -->
                                                            <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>รับโอน</td> <!-- เข้าเป็นผู้ถือหุ้นโดย -->
                                                            <td>22 ธ.ค. 59</td><!-- ใบหุ้นลงวันที่ -->
                                                            <td>บจ.ซีเอ็นที สตาร์ จำกัด</td><!-- ผู้ถือหุ้น -->
                                                            <td>1</td><!-- ใบหุ้นเลขที่ -->
                                                            <td>10.00</td><!-- มูลค่าหุ้น -->
                                                            <td>1-9993</td><!-- หุ้นหมายเลข จาก-ถึง -->
                                                            <td>9,993</th><!-- จำนวนหุ้น -->
                                                            <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>หุ้นเหลือ</td> <!-- เข้าเป็นผู้ถือหุ้นโดย -->
                                                            <td>22 ธ.ค. 59</td><!-- ใบหุ้นลงวันที่ -->
                                                            <td>หุ้นคงเหลือ</td><!-- ผู้ถือหุ้น -->
                                                            <td>18</td><!-- ใบหุ้นเลขที่ -->
                                                            <td>10.00</td><!-- มูลค่าหุ้น -->
                                                            <td>100-9993</td><!-- หุ้นหมายเลข จาก-ถึง -->
                                                            <td>9,894</th><!-- จำนวนหุ้น -->
                                                            <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="card">
                                                        <div class="header">
                                                            <h2>ผู้ถือขาด</h2>
                                                        </div>
                                                        <!-- table -->
                                                        <div class="body table-responsive stock_list">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ผู้โอน</th>
                                                                        <th>ใบหุ้นเดิมเลขที่</th>
                                                                        <th>หุ้นหมายเลข จาก-ถึง</th>
                                                                        <th>จำนวนหุ้น</th>
                                                                        <th>การรับโอน</th>
                                                                        <th>วันที่โอน</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>นาย วิชัย วชิรพงศ์</td> <!-- ผู้โอน -->
                                                                        <td>2</td><!-- ใบหุ้นเดิมเลขที่ -->
                                                                        <td>1-9994</td><!-- หุ้นหมายเลข จาก-ถึง -->
                                                                        <td>1</td><!-- จำนวนหุ้น -->
                                                                        <td>ยกเลิกหุ้น/ลดทุน</td><!-- การรับโอน-->
                                                                        <td>2 พ.ย. 60</th><!-- วันที่โอน -->
                                                                    </tr>
                                                                    <tr>
                                                                        <td>นาง มณีรัตน์ งามเรืองพงศ์</td> <!-- ผู้โอน -->
                                                                        <td>3</td><!-- ใบหุ้นเดิมเลขที่ -->
                                                                        <td>1-9995</td><!-- หุ้นหมายเลข จาก-ถึง -->
                                                                        <td>1</td><!-- จำนวนหุ้น -->
                                                                        <td>ยกเลิกหุ้น/ลดทุน</td><!-- การรับโอน-->
                                                                        <td>2 พ.ย. 60</th><!-- วันที่โอน -->
                                                                    </tr>
                                                                    <tr>
                                                                        <td>บจ.ซีเอ็นที สตาร์ จำกัด</td> <!-- ผู้โอน -->
                                                                        <td>13</td><!-- ใบหุ้นเดิมเลขที่ -->
                                                                        <td>9996-9998</td><!-- หุ้นหมายเลข จาก-ถึง -->
                                                                        <td>3</td><!-- จำนวนหุ้น -->
                                                                        <td>ยกเลิกใบหุ้น</td><!-- การรับโอน-->
                                                                        <td>4 ส.ค. 60</th><!-- วันที่โอน -->
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