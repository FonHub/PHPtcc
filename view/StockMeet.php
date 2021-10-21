<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>รายละเอียดการประชุม</title>
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
                    <h2>Dashboard
                        <small class="text-muted">Welcome to TCC Application</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="../view/index.php"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="../view/stock.php"></a> ทะเบียนหุ้น</li>
                        <li class="breadcrumb-item active">รายละเอียดการประชุม</li>
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
                                    </div>
                                    <div class="btn-control">
                                        <button type="button" class="btn btn-raised btn-default __redvitality waves-effect">ค้นหา</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div id="company_detail" class="detail__box">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <!-- Content -->
                            <div id="Meeting">
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
                                                    <th>จำนวนหุ้น</th>
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
                                                        <div class="action_btn">
                                                            <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
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
                                                        <div class="action_btn">
                                                            <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
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
                                                        <div class="action_btn">
                                                            <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
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
                                                        <div class="action_btn">
                                                            <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
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
                                                        <div class="action_btn">
                                                            <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
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
                                                        <div class="col-lg-2 col-md-2"> <b>ชื่อย่อหุ้น</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="SET01">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3"> <b>เลขทะเบียนนิติบุคคล</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="0505564001775">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-7"> <b>ชื่อบริษัทภาษาไทย</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="บจ.ชิวา1982 จำกัด">
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
                                                        <div class="col-lg-2 col-md-2">
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
                                                        <div class="col-lg-2 col-md-2">
                                                            <b>ลำดับ</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="1/2564" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3">
                                                            <b>ทุนจดทะเบียน</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="2,500,0000" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2">
                                                            <b>มูลค่าหุ้น</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="10.00" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">

                                                        <div class="col-lg-1 col-md-1"><b>กลุ่ม </b>
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
                                                        <div class="col-lg-4 col-md-4"><b>กรรมการ</b>
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
                                                        <div class="col-lg-4 col-md-4"><b>กรรมการ</b>
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
                                                        <div class="col-lg-2 col-md-2"><b>Running</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control ip" placeholder="1" />
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
                                                        <div class="col-lg-2 col-md-2">
                                                            <b>% การเรียกชำระ </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="25" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <b>ยอดชำระ <small> (%เรียกชำระXRegisterAmount)</small></b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="25" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <b>จำนวนหุ้น </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="2,500" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2">
                                                            <b>มูลค่าหุ้น</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="10.00" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--- add row --->
                                                    <div class="row clearfix">

                                                        <div class="col-lg-1 col-md-1"><b>กลุ่ม</b>
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
                                                        <div class="col-lg-4 col-md-4"><b>กรรมการ</b>
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
                                                        <div class="col-lg-4 col-md-4"><b>กรรมการ</b>
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
                                                        <div class="col-lg-2 col-md-2"><b>Running</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control ip" placeholder="2" />
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
                                                        <div class="col-lg-2 col-md-2">
                                                            <b>% การเรียกชำระ </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="25" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <b>ยอดชำระ <small> (%เรียกชำระXRegisterAmount)</small></b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="25" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <b>จำนวนหุ้น </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="2,500" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2">
                                                            <b>มูลค่าหุ้น</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="10.00" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--- add row --->
                                                    <div class="row clearfix">

                                                        <div class="col-lg-1 col-md-1"><b>กลุ่ม</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <select class="form-control show-tick">
                                                                        <optgroup label="กลุ่ม">
                                                                            <option> </option>
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
                                                        <div class="col-lg-4 col-md-4"><b>กรรมการ</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <select class="form-control show-tick">
                                                                        <optgroup label="รายชื่อกรรมการ">
                                                                            <option> </option>
                                                                            <option> นาย ชนุชตร สุขสันต์</option>
                                                                            <option> นาง สันต์ คมแก้ว</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4"><b>กรรมการ</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <select class="form-control show-tick">
                                                                        <optgroup label="รายชื่อกรรมการ">
                                                                            <option> </option>
                                                                            <option>นางสาว กรรณธิมา คมแก้ว</option>
                                                                            <option> นาง สันต์ คมแก้ว</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2"><b>Running</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control ip" placeholder="" />
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
                                                        <div class="col-lg-2 col-md-2">
                                                            <b>% การเรียกชำระ </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <b>ยอดชำระ <small> (%เรียกชำระXRegisterAmount)</small></b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <b>จำนวนหุ้น </b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder=" " />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2">
                                                            <b>มูลค่าหุ้น</b>
                                                            <div class="input-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" placeholder="" />
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