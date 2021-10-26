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

                                    <!-- form Person -->
                                    <form class="form-horizontal marterperson">
                                        <div class="block-header">
                                            <h2>Master กลุ่มบุคคล</h2>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-1">
                                                <b>IDCode</b>
                                                <div class="input-group">
                                                    <input type="text" class="form-control disabled" placeholder="1" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>คำนำหน้าชื่อ</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>นาย</option>
                                                            <option>นาง</option>
                                                            <option>นางสาว</option>
                                                            <option>Mr.</option>
                                                            <option>Mrs.</option>
                                                            <option>เพิ่มใหม่</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>

                                                <div>

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
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
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
                                                    <input type="text" class="form-control disabled" placeholder="3" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>สัญชาติ</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>ไทย</option>
                                                            <option>อังกฤษ</option>
                                                            <option>นางสาว</option>
                                                            <option>จีน</option>
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
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
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
                                                    <input type="text" class="form-control disabled" placeholder="3" disabled />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <b>อาชีพ</b>
                                                <div class="form-group">
                                                    <select class="form-control show-tick" v-model="occupation">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>ข้าราชการ</option>
                                                            <option>เจ้าของกิจการ</option>
                                                            <option>พนักงานเอกชน</option>
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
                                                            <i class="material-icons">sync</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
                                                        <div class="_add">
                                                            <i class="material-icons">add</i>
                                                        </div>
                                                    </div>
                                                    <div class="__box">
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