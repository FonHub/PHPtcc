<div>

    <!-- bar function-->
    <div class="btn_function">
        <div class="__box">
            <div class="_add">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalNote">
                    <i class="material-icons">add</i>
                    <span class="function-name">เพิ่ม</span>
                </button>
            </div>
        </div>
    </div>
    <!-- table -->
    <div class="body table-responsive company-list">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 60px">#</th>
                    <th>วันที่บันทึก</th>
                    <th>หมวดหมู่</th>
                    <th>บันทึกเพิ่มเติม</th>
                    <th>ชื่อผู้บันทึก</th>
                    <th>แนบเอกสาร</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12 เม.ย.2564</td>
                    <td>หมวดหมู่ 1</td>
                    <td>ข้อความตัวอย่างเพื่อแสดงให้คุณเห็นว่าทำงานอย่างไร</td>
                    <td>ชื่อผู้ใช้ผู้บันทึก</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1 เม.ย.2564</td>
                    <td>หมวดหมู่ 1</td>
                    <td>ข้อความตัวอย่างเพื่อแสดงให้คุณเห็นว่าทำงานอย่างไร</td>
                    <td>ชื่อผู้ใช้ผู้บันทึก</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>20 มี.ค. 2564</td>
                    <td>หมวดหมู่ 1</td>
                    <td>ข้อความตัวอย่างเพื่อแสดงให้คุณเห็นว่าทำงานอย่างไร</td>
                    <td>ชื่อผู้ใช้ผู้บันทึก</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>12 เม.ย.2564</td>
                    <td>หมวดหมู่ 1</td>
                    <td>ข้อความตัวอย่างเพื่อแสดงให้คุณเห็นว่าทำงานอย่างไร</td>
                    <td>ชื่อผู้ใช้ผู้บันทึก</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>10 เม.ย.2564</td>
                    <td>หมวดหมู่ 1</td>
                    <td>ข้อความตัวอย่างเพื่อแสดงให้คุณเห็นว่าทำงานอย่างไร </td>
                    <td>ชื่อผู้ใช้ผู้บันทึก</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- ModalAdd -->
    <div class="modal fade" id="ModalNote" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg box__director" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">บันทึกเพิ่มเติม</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4">
                            <b>หมวดหมู่การบันทึก</b>
                            <div class="form-group">
                                <select class="form-control show-tick">
                                    <optgroup label="กรุณาเลือก">
                                        <option>หมวดหมู่การบันทึก 1</option>
                                        <option>หมวดหมู่การบันทึก 2</option>
                                    </optgroup>
                                </select><!-- From Master -->
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
                        <div class="col-md-12">
                            <form>
                                <textarea>บันทึก...</textarea>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                </div>
            </div>
        </div>
    </div>

</div>