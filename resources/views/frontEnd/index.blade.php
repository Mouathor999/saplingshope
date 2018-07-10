<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

</head>
<body>
  @include('frontEnd.masterpage.master')
   <div>

   </div>
  <div class="mainConten" id="maincontent">
       <div class="adverting-product">
           <br>
           <h3 style="text-align: center">
               <b>ສິນຄ້າມາໃໝ່</b>
           </h3>

           <div class="adverting-product-content">
               <div class="row">
                   @foreach($NewProduct as $new_product)

                       <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                           <div class="hovereffect">
                               <br>
                               <a href="{{route('productdetail',$new_product->id)}}">
                                   <img class="img-responsive" src="{{asset('img/'.$new_product->productimage[0]->image)}}" alt="" style="height: 200px">
                               </a>

                               <div class="overlay">
                                   <a href="{{route('cart',$new_product->id)}}" class="btn" style="background-color: #1e7e34">
                                       <i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i>
                                   </a>
                                   <p class="icon-links">
                                       <a style="margin-right: 10px">
                                           <label style="color: red">{{$new_product->pro_name}}</label>
                                       </a>

                                   </p>
                               </div>
                           </div>
                       </div>

                   @endforeach
               </div>
           </div>
       </div>
       <br/>
       <div class="adverting-product">
           <br/>
           <h3 style="text-align: center"><b>ສິນຄ້າຂາຍດີ</b></h3>
           <div class="adverting-product-content">
               <div class="row">

                   @foreach($bestSale as $best_sale)

                       <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                           <div class="hovereffect">
                               <a href="{{route('productdetail',$best_sale->product_id)}}">
                                   <img class="img-responsive" src="{{asset('img/'.$best_sale->image)}}" alt="" style="height: 200px">
                               </a>
                               <div class="overlay">
                                   <a href="{{route('cart',$best_sale->product_id)}}" class="btn" style="background-color: #1e7e34">
                                       <i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i>
                                   </a>
                                   <p class="icon-links">
                                       <a style="margin-right: 10px">
                                           <label style="color: red">{{$best_sale->pro_nam}}</label>
                                       </a>

                                   </p>
                               </div>
                           </div>
                       </div>
                    @endforeach

               </div>
           </div>
       </div>
       <br/>
       <div class="adverting-product">
           <br/>
           <h2 style="text-align: center"><b>ສິນຄ້າແນະນໍາ</b></h2>
           <div class="adverting-product-content">
               <div class="row">
                   @foreach($Recomment as $p_recomment)
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2 col-xl-2">
                       <div class="hovereffect">
                           <a href="{{route('productdetail',$p_recomment->id)}}">
                               <img class="img-responsive" src="{{asset('img/'.$p_recomment->productimage[0]->image)}}" alt="" style="height: 200px">
                           </a>
                           <div class="overlay">
                               <a href="{{route('cart',$p_recomment->id)}}" class="btn" style="background-color: #1e7e34">
                                   <i class="fas fa-cart-plus fa-2x" style="color: #FFC107;"></i>
                               </a>
                               <p class="icon-links">
                                   <a style="margin-right: 10px">
                                       <label style="color: red">{{$p_recomment->pro_name}}</label>
                                   </a>
                               </p>
                           </div>
                       </div>
                   </div>
                   @endforeach
               </div>
           </div>
       </div>
   </div>

  <div class="container container-fluid">
    <div class="row" id="showSeach" style="display: none">

    </div>
  </div>



  {{--Star footer--}}
  <div class="footer" style="">
      @include('frontEnd.masterpage.footer')
  </div>{{--End footer--}}


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





</body>

<script type="text/javascript">
    /*$.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(function () {
        $('#searchAll').on('keyup',function () {
             var query = $(this).val();
            $.ajax({
                type:'POST',
                url:'/searchAllproduct/'+query,
                data:"",
                dataType: 'json',
                success: function(data){ // What to do if we succeed

                        console.log(data);

                }
            });
        })
    });*/




    $(function () {

        /*$(document).ready(function () {
            $.ajax({
                type:'GET',
                url:'/AjaxAllproduct',
                data:"",
                success: function(data){

//                         console.log(data.length);
                    console.log(data);

                    var dataContent ='';

                    for(var i=0; i<data.length; i++) {
                        dataContent += `
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="margin-top: 1%">
                                <div class="card">
                                   <a href="" class="">
                                        <img class="img-responsive" src="http://localhost:8000/img/${data[i]['productimage'][0]['image']}" alt="" style="width: 100%; height: 210px">
                                    </a>
                                   <div class="card-body" style="background-color: whitesmoke">
                                         <div style="margin-left: 5px">
                                           <h5><b>ຊື້ສິນຄ້າ : </b>${data[i]['pro_name']}</h5>
                                         </div>
                                         <div style="margin-left: 7px">
                                          <h6><b>ລາຄາ: </b>${data[i]['sale_price']} &nbsp; ກິບ</h6>
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="" class="nav-link"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                                            </div>
                                          </div>
                                   </div>
                                </div>
                             </div>
                           `;

                    }
                    $('#dataContent').html(dataContent);

                }
            });
        });*/


        $("#searchAll").keyup(function () {
          var search_data = $("#search").val();
            if(!search_data) {
                $('#maincontent').show();
                $('#showSeach').hide();

                /*$.ajax({
                    type:'GET',
                    url:'/AjaxAllproduct',
                    data:"",
                    success: function(data){
//                         console.log(data.length);
                        console.log(data);
                        var dataContent ='';
                        for(var i=0; i<data.length; i++) {
                            dataContent += `
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="margin-top: 1%">
                                <div class="card">
                                   <a href="" class="">
                                        <img class="img-responsive" src="http://localhost:8000/img/${data[i]['productimage'][0]['image']}" alt="" style="width: 100%; height: 210px">
                                    </a>
                                   <div class="card-body" style="background-color: whitesmoke">
                                         <div style="margin-left: 5px">
                                           <h5><b>ຊື້ສິນຄ້າ : </b>${data[i]['pro_name']}</h5>
                                         </div>
                                         <div style="margin-left: 7px">
                                          <h6><b>ລາຄາ: </b>${data[i]['sale_price']} &nbsp; ກິບ</h6>
                                         </div>
                                         <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="" class="nav-link"><i class="fas fa-eye"></i> view</a></p>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <p class="text-center"><a href="" class="nav-link"><i class="fas fa-cart-plus fa-2x" style="color: green"></i></a></p>
                                            </div>
                                          </div>
                                   </div>
                                </div>
                             </div>
                           `;

                        }
                        $('#dataContent').html(dataContent);

                    }
                });*/


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

            var dataContent ='';
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
            $('#maincontent').hide();
            $('#showSeach').show();
            $('#showSeach').html(dataContent);
        }
    });






</script>


</html>