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
                    <th>บริษัทเจ้าของหุ้น</th>
                    <th>กลุ่มธุรกิจหลัก</th>
                    <th>เงินลงทุน</th>
                    <th>จำนวนหุ้นทั้งหมด</th>
                    <th>เงินปันผล</th>
                    <th>วันที่ประกาศ</th>
                    <th>วันที่ปันผล</th>
                    <th>วันที่ส่งเงิน</th>
                    <th>วันที่ชำระเงิน</th>
                    <th>วันกำหนดจ่ายเงิน</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="data in dataTableShow" :key="data.id">
                    <td>1</td>
                    <td>0103564000029</td>
                    <td>หจ.แอล.พี.เจ. คลาวด์</td>
                    <td>บริการพื้นที่สำหรับจัดเก็บข้อมูลอิเล็กทรอนิคส์</td>
                    <td>30,000,000.00</td>
                    <td>30,000,000.00</td>
                    <td>1,000,000.00</td>
                    <td>1/10/2564</td>
                    <td>1/11/2564</td>
                    <td>1/11/2564</td>
                    <td>1/1/2565</td>
                    <td>1/1/2565</td>
                    <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                </tr>
                <tr v-for="data in dataTableShow" :key="data.id">
                    <td>2</td>
                    <td>0505564001589</td>
                    <td>บจ.สตาร์ วีซ่า อินเตอร์เนชั่นแนล เซอร์วิส จำกัด</td>
                    <td>บริการขอวีซ่า</td>
                    <td>10,000,000.00</td>
                    <td>10,000,000.00</td>
                    <td>100,000.00</td>
                    <td>1/5/2560</td>
                    <td>1/6/2560</td>
                    <td>1/7/2560</td>
                    <td>1/8/2560</td>
                    <td>1/8/2560</td>
                    <td><a href="stock_AddEdit.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">mode_edit</i></button></a></td>
                </tr>
                <tr v-for="data in dataTableShow" :key="data.id">
                    <td>3</td>
                    <td>0505564001619</td>
                    <td>บจ.มิลเลี่ยนกรุ๊ป คอนซัลท์ จำกัด</td>
                    <td>บริการขอวีซ่า</td>
                    <td>50,000,000.00</td>
                    <td>50,000,000.00</td>
                    <td>200,000.00</td>
                    <td>1/5/2560</td>
                    <td>1/6/2560</td>
                    <td>1/7/2560</td>
                    <td>1/8/2560</td>
                    <td>1/8/2560</td>
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
                                            <input type="text" class="form-control" placeholder="5,000.00">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6">
                                <div><b>วันที่ประกาศ(Announced Date)</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="1/6/2550">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div><b>วันที่ปันผล(XD Date)</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="1/7/2550">
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
                                            <input type="text" class="form-control" placeholder="1/7/2550">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><b>วันที่ชำระเงิน (Payment Date)</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="1/7/2550">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div><b>วันกำหนดจ่ายเงิน (Payment Settlement Date)</b>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="1/7/2550">
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