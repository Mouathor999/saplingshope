
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4CAF50"> {{--Main Navbar start--}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarcollapse">{{-- Start collapse --}}
        <div class="row" style="width: 100%">
            <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">  {{--Navbar col-1 --}}
                <a class="navbar-brand" href="">Logo</a>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 col-xl-11"> {{--Navbar col-11 --}}
                <ul class="navbar-nav" style="margin-left: 5px">
                    <li class="nav-item active">
                        <a href="{{route('Allproduct')}}" class="nav-link">ໜ້າຫຼັກ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle dropbtn" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ຈັດການຂໍ້ມູນພື້ນຖານ
                            </a>
                            <div class="dropdown-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                    <div class="dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            ຈັດການຂໍ້ມູນສິນຄ້າ
                                        </a>
                                            <div class="dropdown-content11" id="dropdown-content11" style="margin-left: 50%;display: none">
                                                <a class="dropdown-item" href="{{route('InsertProduct')}}">ເພີ່ມສິນຄ້າ</a>
                                                <a class="dropdown-item" href="{{route('InsertProductType')}}">ເພີ່ມປະເພດສິນຄ້າ</a>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a class="dropdown-item" href="{{route('InsertProduct')}}">ເພີ່ມສິນຄ້າ</a>
                                <a class="dropdown-item" href="{{route('InsertProductType')}}">ເພີ່ມປະເພດສິນຄ້າ</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('AddEmployee')}}">ເພີ່ມພະນັກງານ</a>
                                <a class="dropdown-item" href="{{route('AddSupplier')}}">ເພີ່ມຜູ້ສະໜອງ</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('AddPromotion')}}">ເພີ່ມຂໍ້ມູນໂປຣໂມເຊີນ</a>
                            </div>

                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle dropbtn" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ລາຍການສັງ
                            </a>
                            <div class="dropdown-content">
                                <a href="{{route('CustomerOrder')}}" class="dropdown-item">ລາຍການສັງຊື້ຂອງລູກຄ້າ</a>
                                <a href="{{route('CustomerBooking')}}" class="dropdown-item">ລາຍການຈອງຂອງລູກຄ້າ</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ລາຍງານການຂາຍ
                            </a>
                            <div class="dropdown-content">
                                <a href="{{route('SaledReport')}}" class="dropdown-item">1 ວັນ</a>
                                <a href="{{route('SaledReport')}}" class="dropdown-item">2 ວັນ</a>
                                <a href="{{route('SaledReport')}}" class="dropdown-item">3 ວັນ</a>
                                <a href="{{route('SaledReport')}}" class="dropdown-item">1 ອາທິດ</a>
                                <a href="{{route('SaledReport')}}" class="dropdown-item">2 ອາທິດ</a>
                                <a href="{{route('SaledReport')}}" class="dropdown-item">3 ອາທິດ</a>
                                <a href="{{route('SaledReport')}}" class="dropdown-item">1 ເດືອນ</a>
                                <a href="{{route('SaledReport')}}" class="dropdown-item">3 ເດືອນ</a>
                                <a href="{{route('SaledReport')}}" class="dropdown-item">6 ເດືອນ</a>
                                <a href="{{route('SaledReport')}}" class="dropdown-item">1 ປີ</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle dropbtn" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ລາຍງານຂໍ້ມູນທົ່ວໄປ
                            </a>
                            <div class="dropdown-content">
                                <a href="{{route('EmployeeInfor')}}" class="dropdown-item">ລາຍງານຂໍ້ມູນພະນັກງານ</a>
                                <a href="{{route('ReportEmpWork')}}" class="dropdown-item">ລາຍງານຂໍ້ມູນການມາເຮັດວຽກ</a>
                                <a href="" class="dropdown-item">ຂໍ້ມູນການສັ່ງຊື້ສີນຄ້າເຂົ້າຮ້ານ</a>
                                <a href="" class="dropdown-item">ລາຍງານຂໍ້ມູນຜູ້ສະໜອງ</a>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle dropbtn" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ລາຍງານຂໍ້ມູນສັ່ງຊື້ສີນຄ້າເຂົ້າຮ້ານ
                            </a>
                            <div class="dropdown-content">
                                <a href="" class="dropdown-item">ລາຍການສັ່ງຊື້ສໍາເລັດ</a>
                                <a href="" class="dropdown-item">ລາຍການກໍາລັງສັ່ງອອກໄປແລ້ວ</a>

                            </div>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>{{-- End of collapse --}}
</nav>  {{--End of the Main Navbar--}}
