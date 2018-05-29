
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4CAF50"> {{--Main Navbar start--}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarcollapse">{{-- Start collapse --}}
        <div class="row" style="width: 100%">
            <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">  {{--Navbar col-1 --}}
                <a class="navbar-brand" href="">Logo</a>
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 mymenu"> {{--Navbar col-11 --}}
                <ul class="nav navbar-nav" style="margin-left: 5px;margin-right: 5px">
                    <li class="nav-item active main-li">
                        <a href="{{route('admin')}}" class="nav-link">ໜ້າຫຼັກ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown main-li" >
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            ຈັດການຂໍ້ມູນພື້ນຖານ
                        </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown-sub-menu">
                                    <a href="" class="nav-link" data-toggle="dropdown" style="color: black; width: 100%" id="" aria-haspopup="true" aria-expanded="false">
                                        ຈັດການຂໍ້ມູນ <i class="fa fa-caret-right" style="color: black; float: right"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="">
                                        <li class="nav-item"><a href="{{route('manageProduct')}}" class="nav-link" >ຂໍ້ມູນສິນຄ້າ</a> </li>
                                        <li class="nav-item"><a href="{{route('manageProductType')}}" class="nav-link" >ຂໍ້ມູນປະເພດສິນຄ້າ</a> </li>
                                        <li class="nav-item"><a href="{{route('managePromotion')}}" class="nav-link" >ຂໍ້ມູນໂປຣໂມເຊີນ</a> </li>
                                        <li class="nav-item"><a href="{{route('manageEmployee')}}" class="nav-link" >ຂໍ້ມູນພະນັກງານ</a> </li>
                                        <li class="nav-item"><a href="{{route('manageSupplier')}}" class="nav-link" >ຂໍ້ມູນຜູ້ສະໜອງ</a> </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown-sub-menu">
                                    <a href="" class="nav-link" data-toggle="dropdown" style="color: black; width: 100%" id="" aria-haspopup="true" aria-expanded="false">
                                        ເພີ່ມຂໍ້ມູນ <i class="fa fa-caret-right" style="color: black; float: right"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="">
                                        <li class="nav-item"><a href="{{route('InsertProduct')}}" class="nav-link" >ຂໍ້ມູນສິນຄ້າ</a> </li>
                                        <li class="nav-item"><a href="{{route('InsertProductType')}}" class="nav-link" >ຂໍ້ມູນປະເພດສິນຄ້າ</a> </li>
                                        <li class="nav-item"><a href="{{route('AddPromotion')}}" class="nav-link" >ຂໍ້ມູນໂປຣໂມເຊີນ</a> </li>
                                        <li class="nav-item"><a href="{{route('AddEmployee')}}" class="nav-link" >ຂໍ້ມູນພະນັກງານ</a> </li>
                                        <li class="nav-item"><a href="{{route('AddSupplier')}}" class="nav-link" >ຂໍ້ມູນຜູ້ສະໜອງ</a> </li>
                                    </ul>
                                </li>




                             <!--   <li class="nav-item dropdown-sub-menu">
                                    <a href="" class="nav-link" data-toggle="dropdown" style="color: black; width: 100%" id="" aria-haspopup="true" aria-expanded="false">
                                        item 2  <i class="fa fa-caret-right" style="color: black; float: right"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="">
                                        <li class="nav-item"><a href="" class="nav-link" >item 1</a> </li>
                                        <li class="nav-item"><a href="" class="nav-link" >item 3</a> </li>
                                        <li class="nav-item"><a href="" class="nav-link" >item 4</a> </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown-sub-menu">
                                    <a href="" class="nav-link" data-toggle="dropdown" style="color: black; width: 100%" id="" aria-haspopup="true" aria-expanded="false">
                                        item 3 <i class="fa fa-caret-right" style="color: black; float: right"></i>
                                    </a>
                                        <ul class="dropdown-menu" aria-labelledby="">
                                            <li class="nav-item"><a href="" class="nav-link" >item 3.1</a> </li>
                                            <li class="nav-item"><a href="" class="nav-link" >item 3.2</a> </li>
                                            <li class="nav-item dropdown-sub-menu">
                                                <a href="" class="nav-link" data-toggle="dropdown" style="color: black; width: 100%" id="" aria-haspopup="true" aria-expanded="false">
                                                    item 3 <i class="fa fa-caret-right" style="color: black; float: right"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="">
                                                    <li class="nav-item"><a href="" class="nav-link" >item 3.1</a> </li>
                                                    <li class="nav-item"><a href="" class="nav-link" >item 3.2</a> </li>
                                                    <li class="nav-item"><a href="" class="nav-link" >item 3.3</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                </li> -->


                                <li class="nav-item"><a href="" class="nav-link" >A</a> </li>
                                <li class="nav-item"><a href="" class="nav-link" >B</a> </li>
                            </ul>
                    </li>
                    <li class="nav-item dropdown main-li" >
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            ລາຍການສັ່ງຂອງລູກຄ້າ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="">
                            <li class="nav-item"><a href="" class="nav-link" >ລາຍການສັ່ງຊື້</a> </li>
                            <li class="nav-item"><a href="" class="nav-link" >ລາຍການສັ່ງຈອງ</a> </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown main-li" >
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            ສັ່ງຊື້ສິນຄ້ານເຂົ້າຮ້ານ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="">
                            <li class="nav-item"><a href="{{route('lessproduct')}}" class="nav-link" >ສິນຄ້າເຫຼືອໜ້ອຍ</a> </li>
                            <li class="nav-item"><a href="" class="nav-link" >ນໍາເຂົ້າສິນຄ້າ</a> </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown main-li" >
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            ລາຍງານ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="" style="width: auto">
                            <li class="nav-item dropdown-sub-menu">
                                <a href="" class="nav-link" data-toggle="dropdown" style="color: black; width: 100%" id="" aria-haspopup="true" aria-expanded="false">
                                    ຂໍ້ມູນສິນຄ້າ
                                </a>
                            </li>
                            <li class="nav-item dropdown-sub-menu">
                                <a href="" class="nav-link" data-toggle="dropdown" style="color: black; width: 100%" id="" aria-haspopup="true" aria-expanded="false">
                                    ລາຍງານການຂາຍ <i class="fa fa-caret-right" style="color: black; float: right"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="">
                                    <li class="nav-item"><a href="" class="nav-link" >ລາຍງານຍອດຂາຍ</a> </li>
                                    <li class="nav-item"><a href="" class="nav-link" >ລາຍງານສິນຄ້າຂາຍດີ</a> </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown-sub-menu">
                                <a href="" class="nav-link" data-toggle="dropdown" style="color: black; width: 100%" id="" aria-haspopup="true" aria-expanded="false">
                                    ຂໍ້ມູນພະນັກງານ <i class="fa fa-caret-right" style="color: black; float: right"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="">
                                    <li class="nav-item"><a href="{{route('employeeInfor')}}" class="nav-link" >ຂໍ້ມູນຫຼັກຂອງ ພ/ງ</a> </li>
                                    <li class="nav-item"><a href="" class="nav-link" >ຂໍ້ມູນການມາເຮັດວຽກ</a> </li>
                                    <li class="nav-item"><a href="" class="nav-link" >ສະຫຼູບເງີນເດືອນ</a> </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" >
                                    ລາຍງານສິນຄ້ານໍາເຂົ້າ
                                </a>
                            </li>
                            <li class="nav-item dropdown-sub-menu">
                                <a href="" class="nav-link" data-toggle="dropdown" style="color: black; width: 100%" id="" aria-haspopup="true" aria-expanded="false">
                                    ລາຍງານຂໍ້ມູນລູກຄ້າ
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item main-li">
                        <a href="" class="nav-link">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>{{-- End of collapse --}}
</nav>  {{--End of the Main Navbar--}}
