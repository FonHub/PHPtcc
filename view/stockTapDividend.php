<div>

    <!-- bar function-->
    <div class="btn_function">
        <div class="__box">
            <div class="_update">
                <a href="../view/DividendLot.php">
                    <button type="button" class="btn btn-default">
                        <i class="material-icons">sync</i>
                        <span class="function-name">อัพเดต</span>
                    </button>
                </a>
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
                    <th>เงินปันผลมูลค่า(บาท/หุ้น)</th>
                    <th>วันปิดสมุดทะเบียน</th>
                    <th>วันที่จ่ายเงินปันผล</th>
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
                    <td>15.00</td>
                    <td>18 ก.ย. 56</td>
                    <td>01 ธ.ค. 56</td>
                    <td><a href="DividendLotHistory.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">visibility</i></button></a></td>
                </tr>
                <tr v-for="data in dataTableShow" :key="data.id">
                    <td>2</td>
                    <td>0103564000029</td>
                    <td>บจ. ชิวา1982 จำกัด</td>
                    <td>30,000,000.00</td>
                    <td>30,000,000.00</td>
                    <td>5.00</td>
                    <td>18 ก.ย. 55</td>
                    <td>01 ธ.ค. 55</td>
                    <td><a href="DividendLotHistory.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">visibility</i></button></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>