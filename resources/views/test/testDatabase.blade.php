<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Database</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">

    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<br>
{{--<div style="margin-left: 10px">




 <p style="color: red">
     This is test for product and product_level
 </p>
    <br>
    <div>
       @foreach($product_productlevel as $list)
           {{$list->productlevel->level}}
           @endforeach
    </div>
    <br>
    <hr>



    <p style="color: red">
        This is test for product and image
    </p>
    <br>
        <div>
            <ul>
                @foreach($product_images as $imageList)
                <li>

                    --}}{{--<img src="{{ asset('img/'.$imageList->productimage[0]->image)}}" alt="">--}}{{--
                    @foreach($imageList->productimage as $pictures)
                        @if(count($imageList->productimage)>=1)

                           {{$pictures->image}}
                            @else


                        @endif()
                        --}}{{--{{$pictures->image}}--}}{{--

                        <br>


                    @endforeach
                    <br><br>
                   --}}{{-- @if(!Empty($imageList->productimage[1] ))
                        <img src="{{asset('img/'.$imageList->productimage[1]->image)}}" alt="" style="width: 100px; height: 100px">
                        @else
                        {{"Image is null"}}
                    @endif--}}{{--


                </li>
                    <br>
                   ========================
                @endforeach
            </ul>



        </div>
    <br>
    <hr>



    <p style="color: red">
        This is test for product , order and orderDetail
    </p>
    <br>
        <div>
            @foreach($product_oder as $datalist)
                {{$datalist}}
                <div>-----0000-----</div>
            @endforeach
        </div>
    <br>
    <hr>

    <p style="color: red">
        This is test for
    </p>
    <br>
    <div>
       --}}{{-- @foreach($product_oder as $datalist)
            {{$datalist}}
            <div>-----0000-----</div>
        @endforeach--}}{{--
    </div>
    <br>
    <hr>
</div>--}}

<div class="container-fluid">
    <div class="panel panel-info">
        <div class="panel-heading">
            Test autocomplete
        </div>
        <div class="panel-body">
            <input type="text" name="search" id="search" placeholder="search" class="form-control">
        </div>
    </div>
</div>



<div>

</div>




<div class="row" id="dataContent">


</div>

<div class="adverting-product">
    <div class="adverting-product-content">
        <div class="row" id="showSeach">

        </div>
    </div>
</div>



</body>
<script  type="text/javascript">

         $(function () {

             $(document).ready(function () {
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
             });


             $("#search").keyup(function () {
                 var search_data = $("#search").val();
                 if(!search_data) {
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
                 }
             });
         });
        $("#search").autocomplete({

            source: "{{URL::to('/SpecificSearch')}}",
            minLength:1,
            select:function (key, value) {
                console.log(value);

                var data = value.item;

                var dataContent ='';
                    dataContent += `
                     <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="margin-top: 1%">
                                <div class="card">
                                   <a href="" class="">
                                        <img class="img-responsive" src="http://localhost:8000/img/${data['image']}" alt="" style="width: 100%; height: 210px">
                                    </a>
                                   <div class="card-body" style="background-color: whitesmoke">
                                         <div style="margin-left: 5px">
                                           <h5><b>ຊື້ສິນຄ້າ : </b></h5>
                                         </div>
                                         <div style="margin-left: 7px">
                                          <h6><b>ລາຄາ: </b> &nbsp; ກິບ</h6>
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
                $('#showSeach').html(dataContent);
            }
        });
</script>


</html>