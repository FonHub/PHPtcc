<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="info-container">
            <div class="name" data-toggle="dropdown">John Doe</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="button"> keyboard_arrow_down </i>
                <ul class="dropdown-menu slideUp">
                    <li><a href="#profile"><i class="material-icons">person</i>Profile</a></li>
                    <li><a href="#sign-in"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
            <div class="email">john.doe@example.com</div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li><a href="Person.php"><i class="zmdi zmdi-account"></i><span>ทะเบียนบุคคล</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>ทะเบียนบริษัท</span></a>
                <ul class="ml-menu">
                    <li><a href="../view/company.php">ข้อมูลบริษัท</a></li>
                    <li><a href="../view/Director.php">รายละเอียดกรรมการ</a></li>
                    <li><a href="../view/company_NameHistory.php">ประวัติการเปลี่ยนแปลงชื่อบริษัท</a></li>
                    <li><a href="../view/company_AddressHistory.php">ประวัติการเปลี่ยนแปลงที่อยู่บริษัท</a></li>
                    <li><a href="../view/company_Merger.php">การควบบริษัท</a></li>
                    <li><a href="../view/company_Liquidate.php">การชำระบัญชี</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-trending-up"></i><span>ทะเบียนหุ้น</span> </a>
                <ul class="ml-menu">
                    <li><a href="stock.php">ข้อมูลหุ้น</a></li>
                    <li><a href="StockLot.php">บริษัทเจ้าของหุ้น</a></li>
                    <li><a href="StockNo.php">รายละเอียดใบหุ้น</a></li>
                    <li><a href="StockMeet.php">รายละเอียดการประชุม</a></li>
                    <li><a href="StockInvestment.php">เงินลงทุน</a></li>
                    <li><a href="StockDividend.php">เงินปันผล</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>หุ้นตลาด</span> </a>
                <ul class="ml-menu">
                    <li><a href="#mastersymbol">ข้อมูลหุ้นตลาด</a></li>
                    <li><a href="#mastersymbol">บริษัทเจ้าของหุ้น(Company)</a></li>
                    <li><a href="#companysymbol">บริษัทผู้ถือหุ้น (Company)</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-view-module"></i><span>Master</span> </a>
                <ul class="ml-menu">
                    <li><a href="MasterAddEditPerson.php"> <span>กลุ่มบุคคล</span> </a></li>
                    <li><a href="MasterAddEditCompany.php"> <span>กลุ่มบริษัท</span> </a></li>
                    <li><a href="MasterAddEditStockMarket.php"> <span>กลุ่มหุ้นและหุ้นตลาด</span> </a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder-outline"></i><span>รายงานบริษัท</span> </a>
                <ul class="ml-menu">
                    <li><a href="javascript:void(0);">บอจ. 5</a></li>
                    <li><a href="javascript:void(0);">บมจ. 6</a></li>
                    <li><a href="javascript:void(0);">ข้อมูลพื้นฐานและกรรมการ</a></li>
                    <li><a href="javascript:void(0);">ประวัติการเป็นกรรมการ</a></li>
                    <li><a href="javascript:void(0);">รายงานชื่อเดิมของบริษัท</a></li>
                    <li><a href="javascript:void(0);">รายงานควบบริษัท</a></li>
                    <li><a href="javascript:void(0);">รายงานสรุปจำนวนบริษัท</a></li>
                    <li><a href="javascript:void(0);">รายงานเงินลงทุน</a></li>
                    <li><a href="javascript:void(0);">รายงานการชำระบัญชี</a></li>
                    <li><a href="javascript:void(0);">รายงานบริษัทชำระเงินไม่ครบ</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>รายงานหุ้น</span> </a>
                <ul class="ml-menu">
                    <li><a href="javascript:void(0);">รายงานใบหุ้น</a></li>
                    <li><a href="javascript:void(0);">สมุดทะเบียนหุ้น</a></li>
                    <li><a href="javascript:void(0);">รายงานการเก็บใบหุ้น</a></li>
                    <li><a href="javascript:void(0);">รายงานการจำนำหุ้น</a></li>
                    <li><a href="javascript:void(0);">รายงานสรุปรวม</a></li>
                    <li><a href="javascript:void(0)">รายงานสรุปผู้ถือหุ้น</a></li>
                    <li><a href="javascript:void(0);">การจัดพิมพ์สัญญาซื้อขายหุ้น</a></li>
                    <li><a href="javascript:void(0);">บัญชีรายชื่อผู้ถือหุ้น</a></li>
                    <li><a href="javascript:void(0);">โครงสร้างการถือหุ้น</a></li>
                    <li><a href="javascript:void(0);">Template ผู้ถือหุ้น</a></li>
                    <li><a href="javascript:void(0);">Chartโครงสร้างการถือหุ้น</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>