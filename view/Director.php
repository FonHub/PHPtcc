<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Person</title>
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
                        <small class="text-muted">Welcome to TCC Application</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/person"></a> กรรมการ
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
                                    <div class="btn-control">
                                        <button type="button" class="btn btn-raised btn-default __redvitality waves-effect">ค้นหา</button>
                                        <a class="btn btn-raised btn-default __gold waves-effect" href="../view/company_AddEdit.php">เพิ่มใหม่</a>
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
                            <div id="Director">
                                <!-- bar control-->
                                <div class="row clearfix">
                                    <div class="col-sm-12 col-md-12 col-lg-12 btn_control">
                                        <div class="__save"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">save</i> </button></div>
                                        <div class="__new"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">insert_drive_file</i> </button></div>
                                        <div class="__close"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">clear</i> </button></div>
                                        <div class="__exit"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">exit_to_app</i> </button></div>
                                    </div>
                                </div>
                                <!-- bar function-->
                                <div class="btn_function">
                                    <div class="__box">
                                        <div class="_update">
                                            <i class="material-icons">sync</i>
                                            <span class="function-name">Update</span>
                                        </div>
                                    </div>
                                    <div class="__box">
                                        <div class="_add">
                                            <i class="material-icons">add</i>
                                            <span class="function-name">Add</span>
                                        </div>
                                    </div>
                                    <div class="__box">
                                        <div class="_remove">
                                            <i class="material-icons">remove</i>
                                            <span class="function-name">Remove</span>
                                        </div>
                                    </div>
                                    <div class="__box">
                                        <div class="_person_add">
                                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#largeModal">
                                                <i class="material-icons">person_add</i>
                                                <span class="function-name">Create</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- form -->
                                <div class="body table-responsive company-list">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 60px">#</th>
                                                <th>วันที่เป็นกรรมการ</th>
                                                <th>วันที่สิ้นสุด</th>
                                                <th>กลุ่ม </th>
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
                                                    <div class="input-group">
                                                        <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                        <label for="md_checkbox_21"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
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
                                                    <div class="input-group">
                                                        <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                        <label for="md_checkbox_21"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>12 เม.ย.2564</td>
                                                <td>-</td>
                                                <td>2</td>
                                                <td>2</td>
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
                                                <td>-</td>
                                                <td>2</td>
                                                <td>3</td>
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
                                                <td>-</td>
                                                <td>1</td>
                                                <td>5</td>
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


                            <!-- Modal Large Size -->
                            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg box__director" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="largeModalLabel">สร้างกรรรมการ</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-horizontal box__director">
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-3">
                                                        <div class="w-100px"><b>หมายเลข</b>
                                                            <div class="input-group">
                                                                <div class="form-line disabled">
                                                                    <input type="text" class="form-control" placeholder="0000" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-100px"><b>กลุ่ม <span class="badge badge-primary" data-toggle="modal" data-target="#Detaillist">คำอธิบาย</span></b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <select class="form-control show-tick">
                                                                        <optgroup label="กลุ่ม">
                                                                            <option> 1</option>
                                                                            <option> 2</option>
                                                                            <option> 3</option>
                                                                            <option> 4</option>
                                                                            <option> 5</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-100px"><b>Running</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <div><b>คำนำหน้าชื่อ</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="นาย">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div><b>ชื่อ </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="วิชัย">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div><b>นามสกุล </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="วชิรพงศ์">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-1 col-md-1"> <b>Status</b>
                                                        <div class="input-group">
                                                            <div class="switch">
                                                                <label>Active<input type="checkbox" checked><span class="lever"></span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3"> <b>วันที่เป็นกรรมการ</b>
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="1/7/2564">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3"> <b>วันที่สิ้นสุด</b>
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="วัน-เดือน-ปี พ.ศ. ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2"> <b>สัญชาติ</b>
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="ไทย">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2"> <b>อาชีพ</b>
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="เจ้าของกิจการ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-6"> <b>เลขบัตรประชาชน หรือ หมายเลขพาสปอร์ต</b>
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="1-7209-00289-07-6">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6"> <b>บริษัท</b>
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
                                                            <b>เลขที</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3">
                                                            <b>หมู่ที่/หมู่บ้าน</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3">
                                                            <b>ถนน</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-3">
                                                            <b>จังหวัด</b>
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
                                                            <b>อำเภอ/เขต</b>

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
                                                            <b>ตำบล/แขวง</b>
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
                                                            <b>รหัสไปรษณีย์</b>
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
                                                            <b>เลขที</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3">
                                                            <b>หมู่ที่/หมู่บ้าน</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3">
                                                            <b>ถนน</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-3">
                                                            <b>จังหวัด</b>
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
                                                            <b>อำเภอ/เขต</b>
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
                                                            <b>ตำบล/แขวง</b>
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
                                                            <b>รหัสไปรษณีย์</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" :placeholder="zipcode_en" disabled="true" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-6 col-md-6">
                                                            <b>แนบเอกสาร</b>
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
                                            <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                            <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>
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
    <!-- modal Detaillist -->
    <div class="modal fade" id="Detaillist" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="DetaillistLabel">คำอธิบายกล่มคณะกรรมการ</h4>
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

</body>

</html>