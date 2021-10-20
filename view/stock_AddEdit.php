﻿<!doctype html>
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
                        <small class="text-muted">Welcome to TCC Application</small>
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
                                        <div class="col-lg-2 col-md-2"> <b>ชื่อย่อหุ้น</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="SET01">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6"> <b>เลขทะเบียนนิติบุคคล</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="0505564001775">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <b>นิติบุคคล</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="คำนำหน้าทะเบียนธุรกิจ">
                                                            <option>
                                                                ห้างหุ้นส่วนสามัญนิติบุคคล (หสน.)
                                                            </option>
                                                            <option>ห้างหุ้นส่วนจำกัด (หจก.)</option>
                                                            <option>บริษัทจำกัด (บจ.)</option>
                                                            <option>บริษัทมหาชนจำกัด (บมจ.)</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6"> <b>ชื่อบริษัทภาษาไทย</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="บจ.ชิวา1982 จำกัด">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6"> <b>ชื่อบริษัทภาษาอังกฤษ</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="บจ.ชิวา1982 จำกัด">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4">
                                            <b>ประเภทประกอบการ</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick" v-model="operate_type">
                                                        <optgroup label="ประเภทประกอบการ">
                                                            <option>กลุ่มบริษัทลงทุน</option>
                                                            <option>กลุ่มทีซีซี แลนด์</option>
                                                            <option>กลุ่มบริษัทบุคคล</option>
                                                            <option>กลุ่มทีซีซี แอสเซ็ทส์</option>
                                                            <option>อื่นๆ</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <b>กลุ่มธุรกิจหลัก</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick" v-model="business_core">
                                                        <optgroup label="กลุ่มธุรกิจหลัก">
                                                            <option>ไพรเวท คอมพานี</option>
                                                            <option>ไทยเบฟเวอเรจ</option>
                                                            <option>อาคเนย์</option>
                                                            <option>แอสเสท เวิรด์ คอร์ป</option>
                                                            <option>เบอร์ลี่ ยุคเกอร์</option>
                                                            <option>อื่นๆ</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <b>กลุ่มธุรกิจย่อย</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick" v-model="subsidiary">
                                                        <optgroup label="กลุ่มธุรกิจย่อย">
                                                            <option>กลุ่ม 1</option>
                                                            <option>กลุ่ม 2</option>
                                                            <option>อื่นๆ</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2"> <b>จำนวนหุ้น</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="3000000000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2"> <b>มูลค่าหุ้น</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="10.000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2"> <b>ข้อมูลทางบัญชี</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="0000.000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2"> <b>ประเภทหุ้น</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>หุ้นสามัญ</option>
                                                            <option>หุ้นบุริสิทธิ</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2"> <b>ตลาด</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>ไทย</option>
                                                            <option>ต่างประเทศ </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2"> <b>พื้นที่</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control date" placeholder="กรุงเทพฯ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3"> <b>หน่วยเงิน</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>TH</option>
                                                            <option>$</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>ประเทศ</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick">
                                                        <optgroup label="กรุณาเลือก">
                                                            <option>ไทย</option>
                                                            <option>ต่างประเทศ </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3"> <b>วันลงทะเบียน</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="30/1/2464">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>ทุนจดทะเบียน<span>(สำหรับ บอจ.)</span></b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="30,000,000,000">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>วันที่ขึ้นทะเบียนนิติบุคคล</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="30/1/2480">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3"> <b>วันปิดกิจการหรือควบรวมกิจการ</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control  disabled" placeholder="" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>
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
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Lot">เจ้าของหุ้น</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#StockNo">ใบรายละเอียดหุ้น</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Print">พิมพ์</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Investment">เงินลงทุน</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Dividend">เงินปันผล</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Tab panes 1-->
                                    <div role="tabpanel" class="tab-pane in active" id="Meeting">
                                        <div>
                                            <!-- bar control-->
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-12 btn_control">
                                                    <div class="__save">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                    <div class="__new">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">insert_drive_file</i>
                                                        </button>
                                                    </div>
                                                    <div class="__close">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">clear</i>
                                                        </button>
                                                    </div>
                                                    <div class="__exit">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">exit_to_app</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- bar function-->
                                            <div class="btn_function">
                                                <div class="__box">
                                                    <div class="_update">
                                                        <i class="material-icons">sync</i>
                                                        <span class="function-name">อัพเดต</span>
                                                    </div>
                                                </div>
                                                <div class="__box">
                                                    <div class="_add">
                                                        <i class="material-icons">add</i>
                                                        <span class="function-name">เพิ่ม</span>
                                                    </div>
                                                </div>
                                                <div class="__box">
                                                    <div class="_remove">
                                                        <i class="material-icons">remove</i> <br>
                                                        <span class="function-name">ลบ</span>
                                                    </div>
                                                </div>
                                                <div class="__box">
                                                    <div class="_calendar">
                                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalMeet" style="margin-top: 10px; padding: 0;">
                                                            <i class="material-icons">perm_contact_calendar</i>
                                                            <span class="function-name">ประชุม</span>
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
                                                            <th>ประเภท</th>
                                                            <th>ลำดับ </th>
                                                            <th>กรรมการกลุ่ม 1 </th>
                                                            <th>กรรมการกลุ่ม 2</th>
                                                            <th>% การเรียกชำระ </th>
                                                            <th>ยอดชำระ</th>
                                                            <th>ทุนจดทะเบียน</th>
                                                            <th>Number Of Share </th>
                                                            <th>Running </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>15/9/2560</td>
                                                            <td>จัดตั้งบริษัท</td>
                                                            <td>-</td>

                                                            <td>
                                                                <div>นาย วิชัย วชิรพงศ์</div>
                                                                <div>นาง มณีรัตน์ งามเรืองพงศ์</div>
                                                                <div>MR.SUNSHINE TAGALOG</div>
                                                            </td>
                                                            <td>
                                                                <div>นาย ชนุชตร สุขสันต์</div>
                                                                <div>นาง กรรณธิมา สุขสันต์</div>
                                                                <div>นาง แก้ว คมแก้ว</div>
                                                            </td>
                                                            <td>25%</td>
                                                            <td>25,000</td>
                                                            <td>2,500,000</td>
                                                            <td>2,500,000</td>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>15/10/2560</td>
                                                            <td>จัดตั้งบริษัท</td>
                                                            <td>-</td>

                                                            <td>
                                                                <div>นาย วิชัย วชิรพงศ์</div>
                                                                <div>นาง มณีรัตน์ งามเรืองพงศ์</div>
                                                                <div>MR.SUNSHINE TAGALOG</div>
                                                            </td>
                                                            <td>
                                                                <div>นาย ชนุชตร สุขสันต์</div>
                                                                <div>นาง กรรณธิมา สุขสันต์</div>
                                                                <div>นาง แก้ว คมแก้ว</div>
                                                            </td>
                                                            <td>25%</td>
                                                            <td>25,000</td>
                                                            <td>2,500,000</td>
                                                            <td>2,500,000</td>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>15/11/2560</td>
                                                            <td>จัดตั้งบริษัท</td>
                                                            <td>-</td>
                                                            <td>
                                                                <div>นาย วิชัย วชิรพงศ์</div>
                                                                <div>นาง มณีรัตน์ งามเรืองพงศ์</div>
                                                                <div>MR.SUNSHINE TAGALOG</div>
                                                            </td>
                                                            <td>
                                                                <div>นาย ชนุชตร สุขสันต์</div>
                                                                <div>นาง กรรณธิมา สุขสันต์</div>
                                                                <div>นาง แก้ว คมแก้ว</div>
                                                            </td>
                                                            <td>25%</td>
                                                            <td>25,000</td>
                                                            <td>2,500,000</td>
                                                            <td>2,500,000</td>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>15/12/2560</td>
                                                            <td>จัดตั้งบริษัท</td>
                                                            <td>-</td>
                                                            <td>
                                                                <div>นาย วิชัย วชิรพงศ์</div>
                                                                <div>นาง มณีรัตน์ งามเรืองพงศ์</div>
                                                                <div>MR.SUNSHINE TAGALOG</div>
                                                            </td>
                                                            <td>
                                                                <div>นาย ชนุชตร สุขสันต์</div>
                                                                <div>นาง กรรณธิมา สุขสันต์</div>
                                                                <div>นาง แก้ว คมแก้ว</div>
                                                            </td>
                                                            <td>50%</td>
                                                            <td>50,000</td>
                                                            <td>2,500,000</td>
                                                            <td>2,500,000</td>
                                                            <td>1</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>15/12/2560</td>
                                                            <td>ประชุมวิสามัญ </td>
                                                            <td>1/2561</td>
                                                            <td>
                                                                <div>นาย วิชัย วชิรพงศ์</div>
                                                                <div>นาง มณีรัตน์ งามเรืองพงศ์</div>
                                                                <div>MR.SUNSHINE TAGALOG</div>
                                                            </td>
                                                            <td>
                                                                <div>นาย ชนุชตร สุขสันต์</div>
                                                                <div>นาง กรรณธิมา สุขสันต์</div>
                                                                <div>นาง แก้ว คมแก้ว</div>
                                                            </td>
                                                            <td>25%</td>
                                                            <td>25,000</td>
                                                            <td>2,500,000</td>
                                                            <td>2,500,000</td>
                                                            <td>1</td>
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
                                        <div class="modal fade" id="ModalMeet" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg box__director" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="largeModalLabel">สร้างการประชุม</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal box__director">
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>เลขทะเบียนนิติบุคคล</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input v-model="old_juristic_id" type="text" class="form-control ip" placeholder="0105564002147" maxlength="13" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>นิติบุคคล</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control ip" placeholder="บริษัทจำกัด (บจ.)" />

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>ชื่อบริษัทภาษาไทย</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input v-model="company_th" type="text" class="form-control ip" placeholder="บจ.ไพร์ม เอ็กซ์ จำกัด" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>ชื่อบริษัทภาษาอังกฤษ</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input v-model="company_en" type="text" class="form-control ip" placeholder="บจ.ไพร์ม เอ็กซ์ จำกัด" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>วันที่</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input v-model="date_start" type="text" class="form-control date" placeholder="25/1/2564" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>ประเภท</b>
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
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>ลำดับ</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="1/2564" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">

                                                                <div class="col-lg-2 col-md-2"><b>กลุ่ม </b>
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
                                                                <div class="col-lg-3 col-md-3"><b>กรรมการ</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="รายชื่อกรรมการ">
                                                                                    <option> นาย วิชัย วชิรพงศ์</option>
                                                                                    <option> นาง มณีรัตน์ งามเรืองพงศ์</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3"><b>กรรมการ</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="รายชื่อกรรมการ">
                                                                                    <option>นาง มณีรัตน์ งามเรืองพงศ์</option>
                                                                                    <option> นาย วิชัย วชิรพงศ์ </option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3"><b>กรรมการ</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="รายชื่อกรรมการ">
                                                                                    <option>MR.SUNSHINE TAGALOG</option>
                                                                                    <option>นาง มณีรัตน์ งามเรืองพงศ์</option>
                                                                                    <option> นาย วิชัย วชิรพงศ์ </option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1 col-md-1">
                                                                    <!-- bar function-->
                                                                    <div class="btn_function" style="border-bottom: 0;margin-bottom: 0;padding: 20px 0;">
                                                                        <div class="__box" style="height: 35px;width: 35px;padding: 0;margin: 0;margin-right: 10px;">
                                                                            <div class="_add" style="margin-top: 5px;">
                                                                                <i class="material-icons">add</i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="__box" style="height: 35px;width: 35px;padding: 0;margin: 0;">
                                                                            <div class="_remove" style="margin-top: 5px;">
                                                                                <i class="material-icons">remove</i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">

                                                                <div class="col-lg-2 col-md-2"><b>กลุ่ม</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="กลุ่ม">
                                                                                    <option> 2</option>
                                                                                    <option> 1</option>
                                                                                    <option> 3</option>
                                                                                    <option> 4</option>
                                                                                    <option> 5</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3"><b>กรรมการ</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="รายชื่อกรรมการ">
                                                                                    <option> นาย ชนุชตร สุขสันต์</option>
                                                                                    <option> นาง สันต์ คมแก้ว</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3"><b>กรรมการ</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="รายชื่อกรรมการ">
                                                                                    <option>นางสาว กรรณธิมา คมแก้ว</option>
                                                                                    <option> นาง สันต์ คมแก้ว</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3"><b>กรรมการ</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <select class="form-control show-tick">
                                                                                <optgroup label="รายชื่อกรรมการ">
                                                                                    <option>นาง สันต์ คมแก้ว</option>
                                                                                    <option>นางสาว กรรณธิมา คมแก้ว</option>
                                                                                    <option>นาย ชนุชตร สุขสันต์</option>
                                                                                </optgroup>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1 col-md-1">
                                                                    <!-- bar function-->
                                                                    <div class="btn_function" style="border-bottom: 0;margin-bottom: 0;padding: 20px 0;">
                                                                        <div class="__box" style="height: 35px;width: 35px;padding: 0;margin: 0;margin-right: 10px;">
                                                                            <div class="_add" style="margin-top: 5px;">
                                                                                <i class="material-icons">add</i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="__box" style="height: 35px;width: 35px;padding: 0;margin: 0;">
                                                                            <div class="_remove" style="margin-top: 5px;">
                                                                                <i class="material-icons">remove</i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-1 col-md-1">
                                                                    <b>สถานะ</b>
                                                                    <div class="input-group">
                                                                        <input name="group5" type="radio" id="radio_30" class="with-gap radio-col-red" checked="" />
                                                                        <label for="radio_30">Active</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1 col-md-1">
                                                                    <div class="w-100px">
                                                                        <b>Running</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line disabled">
                                                                                <input type="text" class="form-control" placeholder="1" disabled />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2">
                                                                    <b>% การเรียกชำระ </b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="25%" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-3">
                                                                    <b>ยอดชำระ <small> (%เรียกชำระXRegisterAmount)</small></b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="25%" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2">
                                                                    <b>จำนวนหุ้น </b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="2,500" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-1 col-md-1">
                                                                    <b>มูลค่าหุ้น</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="25,0000" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-md-2">
                                                                    <b>ทุนจดทะเบียน</b>
                                                                    <div class="input-group">
                                                                        <div class="form-line">
                                                                            <input type="text" class="form-control" placeholder="2,500,0000" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect">
                                                            บันทึก
                                                        </button>
                                                        <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                            ยกเลิก
                                                        </button>
                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">
                                                            ปิด
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab panes 2-->
                                    <div role="tabpanel" class="tab-pane" id="Lot">
                                        <div>
                                            <!-- bar control-->
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-12 btn_control">
                                                    <div class="__save"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">save</i> </button></div>
                                                    <div class="__new"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">insert_drive_file</i> </button></div>
                                                    <div class="__close"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">clear</i> </button></div>
                                                    <div class="__exit"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">exit_to_app</i> </button></div>
                                                </div>
                                            </div>

                                            <!-- table -->
                                            <div class="body table-responsive stock_list">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>วันลงทะเบียน</th>
                                                            <th>วันประชุม</th>
                                                            <th>นิติบุคคล/บุคคล</th>
                                                            <th>ทะเบียน</th>
                                                            <th>ลำดับที่พิมพ์</th>
                                                            <th>ใบหุ้นลงวันที่</th>
                                                            <th>ใบหุ้นเลขที่</th>
                                                            <th>จองหุ้น <br> /รับโอน</th>
                                                            <th>Pay Type</th>
                                                            <th>Start No.</th>
                                                            <th>End No.</th>
                                                            <th>มูลค่าหุ้น</th>
                                                            <th>จำนวนหุ้น</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>19/2/2504</td>
                                                            <td>19/5/2504</td>
                                                            <td>บจ.พรอสเพอรัส วิน 168 จำกัด </td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>1/6/2504</td>
                                                            <td>1</td>
                                                            <td>จองหุ้น</td>
                                                            <td>1</td>
                                                            <td>2500</td>
                                                            <td>5000</td>
                                                            <td>10.00</td>
                                                            <td>2,500</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19/2/2504</td>
                                                            <td>19/5/2504</td>
                                                            <td>บจ.ภัทโสภณ จำกัด </td>
                                                            <td>8</td>
                                                            <td>1</td>
                                                            <td>1/6/2504</td>
                                                            <td>2</td>
                                                            <td>จองหุ้น</td>
                                                            <td>1</td>
                                                            <td>5000</td>
                                                            <td>6000</td>
                                                            <td>10.00</td>
                                                            <td>1,000</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19/2/2504</td>
                                                            <td>19/5/2504</td>
                                                            <td>บจ.วันดีดีโก จำกัด</td>
                                                            <td>8</td>
                                                            <td>1</td>
                                                            <td>1/6/2504</td>
                                                            <td>2</td>
                                                            <td>จองหุ้น</td>
                                                            <td>8</td>
                                                            <td>6000</td>
                                                            <td>7000</td>
                                                            <td>10.00</td>
                                                            <td>1,000</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19/2/2504</td>
                                                            <td>19/5/2504</td>
                                                            <td>นาย วิชัย วชิรพงศ์ </td>
                                                            <td>8</td>
                                                            <td>1</td>
                                                            <td>1/6/2504</td>
                                                            <td>2</td>
                                                            <td>จองหุ้น</td>
                                                            <td>8</td>
                                                            <td>7000</td>
                                                            <td>8000</td>
                                                            <td>10.00</td>
                                                            <td>1,000</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19/8/2504</td>
                                                            <td>30/9/2504</td>
                                                            <td>บจ.ณัฐปภัสร์ 59 จำกัด</td>
                                                            <td>8</td>
                                                            <td>1</td>
                                                            <td>30/9/2504</td>
                                                            <td>2</td>
                                                            <td>จองหุ้น</td>
                                                            <td>8</td>
                                                            <td>2500</td>
                                                            <td>3500</td>
                                                            <td>10.00</td>
                                                            <td>1,000</td>
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
                                    <!-- Tab panes 3-->
                                    <div role="tabpanel" class="tab-pane" id="StockNo">
                                        <div>
                                            <!-- bar control-->
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-12 btn_control">
                                                    <div class="__save">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                    <div class="__new">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">insert_drive_file</i>
                                                        </button>
                                                    </div>
                                                    <div class="__close">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">clear</i>
                                                        </button>
                                                    </div>
                                                    <div class="__exit">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">exit_to_app</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- bar function-->
                                            <div class="btn_function">
                                                <div class="__box">
                                                    <div class="_update">
                                                        <i class="material-icons">sync</i>
                                                        <span class="function-name">อัพเดต</span>
                                                    </div>
                                                </div>

                                                <div class="__box">
                                                    <div class="_copy" style="margin-top: 10px">
                                                        <i class="material-icons">content_copy</i><br>
                                                        <span class="function-name">คัดลอก</span>
                                                    </div>
                                                </div>
                                                <div class="__box" style="width: 120px">
                                                    <div class="_Sell">
                                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#largeModalStockNo">
                                                            <i class="material-icons" style="margin-bottom: 13px;">trending_flat</i><br>
                                                            <span class="function-name">ซื้อขาย</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="__box" style="width: 120px">
                                                    <div class="_reduction">
                                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#largeModalReduction" style="margin-top: 10px">
                                                            <i class="material-icons">trending_down</i><br>
                                                            <span class="function-name">ลดทุน</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="__box">
                                                    <div class="_print" style="margin-top: 15px">
                                                        <i class="material-icons">print</i>
                                                        <span class="function-name">พิมพ์</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- table -->
                                            <div class="body table-responsive stock_list">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>วันลงทะเบียน</th>
                                                            <th>วันประชุม</th>
                                                            <th>วันขาดประชุม</th>
                                                            <th>นิติบุคคล/บุคคล</th>
                                                            <th>ทะเบียน</th>
                                                            <th>ลำดับที่พิมพ์</th>
                                                            <th>ใบหุ้นลงวันที่</th>
                                                            <th>ใบหุ้นเลขที่</th>
                                                            <th>จองหุ้น <br> /รับโอน</th>
                                                            <th>Pay Type</th>
                                                            <th>Start No.</th>
                                                            <th>End No.</th>
                                                            <th>มูลค่าหุ้น</th>
                                                            <th>จำนวนหุ้น</th>
                                                            <th>Sell To</th>
                                                            <th>Sell <br /> Start No.</th>
                                                            <th>Sell <br /> End No.</th>
                                                            <th>ใบหุ้นใหม่เลขที่</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>19/2/2504</td>
                                                            <td>19/5/2504</td>
                                                            <td>-</td>
                                                            <td>บจ.พรอสเพอรัส วิน 168 จำกัด </td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>1/6/2504</td>
                                                            <td>1</td>
                                                            <td>จองหุ้น</td>
                                                            <td>1</td>
                                                            <td>2500</td>
                                                            <td>5000</td>
                                                            <td>10.00</td>
                                                            <td>2,500</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19/2/2504</td>
                                                            <td>19/5/2504</td>
                                                            <td>-</td>
                                                            <td>บจ.ภัทโสภณ จำกัด </td>
                                                            <td>8</td>
                                                            <td>1</td>
                                                            <td>1/6/2504</td>
                                                            <td>2</td>
                                                            <td>จองหุ้น</td>
                                                            <td>1</td>
                                                            <td>5000</td>
                                                            <td>6000</td>
                                                            <td>10.00</td>
                                                            <td>1,000</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19/2/2504</td>
                                                            <td>19/5/2504</td>
                                                            <td>-</td>
                                                            <td>บจ.วันดีดีโก จำกัด</td>
                                                            <td>8</td>
                                                            <td>1</td>
                                                            <td>1/6/2504</td>
                                                            <td>2</td>
                                                            <td>จองหุ้น</td>
                                                            <td>8</td>
                                                            <td>6000</td>
                                                            <td>7000</td>
                                                            <td>10.00</td>
                                                            <td>1,000</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19/2/2504</td>
                                                            <td>19/5/2504</td>
                                                            <td>-</td>
                                                            <td>นาย วิชัย วชิรพงศ์ </td>
                                                            <td>8</td>
                                                            <td>1</td>
                                                            <td>1/6/2504</td>
                                                            <td>2</td>
                                                            <td>จองหุ้น</td>
                                                            <td>8</td>
                                                            <td>7000</td>
                                                            <td>8000</td>
                                                            <td>10.00</td>
                                                            <td>1,000</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                                                    <label for="md_checkbox_21"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>19/2/2504</td>
                                                            <td>30/9/2504</td>
                                                            <td>-</td>
                                                            <td>บจ.พรอสเพอรัส วิน 168 จำกัด </td>
                                                            <td>1</td>
                                                            <td>1</td>
                                                            <td>30/9/2504</td>
                                                            <td>1</td>
                                                            <td>โอนหุ้น</td>
                                                            <td>1</td>
                                                            <td>2500</td>
                                                            <td>5000</td>
                                                            <td>10.00</td>
                                                            <td>2,500</td>
                                                            <td>บจ.ณัฐปภัสร์ 59 จำกัด</td>
                                                            <td>2500</td>
                                                            <td>3500</td>
                                                            <th>9</th>
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

                                            <!-- Modal StockNo -->
                                            <div class="modal fade" id="largeModalStockNo" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-lg box__director" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="largeModalLabel">
                                                                การซื้อขายหุ้น
                                                            </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal box__director">
                                                                <div class="btn_function">
                                                                    <div class="__box">
                                                                        <div class="_add">
                                                                            <i class="material-icons">add</i>
                                                                            <span class="function-name">เพิ่ม</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="__box">
                                                                        <div class="_remove">
                                                                            <i class="material-icons">remove</i> <br>
                                                                            <span class="function-name">ลบ</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>ใบหุ้นเลขที่</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="1 " />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>ใบหุ้นลงวันที่</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="1/6/2504" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- row -->
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>Sell To</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <select class="form-control show-tick">
                                                                                    <optgroup label="บริษัท">
                                                                                        <option> บจ.ณัฐปภัสร์ 59 จำกัด </option>
                                                                                        <option> บจ.พรอสเพอรัส วิน 168 จำกัด </option>
                                                                                    </optgroup>
                                                                                    <optgroup label="บุคคล">
                                                                                        <option> นาย วิชัย วชิรพงศ์</option>
                                                                                        <option> MR. SUNSHINE TAGALOG</option>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>Sell Start No.</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="2500" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>Sell End No.</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="3500" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect">
                                                                บันทึก
                                                            </button>
                                                            <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                                ยกเลิก
                                                            </button>
                                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">
                                                                ปิด
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Reduction-->
                                            <div class="modal fade" id="largeModalReduction" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-lg box__director" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="largeModalLabel">
                                                                การลดทุน
                                                            </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal box__director">

                                                                <div class="row clearfix">
                                                                    <div class="col-lg-2 col-md-2">
                                                                        <b>ใบหุ้นเลขที่</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="1 " />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>ใบหุ้นลงวันที่</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="30/10/2504" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- row -->
                                                                <div class="row clearfix">

                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>ลดมูลค่าหุ้น (Par Value) </b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="5.00" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4">
                                                                        <b>ลดจํานวนหุ้น</b>
                                                                        <div class="input-group">
                                                                            <div class="form-line">
                                                                                <input type="text" class="form-control" placeholder="1000" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- row -->
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect">
                                                                บันทึก
                                                            </button>
                                                            <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                                ยกเลิก
                                                            </button>
                                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">
                                                                ปิด
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab panes 4-->
                                    <div role="tabpanel" class="tab-pane" id="Print">
                                        <div>
                                            <!-- bar control-->
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12 col-lg-12 btn_control">
                                                    <div class="__save">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                    <div class="__new">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">insert_drive_file</i>
                                                        </button>
                                                    </div>
                                                    <div class="__close">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">clear</i>
                                                        </button>
                                                    </div>
                                                    <div class="__exit">
                                                        <button type="button" class="btn btn-raised waves-effect">
                                                            <i class="material-icons">exit_to_app</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- bar function-->
                                            <div class="btn_function">

                                                <div class="__box">
                                                    <div class="_print" style="margin-top: 15px">
                                                        <i class="material-icons">print</i>
                                                        <span class="function-name">พิมพ์</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form -->
                                            <form class="form-horizontal box__director">
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-3">
                                                        <b>รูปแบบการพิมพ์</b>
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <select class="form-control show-tick">
                                                                    <optgroup label="รูปแบบที่">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-control">
                                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect">
                                                        บันทึก
                                                    </button>
                                                    <a href="#cancel"></a><button type="button" class="btn btn-raised bg-grey waves-effect">
                                                        ยกเลิก
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Tab panes 5-->
                                    <div role="tabpanel" class="tab-pane" id="Investment">
                                        <div>
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
                                                        <span class="function-name">อัพเดต</span>
                                                    </div>
                                                </div>
                                                <div class="__box">
                                                    <div class="_add">
                                                        <i class="material-icons">add</i>
                                                        <span class="function-name">เพิ่ม</span>
                                                    </div>
                                                </div>
                                                <div class="__box">
                                                    <div class="_remove">
                                                        <i class="material-icons">remove</i> <br>
                                                        <span class="function-name">ลบ</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form -->
                                            <form class="form-horizontal _account">

                                                <div class="row clearfix">

                                                    <div class="col-lg-2 col-md-2">
                                                        <div><b>ลำดับ </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="0000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>บริษัท </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="ชื่อนิติบุคคล">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>ทุนจดทะเบียน (บาท) </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="0000000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>จำนวนหุ้นทั้งหมด</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="0000000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>จำนวนหุ้นที่ถือ</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="000001 - 500000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>มูลค่า (บาท)</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="100000000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2">
                                                        <div><b>สัดส่วน</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="0000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <div><b>มูลค่าหุ้นละ</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2">
                                                        <div><b>เลขหุ้น</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="0000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div><b>จำนวนหุ้น</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="00">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3">
                                                        <div><b>มูลค่าหุ้นที่ชำระแล้ว </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="0%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-"> <b>ใบหุ้นเลขที่</b>
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="00000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3"> <b>สถานที่จัดเก็บ</b>
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <select class="form-control show-tick">
                                                                    <optgroup label="กรุณาเลือก">
                                                                        <option>อาคารสุรวงศ์</option>
                                                                        <option>ห้อง A</option>
                                                                        <option>ห้อง B</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4"> <b>หมายเลขตู้เอกสาร</b>
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <select class="form-control show-tick">
                                                                    <optgroup label="กรุณาเลือก">
                                                                        <option>A01</option>
                                                                        <option>B02</option>
                                                                        <option>C02</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3"> <b>เลขลำดับเอกสาร</b>
                                                        <div class="input-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" placeholder="000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-control">
                                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                                    <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Tab panes 6-->
                                    <div role="tabpanel" class="tab-pane" id="Dividend">
                                        <div>
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
                                                        <span class="function-name">อัพเดต</span>
                                                    </div>
                                                </div>
                                                <div class="__box">
                                                    <div class="_add">
                                                        <i class="material-icons">add</i>
                                                        <span class="function-name">เพิ่ม</span>
                                                    </div>
                                                </div>
                                                <div class="__box">
                                                    <div class="_remove">
                                                        <i class="material-icons">remove</i> <br>
                                                        <span class="function-name">ลบ</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- form -->
                                            <form class="form-horizontal _account">

                                                <div class="row clearfix">

                                                    <div class="col-lg-2 col-md-2">
                                                        <div><b>Securities Code </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="0000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>บริษัท </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="ชื่อนิติบุคคล">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>ทุนจดทะเบียน (บาท) </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="0000000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>จำนวนหุ้นทั้งหมด</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="0000000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>Rate</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="000001 - 500000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>Dividend Amt</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="100000000">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>Announced Date</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="วัน-เดือน-ปี พ.ศ. ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>XD Date</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="วัน-เดือน-ปี พ.ศ. ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>Settlement Date</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="วัน-เดือน-ปี พ.ศ. ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>Payment Date</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="วัน-เดือน-ปี พ.ศ. ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div><b>Payment Settlement Date</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="วัน-เดือน-ปี พ.ศ. ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-control">
                                                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                                                    <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                                                </div>
                                            </form>
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