<div role="tabpanel" class="tab-pane" id="BranchAdd">

    <!-- bar function-->
    <div class="btn_function">
        <div class="__box">
            <div class="_add">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#AddBranch">
                    <i class="material-icons">add</i>
                    <br>
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
                    <th style="width: 60px">#</th>
                    <th>วันที่</th>
                    <th>ชื่อบริษัทภาษาไทย</th>
                    <th>ชื่อบริษัทภาษาอังกฤษ</th>
                    <th>เลขทะเบียนนิติบุคคล</th>
                    <th>ที่อยู่</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12 เม.ย.2564</td>
                    <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม</td>
                    <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม</td>
                    <td>0102564000010</td>
                    <td>257/6 หมู่ที่ 14 ถนนมิตรภาพ ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40000</td>
                    <td>257/6 หมู่ที่ 14 ถนนมิตรภาพ ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40000</td>
                    <td>
                        <div class="action_btn">
                            <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#AddBranch"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>12 เม.ย.2564</td>
                    <td> หจ.เดอะ ไลอ้อน มิลค์ที</td>
                    <td> หจ.เดอะ ไลอ้อน มิลค์ที</td>
                    <td>0103564000011</td>
                    <td>8/5 ถนนสามัคคีอุทิศ ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40000</td>
                    <td>8/5 ถนนสามัคคีอุทิศ ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40000</td>
                    <td>
                        <div class="action_btn">
                            <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#AddBranch"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- ModalAdd -->
    <div class="modal fade" id="AddBranch" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg box__director">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">ข้อมูลสาขา</h4>
                </div>
                <div class="modal-body">
                    <!-- form -->
                    <form class="form-horizontal __HeadAdd">

                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6">
                                <b>เลขทะเบียนนิติบุคคล <span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input v-model="old_juristic_id" type="text" class="form-control ip" placeholder="0105564002147" maxlength="13" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <b>นิติบุคคล<span class="red">*</span></b>
                                <div class="form-group">
                                    <select class="form-control show-tick">
                                        <optgroup label="กรุณาเลือก">
                                            <option>ห้างหุ้นส่วนสามัญนิติบุคคล (หสน.)</option>
                                            <option>ห้างหุ้นส่วนจำกัด (หจก.)</option>
                                            <option>บริษัทจำกัด (บจ.)</option>
                                            <option>บริษัทมหาชนจำกัด (บมจ.)</option>
                                        </optgroup>
                                    </select><!-- From Master -->
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6">
                                <b>ชื่อบริษัทภาษาไทย<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input v-model="company_th" type="text" class="form-control ip" placeholder="บจ.ไพร์ม เอ็กซ์ จำกัด" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <b>ชื่อบริษัทภาษาอังกฤษ<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input v-model="company_en" type="text" class="form-control ip" placeholder="บจ.ไพร์ม เอ็กซ์ จำกัด" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Switch Address -->

                        <div v-if="!isForeigners">
                            <!-- Address Thai -->
                            <div class="header-status">
                                <h3>ที่อยู่ภาษาไทย</h3>
                            </div>
                            <div class="row clearfix"></div>
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

                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6"> <b>เบอร์โทรศัพท์</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6"> <b>เบอร์โทรสาร</b>
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