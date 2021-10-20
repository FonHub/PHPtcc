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




    <!-- Main Content  -->
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>
                        Master
                        <small class="text-muted">Welcome to TCC Application</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item"><a href="/stock"></a> Master</li>
                        <li class="breadcrumb-item active">เพิ่มข้อมูล</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- main info-->
            <section class="sec-maininfo">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div id="company_detail">

                                    <!-- form Company -->
                                    <form class="form-horizontal __docLocation">
                                        <div class="block-header" style="padding-left: 0">
                                            <h2>Master กลุ่มบริษัท</h2>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>นิติบุคคล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="คำนำหน้าทะเบียนธุรกิจ">
                                                                <option>ห้างหุ้นส่วนสามัญนิติบุคคล (หสน.)</option>
                                                                <option>ห้างหุ้นส่วนจำกัด (หจก.)</option>
                                                                <option>บริษัทจำกัด (บจ.)</option>
                                                                <option>บริษัทมหาชนจำกัด (บมจ.)</option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>ประเภทประกอบการ (Sector)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="Sector">
                                                                <option>เกษตรและอุตสาหกรรมอาหาร</option>
                                                                <option>สินค้าอุปโภคบริโภค</option>
                                                                <option>ธุรกิจการเงิน</option>
                                                                <option>สินค้าอุตสาหกรรม </option>
                                                                <option>อสังหาริมทรัพย์และก่อสร้าง</option>
                                                                <option>ทรัพยากร</option>
                                                                <option>บริการ</option>
                                                                <option>เทคโนโลยี </option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจหลัก (Group)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="Group">
                                                                <option>ไพรเวท คอมพานี</option>
                                                                <option>ไทยเบฟเวอเรจ</option>
                                                                <option>อาคเนย์</option>
                                                                <option>แอสเสท เวิรด์ คอร์ป</option>
                                                                <option>เบอร์ลี่ ยุคเกอร์</option>
                                                                <option>อื่นๆ</option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มธุรกิจย่อย (SupGroup)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="กลุ่มบริษัทลงทุน">
                                                                <option>กลุ่มสิริวนา</option>
                                                                <option>กลุ่มทีซีซี คอร์ปอเรชั่น</option>
                                                                <option>กลุ่มอาคเนย์ แมเนจเม้นท์</option>
                                                                <option>กลุ่มอาคเนย์ แมเนจเม้นท์</option>
                                                                <option>กลุ่มถือหุ้นแอสเสท เวิรด์ คอร์ป</option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มทีซีซี แลนด์">
                                                                <option>กลุ่มทีซีซี แลนด์ ทีซีซี เอดับบลิว</option>
                                                                <option>กลุ่มพรรณธิอร</option>
                                                                <option>กลุ่มทีซีซี อินเตอร์เทรด</option>
                                                                <option>กลุ่มแลนด์แบงค์</option>
                                                                <option>กลุ่มบริหารเพาะปลูก </option>
                                                                <option>กลุ่มโรงแรม ช็อปปิ้ง อพาร์ตเม้นท์ </option>
                                                                <option>กลุ่มโรงแรมต่างประเทศ </option>
                                                                <option>กลุ่มคริสตอลลา </option>
                                                                <option>กลุ่มธุรกิจบริการ</option>
                                                                <option>กลุ่มโรงงานอุตสาหกรรมกระดาษบางปะอิน </option>
                                                                <option>กลุ่มอาคเนย์ร่วมทุน </option>
                                                                <option>กลุ่มอื่น </option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มบริษัทบุคคล">
                                                                <option>กลุ่ม </option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มทีซีซี แอสเซ็ทส์">
                                                                <option>กลุ่มศูนย์ประชุม </option>
                                                                <option>กลุ่มสามย่าน มิตรทาวน์ </option>
                                                                <option>กลุ่มเดอะ ปาร์ค </option>
                                                                <option>กลุ่มวัน แบงค็อก </option>
                                                                <option>กลุ่มลงทุน </option>
                                                                <option>กลุ่มโครงการรัชดา </option>
                                                                <option>กลุ่มเทคโนโลยี </option>
                                                                <option>กลุ่มบริหารโรงแรม </option>
                                                                <option>กลุ่มอื่นๆ </option>
                                                            </optgroup>
                                                            <optgroup label="อื่นๆ">
                                                                <option>กลุ่ม </option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มย่อยระดับที่ 1 </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="กลุ่มแลนด์แบงค์">
                                                                <option>กลุ่มวัฒน์พัฒน์ </option>
                                                                <option>กลุ่มทรัพย์กทม. ปริมณฑล และ ภาคเหนือ </option>
                                                                <option>กลุ่มทรัพย์เพาะปลูก</option>
                                                                <option>กลุ่มทรัพย์ต่างจังหวัดปล่อยเช่า</option>
                                                                <option>กลุ่มทีซีซี ภูมิพัฒน์</option>
                                                                <option>กลุ่มแลนด์แบงค์สนามกอล์ฟ</option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มบริหารเพาะปลูก">
                                                                <option>กลุ่มเกษตรบริษัทแม่ </option>
                                                                <option>กลุ่มบริหารจัดการ-เพาะปลูก </option>
                                                                <option>กลุ่มบริหารจัดการ-ปล่อยเช่า </option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มโรงแรม ช็อปปิ้ง อพาร์ตเม้นท์ ">
                                                                <option>กลุ่มโรงแรมในประเทศ </option>
                                                                <option>กลุ่มศูนย์การค้าและตลาด </option>
                                                                <option>กลุ่มพัฒนาที่อยู่อาศัย</option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มคริสตอลลา ">
                                                                <option>กลุ่มคริสตอลลาบริษัทแม่ </option>
                                                                <option>กลุ่มโรงงานน้ำตาล </option>
                                                                <option>กลุ่มโรงไฟฟ้า</option>
                                                                <option>กลุ่มปุ๋ย</option>
                                                                <option>กลุ่มไทยแอลกอฮอล์ </option>
                                                                <option>กลุ่มอื่น</option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>กลุ่มย่อยระดับที่ 2</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="กลุ่มวัฒน์พัฒน์">
                                                                <option>กลุ่มบริษัทที่ดิน</option>
                                                                <option>กลุ่มบริหารจัดการ</option>
                                                                <option>กลุ่มบริษัทลงทุนและอื่นๆ </option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มทรัพย์กทม. ปริมณฑล และ ภาคเหนือ ">
                                                                <option>กลุ่มทรัพย์กทม. ปริมณฑล และ ภาคเหนือบริษัทแม่ </option>
                                                                <option>กลุ่มบริหารทรัพย์สินภาคเหนือ</option>
                                                                <option>กลุ่มบริหารทรัพย์สินรอบบ้าน</option>
                                                                <option>กลุ่มบริหารทรัพย์สินกรุงเทพฯและปริมณฑล</option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มทรัพย์เพาะปลูก">
                                                                <option>กลุ่มทรัพย์เพาะปลูกบริษัทแม่ </option>
                                                                <option>กลุ่มที่ดินยางพารา </option>
                                                                <option>กลุ่มที่ดินยางพาราและปล่อยเช่า </option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มทรัพย์ต่างจังหวัดปล่อยเช่า">
                                                                <option>กลุ่มทรัพย์ต่างจังหวัดปล่อยเช่าบริษัทแม่ </option>
                                                                <option>กลุ่มที่ดินปล่อยเช่าพื้นที่ 1</option>
                                                                <option>กลุ่มที่ดินปล่อยเช่าพื้นที่ 2</option>
                                                                <option>กลุ่มที่ดินปล่อยเช่าพื้นที่ 3</option>
                                                                <option>กลุ่มที่ดินปล่อยเช่าพื้นที่ 4 </option>
                                                                <option>กลุ่มที่ดินปล่อยเช่าพื้นที่ 5 </option>
                                                                <option>กลุ่มที่ดินปล่อยเช่าพื้นที่ 6 </option>
                                                                <option>กลุ่มที่ดินปล่อยเช่าพื้นที่ 7 </option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มทีซีซี ภูมิพัฒน์">
                                                                <option>กลุ่มทีซีซี ภูมิพัฒน์บริษัทแม่ </option>
                                                                <option>กลุ่มโครงการเขาใหญ่ </option>
                                                                <option>กลุ่มโครงการบางไทร </option>
                                                                <option>กลุ่มโครงการนวมินทร์ </option>
                                                                <option>กลุ่มโครงการชะอำ </option>
                                                                <option>กลุ่มโครงการเขาค้อ </option>
                                                                <option>กลุ่มนิคมพลังงาน </option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มแลนด์แบงค์สนามกอล์ฟ">
                                                                <option>กลุ่มสนามกอล์ฟบริษัทแม่ </option>
                                                                <option>กลุ่มสนามกอล์ฟปัตตาเวีย </option>
                                                                <option>กลุ่มเลควิวกอล์ฟ </option>
                                                                <option>กลุ่มสนามกอล์ฟหนองคาย </option>
                                                                <option>กลุ่มฐานนิรันดร์ </option>
                                                                <option>กลุ่มสนามกอล์ฟนอร์ธปาร์ค </option>
                                                                <option>กลุ่มอื่นๆ</option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มโรงแรมในประเทศ">
                                                                <option>กลุ่มโรงแรมบริษัทแม่ </option>
                                                                <option>กลุ่มโรงแรมไพรเวท </option>
                                                                <option>กลุ่มโรงแรมไพรเวทภาคเหนือ </option>
                                                                <option>กลุ่มแอสเสท เวิรด์ เวกซ์ </option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มศูนย์การค้าและตลาด">
                                                                <option>กลุ่มศูนย์การค้าบริษัทแม่ </option>
                                                                <option>กลุ่มช้อปปิ้งไพรเวท </option>
                                                                <option>กลุ่มช้อปปิ้งภาคเหนือ </option>
                                                                <option>กลุ่มช้อปปิ้งลงทุนอื่นๆ</option>
                                                            </optgroup>
                                                            <optgroup label="กลุ่มพัฒนาที่อยู่อาศัย">
                                                                <option>กลุ่มพัฒนที่อยู่อาศัยบริษัทแม่ </option>
                                                                <option>กลุ่มอพาร์ทเม้นท์และคอนโดปล่อยเช่า </option>
                                                                <option>กลุ่มที่พักอาศัยเพื่อขาย </option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>ประเภทเอกสารที่จัดเก็บ</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="ประเภทเอกสารที่จัดเก็บ">
                                                                <option>สัญญาซื้อขายหุ้น</option>
                                                                <option>สมุดทะเบียนหุ้น</option>
                                                                <option>ใบหุ้น (ยกเลิก)</option>
                                                                <option>ใบหุ้น (ลงทุน)</option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>สถานที่เก็บเอกสาร(Location)</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="สถานที่เก็บเอกสาร">
                                                                <option>อาคารสุรวงศ์ ห้อง A</option>
                                                                <option>อาคารสุรวงศ์ ห้อง B</option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>หมายเลขตู้เอกสาร</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="หมายเลขตู้เอกสาร">
                                                                <option>A01</option>
                                                                <option>B02 </option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>เพิ่ม, ลบ หรือแก้ไขข้อมูล</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <!-- bar function-->
                                                <div class="btn_function" style="border-bottom: none;">
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_update">
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_add" style="margin-top: 10px;">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box" style="height: 60px;">
                                                        <div class="_remove">
                                                            <i class="material-icons">remove</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- footer -->
            <?php include('../view/footer.php'); ?>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>

</body>

</html>