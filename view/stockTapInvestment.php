<div>

    <!-- bar function-->
    <div class="btn_function">
        <div class="__box">
            <div class="_update">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#StockInvesModal">
                    <i class="material-icons">sync</i>
                    <span class="function-name">อัพเดต</span>
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
                    <th>วันที่</th>
                    <th>เจ้าของหุ้น</th>
                    <th>ทุนจดทะเบียน (บาท)</th>
                    <th>จำนวนหุ้นทั้งหมด</th>
                    <th>จำนวนหุ้นที่ถือ</th>
                    <th>มูลค่า (บาท)</th>
                    <th>สัดส่วน</th>
                    <th>มูลค่าหุ้นละ</th>
                    <th>มูลค่าหุ้นที่ชำระแล้ว</th>
                    <th></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="data in dataTableShow" :key="data.id">
                    <td>1</td>
                    <td>15/1/2564</td>
                    <td>บจ.พรอสเพอรัส วิน 168 จำกัด </td>
                    <td>30,000,000.00</td>
                    <td>30,000,000.00</td>
                    <td>15,000,000.00</td>
                    <td>15,000,000.00</td>
                    <td>50</td>
                    <td>10.000</td>
                    <td>10,000,000.00</td>
                    <td>
                        <div class="input-group">
                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                            <label for="md_checkbox_21"></label>
                        </div>
                    </td>
                    <td><button type="button" data-toggle="modal" data-target="#StockInvesModal" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></td>
                </tr>
                <tr v-for="data in dataTableShow" :key="data.id">
                    <td>2</td>
                    <td>15/1/2564</td>
                    <td>บจ.ภัทโสภณ จำกัด </td>
                    <td>30,000,000.00</td>
                    <td>30,000,000.00</td>
                    <td>7,500,000.00</td>
                    <td>7,500,000.00</td>
                    <td>25</td>
                    <td>10.000</td>
                    <td>7,500,000.00</td>
                    <td>
                        <div class="input-group">
                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                            <label for="md_checkbox_21"></label>
                        </div>
                    </td>
                    <td><button type="button" data-toggle="modal" data-target="#StockInvesModal" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></td>
                </tr>
                <tr v-for="data in dataTableShow" :key="data.id">
                    <td>3</td>
                    <td>15/1/2564</td>
                    <td>นาย วิชัย วชิรพงศ์ </td>
                    <td>30,000,000.00</td>
                    <td>30,000,000.00</td>
                    <td>7,500,000.00</td>
                    <td>7,500,000.00</td>
                    <td>25</td>
                    <td>10.000</td>
                    <td>7,500,000.00</td>
                    <td>
                        <div class="input-group">
                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                            <label for="md_checkbox_21"></label>
                        </div>
                    </td>
                    <td><button type="button" data-toggle="modal" data-target="#StockInvesModal" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></td>
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
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>
                    <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                    <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                </div>
            </div>
        </div>
    </div>

</div>