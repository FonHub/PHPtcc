<div>

    <!-- bar function-->
    <div class="btn_function">
        <div class="__box">
            <div class="_update">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#StockDividend">
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
                    <th>เลขทะเบียนนิติบุคคล</th>
                    <th>บริษัท</th>
                    <th>เงินลงทุนทั้งหมด</th>
                    <th>จำนวนหุ้นทั้งหมด</th>
                    <th>เงินปันผล</th>
                    <th>วันที่ประกาศ</th>
                    <th>วันที่ปันผล</th>
                    <th>วันที่ส่งเงิน</th>
                    <th>วันที่ชำระเงิน</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="data in dataTableShow" :key="data.id">
                    <td>1</td>
                    <td>0103564000029</td>
                    <td>บจ. ชิวา1982 จำกัด</td>
                    <td>30,000,000.00</td>
                    <td>30,000,000.00</td>
                    <td>100,000.00</td>
                    <td>18 ก.ย. 56</td>
                    <td>18 ก.ย. 56</td>
                    <td>18 ก.ย. 56</td>
                    <td>18 ก.ย. 56</td>
                    <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                </tr>
                <tr v-for="data in dataTableShow" :key="data.id">
                    <td>1</td>
                    <td>0103564000029</td>
                    <td>บจ. ชิวา1982 จำกัด</td>
                    <td>30,000,000.00</td>
                    <td>30,000,000.00</td>
                    <td>10,000.00</td>
                    <td>18 ก.ย. 55</td>
                    <td>18 ก.ย. 55</td>
                    <td>18 ก.ย. 55</td>
                    <td>18 ก.ย. 55</td>
                    <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Stock Dividend -->
    <div class="modal fade" id="StockDividend" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg box__director" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="largeModalLabel">
                        เงินปันผล
                    </h4>
                </div>
                <div class="modal-body">
                    <!-- form -->
                    <form class="form-horizontal _account">

                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4">
                                <div><b>บริษัท </b>
                                    <div class="input-group">
                                        <div>
                                            <input type="text" class="form-control" placeholder="บจ.ชิวา1982 จำกัด">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><b>ทุนจดทะเบียน (บาท) </b>
                                    <div class="input-group">
                                        <div>
                                            <input type="text" class="form-control" placeholder="30,000,000.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4">
                                <div><b>จำนวนหุ้นทั้งหมด</b>
                                    <div class="input-group">
                                        <div>
                                            <input type="text" class="form-control" placeholder="30,000,000.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><b>อัตราผลตอบแทน(Rate)</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="15">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><b>เงินปันผลมูลค่า(บาท)</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4">
                                <div><b>วันที่ประกาศ(Announced Date)</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="18 ก.ย. 56">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><b>วันที่ปันผล(XD Date)</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="18 ก.ย. 56">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-4">
                                <div><b>วันที่ส่งเงิน (Settlement Date)</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="18 ก.ย. 56">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><b>วันที่ชำระเงิน (Payment Date)</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="18 ก.ย. 56">
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

</div>