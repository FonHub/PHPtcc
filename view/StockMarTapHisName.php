<div>
    <!-- bar function-->
    <div class="btn_function">
        <div class="__box">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#syncHisNameLot">
                <i class="material-icons">sync</i>
                <span class="function-name">อัพเดต</span>
            </button>
        </div>
    </div>
    <!-- table -->
    <div class="body table-responsive company-list">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 60px">ครั้งที่</th>
                    <th>วันที่เริ่มต้น</th>
                    <th>วันที่สิ้นสุด</th>
                    <th>เลขทะเบียนนิติบุคคคล</th>
                    <th>ชื่อผู้ถือหุ้นเดิม</th>
                    <th>ชื่อผู้ถือชื่อปัจจุบัน</th>
                    <th>เอกสารแนบ</th>
                    <th>หมายเหตุ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1 ต.ค. 2520</td>
                    <td>1 ต.ค. 2550</td>
                    <td>0105564001931</td>
                    <td>บริษัท ทีซีซี ไพรเวท จำกัด</td>
                    <td>บริษัทกลุ่มทีซีซี ไพรเวท จำกัด </td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1 ต.ค. 2510</td>
                    <td>1 ต.ค. 2520</td>
                    <td>0105564001931</td>
                    <td>บจ.จีจี เกฮลอท จำกัด</td>
                    <td>บริษัท ทีซีซี ไพรเวท จำกัด</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

<!-- Modal Large Size -->
<div class="modal fade" id="syncHisNameLot" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg box__director" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="syncHisNameLot">เปลี่ยนแปลงชื่อบริษัท</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal _namehistory">
                    <div class="row clearfix">
                        <div class="col-lg-1 col-md-1">
                            <div><b>ครั้งที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <input type="text" class="form-control " placeholder="1">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div><b>เลขทะเบียนนิติบุคคคล<span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control " placeholder="0105564001931">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4"> <b>วันที่เริ่มต้น<span class="red">*</span></b>
                            <div class="input-group">
                                <div>
                                    <input type="text" class="form-control" placeholder="1/7/2560 ">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4"> <b>วันที่สิ้นสุด<span class="red">*</span></b>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="30 ต.ค. 2550 ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6"> <b>ชื่อผู้ถือหุ้นเดิม<span class="red">*</span></b>
                            <div class="input-group">
                                <div>
                                    <input type="text" class="form-control" placeholder="บจ.จีจี เกฮลอท จำกัด">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6"> <b>ชื่อผู้ถือชื่อปัจจุบัน<span class="red">*</span></b>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="บริษัท ทีซีซี ไพรเวท จำกัด">
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
                        <div class="col-lg-6 col-md-6"> <b>หมายเหตุ<span class="red">*</span></b>
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
                <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
            </div>
        </div>
    </div>
</div>