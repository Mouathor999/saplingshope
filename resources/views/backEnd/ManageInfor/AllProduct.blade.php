<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ຂໍ້ມູນສິນຄ້າ</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body>
@include('backEnd.AdminNavbar')
<div class="maincontent">
    {{--class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2--}}
    <br>
    <div class="container">
        <form class="navbar-form" role="search" action="" method="post">
            <div class="input-group add-on">
                <input class="form-control" placeholder="Search" name="searchProduct" id="searchProduct" type="text" style="box-shadow: 1px 1px 2px 1px #1e7e34">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="button" style="box-shadow: 1px 1px 2px 1px #1e7e34"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>

    <div class="row" style="margin-top: 1%; margin-right: 1%" id="maincontent">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="table-responsive">
                <table class="table table-hover" style="width:95%">
                    <tr>
                        <td ><div class=""><b>ລະຫັດສິນຄ້າ</b></div></td>
                        <td ><div class="div_in_td"><b>ຮູບ</b></div></td>
                        <td ><div class="div_in_td"><b>ຊື່ສິນຄ້າ</b></div></td>
                        <td ><div class="div_in_td"><b>ປະເພດສິນຄ້າ</b></div></td>
                        <td ><div class="div_in_td"><b>ລາຄາຂາຍ</b></div></td>
                        <td ><div><b>Stock</b></div></td>
                        <td ><div class=""><b>ໂປຣໂມເຊີນ</b></div></td>
                        <td ><div class=""><b>Limit</b></div></td>
                        <td ><div class=""><b>ແກ້ໄຂ Limit</b></div></td>
                        <td ><div class=""><b>ແກ້ໄຂສິນຄ້າ</b></div></td>
                        <td ><div class=""><b>ລົບ</b></div></td>
                    </tr>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td style="text-align: center;width: 150px">
                                {{ $product->id}}
                            </td>
                            <td style="text-align: center;width: 150px">
                                <a href="">
                                    @if($product->productimage->count() > 0)
                                        <img src="{{asset('img/'.$product->productimage[0]->image)}}" class="img-responsive" style="width: 100px" alt=""  >
                                    @else
                                    @endif
                                    </a>
                              </td>
                            <td style="text-align: center;">
                                <div style="width: 150px">{{$product->pro_name}}</div>
                            </td>
                            <td><div class="">{{$product->producttype->ptype_name }}</div></td>
                            <td><div class="">{{$product->sale_price }}</div></td>
                            <td><div class="">{{$product->stock }}</div></td>
                            <td>
                                <div class="">
                                    @if($product->promotion->count() > 0)
                                        @foreach($product->promotion as $ppromotion)
                                            @if($ppromotion->pivot->end_date >= date('Y-m-d'))
                                                {{$ppromotion->pivot->promotion . " %" }}
                                            @endif
                                        @endforeach
                                    @else

                                    @endif
                                </div>
                            </td>
                            <td><div class="">{{$product->limit }}</div></td>
                            <td>
                                <a href="{{route('EditPLimit',$product->id)}}" class="btn btn-outline-warning"><i class="far fa-bell"  style="color: #1e7e34"></i> Lm</a>
                            </td>
                            <td>
                                <a href="{{route('EditProduct',$product->id)}}" class="btn btn-outline-warning"><i class="fas fa-pencil-alt" style="color: #1e7e34"></i> Ed</a>
                            </td>
                            <td >
                                <a href="{{route('DelProduct',$product->id)}}" class="btn btn-outline-danger" ><i class="far fa-times-circle"></i> Dl</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
	
	
	
	<div class="row" style="margin-top: 1%; margin-right: 1%;display:none" id="showSeach">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="table-responsive">
                <table class="table table-hover" style="width:95%">
                    <tr>
                        <td style="text-align: center;" ><b>ລະຫັດສິນຄ້າ</b>></td>
                        <td style="text-align: center;" ><b>ຮູບ</b></td>
                        <td style="text-align: center;" ><b>ຊື່ສິນຄ້າ</b></td>
                        <td style="text-align: center;" ><b>ປະເພດສິນຄ້າ</b></td>
                        <td style="text-align: center;" ><b>ລາຄາຂາຍ</b></td>
                        <td style="text-align: center;" ><b>Stock</b></td>
                        <td style="text-align: center;" ><b>ໂປຣໂມເຊີນ</b></td>
                        <td style="text-align: center;" ><b>Limit</b></td>
                        <td style="text-align: center;" ><b>ແກ້ໄຂ Limit</b></td>
                        <td style="text-align: center;" ><b>ແກ້ໄຂສິນຄ້າ</b></td>
                        <td style="text-align: center;" ><b>ລົບ</b></td>
                    </tr>
                    <tbody id="searchTable">
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
	
	
	
	
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

<script type="text/javascript">
    $(function () {
        $("#searchProduct").keyup(function () {
            var search_data = $("#search").val();
            if(!search_data) {
                $('#maincontent').show();
                $('#showSeach').hide();
            }else {

            }
        });

    });
    $("#searchProduct").autocomplete({
        source: "{{URL::to('/admin/ajaxSearchProduct_Admin')}}",
        minLength:1,
        select:function (key, value) {
            console.log(value);

            var data = value.item;

            console.log(data['promotion'].length);

            var dataContent ='';
            if( data['promotion'][0] ){
                console.log(data);
                console.log("Have promotion");
                dataContent += `
                   <td>
                   ${data['id']}
                   </td>
                    <td style="text-align: center;">
                    <img class="img-responsive" src="http://localhost:8000/img/${data['image']}" alt="" style="width: 90px; height: 100px">
                   </td>
                   <td style="text-align: center;">
                   ${data['value']}
                   </td>
                   <td style="text-align: center;">
                   ${data['product_type'][0]['product_type']}
                   </td>
                   <td style="text-align: center;">
                   ${data['price']}
                   </td>
                   <td style="text-align: center;">
                   ${data['stock']}
                   </td>
                   <td style="text-align: center;">
                   ${data['promotion'][0]['promotion']} &nbsp;%
                   </td>
                   <td style="text-align: center;">
                   ${data['limit']}
                   </td>
                   <td style="text-align: center;">
                     <a href="http://localhost:8000/admin/EditProductLimit/${data['id']}" class="btn btn-outline-warning"><i class="far fa-bell"  style="color: #1e7e34"></i> Lm</a>
                   </td>
                   <td style="text-align: center;">
                       <a href="http://localhost:8000/admin/EditProduct/${data['id']}" class="btn btn-outline-warning"><i class="fas fa-pencil-alt" style="color: #1e7e34"></i> Ed</a>
                   </td>
                   <td style="text-align: center;">
                      <a href="http://localhost:8000/admin/DelProduct/${data['id']}" class="btn btn-outline-danger" ><i class="far fa-times-circle"></i> Dl</a>
                   </td>


                `;
            }else{
                console.log(data);
                console.log("No promotion");
                dataContent += `
                   <td>
                   ${data['id']}
                   </td>
                    <td style="text-align: center;">
                    <img class="img-responsive" src="http://localhost:8000/img/${data['image']}" alt="" style="width: 90px; height: 100px">
                   </td>
                   <td style="text-align: center;">
                   ${data['value']}
                   </td>
                   <td style="text-align: center;">
                   ${data['product_type'][0]['product_type']}
                   </td>
                   <td style="text-align: center;">
                   ${data['price']}
                   </td>
                   <td style="text-align: center;">
                   ${data['stock']}
                   </td>
                   <td style="text-align: center;">
                   &nbsp;
                   </td>
                   <td style="text-align: center;">
                   ${data['limit']}
                   </td>
                   <td style="text-align: center;">
                     <a href="http://localhost:8000/admin/EditProductLimit/${data['id']}" class="btn btn-outline-warning"><i class="far fa-bell"  style="color: #1e7e34"></i> Lm</a>
                   </td>
                   <td style="text-align: center;">
                       <a href="http://localhost:8000/admin/EditProduct/${data['id']}" class="btn btn-outline-warning"><i class="fas fa-pencil-alt" style="color: #1e7e34"></i> Ed</a>
                   </td>
                   <td style="text-align: center;">
                      <a href="http://localhost:8000/admin/DelProduct/${data['id']}" class="btn btn-outline-danger" ><i class="far fa-times-circle"></i> Dl</a>
                   </td>


                `;
            }

            $('#maincontent').hide();
            $('#showSeach').show();
            $('#searchTable').html(dataContent);
        }
    });



</script>

</html>


