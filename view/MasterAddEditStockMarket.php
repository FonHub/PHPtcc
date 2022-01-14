<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Master กลุ่มหุ้นและหุ้นตลาด</title>
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
                        Master กลุ่มหุ้นและหุ้นตลาด
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
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

                                    <!-- form Stock -->
                                    <form class="form-horizontal marterperson">
                                        <div class="block-header">
                                            <h2>Master กลุ่มหุ้นและหุ้นตลาด</h2>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>ประเภทของประชุม</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>จัดตั้งบริษัท </option>
                                                            <option>ประชุมสามัญ </option>
                                                            <option>ประชุมวิสามัญ </option>
                                                            <option>คัดลอกจากสมุดทะเบียน </option>
                                                            <option>ควบบริษัท </option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">add</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_remove">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">remove</i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>สกุลเงินหลัก</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>บาทไทย THB</option>
                                                            <option>ยูโร EUR</option>
                                                            <option>ปอนด์อังกฤษ GBP</option>
                                                            <option>เยนญี่ปุ่น JPY</option>
                                                            <option>ฟรังค์สวิส CHF</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">add</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_remove">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">remove</i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>สกุลเงินทั่วโลก</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>ค่าเงินหยวนในตลาดนอกประเทศ CNH</option>
                                                            <option>จ๊าดพม่า MMK</option>
                                                            <option>ซวอตีโปแลนด์ PLN</option>
                                                            <option>ดงเวียดนาม VND</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">add</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_remove">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">remove</i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>ตลาด</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>ไทย </option>
                                                            <option>ต่างประเทศ </option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">add</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_remove">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">remove</i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>ธนาคาร</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>ธนาคารกสิกรไทย </option>
                                                            <option>ธนาคารไทยพาณิชย์ </option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">add</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_remove">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">remove</i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <input type="text" class="form-control disabled" placeholder="000" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>หมวดหมู่การบันทึก</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>หมวดหมู่การบันทึก 1</option>
                                                            <option>หมวดหมู่การบันทึก 2</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
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
                                                <div class="btn_function">
                                                    <div class="__box">
                                                        <div class="_update">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">sync</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">add</i></button>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_remove">
                                                            <button type="button" class="btn btn-default"><i class="material-icons">remove</i></button>
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