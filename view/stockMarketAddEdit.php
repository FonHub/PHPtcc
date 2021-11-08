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
                                <h2>ข้อมูลหุ้นตลาด </h2>
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
                                        <div class="col-lg-2 col-md-2"> <b>ประเภทหุ้น<span class="red">*</span></b>
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
                                        <div class="col-lg-2 col-md-2"> <b>มูลค่าหุ้น<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="10.00">
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3"> <b>วันลงทะเบียน<span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="30/1/2464">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>ทุนจดทะเบียน<span>(สำหรับ บอจ.)</span><span class="red">*</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
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
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Finance">การจำนำหลักทรัพย์</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Tab panes 1-->
                                    <div role="tabpanel" class="tab-pane in active" id="Finance">
                                        <div>
                                            <!-- bar function-->
                                            <div class="btn_function">
                                                <div class="__box">
                                                    <div class="_calendar">
                                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#FinanceModal">
                                                            <i class="material-icons">account_balance</i>
                                                            <span class="function-name">จำนำ</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- table -->
                                            <div class="body table-responsive company-list">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 60px">#</th>
                                                            <th>วันที่</th>
                                                            <th>บริษัทเจ้าของหุ้น</th>
                                                            <th>เลขทะเบียนนิติบุคคล </th>
                                                            <th>ผู้รับจำนำ </th>
                                                            <th>จำนวนหุ้น</th>
                                                            <th>วันที่จำนำหุ้น </th>
                                                            <th>วันที่ปลดจำนำ</th>
                                                            <th>จำนวนหุ้น </th>
                                                            <th>เลขที่หุ้น</th>
                                                            <th>สถานที่จัดเก็บใบหุ้น </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>15/9/2560</td>
                                                            <td>บจ.ชิวา1982 จำกัด</td>
                                                            <td>0505564001775</td>
                                                            <td>บจ.สหมิติ จำกัด</td>
                                                            <td>20,500,000</td>
                                                            <td>15/9/2562</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>1-2,500,000</td>
                                                            <td>สำนักงาน</td>
                                                            <td>
                                                                <div class="action_btn">
                                                                    <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#FinanceModal"><i class="zmdi zmdi-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>15/10/2560</td>
                                                            <td>บจ.ชิวา1982 จำกัด</td>
                                                            <td>0505564001775</td>
                                                            <td>สถาบันการเงิน</td>
                                                            <td>20,500,000</td>
                                                            <td>15/9/2562</td>
                                                            <td>15/9/2563</td>
                                                            <td>20,500,000</td>
                                                            <td>1-2,500,000</td>
                                                            <td>บริษัทหลักทรัพย์</td>
                                                            <td>
                                                                <div class="action_btn">
                                                                    <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#FinanceModal"><i class="zmdi zmdi-edit"></i></a>
                                                                    <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- Modal Large Size -->
                                        <div class="modal fade" id="FinanceModal" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg box__director" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="largeModalLabel">การจำนำหลักทรัพย์</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal box__director">
                                                            <div class="row clearfix">
                                                                <div class="col-lg-1 col-md-1"> <b>ชื่อย่อหุ้น</b>
                                                                    <div class="input-group">
                                                                        <div>
                                                                            <input type="text" class="form-control" placeholder="SET01">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2"> <b>เลขทะเบียนนิติบุคคล</b>
                                                                    <div class="input-group">
                                                                        <div>
                                                                            <input type="text" class="form-control" placeholder="0505564001775">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3"> <b>ชื่อบริษัทภาษาไทย</b>
                                                                    <div class="input-group">
                                                                        <div>
                                                                            <input type="text" class="form-control" placeholder="บจ.ชิวา1982 จำกัด">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2">
                                                                    <b>วันที่ขึ้นทะเบียน</b>
                                                                    <div class="input-group">
                                                                        <div>
                                                                            <input v-model="date_start" type="text" class="form-control date" placeholder="25/1/2564" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2">
                                                                    <b>ทุนจดทะเบียน</b>
                                                                    <div class="input-group">
                                                                        <div>
                                                                            <input type="text" class="form-control" placeholder="2,500,0000" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2">
                                                                    <b>มูลค่าหุ้น</b>
                                                                    <div class="input-group">
                                                                        <div>
                                                                            <input type="text" class="form-control" placeholder="2,500,0000" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>วันที่จำนำหุ้น</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input v-model="date_start" type="text" class="form-control date" placeholder="25/10/2564" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9"><b>ผู้รับจำนำ</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input v-model="date_start" type="text" class="form-control date" placeholder="สถาบันการเงิน" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-4 col-md-4">
                                                                    <b>เลขที่หุ้น</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder=" 1 - 1,000,0000 " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4"><b>จำนวนหุ้น </b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input v-model="date_start" type="text" class="form-control date" placeholder="1,000,0000" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4"><b>มูลค่ารวม</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input v-model="date_start" type="text" class="form-control date" placeholder="1,000,0000" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>วันที่ปลดจำนำ</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="15/10/2565" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>ยอดชำระ</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="1,500,0000" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>จำนวนหุ้น </b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="1,000,0000" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>เลขที่หุ้น</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder=" 1 - 1,000,0000 " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-4 col-md-4"> <b>ประเภทเอกสารที่จัดเก็บ<span class="red">*</span></b>
                                                                    <div class="form-group">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="กรุณาเลือก">
                                                                                <option>สัญญาซื้อขายหุ้น</option>
                                                                                <option>สมุดทะเบียนหุ้น</option>
                                                                                <option>ใบหุ้น (ยกเลิก)</option>
                                                                                <option>ใบหุ้น (ลงทุน)</option>
                                                                            </optgroup>
                                                                        </select><!-- From Master -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2"> <b>เลขลำดับเอกสาร<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="001">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-4 col-md-4"> <b>สถานที่เก็บเอกสาร<span class="red">*</span></b>
                                                                    <div class="form-group">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="กรุณาเลือก">
                                                                                <option>อาคารสุรวงศ์ ห้อง A</option>
                                                                                <option>อาคารสุรวงศ์ ห้อง B</option>
                                                                            </optgroup>
                                                                        </select><!-- From Master -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4"> <b>หมายเลขตู้เอกสาร<span class="red">*</span></b>
                                                                    <div class="form-group">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="กรุณาเลือก">
                                                                                <option>A01</option>
                                                                                <option>B02 </option>
                                                                            </optgroup>
                                                                        </select><!-- From Master -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 col-md-4"> <b>เลขลำดับเอกสาร<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="000">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12"> <b>หมายเหตุ<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>
                                                        <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                                                        <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
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