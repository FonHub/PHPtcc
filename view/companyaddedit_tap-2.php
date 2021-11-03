<div>

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
                    <th>วันที่จดทะเบียน</th>
                    <th>ชื่อสาขาภาษาไทย</th>
                    <th>ชื่อสาขาภาษาอังกฤษ</th>
                    <th>ภาษีมูลค่าเพิ่ม</th>
                    <th>ที่อยู่</th>
                    <th>โทรศัพท์</th>
                    <th>อีเมล์</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12 เม.ย.2564</td>
                    <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม</td>
                    <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม</td>
                    <td>มี</td>
                    <td>257/6 หมู่ที่ 14 ถนนมิตรภาพ ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40000</td>
                    <td>02-123-4987</td>
                    <td>exemple@mail.com</td>
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
                    <td>มี</td>
                    <td>8/5 ถนนสามัคคีอุทิศ ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40000</td>
                    <td>02-123-4987</td>
                    <td>exemple@mail.com</td>
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
                            <div class="col-lg-4 col-md-4">
                                <b>ชื่อสาขาภาษาไทย<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input v-model="company_th" type="text" class="form-control ip" placeholder="บจ.ไพร์ม เอ็กซ์ จำกัด" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <b>ชื่อสาขาภาษาอังกฤษ<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input v-model="company_en" type="text" class="form-control ip" placeholder="บจ.ไพร์ม เอ็กซ์ จำกัด" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>ภาษีมูลค่าเพิ่ม<span class="red">*</span></b>
                                <div class="box_flex">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" class="with-gap" id="ig_radio_b1">
                                            <label for="ig_radio_b1"></label>
                                        </span>
                                        <div class="form-line noborder">
                                            <input type="text" class="form-control" placeholder="มี" />
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" class="with-gap" id="ig_radio__b2">
                                            <label for="ig_radio__b2"></label>
                                        </span>
                                        <div class="form-line noborder">
                                            <input type="text" class="form-control" placeholder="ไม่มี" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Address Thai -->
                        <div class="header-status">
                            <h3>ที่อยู่ภาษาไทย</h3>
                        </div>
                        <div>
                            <!-- Address Thai -->

                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3">
                                    <b>บ้านเลขที่<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>หมู่ที่/หมู่บ้าน</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="-" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>อาคาร/หมู่บ้าน</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="TCC" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3">
                                    <b>ชั้น</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>ซอย</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="-" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>ถนน</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="สุรวงศ์" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3">
                                    <b>จังหวัด<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="กรุงเทพมหานคร" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>อำเภอ/เขต<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="บางรัก" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>ตำบล/แขวง<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="สี่พระยา" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>รหัสไปรษณีย์<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="10500" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Address English -->
                        <div class="header-status">
                            <h3>ที่อยู่ภาษาอังกฤษ</h3>
                        </div>
                        <div>
                            <!-- Address English -->

                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3">
                                    <b>House No.<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>Village No.</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="-" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>Building/Village</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="TCC" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3">
                                    <b>Floor</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="1st" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>Soi</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="-" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>Road</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Surawong" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3">
                                    <b>Province</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Bangkok" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>District</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Bangrak" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>Sub-district</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Si Phraya" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>Postal code</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="10500" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-status">
                                <h3>ข้อมูลเพิ่มเติม</h3>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-3"> <b>โทรศัพท์<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3"> <b>อีเมล์<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="">
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
                                <div class="col-lg-2 col-md-2">
                                    <b>วันที่จดทะเบียนจัดตั้ง<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="disabled">
                                            <input type="text" class="form-control" placeholder="1/1/2520" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <b>วันที่เปลี่ยนแปลง<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line disabled">
                                            <input type="text" class="form-control" placeholder="1/1/2520" />
                                        </div>
                                    </div>
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

</div>