
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4CAF50"> {{--Main Navbar start--}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarcollapse">{{-- Start collapse --}}
        <div class="row" style="width: 100%">
            <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">  {{--Navbar col-1 --}}
                <a class="navbar-brand" href="">Logo</a>
            </div>
            <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7"> {{--Navbar col-7 --}}
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form class="navbar-form" role="search" action="" method="post">
                            <div class="input-group add-on">
                                <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                            <ul class="navbar-nav" style="margin-left: 5px">
                                <li class="nav-item active">
                                    <a href="{{route('product.index')}}" class="nav-link">Home<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('product.saplingtree')}}" class="nav-link">Sapling tree</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("flowers")}}" class="nav-link">Flowers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route("jars")}}" class="nav-link">Jar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Fertilizer</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Help</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4"> {{--Navbar col-4 --}}
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                     <div class="text-center">
                         <h4>Shoping detail</h4>
                     </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user fa-2x"></i> User
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">User name</a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Loging</a>
                                    <a class="dropdown-item" href="#">Register account</a>
                                </div>
                            </li>
                            <li class="nav nav-item">
                                <a href="{{route('cart')}}" class="nav-link">
                                    <div class="text-right">
                                      <i class="fas fa-shopping-cart fa-2x"></i> Cart
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>{{-- End of collapse --}}
   </nav>  {{--End of the Main Navbar--}}
