<div>
    <!-- bar function-->
    <div class="btn_function">
        <div class="__box width80">
            <div class="_addlot">
                <button type="button" class="btn btn-default pa-xy0" data-toggle="modal" data-target="#CreateNewLotModal">
                    <i class="material-icons">person_add</i> <br>
                    <span class="function-name">เพิ่ม <br>ผู้ถือหุ้น </span>
                </button>
            </div>
        </div>

        <div class="__box width80">
            <div class="_print">
                <button type="button" class="btn btn-default">
                    <i class="material-icons">print</i><br>
                    <span class="function-name">พิมพ์</span>
                </button>
            </div>
        </div>
    </div>
    <div class="header">
        <h2>ผู้ถือหุ้นปัจจุบัน</h2>
    </div>
    <!-- table -->
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 pdmg-0">
            <div class="body table-responsive stock_list pdmg-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>ผู้ถือหุ้น</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height:63px;">
                            <td class="marterperson __box">
                                <a href="../view/LotTransfer.php"> <button type="button" class="btn btn-default border-boxshadow text-pd">
                                        <i class="material-icons">sync</i><br>โอนหุ้น</button>
                                </a>
                                <a href="../view/AddPayment.php"> <button type="button" class="btn btn-default border-boxshadow text-pd">
                                        <i class="material-icons">add</i><br>ชำระหุ้น</button>
                                </a>
                            </td>
                            <td>บจ.ซีเอ็นที สตาร์ จำกัด </td><!-- ผู้ถือหุ้น -->
                        </tr>
                        <tr style="height:63px;">
                            <td class="marterperson __box">
                                <a href="../view/LotTransfer.php"> <button type="button" class="btn btn-default border-boxshadow text-pd">
                                        <i class="material-icons">sync</i><br>โอนหุ้น</button>
                                </a>
                                <a href="../view/AddPayment.php"> <button type="button" class="btn btn-default border-boxshadow text-pd">
                                        <i class="material-icons">add</i><br>ชำระหุ้น</button>
                                </a>
                            </td>
                            <td>บจ.เพชรดีไซน์ เฟอร์นิเจอร์ จำกัด </td><!-- ผู้ถือหุ้น -->
                        </tr>

                    </tbody>

                </table>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 pdmg-0 ">
            <div class="body table-responsive stock_list pdmg-0" style="overflow-x:auto;">
                <table class="table table-hover pdmg-0" role="grid" style="width: 2250px">
                    <thead>
                        <tr role="row">
                            <th style="width: 50px;">ทะเบียน</th>
                            <th style="width: 150px;">เข้าเป็นผู้ถือหุ้นโดย</th>
                            <th style="width: 250px;">หุ้นหมายเลข จาก-ถึง </th>
                            <th style="width: 100px;">จำนวนหุ้น</th>
                            <th style="width: 100px;">มูลค่าหุ้น</th>
                            <th style="width: 150px;">ร้อยละการถือหุ้น</th>
                            <th style="width: 150px;">ใบหุ้นลงวันที่</th>
                            <th style="width: 150px;">ใบหุ้นเลขที่</th>
                            <th style="width: 250px;">วันที่เข้าเป็นผู้ถือหุ้น</th>
                            <th style="width: 250px;">ผู้รับโอน</th>
                            <th style="width: 150px;">วันที่โอน</th>
                            <th style="width: 250px;">จำนวนหุ้นที่โอน</th>
                            <th style="width: 250px;">หมายเลขหุ้นที่โอน จาก-ถึง</th>
                            <th style="width: 150px;">ใบหุ้นใหม่เลขที่</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height:82px;">
                            <td>15</td> <!-- ทะเบียน -->
                            <td>รับโอน</td><!-- เข้าเป็นผู้ถือหุ้นโดย -->
                            <td>118400007-184200004</td><!-- หุ้นหมายเลข จาก-ถึง -->
                            <td>65,799,996</td><!-- จำนวนหุ้น -->
                            <td>10.00</td><!-- มูลค่าหุ้น -->
                            <td>75</td>
                            <td>18 ก.ย. 56</td><!-- ใบหุ้นลงวันที่ -->
                            <td>10</td><!-- ใบหุ้นเลขที่ -->
                            <td>22 ธ.ค. 59</td><!-- วันที่เข้าเป็นผู้ถือหุ้น -->
                            <td>บจ.ซีเอ็นที สตาร์ จำกัด</td><!-- ผู้รับโอน -->
                            <td>22 ธ.ค. 59</td><!-- วันที่โอน -->
                            <td>9,996</td><!-- จำนวนหุ้นที่โอน -->
                            <td>118400007-118390011</td><!-- หมายเลขหุ้นที่โอน จาก-ถึง -->
                            <td>11</td><!-- ใบหุ้นใหม่เลขที่ -->
                        </tr>
                        <tr style="height:82px;">
                            <td>16</td> <!-- ทะเบียน -->
                            <td>รับโอน</td><!-- เข้าเป็นผู้ถือหุ้นโดย -->
                            <td>1-9993</td><!-- หุ้นหมายเลข จาก-ถึง -->
                            <td>9993</td><!-- จำนวนหุ้น -->
                            <td>10.00</td><!-- มูลค่าหุ้น -->
                            <td>25</td>
                            <td>18 ก.ย. 56</td><!-- ใบหุ้นลงวันที่ -->
                            <td>10</td><!-- ใบหุ้นเลขที่ -->
                            <td>22 ธ.ค. 59</td><!-- วันที่เข้าเป็นผู้ถือหุ้น -->
                            <td>บจ.ซีเอ็นที สตาร์ จำกัด</td><!-- ผู้รับโอน -->
                            <td>22 ธ.ค. 59</td><!-- วันที่โอน -->
                            <td>1</td><!-- จำนวนหุ้นที่โอน -->
                            <td>9900-9991</td><!-- หมายเลขหุ้นที่โอน จาก-ถึง -->
                            <td>11</td><!-- ใบหุ้นใหม่เลขที่ -->
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="xl-khaki" style="height:60px;">
                            <td rowspan="3" colspan="3">รวม</td> <!-- ทะเบียน -->
                            <td>65,809,989</td><!-- จำนวนหุ้น -->
                            <td></td><!-- มูลค่าหุ้น -->
                            <td>100</td>
                        </tr>
                    </tfoot>
                </table>

            </div>

        </div>


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
                                <th>#</th>
                                <th>ชื่อ</th>
                                <th>ใบหุ้นเดิมเลขที่</th>
                                <th>หุ้นหมายเลข จาก-ถึง</th>
                                <th>จำนวนหุ้น</th>
                                <th>การรับโอน</th>
                                <th>วันที่โอน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>นาย วิชัย วชิรพงศ์</td> <!-- ผู้โอน -->
                                <td>2</td><!-- ใบหุ้นเดิมเลขที่ -->
                                <td>1-9994</td><!-- หุ้นหมายเลข จาก-ถึง -->
                                <td>1</td><!-- จำนวนหุ้น -->
                                <td>ยกเลิกหุ้น/ลดทุน</td><!-- การรับโอน-->
                                <td>2 พ.ย. 60</th><!-- วันที่โอน -->
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>นาง มณีรัตน์ งามเรืองพงศ์</td> <!-- ผู้โอน -->
                                <td>3</td><!-- ใบหุ้นเดิมเลขที่ -->
                                <td>1-9995</td><!-- หุ้นหมายเลข จาก-ถึง -->
                                <td>1</td><!-- จำนวนหุ้น -->
                                <td>ยกเลิกหุ้น/ลดทุน</td><!-- การรับโอน-->
                                <td>2 พ.ย. 60</th><!-- วันที่โอน -->
                            </tr>
                            <tr>
                                <td>3</td>
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
                        เพิ่มผู้ถือหุ้น
                    </h4>
                </div>
                <div class="modal-body">
                    <!-- search-->
                    <div class="row clearfix">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="header mp-0">
                                    <h2>ค้นหา</h2>
                                </div>
                                <div class="body mp-0">
                                    <form class="form-horizontal __search ">
                                        <div class="col-sm-12 mp-0">
                                            <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">search</i></span>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="พิมพ์ชื่อ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-control mp-0 text-align">
                                            <button type="button" class="btn btn-raised btn-default __redvitality waves-effect">ค้นหา</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table-->
                    <div class="row clearfix">
                        <div class="body table-responsive company-list">
                            <table class="table table-hover mp-0">
                                <thead>
                                    <tr>
                                        <th style="width: 60px">#</th>
                                        <th>เลขบัตรประชาชน</th>
                                        <th>คำนำหน้าชื่อ</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>เลขทะเบียนนิติบุคคล</th>
                                        <th>ชื่อบริษัท</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1-11-01123-5540-94</td>
                                        <td>นาย</td>
                                        <td>วิชัย</td>
                                        <td>วชิรพงศ์</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <div class="input-group">
                                                <input type="checkbox" id="md_checkbox_d1" class="filled-in chk-col-red _red-vitality" checked />
                                                <label for="md_checkbox_d1"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>0102564000010</td>
                                        <td>หส.เดอะ ทรีไลน์ บีเอฟเอ็ม</td>
                                        <td>
                                            <div class="input-group">
                                                <input type="checkbox" id="md_checkbox_d2" class="filled-in chk-col-red _red-vitality" checked />
                                                <label for="md_checkbox_d2"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>- </td>
                                        <td>- </td>
                                        <td>0103564000011</td>
                                        <td>บจ.เพชรดีไซน์ เฟอร์นิเจอร์ จำกัด</td>
                                        <td>
                                            <div class="input-group">
                                                <input type="checkbox" id="md_checkbox_d3" class="filled-in chk-col-red _red-vitality" checked />
                                                <label for="md_checkbox_d3"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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