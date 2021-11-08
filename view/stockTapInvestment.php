<div>

    <!-- bar function-->
    <div class="btn_function">
        <div class="__box">
            <div class="_reduction">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#IncreaseModal">
                    <i class="material-icons">trending_up</i><br>
                    <span class="function-name">เพิ่มทุน</span>
                </button>
            </div>
        </div>
        <div class="__box">
            <div class="_reduction">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ReductionModal">
                    <i class="material-icons">trending_down</i><br>
                    <span class="function-name">ลดทุน</span>
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
                    <th>ใบหุ้นลงวันที่</th>
                    <th>บริษัท</th>
                    <th>ทุนจดทะเบียน(จัดตั้งบริษัท)</th>
                    <th>ทุนจดทะเบียน(ปัจจุบัน)</th>
                    <th>จำนวนหุ้นทั้งหมด</th>
                    <th>มูลค่าหุ้นละ</th>
                    <th>เพิ่มมูลค่า (บาท)</th>
                    <th>เพิ่มมูลค่าหุ้นละ</th>
                    <th>ลดมูลค่า (บาท)</th>
                    <th>ลดมูลค่าหุ้นละ</th>
                    <th>ทุนคงเหลือ</th>
                    <th>หุ้นคงเหลือ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td><!-- ลำดับ-->
                    <td>18 ก.ย. 56</td><!-- ใบหุ้นลงวันที่-->
                    <td>บจ. ชิวา1982 จำกัด</td><!-- บริษัท-->
                    <td>30,000,000.00</td><!-- ทุนจดทะเบียน(จัดตั้งบริษัท)-->
                    <td>60,000,000.00</td><!-- ทุนจดทะเบียน(ปัจจุบัน)-->
                    <td>15,000,000.00</td><!-- จำนวนหุ้นทั้งหมด-->
                    <td>10.00</td><!-- มูลค่าหุ้นละ -->
                    <td>15,000,000.00</td><!-- เพิ่มมูลค่า (บาท)-->
                    <td>-</td><!-- เพิ่มมูลค่าหุ้นละ -->
                    <td>-</td><!-- ลดมูลค่า (บาท) -->
                    <td>-</td><!-- ลดมูลค่าหุ้นละ -->
                    <td>75,000,000.00</td><!-- ทุนคงเหลือ -->
                    <td>15,000,000.00</td><!-- หุ้นคงเหลือ -->
                </tr>
                <tr>
                    <td>2</td><!-- ลำดับ-->
                    <td>1 ก.ย. 56</td><!-- ใบหุ้นลงวันที่-->
                    <td>บจ. ชิวา1982 จำกัด</td><!-- บริษัท-->
                    <td>30,000,000.00</td><!-- ทุนจดทะเบียน(จัดตั้งบริษัท)-->
                    <td>40,000,000.00</td><!-- ทุนจดทะเบียน(ปัจจุบัน)-->
                    <td>10,000,000.00</td><!-- จำนวนหุ้นทั้งหมด-->
                    <td>10.00</td><!-- มูลค่าหุ้นละ -->
                    <td>-</td><!-- เพิ่มมูลค่า (บาท)-->
                    <td>-</td><!-- เพิ่มมูลค่าหุ้นละ -->
                    <td>10,000,000.00</td><!-- ลดมูลค่า (บาท) -->
                    <td>-</td><!-- ลดมูลค่าหุ้นละ -->
                    <td>30,000,000.00</td><!-- ทุนคงเหลือ -->
                    <td>15,000,000.00</td><!-- หุ้นคงเหลือ -->
                </tr>
            </tbody>
        </table>
    </div>
    <!-- StockInvesModal -->
    <div class="modal fade" id="StockInvesModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg box__director" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">
                        เงินลงทุน
                    </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal _account">

                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4">
                                <div><b>บริษัท <span class="red">*</span></b>
                                    <div class="input-group">
                                        <div>
                                            <input type="text" class="form-control" placeholder="บจ.ชิวา1982 จำกัด">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><b>ทุนจดทะเบียน (บาท) <span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="30,000,000.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4">
                                <div><b>จำนวนหุ้นทั้งหมด<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="30,000,000.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><b>จำนวนหุ้นที่ถือ<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="000001 - 30,000,000.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><b>มูลค่า (บาท)<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="30,000,000.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2">
                                <div><b>สัดส่วน<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div><b>มูลค่าหุ้นละ<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="10.000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div><b>เลขหุ้น<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="001">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div><b>จำนวนหุ้น<span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="30,000,000.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div><b>มูลค่าหุ้นที่ชำระแล้ว <span class="red">*</span></b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="100%">
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
    <!-- Modal IncreaseModal-->
    <div class="modal fade" id="IncreaseModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg box__director" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">
                        การเพิ่มทุน
                    </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal box__director">

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2">
                                <b>ใบหุ้นเลขที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="15" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <b>ใบหุ้นลงวันที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="18 ก.ย. 56" />
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row -->
                        <div class="row clearfix">

                            <div class="col-lg-4 col-md-4">
                                <b>เพิ่มมูลค่าหุ้น<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="15.000" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <b>เพิ่มจํานวนหุ้น<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="1000" />
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Reduction-->
    <div class="modal fade" id="ReductionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg box__director" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">
                        การลดทุน
                    </h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal box__director">

                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2">
                                <b>ใบหุ้นเลขที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div>
                                        <input type="text" class="form-control" placeholder="16" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <b>ใบหุ้นลงวันที่<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="18 ก.ย. 56" />
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row -->
                        <div class="row clearfix">

                            <div class="col-lg-4 col-md-4">
                                <b>ลดมูลค่าหุ้น<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="5.000" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <b>ลดจํานวนหุ้น<span class="red">*</span></b>
                                <div class="input-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="1000" />
                                    </div>
                                </div>
                            </div>
                        </div> <!-- row -->
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