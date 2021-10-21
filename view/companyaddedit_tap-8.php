<div role="tabpanel" class="tab-pane" id="Account">
    <!-- bar control-->
    <div class="row clearfix">
        <div class="col-sm-12 col-md-12 col-lg-12 btn_control">
            <div class="__save"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">save</i> </button></div>
            <div class="__new"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">insert_drive_file</i> </button></div>
            <div class="__close"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">clear</i> </button></div>
            <div class="__exit"><button type="button" class="btn btn-raised  waves-effect"> <i class="material-icons">exit_to_app</i> </button></div>
        </div>
    </div>
    <!-- bar function-->
    <div class="btn_function">
        <div class="__box">
            <div class="_add">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalAddAccount">
                    <i class="material-icons">add</i>
                    <span class="function-name">Add</span>
                </button>
            </div>
        </div>
    </div>
    <!-- form -->
    <form class="form-horizontal _account">
        <div class="block-header">
            <h2>ข้อมูลบัญชี</h2>
        </div>
        <!-- table -->
        <div class="body table-responsive company-list">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 60px">#</th>
                        <th>คำนำหน้าชื่อ</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>เลขผู้ทำบัญชี</th>
                        <th>ที่อยู่</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>เบอร์โทรสาร</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>นาย</td>
                        <td>วิชัย</td>
                        <td>วชิรพงศ์</td>
                        <td>1025554870998</td>
                        <td>2/1 ซอย พระราม 2 ที่ 32 ถนนพะราม 2 แขวงบางมด เขตจอมทอง กรุงเทพมหานคร 10150</td>
                        <td>02-251-1100</td>
                        <td>02-251-1100</td>
                        <td>
                            <div class="action_btn">
                                <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
                                <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="h-60"></div>
        <div class="block-header">
            <h2>ข้อมูลการเงิน</h2>
        </div>
        <!-- table -->
        <div class="body table-responsive company-list">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 60px">#</th>
                        <th>คำนำหน้าชื่อ</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>ที่อยู่</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>เบอร์โทรสาร</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td>นาง</td>
                        <td>มณีรัตน์</td>
                        <td>งามเรืองพงศ์</td>
                        <td>449 ซอยอินทามระ 41 แขวงดินแดง เขตดินแดง กรุงเทพมหานคร 10400</td>
                        <td>02-003-1000</td>
                        <td>02-003-1000</td>
                        <td>
                            <div class="action_btn">
                                <a href="javascript:void(0);" class="btn btn-default"><i class="zmdi zmdi-edit"></i></a>
                                <a href="javascript:void(0);" class="btn btn-default col-red"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
<!-- ModalAdd -->
<div class="modal fade" id="ModalAddAccount" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg box__director" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">เพิ่ม</h4>
            </div>
            <div class="modal-body">
                <!-- search-->
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>ค้นหา</h2>
                            </div>
                            <div class="body">
                                <form class="form-horizontal __search">
                                    <div class="col-sm-12">
                                        <div class="input-group"> <span class="input-group-addon"> <i class="material-icons">search</i></span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="พิมพ์ชื่อ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-control">
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
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 60px">#</th>
                                    <th>คำนำหน้าชื่อ</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>ที่อยู่</th>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>เบอร์โทรสาร</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>MR.</td>
                                    <td>SUNSHINE </td>
                                    <td>TAGALOG </td>
                                    <td>223/87 ถนนสรรพาวุธ แขวงบางนาใต้ เขตบางนา กรุงเทพมหานคร 10260</td>
                                    <td>02-800-2000</td>
                                    <td>02-800-2000</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                            <label for="md_checkbox_21"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>นาย</td>
                                    <td>ชนุชตร</td>
                                    <td>สุขสันต์</td>
                                    <td>2003/3 ถนนสุขุมวิท แขวงพระโขนงเหนือ เขตวัฒนา กรุงเทพมหานคร 10110</td>
                                    <td>02-300-2000</td>
                                    <td>02-300-2000</td>
                                    <td>
                                        <div class="input-group">
                                            <input type="checkbox" id="md_checkbox_21" class="filled-in chk-col-red _red-vitality" checked />
                                            <label for="md_checkbox_21"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>นางสาว </td>
                                    <td>กรรณธิมา</td>
                                    <td>คมแก้ว</td>
                                    <td>586/282 ซอยสุเหร่าคลองหนึ่ง 13 แขวงบางชัน เขตคลองสามวา กรุงเทพมหานคร 10510</td>
                                    <td>02-000-2000</td>
                                    <td>02-000-2000</td>
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
                </div>

            </div>
            <div class="modal-footer">
                <a href="#save"></a><button type="button" class="btn btn-raised btn-default __redvitality waves-effect"> บันทึก </button>
                <a href="#cancel"></a><button type="button" class="btn  btn-raised bg-grey waves-effect"> ยกเลิก </button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">ปิด</button>
            </div>
        </div>
    </div>

</div>