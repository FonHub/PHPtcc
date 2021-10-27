 <div role="tabpanel" class="tab-pane in active" id="HeadAdd">

     <!-- bar function-->
     <div class="btn_function">
         <div class="__box">
             <div class="_update">
                 <button type="button" class="btn btn-default">
                     <i class="material-icons">sync</i>
                     <br>
                     <span class="function-name">อัพเดต</span>
                 </button>
             </div>
         </div>
     </div>
     <!-- form -->
     <form class="form-horizontal __HeadAdd">
         <!-- Address Thai -->
         <div class="header-status">
             <h3>ที่อยู่ภาษาไทย</h3>
         </div>
         <div class="row clearfix">
             <div class="col-lg-3 col-md-3">
                 <b>เลขที<span class="red">*</span></b>
                 <div class="input-group">
                     <div class="form-line">
                         <input type="text" class="form-control" placeholder="1  อาคารทีพี แอนด์ ที" />
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-3">
                 <b>หมู่ที่/หมู่บ้าน<span class="red">*</span></b>
                 <div class="input-group">
                     <div class="form-line">
                         <input type="text" class="form-control" placeholder=" ชั้นที่ 22 ซอยวิภาวดีรังสิต 19" />
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-3">
                 <b>ถนน<span class="red">*</span></b>
                 <div class="input-group">
                     <div class="form-line">
                         <input type="text" class="form-control" placeholder="วิภาวดีรังสิต" />
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
                                 {{ list.name_th }}กรุงเทพมหานคร
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
             <div class="col-lg-6 col-md-6"> <b>เบอร์โทรศัพท์<span class="red">*</span></b>
                 <div class="input-group">
                     <div class="form-line">
                         <input type="text" class="form-control" placeholder="">
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6"> <b>เบอร์โทรสาร<span class="red">*</span></b>
                 <div class="input-group">
                     <div class="form-line">
                         <input type="text" class="form-control" placeholder="">
                     </div>
                 </div>
             </div>
         </div>
         <div class="row clearfix">
             <div class="col-lg-6 col-md-6"> <b>แนบเอกสาร<span class="red">*</span></b>
                 <div class="input-group">
                     <div class="form-line">
                         <input type="text" class="form-control" placeholder="">
                     </div>
                 </div>
             </div>
         </div>
         <div class="btn-control text-align">
             <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
             <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
         </div>
     </form>
 </div>