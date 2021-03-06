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
@include('backEnd.AdminNavbar')
    <div class="mainConten">
        <br>
       <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
               <div> <label style="font-size: 24px; "> <b style="color: red">ລະຫັດການຂາຍ  : </b><b>s001</b></label></div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
               <div> <label style="font-size: 24px; "> <b style="color: red">ລະຫັດລູກຄ້າ  :</b> <b>c003</b></label></div>
           </div>
       </div>
        <br>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <td><div class="div_in_td"><b>ຮູບພາບ</b></div></td>
                    <td><div class="div_in_td"><b>ລະຫັດສີນຄ້າ</b></div></td>
                    <td><div class="div_in_td"><b>ຊື່ສິນຄ້າ</b></div></td>
                    <td><div class="div_in_td"><b>ຈໍານວນ</b></div></td>
                    <td><div class="div_in_td"><b>ລາຄາຕໍ່ໜ່ວຍ</b></div></td>
                    <td><div class="div_in_td"><b>ລາຄາຕໍ່ລາຍການ</b></div></td>
                </tr>
                </thead>
                <tbody>
                @for($i=1;$i<=10;$i++)
                    <tr>
                        <td>
                            <div class="div_in_td">
                                <a href="{{route('product.productdetail')}}"><img src="{{asset('img/flower2.jpg')}}" class="img-responsive" style="width: 90%" alt=""  ></a>
                            </div>
                        </td>
                        <td>
                            <div class="div_in_td">
                                p00{{$i+2}}
                            </div>
                        </td>
                        <td>
                            <div class="div_in_td">
                                ຊື່ສິນຄ້າທີ່ສັ່ງ {{$i}}
                            </div>
                        </td>
                        <td>
                            <div class="div_in_td">10</div>
                        </td>
                        <td>
                            <div class="div_in_td">1000</div>
                        </td>
                        <td>
                            <div class="div_in_td">10000</div>
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
        <br>
        <hr>
        <div class="mainConten" style="margin-right: 10%">
            <div class="" style="text-align: right">
                <h4><b>Total price: </b> $20</h4>
                <h4><b>Discount: </b> $2</h4>
                <h4><b>Tax: </b> 5$</h4>
                <h4><b>SubTotal price: </b> $23</h4>
            </div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>