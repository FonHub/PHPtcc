<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Person</title>
    <?php include('../view/linkhead.php'); ?>

</head>

<body class="theme-orange">
    <!-- Top Bar -->
    <?php include('../view/topbar.php'); ?>


    <!-- Left Sidebar -->
    <?php include('../view/leftsidebar.php'); ?>


    <!-- Right Sidebar -->
    <?php include('../view/rightsidebar.php'); ?>

    <!-- Main Content -->
    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>
                        ทะเบียนบุคคล
                        <small class="text-muted">Welcome to TCC Application</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="zmdi zmdi-home"></i> หน้าหลัก</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/person"></a> ทะเบียนบุคคล
                        </li>
                        <li class="breadcrumb-item active">ข้อมูลบุคคล</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <!-- main info-->
            <section class="sec-maininfo">
                <div class="row clearfix">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>ข้อมูลบุคคล</h2>
                            </div>
                            <div class="body">
                                <form class="form-horizontal __info">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6">
                                            <b>เลขบัตรประชาชน หรือ หมายเลขพาสปอร์ต</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input v-model="person_id" type="text" class="form-control ip" placeholder="000-0000-0-0-00" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2">
                                            <div>
                                                <b>คำนำหน้าชื่อ</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" v-model="title_name">
                                                            <optgroup label="คำนำหน้าชื่อ">
                                                                <option>นาย</option>
                                                                <option>นาง</option>
                                                                <option>นางสาว</option>
                                                                <option>อื่นๆ</option>
                                                                <option>Mr.</option>
                                                                <option>Mrs.</option>
                                                                <option>Ms.</option>
                                                            </optgroup>
                                                        </select><!-- From Master -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div>
                                                <b>ชื่อ </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input v-model="first_name" type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div>
                                                <b>นามสกุล </b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input v-model="last_name" type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2">
                                            <b>สัญชาติ</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick" v-model="nationality">
                                                        <optgroup label="สัญชาติ">
                                                            <option>ไทย</option>
                                                            <option>อังกฤษ</option>
                                                            <option>จีน</option>
                                                            <option>อื่นๆ</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>อาชีพ</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <select class="form-control show-tick" v-model="occupation">
                                                        <optgroup label="อาชีพ">
                                                            <option>ข้าราชการ</option>
                                                            <option>เจ้าของกิจการ</option>
                                                            <option>พนักงานบริษัท</option>
                                                            <option>อื่นๆ</option>
                                                        </optgroup>
                                                    </select><!-- From Master -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>หมายเลขโทรศัพท์</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <b>หมายเลขโทรสาร</b>
                                            <div class="input-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Switch Address -->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <b>Outside the territory of Thailand</b>
                                            <div class="input-group">
                                                <input name="group5" type="radio" id="radio_30" class="with-gap" :class="{'radio-col-red': isForeigners == false}" checked="" @click="onClickAddressSwitch" />
                                                <label for="radio_30">
                                                    <!-- {{ isForeigners == false ? "No" : "Yes" }}-->
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div v-if="!isForeigners">
                                        <!-- Address Thai -->
                                        <div class="header-status">
                                            <h3>ที่อยู่ภาษาไทย</h3>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>เลขที</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>หมู่ที่/หมู่บ้าน</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ถนน</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>จังหวัด</b>
                                                <div class="input-group">
                                                    <div class="form-line">

                                                        <b-form-input list="provinces_th" class="form-control show-tick" v-model="province_th" :state="provinceState_th"></b-form-input>
                                                        <datalist id="provinces_th">
                                                            <option v-for="list in provinces" :key="list.id">
                                                                {{ list.name_th }}
                                                            </option>
                                                        </datalist>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>อำเภอ/เขต</b>

                                                <div class="input-group">
                                                    <div class="form-line">

                                                        <b-form-input list="districts_th" class="form-control show-tick" v-model="district_th" :state="districtState_th"></b-form-input>
                                                        <datalist id="districts_th">
                                                            <option v-for="list in districts" :key="list.id" :value="list.name_th"></option>
                                                        </datalist>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ตำบล/แขวง</b>
                                                <div class="input-group">
                                                    <div class="form-line">

                                                        <b-form-input list="sub_district_th" class="form-control show-tick" v-model="sub_district_th" :state="sub_districtState_th"></b-form-input>
                                                        <datalist id="sub_district_th">
                                                            <option v-for="list in sub_districts" :key="list.id" :value="list.name_th"></option>
                                                        </datalist>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>รหัสไปรษณีย์</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" :placeholder="zipcode_th" disabled="true" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Address English -->
                                        <div class="header-status">
                                            <h3>ที่อยู่ภาษาอังกฤษ</h3>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>เลขที</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>หมู่ที่/หมู่บ้าน</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ถนน</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3">
                                                <b>จังหวัด</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <b-form-input list="provinces_en" class="form-control show-tick" v-model="province_en" :state="provinceState_en"></b-form-input>
                                                        <datalist id="provinces_en">
                                                            <option v-for="list in provinces" :key="list.id">
                                                                {{ list.name_en }}
                                                            </option>
                                                        </datalist>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>อำเภอ/เขต</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <b-form-input list="districts_en" class="form-control show-tick" v-model="district_en" :state="districtState_en"></b-form-input>
                                                        <datalist id="districts_en">
                                                            <option v-for="list in districts" :key="list.id" :value="list.name_en"></option>
                                                        </datalist>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>ตำบล/แขวง</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <b-form-input list="sub_district_en" class="form-control show-tick" v-model="sub_district_en" :state="sub_districtState_en"></b-form-input>
                                                        <datalist id="sub_district_en">
                                                            <option v-for="list in sub_districts" :key="list.id" :value="list.name_en"></option>
                                                        </datalist>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3">
                                                <b>รหัสไปรษณีย์</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" :placeholder="zipcode_en" disabled="true" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6">
                                                <b>แนบเอกสาร</b>
                                                <div class="input-group">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" placeholder="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div v-if="isForeigners">
                                        <AddressForeigner />
                                    </div>

                                    <div class="btn-control">
                                        <a href="#save"></a><button @click="onClickSavePerson" type="button" class="btn btn-raised btn-default waves-effect">
                                            บันทึก
                                        </button>
                                        <a href="#cancel"></a><button type="reset" @click="onClickReset" class="btn btn-raised bg-grey waves-effect">
                                            ยกเลิก
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- footer -->
            <?php include('../view/footer.php'); ?>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <?php include('../view/jquerycorejs.php'); ?>

</body>

</html>