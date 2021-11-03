<div>

    <!-- form -->
    <form class="form-horizontal __docLocation py-10px">
        <div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2">
                    <b>วันที่เปิดบัญชีหลักทรัพย์<span class="red">*</span></b>
                    <div class="input-group">
                        <div class="form-line disabled">
                            <input type="text" class="form-control" placeholder="1/1/2520" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <b>ชื่อบริษัทหลักทรัพย์</b>
                    <div class="form-group">
                        <select class="form-control show-tick">
                            <optgroup label="กรุณาเลือก">
                                <option>บริษัทหลักทรัพย์ไทยพาณิชย์ จำกัด</option>
                                <option>บริษัทหลักทรัพย์ธนชาต จำกัด (มหาชน) </option>
                                <option>บริษัทหลักทรัพย์ เมย์แบงก์ กิมเอ็ง (ประเทศไทย) จำกัด (มหาชน)</option>
                                <option> บริษัทหลักทรัพย์ ภัทร จำกัด (มหาชน)</option>
                            </optgroup>
                        </select><!-- From Master -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-3"> <b>เลขบัญชีหลักทรัพย์<span class="red">*</span></b>
                    <div class="input-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-2 col-md-2">
                    <b>แนบเอกสาร<span class="red">*</span></b>
                    <div class="input-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="" />
                        </div>
                        <span class="input-group-addon"> <i class="zmdi zmdi-attachment-alt"></i> </span>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- bar function-->
                <div class="btn_function">
                    <div class="__box">
                        <div class="_add">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#AddPerson">
                                <i class="material-icons">add</i>
                                <span class="function-name">เพิ่ม</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <div class="body table-responsive company-list">
                    <table id="mainTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th class="width-120">กรรมการผู้มีอำนาจลงนาม</th>
                                <th class="width-140">คำนำหน้าชื่อ</th>
                                <th class="width-160">ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>นาย</td>
                                <td>วิชัย</td>
                                <td>วชิรพงศ์</td>
                                <td>
                                    <div class="action_btn">
                                        <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>นาง</td>
                                <td>มณีรัตน์</td>
                                <td>งามเรืองพงศ์</td>
                                <td>
                                    <div class="action_btn">
                                        <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>MR.</td>
                                <td>SUNSHINE </td>
                                <td>TAGALOG </td>
                                <td>
                                    <div class="action_btn">
                                        <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>นาย</td>
                                <td>ชนุชตร</td>
                                <td>สุขสันต์</td>
                                <td>
                                    <div class="action_btn">
                                        <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>นางสาว </td>
                                <td>กรรณธิมา</td>
                                <td>คมแก้ว</td>
                                <td>
                                    <div class="action_btn">
                                        <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>นางสาว </td>
                                <td>ธิมา</td>
                                <td>แก้วสวย</td>
                                <td>
                                    <div class="action_btn">
                                        <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row clearfix">
                <!-- bar function-->
                <div class="btn_function">
                    <div class="__box">
                        <div class="_add">
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#AddPerson">
                                <i class="material-icons">add</i>
                                <span class="function-name">เพิ่ม</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- table -->
                <div class="body table-responsive company-list">
                    <table id="mainTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th class="width-120">ผู้รับมอบอำนาจในการสั่งซื้อ</th>
                                <th class="width-140">คำนำหน้าชื่อ</th>
                                <th class="width-160">ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>นาย</td>
                                <td>วิชัย</td>
                                <td>วชิรพงศ์</td>
                                <td>
                                    <div class="action_btn">
                                        <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>นาง</td>
                                <td>มณีรัตน์</td>
                                <td>งามเรืองพงศ์</td>
                                <td>
                                    <div class="action_btn">
                                        <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="btn-control text-align">
            <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
            <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
        </div>
    </form>

    <!-- ModalAdd -->
    <div class="modal fade" id="AddPerson" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg box__director" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- search-->
                    <div class="row clearfix">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="header mp-0">
                                    <h2>ค้นหา</h2>
                                </div>
                                <div class="body mp-0">
                                    <form class="form-horizontal __search ">
                                        <div class="col-sm-12 mp-0">
                                            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">search</i></span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="พิมพ์ชื่อ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-control mp-0 text-align">
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
                            <table class="table table-hover mp-0">
                                <thead>
                                    <tr>
                                        <th style="width: 60px">#</th>
                                        <th>วันที่</th>
                                        <th>คำนำหน้าชื่อ</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>สัญชาติ</th>
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
                                        <td>
                                            <div class="input-group">
                                                <input type="checkbox" id="md_checkbox_s1" class="filled-in chk-col-red _red-vitality" checked />
                                                <label for="md_checkbox_s1"></label>
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
                                        <td>
                                            <div class="input-group">
                                                <input type="checkbox" id="md_checkbox_s2" class="filled-in chk-col-red _red-vitality" checked />
                                                <label for="md_checkbox_s2"></label>
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
                                        <td>
                                            <div class="input-group">
                                                <input type="checkbox" id="md_checkbox_s3" class="filled-in chk-col-red _red-vitality" checked />
                                                <label for="md_checkbox_s3"></label>
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
                                        <td>
                                            <div class="input-group">
                                                <input type="checkbox" id="md_checkbox_s4" class="filled-in chk-col-red _red-vitality" checked />
                                                <label for="md_checkbox_s4"></label>
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
                                        <td>
                                            <div class="input-group">
                                                <input type="checkbox" id="md_checkbox_s5" class="filled-in chk-col-red _red-vitality" checked />
                                                <label for="md_checkbox_s5"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                </div>
            </div>
        </div>

    </div>

</div>