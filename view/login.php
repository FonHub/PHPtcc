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
    <div class="authentication">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="header slideDown navbar-header">
                                    <div class="navbar-brand">
                                        <img class="imglogo-brand" src="../assets/images/TCC-logo.png" alt="TCC Group">
                                    </div>
                                </div>
                            </div>
                            <form class="col-lg-12">
                                <h6 class="title py-10px">เข้าสู่ระบบ</h6>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control">
                                        <label class="form-label">ชื่อผู้ใช้</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control">
                                        <label class="form-label">รหัสผ่าน</label>
                                    </div>
                                </div>
                                <div>
                                    <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-cyan">
                                    <label for="rememberme">จดจำฉัน</label>
                                </div>
                            </form>
                            <div class="col-lg-12">
                                <div class="btn-control text-align">
                                    <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                                    <a href="../view/index.php"><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> เข้าสู่ระบบ </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <?php include('../view/footer.php'); ?>
    </div>

    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>

</body>

</html>