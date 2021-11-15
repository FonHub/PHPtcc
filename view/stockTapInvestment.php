<div>

    <!-- bar function-->
    <div class="btn_function">
        <div class="__box">
            <div class="_reduction">
                <a href="../view/Increase.php">
                    <button type="button" class="btn btn-default">
                        <i class="material-icons">trending_up</i><br>
                        <span class="function-name">เพิ่มทุน</span>
                    </button>
                </a>
            </div>
        </div>
        <div class="__box">
            <div class="_reduction">
                <a href="../view/Reduction.php">
                    <button type="button" class="btn btn-default">
                        <i class="material-icons">trending_down</i><br>
                        <span class="function-name">ลดทุน</span>
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
                    <th>วันที่</th>
                    <th>บริษัท</th>
                    <th>ทุนจดทะเบียน(จัดตั้งบริษัท)</th>
                    <th>ทุนจดทะเบียน(ปัจจุบัน)</th>
                    <th>จำนวนหุ้นทั้งหมด</th>
                    <th>มูลค่าหุ้นละ</th>
                    <th>เพิ่มทุน</th>
                    <th>ลดทุน</th>
                    <th>Action</th>
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
                    <td>
                        <p class="font-bold col-teal">+15,000,000.00</p>
                    </td><!-- เพิ่มมูลค่า (บาท)-->
                    <td>-</td><!-- ลดทุน (บาท)-->
                    <td><a href="IncreaseHistory01.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">visibility</i></button></a></td>
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
                    <td>
                        <p class="font-bold col-pink">-10,000,000.00</p>
                    </td><!-- ลดมูลค่า (บาท) -->
                    <td><a href="ReductionHistory01.php"><button type="button" class="btn btn-raised btn-default waves-effect"> <i class="material-icons">visibility</i></button></a></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>