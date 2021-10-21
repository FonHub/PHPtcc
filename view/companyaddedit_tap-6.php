<div role="tabpanel" class="tab-pane" id="NameHistory">
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
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#syncNamecompany" style="padding: 0;">
                    <i class="material-icons">sync</i>
                    <span class="function-name">Update</span>
                </button>
            </div>
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
                    <th>ชื่อเดิมภาษาไทย</th>
                    <th>ชื่อเดิมภาษาอังกฤษ</th>
                    <th>เอกสารแนบ</th>
                    <th>หมายเหตุ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12/2/2550</td>
                    <td>12/2/2556</td>
                    <td>0105564001931</td>
                    <td>หจ.พ.พัฒนรักษ์</td>
                    <td>บจ.จีจี เกฮลอท จำกัด</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>12/2/2556</td>
                    <td>12/2/2560</td>
                    <td>0105564001931</td>
                    <td>บจ.จีจี เกฮลอท จำกัด</td>
                    <td>บจ.ไพร์ม เอ็กซ์ จำกัด</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

<!-- Modal Large Size -->
<div class="modal fade" id="syncNamecompany" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg box__director" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="syncNamecompany">เปลี่ยนแปลงชื่อบริษัท</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal _namehistory">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2">
                            <div><b>ครั้งที่</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control " placeholder="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div><b>เลขทะเบียนนิติบุคคคล</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control " placeholder="0105564001931">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4"> <b>วันที่เริ่มต้น</b>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="1/7/2560 ">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4"> <b>วันที่สิ้นสุด</b>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="1/7/2564 ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6"> <b>ชื่อเดิมภาษาไทย</b>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="บจ.คิด ตรึก ตรอง จำกัด">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6"> <b>ชื่อเดิมภาษาอังกฤษ</b>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="บจ.คิด ตรึก ตรอง จำกัด">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6"> <b>ชื่อใหม่ภาษาไทย</b>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="บจ.ที โรบอติคส์ จำกัด">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6"> <b>ชื่อใหม่ภาษาอังกฤษ</b>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="บจ.ที โรบอติคส์ จำกัด">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6"> <b>เอกสารแนบ</b>
                            <div class="input-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6"> <b>หมายเหตุ</b>
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
                <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>
</div>