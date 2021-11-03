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
                        ข้อมูลหุ้น
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/company"></a> ทะเบียนหุ้น
                        </li>
                        <li class="breadcrumb-item active">ข้อมูลหุ้น</li>
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
                                <h2>ข้อมูลหุ้น </h2>
                            </div>
                            <div class="body">

                                <form class="form-horizontal __info">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3"> <b>ชื่อย่อหุ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="SET01">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>เลขทะเบียนนิติบุคคล<span class="red">*</span></b>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="0505564001775">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6"> <b>ชื่อบริษัทภาษาไทย<span class="red">*</span></b>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="บจ.ชิวา1982 จำกัด">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3"> <b>ประเภทหุ้น<span class="red">*</span></b>
                                            <div class="form-group">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กรุณาเลือก">
                                                        <option>หุ้นสามัญ</option>
                                                        <option>หุ้นบุริสิทธิ </option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>จำนวนหุ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="30,000,000.00">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>มูลค่าหุ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="10.00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3"> <b>สกุลเงิน<span class="red">*</span></b>
                                            <div class="form-group">
                                                <select class="form-control show-tick">
                                                    <optgroup label="สกุลเงินหลัก">
                                                        <option>บาทไทย THB</option>
                                                        <option>ยูโร EUR</option>
                                                        <option>ปอนด์อังกฤษ GBP</option>
                                                        <option>เยนญี่ปุ่น JPY</option>
                                                        <option>ฟรังค์สวิส CHF</option>
                                                    </optgroup>
                                                    <optgroup label="สกุลเงินทั่วโลก">
                                                        <option>ค่าเงินหยวนในตลาดนอกประเทศ CNH</option>
                                                        <option>จ๊าดพม่า MMK</option>
                                                        <option>ซวอตีโปแลนด์ PLN</option>
                                                        <option>ดงเวียดนาม VND</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>ตลาด<span class="red">*</span></b>
                                            <div class="form-group">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กรุณาเลือก">
                                                        <option>ไทย </option>
                                                        <option>ต่างประเทศ </option>
                                                    </optgroup>
                                                </select><!-- From Master -->
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>พื้นที่<span class="red">*</span></b>
                                            <div class="form-group">
                                                <select class="form-control show-tick">
                                                    <optgroup label="กรุณาเลือก">
                                                        <option>กรุงเทพฯ </option>
                                                        <option>นนทบุรี </option>
                                                    </optgroup>
                                                </select><!-- From Master -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix py-10px">
                                        <div class="col-lg-3 col-md-3"> <b>วันลงทะเบียนจัดตั้งบริษัท<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="30/1/2464">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>ทุนจดทะเบียน<span>(จัดตั้งบริษัท)</span><span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="10,000,000,000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>ทุนจดทะเบียน<span>(ปัจจุบัน)</span><span class="red">*</span></b>
                                            <div class="input-group">
                                                <div>
                                                    <input type="text" class="form-control" placeholder="30,000,000,000">
                                                </div>
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
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Meeting">ประชุม</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#StockNo">ใบรายละเอียดหุ้น</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Lot">เจ้าของหุ้น</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Print">พิมพ์</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Investment">เงินลงทุน</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Dividend">เงินปันผล</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Tab panes 1-->
                                    <div role="tabpanel" class="tab-pane in active" id="Meeting">
                                        <?php include('../view/stockTapMeet.php'); ?>
                                    </div>
                                    <!-- Tab panes 2-->
                                    <div role="tabpanel" class="tab-pane" id="Lot">
                                        <?php include('../view/stockTapLot.php'); ?>
                                    </div>
                                    <!-- Tab panes 3-->
                                    <div role="tabpanel" class="tab-pane" id="StockNo">
                                        <?php include('../view/stockTapNo.php'); ?>
                                    </div>
                                    <!-- Tab panes 4-->
                                    <div role="tabpanel" class="tab-pane" id="Print">
                                        <?php include('../view/stockTapPrint.php'); ?>
                                    </div>
                                    <!-- Tab panes 5-->
                                    <div role="tabpanel" class="tab-pane" id="Investment">
                                        <?php include('../view/stockTapInvestment.php'); ?>
                                    </div>
                                    <!-- Tab panes 6-->
                                    <div role="tabpanel" class="tab-pane" id="Dividend">
                                        <?php include('../view/stockTapDividend.php'); ?>
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