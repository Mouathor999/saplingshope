<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
    <script type="text/javascript">
        (document).onload(function () {
            $('#home_li').addClass('active');
        });
    </script>
</head>
<body>
  @include('frontEnd.masterpage.master')
   <div class="mainConten">
       <div class="adverting-product">
           <h2 style="margin-left: 1%">
               {{--<b>New product</b>--}}
           </h2>
           <div class="adverting-product-content">
               <div class="row">

                  @for($i=1 ; $i<=12; $i++)
                       <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                           <div class="hovereffect">
                               <br>
                               <a href="{{route('productdetail',2)}}">

                                   <img class="img-responsive" src="{{asset('img/nopic.JPG')}}" alt="" style="height: 200px">

                               </a>

                               <div class="overlay">
                                   <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                                   <p class="icon-links">
                                       <a href="#" style="margin-right: 10px">
                                           <i class="fab fa-twitter" style="color: #FFC107"></i>
                                       </a>
                                       <a href="#"  style="margin-right: 10px">
                                           <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                       </a>
                                       <a href="#"  style="margin-right: 10px">
                                           <i class="fab fa-instagram" style="color: #FFC107"></i>
                                       </a>
                                   </p>
                               </div>
                           </div>
                       </div>
                  @endfor

               </div>
           </div>
       </div>
       <br/>
       <div class="adverting-product">
           <br/>
           <h2 style="margin-left: 1%"><b>best sales product</b></h2>
           <div class="adverting-product-content">
               <div class="row">
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/newapling.JPG')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/newapling.JPG')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/newapling.JPG')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/newapling.JPG')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/newapling.JPG')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/newapling.JPG')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/newapling.JPG')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/newapling.JPG')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>


               </div>
           </div>
       </div>
       <br/>
       <div class="adverting-product">
           <br/>
           <h2 style="margin-left: 1%"><b>Recommended product</b></h2>
           <div class="adverting-product-content">
               <div class="row">
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/sapling3.jpg')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/sapling3.jpg')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/sapling3.jpg')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/sapling3.jpg')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/sapling3.jpg')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/sapling3.jpg')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/sapling3.jpg')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/sapling3.jpg')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/sapling3.jpg')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',2)}}">
                               <img class="img-responsive" src="{{asset('img/sapling3.jpg')}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="" class="btn" style="background-color: #1e7e34"><i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i></a>
                               <p class="icon-links">
                                   <a href="#" style="margin-right: 10px">
                                       <i class="fab fa-twitter" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-facebook-f" style="color: #FFC107"></i>
                                   </a>
                                   <a href="#"  style="margin-right: 10px">
                                       <i class="fab fa-instagram" style="color: #FFC107"></i>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </div>
  {{--Star footer--}}
  <div class="footer" style="">
      @include('frontEnd.masterpage.footer')
  </div>{{--End footer--}}



  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>