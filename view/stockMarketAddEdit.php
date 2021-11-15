<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>companyname</title>
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
                        ข้อมูลหุ้นตลาด
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="stockMarket.php"></a> ทะเบียนหุ้นตลาด
                        </li>
                        <li class="breadcrumb-item active">หุ้นตลาด</li>
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
                            <div class="header">
                                <h2>บริษัทเจ้าของหุ้น</h2>
                            </div>
                            <div class="body">

                                <form class="form-horizontal __info">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2"> <b>ชื่อย่อหุ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="SET01">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>เลขทะเบียนนิติบุคคล<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="0505564001775">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-md-7"> <b>ชื่อบริษัทภาษาไทย<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="บจ.ชิวา1982 จำกัด">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4"> <b>ทุนจดทะเบียน<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="30,000,000.00">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4"> <b>จำนวนหุ้นจดทะเบียน<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="30,000,000.00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4"> <b>ทุนชำระแล้ว<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="15,000,000.00">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4"> <b>จำนวนหุ้นชำระแล้ว<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="15,000,000.00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4"> <b>มูลค่าหุ้นละ<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="10.00">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4"> <b>ตลาด<span class="red">*</span></b>
                                            <div class="form-group">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กรุณาเลือก">
                                                        <option>ไทย </option>
                                                        <option>ต่างประเทศ </option>
                                                    </optgroup>
                                                </select><!-- From Master -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-control text-align">
                                        <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                                        <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- stock detail-->
            <div id="company_detail">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#StockMarInf">ข้อมูลหุ้น</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#StockMarSell">การซื้อขายหุ้น</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#StockMarMeet">การประชุม/มอบฉันทะ</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#StockMarDivid">การปันผล</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#StockMarNote">บันทึกเพิ่มเติม</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Tab panes 1-->
                                    <div role="tabpanel" class="tab-pane in active" id="StockMarInf">
                                        <?php include('../view/StockMarInf.php'); ?>
                                    </div>
                                    <!-- Tab panes 2-->
                                    <div role="tabpanel" class="tab-pane" id="StockMarSell">
                                        <?php include('../view/StockMarSell.php'); ?>
                                    </div>
                                    <!-- Tab panes 3-->
                                    <div role="tabpanel" class="tab-pane" id="StockMarMeet">
                                        <?php include('../view/stockMarMeet.php'); ?>
                                    </div>
                                    <!-- Tab panes 4-->
                                    <div role="tabpanel" class="tab-pane" id="StockMarDivid">
                                        <?php include('../view/stockMarDividend.php'); ?>
                                    </div>
                                    <!-- Tab panes 5-->
                                    <div role="tabpanel" class="tab-pane" id="StockMarNote">
                                        <?php include('../view/companyaddedit_tap-11.php'); ?>
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
    </section>



    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>

</body>

</html>