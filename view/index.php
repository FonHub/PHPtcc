<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>TCC GROUP</title>
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
                    <h2>
                        หน้าหลัก
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item active">หน้าแรก</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- Person -->
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="header-status">
                                <h3>รายการทะบียนบุคคลเพิ่มล่าสุดทั้งหมด</h3>
                                <span>302,240</span>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <a href="PersonAddEdit.php" class="btn btn-raised btn-default waves-effect">
                                    <i class="material-icons">add</i>
                                </a>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="zmdi zmdi-more-vert"></i>
                                    </a>
                                    <ul class="dropdown-menu slideUp">
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
            <!-- company -->
            <div id="company_status">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <div class="card">
                            <div class="header">
                                <div class="header-status">
                                    <h3>รายการทะบียนบริษัทเพิ่มล่าสุดทั้งหมด</h3>
                                    <span>302,240</span>
                                    <!--<span>{{ count }}</span>-->
                                </div>
                                <ul class="header-dropdown m-r--5">
                                    <a href="company_AddEdit.php" class="btn btn-raised btn-default waves-effect">
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
                                            <th>ชื่อบริษัทภาษาไทย</th>
                                            <th>ชื่อบริษัทภาษาอังกฤษ</th>
                                            <th>เลขทะเบียนนิติบุคคล</th>
                                            <th>กลุ่มธุรกิจหลัก</th>
                                            <th>สถานะ</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>1</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม</td>
                                            <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม</td>
                                            <td>0102564000010</td>
                                            <td>ภัตตาคารและบาร์</td>
                                            <td>นายทะเบียน</td>
                                            <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>2</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>หจ.เดอะ ไลอ้อน มิลค์ที</td>
                                            <td>หจ.เดอะ ไลอ้อน มิลค์ที</td>
                                            <td>0103564000011</td>
                                            <td>ประกอบกิจการจำน่ายอาหารและเครื่องดื่ม ทุกชนิด</td>
                                            <td>นายทะเบียน</td>
                                            <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>3</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>หจ.เกตเวย์ แอคเคาน์ติ้ง</td>
                                            <td>หจ.เกตเวย์ แอคเคาน์ติ้ง</td>
                                            <td>0103564001734</td>
                                            <td>กิจกรรมเกี่ยวกับบัญชีการทำบัญชีและการตรวจสอบบัญชี การให้คำปรึกษาด้านภาษี</td>
                                            <td>นายทะเบียน</td>
                                            <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>4</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>บจ.เพชรดีไซน์ เฟอร์นิเจอร์ จำกัด</td>
                                            <td>บจ.เพชรดีไซน์ เฟอร์นิเจอร์ จำกัด</td>
                                            <td>0105564000152</td>
                                            <td>ประกอบกิจการผลิตเฟอร์นิเจอร์ไม้ชนิดใช้ในครัวเรือน</td>
                                            <td>นายทะเบียน</td>
                                            <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                        <tr v-for="data in dataTableShow" :key="data.id">
                                            <td>5</td>
                                            <td>12 เม.ย.2564</td>
                                            <td>บจ.ซีเอ็นที สตาร์ จำกัด</td>
                                            <td>บจ.ซีเอ็นที สตาร์ จำกัด</td>
                                            <td>0105564002171</td>
                                            <td>ประกอบกิจการนำเข้าและจำหน่ายสินค้า เช่น แผงโซล่าเซลล์ และอื่นๆ ภายในประเทศ</td>
                                            <td>นายทะเบียน</td>
                                            <td><a href="company_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- stock -->
            <div class="row clearfix">
                <div class="col-sm-12 col-md-12 col-lg-12">

                    <div class="card">
                        <div class="header">
                            <div class="header-status">
                                <h3>รายการทะบียนหุ้นเพิ่มล่าสุดทั้งหมด</h3>
                                <span>302,240</span>
                                <!--<span>{{ count }}</span>-->
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
                                        <th>ผู้ถือหุ้น</th>
                                        <th>เลขทะเบียนนิติบุคคล</th>
                                        <th>กลุ่มธุรกิจหลัก</th>
                                        <th>หุ้นทั้งหมด</th>
                                        <th>มูลค่าหุ้นละ</th>
                                        <th>มูลค่ารวมทั้งหมด</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="data in dataTableShow" :key="data.id">
                                        <td>1</td>
                                        <td>15 เม.ย. 2564</td>
                                        <td>หจ.แอล.พี.เจ. คลาวด์</td>
                                        <td>0103564000029</td>
                                        <td>บริการพื้นที่สำหรับจัดเก็บข้อมูลอิเล็กทรอนิคส์</td>
                                        <td>2,500</td>
                                        <td>10</td>
                                        <td>25,000</td>
                                        <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                    </tr>
                                    <tr v-for="data in dataTableShow" :key="data.id">
                                        <td>2</td>
                                        <td>15 เม.ย. 2564</td>
                                        <td>บจ.สตาร์ วีซ่า อินเตอร์เนชั่นแนล เซอร์วิส จำกัด</td>
                                        <td>0505564001589</td>
                                        <td>บริการขอวีซ่า</td>
                                        <td>200,000</td>
                                        <td>10</td>
                                        <td>2,000,000</td>
                                        <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                    </tr>
                                    <tr v-for="data in dataTableShow" :key="data.id">
                                        <td>3</td>
                                        <td>15 เม.ย. 2564</td>
                                        <td>บจ.มิลเลี่ยนกรุ๊ป คอนซัลท์ จำกัด</td>
                                        <td>0505564001619</td>
                                        <td>บริการขอวีซ่า</td>
                                        <td>50,000</td>
                                        <td>10</td>
                                        <td>500,000</td>
                                        <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                    </tr>
                                    <tr v-for="data in dataTableShow" :key="data.id">
                                        <td>4</td>
                                        <td>15 เม.ย. 2564</td>
                                        <td>บจ.บีบี เบิร์ด กรุ๊ป จำกัด</td>
                                        <td>0505564001635</td>
                                        <td>จำหน่ายผลิตภัณฑ์อาหารเสริมทุกชนิด</td>
                                        <td>50,000</td>
                                        <td>10</td>
                                        <td>500,000</td>
                                        <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                    </tr>
                                    <tr v-for="data in dataTableShow" :key="data.id">
                                        <td>5</td>
                                        <td>15 เม.ย. 2564</td>
                                        <td>บจ.ฟาร์มเกษตร ทีทีที จำกัด</td>
                                        <td>0505564001643</td>
                                        <td>จำหน่ายผลิตภัณฑ์อาหารเสริมทุกชนิด</td>
                                        <td>50,000</td>
                                        <td>10</td>
                                        <td>500,000</td>
                                        <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- stock market-->
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
                                        <th>เจ้าของหุ้น</th>
                                        <th>สถานะหุ้นที่ลงทุน</th>
                                        <th>จำนวนหุ้นจดทะเบียน</th>
                                        <th>มูลค่าหุ้นละ</th>
                                        <th>ตลาด</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="data in dataTableShow" :key="data.id">
                                        <td>1</td>
                                        <td>15 เม.ย. 2564</td>
                                        <td>หจ.แอล.พี.เจ. คลาวด์</td>
                                        <td>0103564000029</td>
                                        <td>บริษัทอยู่ในตลาดหลักทรัพย์</td>
                                        <td>จำนำ</td>
                                        <td>20,500,000</td>
                                        <td>10.000</td>
                                        <td>ไทย</td>
                                        <td><a href="stockMarketAddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                    </tr>
                                    <tr v-for="data in dataTableShow" :key="data.id">
                                        <td>2</td>
                                        <td>15 เม.ย. 2564</td>
                                        <td>บจ.สตาร์ วีซ่า อินเตอร์เนชั่นแนล เซอร์วิส จำกัด</td>
                                        <td>0505564001589</td>
                                        <td>บริษัทอยู่ในตลาดหลักทรัพย์</td>
                                        <td>จำนำ</td>
                                        <td>20,500,000</td>
                                        <td>10.000</td>
                                        <td>ไทย</td>
                                        <td><a href="stockMarketAddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                    </tr>
                                    <tr v-for="data in dataTableShow" :key="data.id">
                                        <td>3</td>
                                        <td>15 เม.ย. 2564</td>
                                        <td>บจ.มิลเลี่ยนกรุ๊ป คอนซัลท์ จำกัด</td>
                                        <td>0505564001619</td>
                                        <td>บริษัทอยู่ในตลาดหลักทรัพย์</td>
                                        <td>ปลอดจำนำ</td>
                                        <td>50,000,000</td>
                                        <td>10.000</td>
                                        <td>สิงคโปร์</td>
                                        <td><a href="stockMarketAddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                    </tr>
                                    <tr v-for="data in dataTableShow" :key="data.id">
                                        <td>4</td>
                                        <td>15 เม.ย. 2564</td>
                                        <td>บจ.บีบี เบิร์ด กรุ๊ป จำกัด</td>
                                        <td>0505564001635</td>
                                        <td>บริษัทนอกกลุ่ม</td>
                                        <td>ปลอดจำนำ</td>
                                        <td>50,000,000</td>
                                        <td>10.000</td>
                                        <td>สิงคโปร์</td>
                                        <td><a href="stockMarketAddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                    </tr>
                                    <tr v-for="data in dataTableShow" :key="data.id">
                                        <td>5</td>
                                        <td>15 เม.ย. 2564</td>
                                        <td>บจ.ฟาร์มเกษตร ทีทีที จำกัด</td>
                                        <td>0505564001643</td>
                                        <td>บริษัทนอกกลุ่ม</td>
                                        <td>ปลอดจำนำ</td>
                                        <td>50,000,000</td>
                                        <td>10.000</td>
                                        <td>สิงคโปร์</td>
                                        <td><a href="stockMarketAddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                                    </tr>


                                </tbody>
                            </table>
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