<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
</head>
<body>
@include('frontEnd.masterpage.MainNavbar')
<div class="mainConten">
    <div class="row" style="margin-top: 2%">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            @for($i=1;$i<=10;$i++)
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                        <a href="{{route('product.productdetail')}}"><img src="{{asset('img/download.jpg')}}" class="img-responsive" alt="" style="width: 100%; margin-top:3%;margin-bottom:3%" ></a>

                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                        {{--<img src="{{asset('img/download.jpg')}}" class="img-responsive" alt="">--}}
                        <p>title and description title and description title and description title and description title and description title and description title and description </p>
                        <a href="#" class="nav-link"><i class="fas fa-trash" style="color: orangered"></i> delete</a>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1" style="padding: 1%;">
                        {{--<img src="{{asset('img/download.jpg')}}" class="img-responsive" alt="">--}}
                        <p style="margin-left: 3%">quantity</p>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="padding: 1%; ">
                        {{--<img src="{{asset('img/download.jpg')}}" class="img-responsive" alt="">--}}
                        <p style="margin-left: 3%">price</p>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="padding: 1%;">
                        {{--<img src="{{asset('img/download.jpg')}}" class="img-responsive" alt="">--}}
                        <p style="margin-left: 3%">total price</p>
                    </div>
                </div>

                <br>
                @endfor
                <br>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-color: #7DA0B1">
                        <div class="" style="text-align: right">
                            <h4><b>Total price: </b> $20</h4>
                            <h4><b>Discount: </b> $2</h4>
                            <h4><b>Tax: </b> 5$</h4>
                            <h4><b>SubTotal price: </b> $23</h4>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
            <div class="card" style="height: 200px">
                <div class="card-text">
                    <h3>Check out</h3>
                </div>
            </div>
            <div class="row" style="margin-bottom: 3%">
                @for($a=1;$a<=10;$a++)
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin-top: 3%">
                            <img src="{{asset('img/flower2.jpg')}}" class="img-responsive" alt="" style="width: 100%;height: auto">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin-top: 3%">
                            product title <br>
                            <a class="btn btn-success" href="" style="font-size: 10px">add to cart</a>
                        </div>
                    @endfor
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>