<div role="tabpanel" class="tab-pane" id="DocLocation">
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
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalFormDoc">
                    <i class="material-icons">add</i>
                    <span class="function-name">Add</span>
                </button>
            </div>
        </div>
    </div>
    <!-- table-->
    <div class="body table-responsive company-list">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width:60px;">#</th>
                    <th>ประเภทเอกสารที่จัดเก็บ</th>
                    <th>เลขลำดับเอกสาร</th>
                    <th>สถานที่เก็บเอกสาร</th>
                    <th>หมายเลขตู้เอกสาร</th>
                    <th>หมายเหตุ</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>สัญญาซื้อขายหุ้น</td>
                    <td>001</td>
                    <td>อาคารสุรวงศ์ ห้อง A</td>
                    <td>A01</td>
                    <td>-</td>
                    <td>
                        <div class="action_btn">
                            <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>สมุดทะเบียนหุ้น</td>
                    <td>001</td>
                    <td>อาคารสุรวงศ์ ห้อง A</td>
                    <td>A01</td>
                    <td>-</td>
                    <td>
                        <div class="action_btn">
                            <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>สมุดทะเบียนหุ้น</td>
                    <td>002</td>
                    <td>อาคารสุรวงศ์ ห้อง B</td>
                    <td>B01</td>
                    <td>-</td>
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

<!-- ModalFormDoc -->
<div class="modal fade" id="ModalFormDoc" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg box__director" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">สถานที่เก็บเอกสาร</h4>
            </div>
            <div class="modal-body">
                <!-- form -->
                <form class="form-horizontal __docLocation">
                    <div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4"> <b>ประเภทเอกสารที่จัดเก็บ</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick">
                                            <optgroup label="ประเภทเอกสารที่จัดเก็บ">
                                                <option>สัญญาซื้อขายหุ้น</option>
                                                <option>สมุดทะเบียนหุ้น</option>
                                                <option>ใบหุ้น (ยกเลิก)</option>
                                                <option>ใบหุ้น (ลงทุน)</option>
                                            </optgroup>
                                        </select><!-- From Master -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2"> <b>เลขลำดับเอกสาร</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="001">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4"> <b>สถานที่เก็บเอกสาร</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick">
                                            <optgroup label="กรุณาเลือก">
                                                <option>อาคารสุรวงศ์</option>
                                                <option>ห้อง A</option>
                                                <option>ห้อง B</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4"> <b>หมายเลขตู้เอกสาร</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <select class="form-control show-tick">
                                            <optgroup label="กรุณาเลือก">
                                                <option>A01</option>
                                                <option>B02</option>
                                                <option>C02</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4"> <b>เลขลำดับเอกสาร</b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="000">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12"> <b>หมายเหตุ</b>
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
                <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>

</div>