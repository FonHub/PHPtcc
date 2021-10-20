<div role="tabpanel" class="tab-pane" id="BranchAdd">
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
    </div>
    <!-- form -->
    <form class="form-horizontal __HeadAdd">
        <!-- Switch Address -->
       
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

        <div v-if="isForeigners">
            <AddressForeigner />
        </div>
        <div class="btn-control">
            <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
            <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
        </div>
    </form>
</div>