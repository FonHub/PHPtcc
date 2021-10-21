<div role="tabpanel" class="tab-pane" id="Director">
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
            <div class="_add">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalAdd">
                    <i class="material-icons">add</i>
                    <span class="function-name">Add</span>
                </button>
            </div>
        </div>
        <div class="__box">
            <div class="_person_add">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalCreate">
                    <i class="material-icons">person_add</i>
                    <span class="function-name">Create</span>
                </button>
            </div>
        </div>
    </div>
    <!-- form -->
    <div class="body table-responsive company-list">
        <table id="mainTable" class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 60px">#</th>
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
                    <td>12 เม.ย.2564</td>
                    <td>-</td>
                    <td>แก้ไขตัวเลข</td>
                    <td>แก้ไขตัวเลข</td>
                    <td>นาย</td>
                    <td>วิชัย</td>
                    <td>วชิรพงศ์</td>
                    <td>ไทย</td>
                    <td>กรรมการ</td>
                    <td>
                        <div class="action_btn">
                            <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
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
                    <td>กรรมการ</td>
                    <td>
                        <div class="action_btn">
                            <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
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
                    <td>กรรมการ</td>
                    <td>
                        <div class="action_btn">
                            <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
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
                        <div class="action_btn">
                            <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
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
                            <div class="w-100px"><b>หมายเลข</b>
                                <div class="input-group">
                                    <div class="form-line disabled">
                                        <input type="text" class="form-control" placeholder="0000" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100px"><b>กลุ่ม</b>
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
                <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>

</div>
