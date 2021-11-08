<div>
    <!-- bar function-->
    <div class="btn_function">
        <div class="__box">
            <div class="_addlot">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#CreateNewLotModal">
                    <i class="material-icons">add</i>
                    <span class="function-name">เพิ่ม</span>
                </button>
            </div>
        </div>
        <div class="__box">
            <div class="_Sell">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#StockNoModal">
                    <i class="material-icons">sync</i><br>
                    <span class="function-name">โอนหุ้น</span>
                </button>
            </div>
        </div>
        <div class="__box">
            <div class="_print">
                <button type="button" class="btn btn-default">
                    <i class="material-icons">print</i>
                    <span class="function-name">พิมพ์</span>
                </button>
            </div>
        </div>
    </div>
    <div class="header">
        <h2>ผู้ถือหุ้นปัจจุบัน</h2>
    </div>
    <!-- table -->
    <div class="body table-responsive stock_list">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>เข้าเป็นผู้ถือหุ้นโดย</th>
                    <th>ใบหุ้นลงวันที่</th>
                    <th>ผู้ถือหุ้น</th>
                    <th>ใบหุ้นเลขที่</th>
                    <th>มูลค่าหุ้น</th>
                    <th>หุ้นหมายเลข จาก-ถึง</th>
                    <th>จำนวนหุ้น</th>
                    <th>ผู้รับโอน</th>
                    <th>ใบหุ้นใหม่เลขที่</th>
                    <th>วันที่โอน</th>
                    <th>จำนวนหุ้นที่โอน</th>
                    <th>หมายเลขหุ้นที่โอน จาก-ถึง</th>
                    <th>หุ้นคงเหลือ</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>เพิ่มทุน</td> <!-- เข้าเป็นผู้ถือหุ้นโดย -->
                    <td>18 ก.ย. 56</td><!-- ใบหุ้นลงวันที่ -->
                    <td>จองหุ้น/เพิ่มทุน </td><!-- ผู้ถือหุ้น -->
                    <td>15</td><!-- ใบหุ้นเลขที่ -->
                    <td>10.00</td><!-- มูลค่าหุ้น -->
                    <td>118400007-184200004</td><!-- หุ้นหมายเลข จาก-ถึง -->
                    <td>65,799,996</th><!-- จำนวนหุ้น -->
                    <td>-</td><!-- ผู้รับโอน -->
                    <td>-</td><!-- ใบหุ้นใหม่เลขที่ -->
                    <td>2 พ.ย. 60</td><!-- วันที่โอน -->
                    <td>-</td><!-- จำนวนหุ้นที่โอน -->
                    <td>-</td><!-- หมายเลขหุ้นที่โอน จาก-ถึง -->
                    <td>-</td><!-- หุ้นคงเหลือ -->
                    <td>
                        <div class="input-group">
                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                            <label for="md_checkbox_21"></label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>รับโอน</td> <!-- เข้าเป็นผู้ถือหุ้นโดย -->
                    <td>22 ธ.ค. 59</td><!-- ใบหุ้นลงวันที่ -->
                    <td>บจ.ซีเอ็นที สตาร์ จำกัด</td><!-- ผู้ถือหุ้น -->
                    <td>1</td><!-- ใบหุ้นเลขที่ -->
                    <td>10.00</td><!-- มูลค่าหุ้น -->
                    <td>1-9993</td><!-- หุ้นหมายเลข จาก-ถึง -->
                    <td>9,993</th><!-- จำนวนหุ้น -->
                    <td>บจ.เพชรดีไซน์ จำกัด</td><!-- ผู้รับโอน -->
                    <td>18</td><!-- ใบหุ้นใหม่เลขที่ -->
                    <td>4 ส.ค. 60</td><!-- วันที่โอน -->
                    <td>99</td><!-- จำนวนหุ้นที่โอน -->
                    <td>1-99</td><!-- หมายเลขหุ้นที่โอน จาก-ถึง -->
                    <td>9,894</td><!-- หุ้นคงเหลือ -->
                    <td>
                        <div class="input-group">
                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                            <label for="md_checkbox_21"></label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>หุ้นเหลือ</td> <!-- เข้าเป็นผู้ถือหุ้นโดย -->
                    <td>22 ธ.ค. 59</td><!-- ใบหุ้นลงวันที่ -->
                    <td>หุ้นคงเหลือ</td><!-- ผู้ถือหุ้น -->
                    <td>18</td><!-- ใบหุ้นเลขที่ -->
                    <td>10.00</td><!-- มูลค่าหุ้น -->
                    <td>100-9993</td><!-- หุ้นหมายเลข จาก-ถึง -->
                    <td>9,894</th><!-- จำนวนหุ้น -->
                    <td>บจ.ซีเอ็นที สตาร์ จำกัด</td><!-- ผู้รับโอน -->
                    <td>-</td><!-- ใบหุ้นใหม่เลขที่ -->
                    <td>4 ส.ค. 60</td><!-- วันที่โอน -->
                    <td>99</td><!-- จำนวนหุ้นที่โอน -->
                    <td>100-198</td><!-- หมายเลขหุ้นที่โอน จาก-ถึง -->
                    <td>9,795</td><!-- หุ้นคงเหลือ -->
                    <td>
                        <div class="input-group">
                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                            <label for="md_checkbox_21"></label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row clearfix">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>ผู้ถือขาด</h2>
                </div>
                <!-- table -->
                <div class="body table-responsive stock_list">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ผู้โอน</th>
                                <th>ใบหุ้นเดิมเลขที่</th>
                                <th>หุ้นหมายเลข จาก-ถึง</th>
                                <th>จำนวนหุ้น</th>
                                <th>การรับโอน</th>
                                <th>วันที่โอน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>นาย วิชัย วชิรพงศ์</td> <!-- ผู้โอน -->
                                <td>2</td><!-- ใบหุ้นเดิมเลขที่ -->
                                <td>1-9994</td><!-- หุ้นหมายเลข จาก-ถึง -->
                                <td>1</td><!-- จำนวนหุ้น -->
                                <td>ยกเลิกหุ้น/ลดทุน</td><!-- การรับโอน-->
                                <td>2 พ.ย. 60</th><!-- วันที่โอน -->
                            </tr>
                            <tr>
                                <td>นาง มณีรัตน์ งามเรืองพงศ์</td> <!-- ผู้โอน -->
                                <td>3</td><!-- ใบหุ้นเดิมเลขที่ -->
                                <td>1-9995</td><!-- หุ้นหมายเลข จาก-ถึง -->
                                <td>1</td><!-- จำนวนหุ้น -->
                                <td>ยกเลิกหุ้น/ลดทุน</td><!-- การรับโอน-->
                                <td>2 พ.ย. 60</th><!-- วันที่โอน -->
                            </tr>
                            <tr>
                                <td>บจ.ซีเอ็นที สตาร์ จำกัด</td> <!-- ผู้โอน -->
                                <td>13</td><!-- ใบหุ้นเดิมเลขที่ -->
                                <td>9996-9998</td><!-- หุ้นหมายเลข จาก-ถึง -->
                                <td>3</td><!-- จำนวนหุ้น -->
                                <td>ยกเลิกใบหุ้น</td><!-- การรับโอน-->
                                <td>4 ส.ค. 60</th><!-- วันที่โอน -->
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Create New Lot -->
    <div class="modal fade" id="CreateNewLotModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg box__director" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">
                        เพิ่มผู้ถือหุ้น/ชำระเพิ่ม
                    </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal box__director">
                        <div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2">
                                    <b>วันที่จัดตั้งบริษัท<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="disabled">
                                            <input type="text" class="form-control" placeholder="1/1/2520" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <b>วันที่ชำระหุ้นเพิ่ม<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="1/1/2520" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-1 col-md-1"><b>ทะเบียน <span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="disabled">
                                            <input type="text" class="form-control" placeholder="1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1"><b>กลุ่ม <span class="red">*</span></b>
                                    <div class="form-group">
                                        <select class="form-control show-tick">
                                            <optgroup label="กลุ่ม">
                                                <option> 1</option>
                                                <option> 2</option>
                                                <option> 3</option>
                                                <option> 4</option>
                                                <option> 5</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6"><b>กรรมการ<span class="red">*</span></b>
                                    <div class="form-group">
                                        <select class="form-control show-tick">
                                            <optgroup label="รายชื่อกรรมการ">
                                                <option> นาย วิชัย วชิรพงศ์</option>
                                                <option> นาง มณีรัตน์ งามเรืองพงศ์</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1"><b>ลำดับที่พิมพ์<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="disabled">
                                            <input type="text" class="form-control ip" placeholder="1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1"><b>กำหนดเอง<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control ip" placeholder="1" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-1 col-md-1">
                                    <b>ใบหุ้นเลขที่<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div>
                                            <input type="text" class="form-control" placeholder="1" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3">
                                    <b>จากหมายเลขหุ้นเลขที่<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="7499" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>ถึงหมายเลขหุ้นเลขที่<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="9998" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>จำนวนหุ้น <span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="2,500" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-1 col-md-1">
                                    <b>มูลค่าหุ้น<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="10.00" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>ราคาตกลงซื้อขายมูลค่าหุ้นละ<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="1.00" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>% การเรียกชำระ <span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="25" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <b>ยอดชำระ <span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="25" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- row -->
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal StockNo -->
    <div class="modal fade" id="StockNoModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg box__director" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">
                        การโอนหุ้น
                    </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal box__director">
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2">
                                <b>ใบหุ้นเดิมเลขที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="2" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>จากหมายเลขหุ้นเลขที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="9994" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>ถึงหมายเลขหุ้นเลขที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="9994" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>จำนวนหุ้น <span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="1" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1">
                                <b>มูลค่าหุ้น<span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="10.00" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2">
                                <b>ใบหุ้นเดิมเลขที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="1" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>จากหมายเลขหุ้นเลขที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="1" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>ถึงหมายเลขหุ้นเลขที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="9993" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>จำนวนหุ้น <span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="9,993" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1">
                                <b>มูลค่าหุ้น<span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="10.00" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2">
                                <b>ใบหุ้นลงวันที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="22 ธ.ค. 60" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <b>วันที่โอน<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="2 พ.ย. 60" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <b>ผู้รับโอน<span class="red">*</span></b>
                                <div class="form-group">
                                    <select class="form-control show-tick">
                                        <optgroup label="บริษัท">
                                            <option> บจ.ณัฐปภัสร์ 59 จำกัด </option>
                                            <option> บจ.พรอสเพอรัส วิน 168 จำกัด </option>
                                        </optgroup>
                                        <optgroup label="บุคคล">
                                            <option> นาย วิชัย วชิรพงศ์</option>
                                            <option> MR. SUNSHINE TAGALOG</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-3">
                                <b>จากหมายเลขหุ้นเลขที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="1" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>ถึงหมายเลขหุ้นเลขที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="9994" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>จำนวนหุ้น <span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="9,994" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <b>ราคาตกลงซื้อขายมูลค่าหุ้นละ<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="1.00" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix marterperson justify-center">
                            <div class="col-lg-3 col-md-3 text-align">
                                <!-- bar function-->
                                <div class="btn_function justify-center">
                                    <div class="__box">
                                        <div class="_add">
                                            <button type="button" class="btn btn-default"><i class="material-icons">add</i></button>
                                        </div>
                                    </div>
                                    <div class="__box">
                                        <div class="_remove">
                                            <button type="button" class="btn btn-default"><i class="material-icons">remove</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- add row -->
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