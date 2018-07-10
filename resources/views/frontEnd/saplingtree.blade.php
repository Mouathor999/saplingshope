<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ເບ້ຍໄມ້</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body onresize="screenReSize()" class="">

@include('frontEnd.masterpage.master')


{{--<div class="row" style="margin-top: 2%; margin-bottom: 2%" id="saplingSearchFrame">
    <div class="col-md-1 col-lg-1 col-xl-1">

    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
        <div class="input-group add-on">
            <input class="form-control" placeholder="Search sappling tree..." name="saplingSearch" id="saplingSearch" type="text">
            <div class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>
</div>--}}

<div class="mainConten" id="maincontent" style="margin-top: 2%; margin-bottom: 2%" >
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card-columns">
                @foreach($products as $product)
                    <div class="card">
                        @if(!Empty($product->productimage[0]))
                            <a href="{{route('productdetail',$product->id)}}" class="">
                                <img class="img-responsive" src="{{asset('img/'.$product->productimage[0]->image)}}" alt="{{asset('img/nopic.jpg')}}" style="width: 100%; height: 210px">
                            </a>
                            @else
                            <a href="{{route('productdetail',$product->id)}}" class="">
                                <img class="img-responsive" src="{{asset('img/nopic.jpg')}}" alt="" style="width: 100%; height: 210px">
                            </a>
                         @endif
                        <div class="card-body"  style="background-color: whitesmoke">
                            <h5 class="card-title">{{$product->pro_name}}</h5>
                            <div>
                                ລາຄາ : <b> {{$product->sale_price . "  ກີບ"}}</b>
                                <br>
                                @if($product->promotion->count() > 0)
                                    @foreach($product->promotion as $ppromotion)
                                        @if($ppromotion->pivot->end_date >= date('Y-m-d') && $ppromotion->pivot->start_date <= date('Y-m-d'))
                                           ໂປຣໂມເຊີນ :  <b>{{$ppromotion->pivot->promotion . " %" }}</b>
                                        @endif
                                    @endforeach
                                @else

                                @endif

                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <p class="text-center"><a href="" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                    <p class="text-center"><a href="{{route('productdetail',$product->id)}}" class="nav-link"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                @endforeach
             </div>
        </div>
    </div>
</div>



<div class="container container-fluid" style="margin-bottom: 1%">
    <div class="row" id="showSeach" style="display: none">

    </div>
</div>



{{--Start swiper slide   Advertising--}}
<div class="swiper-container">
    <div class="swiper-wrapper">
        @foreach($Adverting_product as $adverting)
            <div class="swiper-slide">
                <div class="thumbnail">
                    <div class="productImage">
                        <img class="ns-img" src="{{asset('img/'.$adverting->productimage[0]->image)}}" alt="" style="width: 200px;height: 150px;">
                    </div>
                    <div class="caption" style="margin-top: 2%">
                        <h6 class="producttitle">{{$adverting->pro_name}}</h6>
                        <div>ລາຄາ: {{$adverting->sale_price}} &nbsp;ກີບ </div>
                        <p class="text-center">
                            <a href="{{route('cart',$adverting->id)}}" class="nav-link" role="button"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
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


    $(function () {
        $("#searchAll").keyup(function () {
            var search_data = $("#search").val();
            if(!search_data) {
                $('#maincontent').show();
                $('#saplingSearchFrame').show();
                $('#showSeach').hide();
            }else {

            }
        });

        $("#saplingSearch").keyup(function () {
            var search_data = $("#search").val();
            if(!search_data) {
                $('#maincontent').show();
                $('#showSeach').hide();
            }else {

            }
        });
    });
    $("#searchAll").autocomplete({
        source: "{{URL::to('/SpecificSearch')}}",
        minLength:1,
        select:function (key, value) {
            console.log(value);

            var data = value.item;

            console.log(data['promotion'].length);

            var dataContent ='';
            if( data['promotion'][0] ){
                dataContent += `
                     <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-top: 1%" xmlns="http://www.w3.org/1999/html">
                                <div class="card">
                                   <a href="http://localhost:8000/detail/${data['id']}" class="">
                                        <img class="img-responsive" src="http://localhost:8000/img/${data['image']}" alt="" style="width: 100%; height: 210px">
                                    </a>
                                   <div class="card-body" style="background-color: whitesmoke">
                                         <div style="margin-left: 5px">
                                           <h5><b>ຊື້ສິນຄ້າ : ${data['value']}</b></h5>
                                         </div>
                                         <div style="margin-left: 7px">
                                          <h6><b>ລາຄາ: </b>${data['price']} &nbsp; ກິບ</h6>
                                         </div>
                                         <div style="margin-left: 7px">
                                          <h6><b>ໂປຣໄມເຊີນ: </b>${data['promotion'][0]['promotion']} &nbsp; %</h6>
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="http://localhost:8000/detail/${data['id']}" class="nav-link"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                                            </div>
                                          </div>
                                   </div>
                                </div>
                     </div>
                `;
            }else{
                dataContent += `
                     <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-top: 1%" xmlns="http://www.w3.org/1999/html">
                                <div class="card">
                                   <a href="http://localhost:8000/detail/${data['id']}" class="">
                                        <img class="img-responsive" src="http://localhost:8000/img/${data['image']}" alt="" style="width: 100%; height: 210px">
                                    </a>
                                   <div class="card-body" style="background-color: whitesmoke">
                                         <div style="margin-left: 5px">
                                           <h5><b>ຊື້ສິນຄ້າ : ${data['value']}</b></h5>
                                         </div>
                                         <div style="margin-left: 7px">
                                          <h6><b>ລາຄາ: </b>${data['price']} &nbsp; ກິບ</h6>
                                         </div>

                                         <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="http://localhost:8000/detail/${data['id']}" class="nav-link"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                                            </div>
                                          </div>
                                   </div>
                                </div>
                     </div>
                `;
            }

            $('#maincontent').hide();
            $('#saplingSearchFrame').hide();
            $('#showSeach').show();
            $('#showSeach').html(dataContent);
        }
    });


    $("#saplingSearch").autocomplete({
        source: "{{URL::to('/SaplingSearch')}}",
        minLength:1,
        select:function (key, value) {
            console.log(value);

            var data = value.item;

            console.log(data['promotion'].length);

            var dataContent ='';
            if( data['promotion'][0] ){
                dataContent += `
                     <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3" style="margin-top: 1%" xmlns="http://www.w3.org/1999/html">
                                <div class="card">
                                   <a href="http://localhost:8000/detail/${data['id']}" class="">
                                        <img class="img-responsive" src="http://localhost:8000/img/${data['image']}" alt="" style="width: 100%; height: 210px">
                                    </a>
                                   <div class="card-body" style="background-color: whitesmoke">
                                         <div style="margin-left: 5px">
                                           <h5><b>ຊື້ສິນຄ້າ : ${data['value']}</b></h5>
                                         </div>
                                         <div style="margin-left: 7px">
                                          <h6><b>ລາຄາ: </b>${data['price']} &nbsp; ກິບ</h6>
                                         </div>
                                         <div style="margin-left: 7px">
                                          <h6><b>ໂປຣໄມເຊີນ: </b>${data['promotion'][0]['promotion']} &nbsp; %</h6>
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="http://localhost:8000/detail/${data['id']}" class="nav-link"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                                            </div>
                                          </div>
                                   </div>
                                </div>
                     </div>
                `;
            }else{
                dataContent += `
                     <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-top: 1%" xmlns="http://www.w3.org/1999/html">
                                <div class="card">
                                   <a href="http://localhost:8000/detail/${data['id']}" class="">
                                        <img class="img-responsive" src="http://localhost:8000/img/${data['image']}" alt="" style="width: 100%; height: 210px">
                                    </a>
                                   <div class="card-body" style="background-color: whitesmoke">
                                         <div style="margin-left: 5px">
                                           <h5><b>ຊື້ສິນຄ້າ : ${data['value']}</b></h5>
                                         </div>
                                         <div style="margin-left: 7px">
                                          <h6><b>ລາຄາ: </b>${data['price']} &nbsp; ກິບ</h6>
                                         </div>

                                         <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="http://localhost:8000/detail/${data['id']}" class="nav-link"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                                            </div>
                                          </div>
                                   </div>
                                </div>
                     </div>
                `;
            }


            $('#maincontent').hide();
            $('#showSeach').show();
            $('#showSeach').html(dataContent);
        }
    });






</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>