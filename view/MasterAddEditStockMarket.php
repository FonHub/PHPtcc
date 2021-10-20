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

                                    <!-- form Stock -->
                                    <form class="form-horizontal __docLocation">
                                        <div class="block-header" style="padding-left: 0">
                                            <h2>Master กลุ่มหุ้นและหุ้นตลาด</h2>
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
                                                <b>ประเภทของประชุม</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick">
                                                            <optgroup label="ประเภทของประชุม">
                                                                <option>จัดตั้งบริษัท </option>
                                                                <option>ประชุมสามัญ </option>
                                                                <option>ประชุมวิสามัญ </option>
                                                                <option>คัดลอกจากสมุดทะเบียน </option>
                                                                <option>ควบบริษัท </option>
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