<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sapling tree</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

</head>
<body onresize="screenReSize()" class="co">

@include('frontEnd.masterpage.master')
<div class="mainConten">
    <div class=""></div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card-columns">
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/jar.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/flower2.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/flower2.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/jar.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/flower2.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/jar.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/jar.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/flower2.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/jar.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/flower2.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/jar.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/jar.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/flower2.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/flower2.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/jar.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/jar.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/flower2.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <a href="{{route('product.productdetail')}}" class=""><img class="img-responsive" src="{{asset('img/jar.jpg')}}" alt="" style="width: 100%; height: 10%"></a>
                    <div class="card-body">
                        <h4 class="card-title">card-title</h4>
                        <div class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta,
                        </div>
                        <div>$12</div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="{{route('product.productdetail')}}" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                <p class="text-center"><a href="" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


{{--Start swiper slide   Advertising--}}
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt="" style="width: 80%; height: 10%"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt=""  style="width: 80%;height: 10%"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt=""  style="width: 80%;height: 10%"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt=""  style="width: 80%;height: 10%"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button"  style="width: 80%;height: 10%">Button</a></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt=""  style="width: 80%;"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button"  style="width: 80%;height: 10%">Button</a></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt=""  style="width: 80%;height: 10%"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt=""  style="width: 80%;height: 10%"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt=""  style="width: 80%;height: 10%"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt=""  style="width: 80%;height: 10%"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt=""  style="width: 80%;height: 10%"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt=""  style="width: 80%;height: 10%"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="thumbnail">
                <div class="productImage"><img class="ns-img" src="{{asset('img/jar.jpg')}}" alt=""  style="width: 80%;height: 10%"></div>
                <div class="caption">
                    <h4 class="producttitle">Thumbnail label</h4>
                    <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                    <div>$12</div>
                    <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                </div>
            </div>
        </div>


    </div>
</div>
{{--End of swiper slide--}}

{{--Footer--}}
<div class="footer" style="margin-top: 2%">
    @include('frontEnd.masterpage.footer')
</div> {{--EndFooter--}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js"></script>
<script>
    var swiper;
    screenReSize();
    window.onresize = screenReSize;
    function screenReSize() {
        var screenWidth = window.innerWidth;

        if(screenWidth<=540){
            swiper = new Swiper('.swiper-container', {
                slidesPerView: 2,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }
        else if(screenWidth>540 && screenWidth<= 720 ){
            swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }
        else if(screenWidth> 720 && screenWidth<=960 ){
            swiper = new Swiper('.swiper-container', {
                slidesPerView: 4,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }

        else {
            swiper = new Swiper('.swiper-container', {
                slidesPerView: 6,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>