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
                            <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#ModalFormDoc"><i class="zmdi zmdi-edit"></i></a>
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
                            <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#ModalFormDoc"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>สมุดทะเบียนหุ้น</td>
                    <td>002</td>
                    <td>อาคารสุรวงศ์ ห้อง B</td>
                    <td>B01</td>
                    <td>-</td>
                    <td>
                        <div class="action_btn">
                            <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#ModalFormDoc"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>เอกสารวันจดเลิกบริษัท</td>
                    <td>002</td>
                    <td>อาคารสุรวงศ์ ห้อง B</td>
                    <td>B01</td>
                    <td>-</td>
                    <td>
                        <div class="action_btn">
                            <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#ModalFormDoc"><i class="zmdi zmdi-edit"></i></a>
                            <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>เอกสารวันจดชำระบัญชี</td>
                    <td>002</td>
                    <td>อาคารสุรวงศ์ ห้อง B</td>
                    <td>B01</td>
                    <td>-</td>
                    <td>
                        <div class="action_btn">
                            <a href="javascript:void(0);" class="btn btn-default" data-toggle="modal" data-target="#ModalFormDoc"><i class="zmdi zmdi-edit"></i></a>
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
                <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
            </div>
        </div>
    </div>

</div>