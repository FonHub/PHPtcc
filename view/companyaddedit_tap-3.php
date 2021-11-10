<div>
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
                    <span class="function-name">จัดการ</span>
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
                    <th>วันที่เป็นกรรมการ</th>
                    <th>วันที่สิ้นสุด</th>
                    <th>อำนาจกรรมการ <span class="badge badge-primary" data-toggle="modal" data-target="#Detaillist">คำอธิบาย</span> </th>
                    <th>กลุ่ม</th>
                    <th>คำนำหน้าชื่อ</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>สัญชาติ</th>
                    <th>สถานะ</th>
                    <th></th>
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
                    <td>Active</td>
                    <td>
                        <div class="input-group">
                            <input type="checkbox" id="md_checkbox_m1" class="filled-in chk-col-red _red-vitality" checked />
                            <label for="md_checkbox_m1"></label>
                        </div>
                    </td>
                    <td>
                        <div class="action_btn">
                            <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
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
                    <td>Active</td>
                    <td>
                        <div class="input-group">
                            <input type="checkbox" id="md_checkbox_m2" class="filled-in chk-col-red _red-vitality" checked />
                            <label for="md_checkbox_m2"></label>
                        </div>
                    </td>
                    <td>
                        <div class="action_btn">
                            <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
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
                    <td>Active</td>
                    <td>
                        <div class="input-group">
                            <input type="checkbox" id="md_checkbox_m3" class="filled-in chk-col-red _red-vitality" checked />
                            <label for="md_checkbox_m3"></label>
                        </div>
                    </td>
                    <td>
                        <div class="action_btn">
                            <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>12 เม.ย.2550</td>
                    <td>12 เม.ย.2552</td>
                    <td>0</td>
                    <td>0</td>
                    <td>นาย</td>
                    <td>ชนุชตร</td>
                    <td>สุขสันต์</td>
                    <td>ไทย</td>
                    <td>No Active</td>
                    <td>
                        <div class="input-group">
                            <input type="checkbox" id="md_checkbox_m4" class="filled-in chk-col-red _red-vitality" checked />
                            <label for="md_checkbox_m4"></label>
                        </div>
                    </td>
                    <td>
                        <div class="action_btn">
                            <a href="../view/PersonAddEdit.php" class="btn btn-default" target="_blank"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>12 เม.ย.2545</td>
                    <td>12 เม.ย.2554</td>
                    <td>0</td>
                    <td>0</td>
                    <td>นางสาว </td>
                    <td>กรรณธิมา</td>
                    <td>คมแก้ว</td>
                    <td>ไทย</td>
                    <td>No Active</td>
                    <td>
                        <div class="input-group">
                            <input type="checkbox" id="md_checkbox_m5" class="filled-in chk-col-red _red-vitality" checked />
                            <label for="md_checkbox_m5"></label>
                        </div>
                    </td>
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

<!-- ModalCreate -->
<div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg box__director" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">แต่งตั้ง, แก้ไข กรรมการ</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal box__director">
                    <div class="row clearfix">
                        <div class="col-lg-1 col-md-1"> <b>Status<span class="red">*</span></b>
                            <div class="input-group">
                                <div class="switch">
                                    <label>Active<input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1">
                            <div><b>กลุ่ม<span class="red">*</span></b>
                                <div class="form-group">
                                    <select class="form-control show-tick">
                                        <optgroup label="กรุณาเลือก">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </optgroup>
                                    </select><!-- From Master -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2"><b>อำนาจกรรมการ<span class="red">*</span></b>
                            <div class="form-group">
                                <select class="form-control show-tick">
                                    <optgroup label="กรุณาเลือก">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </optgroup>
                                </select><!-- From Master -->
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7"><b>รายละเอียดอำนาจกรรมการ<span class="red">*</span></b>
                            <div class="form-group">
                                <select class="form-control show-tick">
                                    <optgroup label="กรุณาเลือก">
                                        <option>กรรมการคนใดคนหนึ่งลงลายมือชื่อ และประทับตราสำคัญของบริษัท</option>
                                        <option>กรรมการสองคนลงลายมือชื่อร่วมกัน และประทับตราสำคัญของบริษัท</option>
                                        <option>กรรมการสองคนลงลายมือชื่อร่วมกัน</option>
                                        <option>กรรมการกลุ่ม 1 และกลุ่ม 2 รวมเป็นสองคนลงลายมือชื่อร่วมกัน และประทับตราสำคัญของบริษัท</option>
                                        <option>กรรมการกลุ่ม 1 และกลุ่ม 2 รวมเป็นสองคนลงลายมือชื่อร่วมกัน</option>
                                        <option>กรรมการกลุ่ม 1 และกลุ่ม 2 หรือกลุ่ม 3 รวมเป็นสองคนลงลายมือชื่อร่วมกัน และประทับตราสำคัญของบริษัท</option>
                                        <option>กรรมการกลุ่ม 2 และกลุ่ม 3 รวมเป็นสองคนลงลายมือชื่อร่วมกัน และประทับตราสำคัญของบริษัท</option>
                                        <option>กรรมการกลุ่ม 2 และกลุ่ม 3 หรือกลุ่ม 4 รวมเป็นสองคนลงลายมือชื่อร่วม และประทับตราสำคัญของบริษัท</option>
                                        <option>กรรมการกลุ่ม 3 และกลุ่ม 4 รวมเป็นสองคนลงลายมือชื่อร่วม และประทับตราสำคัญของบริษัท</option>
                                        <option>กรรมการที่ไม่มีอำนาจลงนาม (กรรมการลอย)</option>
                                    </optgroup>
                                </select><!-- From Master -->
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix py-10px">
                        <div class="col-lg-3 col-md-3"> <b>วันที่เป็นกรรมการ<span class="red">*</span></b>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="30 ต.ค. 2550">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3"> <b>วันที่สิ้นสุด<span class="red">*</span></b>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="30 ต.ค. 2550">
                                </div>
                            </div>
                        </div>
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
                </form>
            </div>
            <div class="modal-footer">
                <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
            </div>
        </div>
    </div>
</div>

<!-- modal Detaillist -->
<div class="modal fade" id="Detaillist" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="DetaillistLabel">คำอธิบายกลุ่มคณะกรรมการ</h4>
            </div>
            <div class="modal-body">
                <div>
                    <h5> กลุ่ม 1</h5>
                    <small>กรรมการคนใดคนหนึ่งลงลายมือชื่อ และประทับตราสำคัญของบริษัท</small>
                </div>
                <div>
                    <h5> กลุ่ม 2 </h5>
                    <small>กรรมการสองคนลงลายมือชื่อร่วมกัน และประทับตราสำคัญของบริษัท</small>
                </div>
                <div>
                    <h5> กลุ่ม 3 </h5>
                    <small>กรรมการสองคนลงลายมือชื่อร่วมกัน</small>
                </div>
                <div>
                    <h5>กลุ่ม 4 </h5>
                    <small>กรรมการกลุ่ม 1 และกลุ่ม 2 รวมเป็นสองคนลงลายมือชื่อร่วมกัน และประทับตราสำคัญของบริษัท</small>
                </div>
                <div>
                    <h5>กลุ่ม 5 </h5>
                    <small>กรรมการกลุ่ม 1 และกลุ่ม 2 รวมเป็นสองคนลงลายมือชื่อร่วมกัน</small>
                </div>
                <div>
                    <h5>กลุ่ม 6 </h5>
                    <small>กรรมการกลุ่ม 1 และกลุ่ม 2 หรือกลุ่ม 3 รวมเป็นสองคนลงลายมือชื่อร่วมกัน และประทับตราสำคัญของบริษัท</small>
                </div>
                <div>
                    <h5>กลุ่ม 7 </h5>
                    <small>กรรมการกลุ่ม 2 และกลุ่ม 3 รวมเป็นสองคนลงลายมือชื่อร่วมกัน และประทับตราสำคัญของบริษัท</small>
                </div>
                <div>
                    <h5>กลุ่ม 8 </h5>
                    <small>กรรมการกลุ่ม 2 และกลุ่ม 3 หรือกลุ่ม 4 รวมเป็นสองคนลงลายมือชื่อร่วม และประทับตราสำคัญของบริษัท</small>
                </div>
                <div>
                    <h5>กลุ่ม 9 </h5>
                    <small>กรรมการกลุ่ม 3 และกลุ่ม 4 รวมเป็นสองคนลงลายมือชื่อร่วม และประทับตราสำคัญของบริษัท</small>
                </div>
                <div>
                    <h5>กลุ่ม 10 </h5>
                    <small>กรรมการที่ไม่มีอำนาจลงนาม (กรรมการลอย)</small>
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
                                            <input type="checkbox" id="md_checkbox_d1" class="filled-in chk-col-red _red-vitality" checked />
                                            <label for="md_checkbox_d1"></label>
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
                                            <input type="checkbox" id="md_checkbox_d2" class="filled-in chk-col-red _red-vitality" checked />
                                            <label for="md_checkbox_d2"></label>
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
                                            <input type="checkbox" id="md_checkbox_d3" class="filled-in chk-col-red _red-vitality" checked />
                                            <label for="md_checkbox_d3"></label>
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
                                            <input type="checkbox" id="md_checkbox_d4" class="filled-in chk-col-red _red-vitality" checked />
                                            <label for="md_checkbox_d4"></label>
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
                                            <input type="checkbox" id="md_checkbox_d5" class="filled-in chk-col-red _red-vitality" checked />
                                            <label for="md_checkbox_d5"></label>
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