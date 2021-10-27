<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>ข้อมูลกรรมการ</title>
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
                        กรรมการ
                        <small class="text-muted">ยินดีต้อนรับสู่ TCC Group</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item active">ข้อมูลกรรมการ</li>
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
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                            <div class="form-line">
                                                <select class="form-control show-tick">
                                                    <optgroup label="สถานะบริษัท">
                                                        <option>นายทะเบียน</option>
                                                        <option>ทะเบียนหุ้นกลาง</option>
                                                        <option>นายทะเบียน - หน่วยงานอื่น</option>
                                                        <option>ควบกิจการ</option>
                                                        <option>โอนกิจการ </option>
                                                        <option>รับโอนกิจการ</option>
                                                        <option>อยู่ระหว่างชำระบัญชี</option>
                                                        <option>เสร็จการชำระบัญชี</option>
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
            <!-- main info-->
            <div id="company_detail" class="detail__box">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Director">กรรมการ</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Tab panes 3-->
                                    <div role="tabpanel" class="tab-pane in active" id="Director">
                                        <!-- bar function-->
                                        <div class="btn_function">
                                            <div class="__box">
                                                <div class="_add">
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalAdd">
                                                        <i class="material-icons">add</i>
                                                        <span class="function-name">เพิ่ม</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="__box">
                                                <div class="_person_add">
                                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalCreate">
                                                        <i class="material-icons">person_add</i>
                                                        <span class="function-name">สร้าง</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- table -->
                                        <div class="body table-responsive company-list">
                                            <table id="mainTable" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 60px">#</th>
                                                        <th>ชื่อบริษัทภาษาไทย</th>
                                                        <th>เลขทะเบียนนิติบุคคล</th>
                                                        <th>วันที่เป็นกรรมการ</th>
                                                        <th>วันที่สิ้นสุด</th>
                                                        <th>กลุ่ม <span class="badge badge-primary" data-toggle="modal" data-target="#Detaillist">คำอธิบาย</span> </th>
                                                        <th>Running</th>
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
                                                        <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม</td>
                                                        <td>0102564000010</td>
                                                        <td>12 เม.ย.2564</td>
                                                        <td>-</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>นาย</td>
                                                        <td>วิชัย</td>
                                                        <td>วชิรพงศ์</td>
                                                        <td>ไทย</td>
                                                        <td>กรรมการ</td>
                                                        <td>
                                                            <div class="action_btn">
                                                                <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#ModalCreate"><i class="zmdi zmdi-edit"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>หจ.เดอะ ไลอ้อน มิลค์ที</td>
                                                        <td>0103564000011</td>
                                                        <td>12 เม.ย.2564</td>
                                                        <td>-</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>นาง</td>
                                                        <td>มณีรัตน์</td>
                                                        <td>งามเรืองพงศ์</td>
                                                        <td>ไทย</td>
                                                        <td>กรรมการ</td>
                                                        <td>
                                                            <div class="action_btn">
                                                                <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#ModalCreate"><i class="zmdi zmdi-edit"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>หจ.เกตเวย์ แอคเคาน์ติ้ง</td>
                                                        <td>0103564001734</td>
                                                        <td>12 เม.ย.2564</td>
                                                        <td>-</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>MR.</td>
                                                        <td>SUNSHINE </td>
                                                        <td>TAGALOG </td>
                                                        <td>english</td>
                                                        <td>กรรมการ</td>
                                                        <td>
                                                            <div class="action_btn">
                                                                <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#ModalCreate"><i class="zmdi zmdi-edit"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>บจ.เพชรดีไซน์ เฟอร์นิเจอร์ จำกัด</td>
                                                        <td>0105564000152</td>
                                                        <td>12 เม.ย.2564</td>
                                                        <td>-</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>นาย</td>
                                                        <td>ชนุชตร</td>
                                                        <td>สุขสันต์</td>
                                                        <td>ไทย</td>
                                                        <td>กรรมการ</td>
                                                        <td>
                                                            <div class="action_btn">
                                                                <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#ModalCreate"><i class="zmdi zmdi-edit"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>บจ.ซีเอ็นที สตาร์ จำกัด</td>
                                                        <td>0105564002171</td>
                                                        <td>12 เม.ย.2564</td>
                                                        <td>-</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>นางสาว </td>
                                                        <td>กรรณธิมา</td>
                                                        <td>คมแก้ว</td>
                                                        <td>ไทย</td>
                                                        <td>กรรมการ</td>
                                                        <td>
                                                            <div class="action_btn">
                                                                <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#ModalCreate"><i class="zmdi zmdi-edit"></i></a>
                                                                <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- ModalCreate -->
                                    <div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg box__director" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="largeModalLabel">รายละเอียดกรรรมการ</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal box__director">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3">
                                                                <div class="w-100px"><b>หมายเลข<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="disabled">
                                                                            <input type="text" class="form-control" placeholder="0010" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="w-100px"><b>กลุ่ม<span class="red">*</span></b>
                                                                    <div class="form-group">
                                                                        <select class="form-control show-tick">
                                                                            <optgroup label="กรุณาเลือก">
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                            </optgroup>
                                                                        </select><!-- From Master -->
                                                                    </div>
                                                                </div>
                                                                <div class="w-100px"><b>Running<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2">
                                                                <div><b>คำนำหน้าชื่อ<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="นาย">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3">
                                                                <div><b>ชื่อ <span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="วิชัย">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3">
                                                                <div><b>นามสกุล <span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="วชิรพงศ์">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-1 col-md-1"> <b>Status<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="switch">
                                                                        <label>Active<input type="checkbox" checked><span class="lever"></span></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3"> <b>วันที่เป็นกรรมการ<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="1/7/2564">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3"> <b>วันที่สิ้นสุด<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="วัน-เดือน-ปี พ.ศ. ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2"> <b>สัญชาติ<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="ไทย">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2"> <b>อาชีพ<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="เจ้าของกิจการ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-6 col-md-6"> <b>เลขบัตรประชาชน หรือ หมายเลขพาสปอร์ต<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="1-7209-00289-07-6">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6"> <b>บริษัท<span class="red">*</span></b>
                                                                <div class="input-group">
                                                                    <div class="form-line">
                                                                        <input type="text" class="form-control" placeholder="บจ.ฟลอร่า โปรดัคส์ โซลูชั่น จำกัด ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div v-if="!isForeigners">
                                                            <!-- Address Thai -->
                                                            <div class="header-status">
                                                                <h3>ที่อยู่ภาษาไทย</h3>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>เลขที<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>หมู่ที่/หมู่บ้าน<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>ถนน<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>จังหวัด<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">

                                                                            <b-form-input list="provinces_th" class="form-control show-tick" v-model="province_th" :state="provinceState_th"></b-form-input>
                                                                            <datalist id="provinces_th">
                                                                                <option v-for="list in provinces" :key="list.id">
                                                                                    {{ list.name_th }}
                                                                                </option>
                                                                            </datalist>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>อำเภอ/เขต<span class="red">*</span></b>

                                                                    <div class="input-group">
                                                                        <div class="form-line">

                                                                            <b-form-input list="districts_th" class="form-control show-tick" v-model="district_th" :state="districtState_th"></b-form-input>
                                                                            <datalist id="districts_th">
                                                                                <option v-for="list in districts" :key="list.id" :value="list.name_th"></option>
                                                                            </datalist>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>ตำบล/แขวง<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">

                                                                            <b-form-input list="sub_district_th" class="form-control show-tick" v-model="sub_district_th" :state="sub_districtState_th"></b-form-input>
                                                                            <datalist id="sub_district_th">
                                                                                <option v-for="list in sub_districts" :key="list.id" :value="list.name_th"></option>
                                                                            </datalist>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>รหัสไปรษณีย์<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" :placeholder="zipcode_th" disabled="true" />

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Address English -->
                                                            <div class="header-status">
                                                                <h3>ที่อยู่ภาษาอังกฤษ</h3>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>เลขที<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>หมู่ที่/หมู่บ้าน<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>ถนน<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>จังหวัด<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <b-form-input list="provinces_en" class="form-control show-tick" v-model="province_en" :state="provinceState_en"></b-form-input>
                                                                            <datalist id="provinces_en">
                                                                                <option v-for="list in provinces" :key="list.id">
                                                                                    {{ list.name_en }}
                                                                                </option>
                                                                            </datalist>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>อำเภอ/เขต<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <b-form-input list="districts_en" class="form-control show-tick" v-model="district_en" :state="districtState_en"></b-form-input>
                                                                            <datalist id="districts_en">
                                                                                <option v-for="list in districts" :key="list.id" :value="list.name_en"></option>
                                                                            </datalist>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>ตำบล/แขวง<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <b-form-input list="sub_district_en" class="form-control show-tick" v-model="sub_district_en" :state="sub_districtState_en"></b-form-input>
                                                                            <datalist id="sub_district_en">
                                                                                <option v-for="list in sub_districts" :key="list.id" :value="list.name_en"></option>
                                                                            </datalist>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>รหัสไปรษณีย์<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" :placeholder="zipcode_en" disabled="true" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <b>แนบเอกสาร<span class="red">*</span></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="" />
                                                                        </div>
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

                                    <!-- modal Detaillist -->
                                    <div class="modal fade" id="Detaillist" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="DetaillistLabel">คำอธิบายกลุ่มคณะกรรมการ</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div>
                                                        <h5> กลุ่ม 1</h5>
                                                        <small>กรรมการกลุ่ม 1 และกลุ่ม 2 รวมเป็นสองคน ลงลายมือชื่อร่วม</small>
                                                    </div>
                                                    <div>
                                                        <h5> กลุ่ม 2 </h5>
                                                        <small>คนใดคนหนึ่งลงลายมือชื่อพร้อมประทับตราสำคัญของบริษัท</small>
                                                    </div>
                                                    <div>
                                                        <h5> กลุ่ม 3 </h5>
                                                        <small>สองคนลงลายมือชื่อร่วมกันพร้อมประทับตราสำคัญของบริษัท</small>
                                                    </div>
                                                    <div>
                                                        <h5>กลุ่ม 4 </h5>
                                                        <small>กรรมการกลุ่ม 2 และกลุ่ม 3 รวมเป็นสองคน ลงลายมือชื่อร่วม</small>
                                                    </div>
                                                    <div>
                                                        <h5>กลุ่ม 5 </h5>
                                                        <small>กรรมการกลุ่ม 1 และกลุ่ม 2 หรือกลุ่ม 3 รวมเป็นสองคน ลงลายมือชื่อร่วม</small>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ModalAdd -->
                                    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg box__director" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="largeModalLabel">เพิ่มกรรรมการ</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- search-->
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
                                                                                    <input type="text" class="form-control" placeholder="พิมพ์ชื่อ">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="btn-control">
                                                                            <button type="button" class="btn btn-raised btn-default __redvitality waves-effect">ค้นหา</button>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- table-->
                                                    <div class="row clearfix">
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
                                                                            <div class="input-group">
                                                                                <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                                <label for="md_checkbox_21"></label>
                                                                            </div>
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
                                                                            <div class="input-group">
                                                                                <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                                <label for="md_checkbox_21"></label>
                                                                            </div>
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
                                                                            <div class="input-group">
                                                                                <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                                <label for="md_checkbox_21"></label>
                                                                            </div>
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
                                                                            <div class="input-group">
                                                                                <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                                <label for="md_checkbox_21"></label>
                                                                            </div>
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
                                                                            <div class="input-group">
                                                                                <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                                <label for="md_checkbox_21"></label>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

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
            <?php include('../view/footer.php'); ?>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>

</body>

</html>