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
                    <th>บันทึกเพิ่มเติม</th>
                    <th>ชื่อผู้บันทึก</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12 เม.ย.2564</td>
                    <td>0105564002121</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1 เม.ย.2564</td>
                    <td>0105564002139</td>
                    <td>บจ.ไพร์ม เอ็กซ์ จำกัด</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>20 มี.ค. 2564</td>
                    <td>0105564002325</td>
                    <td>บจ.วีไทยมิน จำกัด </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>12 เม.ย.2564</td>
                    <td>0105564002490</td>
                    <td>บจ.วอนนา วัน กรุ๊ป จำกัด</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>10 เม.ย.2564</td>
                    <td>0105564002511 </td>
                    <td>บจ.อินฟินิตี้ วิสดอม จำกัด</td>
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
                    <div class="row clearfix"></div>
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