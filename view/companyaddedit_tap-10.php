<div>

    <!-- bar function-->
    <div class="btn_function">
        <div class="__box">
            <div class="_add">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalFormDoc">
                    <i class="material-icons">add</i>
                    <span class="function-name">เพิ่ม</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Form-->
    <div >
        <div class="box__director" >
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">สถานที่เก็บเอกสาร</h4>
                </div>
                <div class="modal-body">
                    <!-- form -->
                    <form class="form-horizontal __docLocation">
                        <div>
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4"> <b>ประเภทเอกสารที่จัดเก็บ<span class="red">*</span></b>
                                    <div class="form-group">
                                        <select class="form-control show-tick">
                                            <optgroup label="กรุณาเลือก">
                                                <option>สัญญาซื้อขายหุ้น</option>
                                                <option>สมุดทะเบียนหุ้น</option>
                                                <option>ใบหุ้น (ยกเลิก)</option>
                                                <option>ใบหุ้น (ลงทุน)</option>
                                            </optgroup>
                                        </select><!-- From Master -->
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2"> <b>เลขลำดับเอกสาร<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="001">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-4"> <b>สถานที่เก็บเอกสาร<span class="red">*</span></b>
                                    <div class="form-group">
                                        <select class="form-control show-tick">
                                            <optgroup label="กรุณาเลือก">
                                                <option>อาคารสุรวงศ์ ห้อง A</option>
                                                <option>อาคารสุรวงศ์ ห้อง B</option>
                                            </optgroup>
                                        </select><!-- From Master -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4"> <b>หมายเลขตู้เอกสาร<span class="red">*</span></b>
                                    <div class="form-group">
                                        <select class="form-control show-tick">
                                            <optgroup label="กรุณาเลือก">
                                                <option>A01</option>
                                                <option>B02 </option>
                                            </optgroup>
                                        </select><!-- From Master -->
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4"> <b>เลขลำดับเอกสาร<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12"> <b>หมายเหตุ<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
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
