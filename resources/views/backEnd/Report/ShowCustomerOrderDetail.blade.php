<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ນໍາເຂົ້າສິນຄ້າ</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
</head>
<body>
@include('backEnd.AdminNavbar')
<div class="container container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div style="background-color: #7DA0B1">
                <div class="card" style="height: auto;  box-shadow: 1px 1px 1px 1px #1c7430">
                    <br>

                    <div class="card-body" style="height: auto; box-shadow: 1px 1px 1px 1px #B3E5FC">
                        <div  style="overflow: scroll;height: 800px">
                            <ul class="list-group">
                                <div>
                                    <h5><b>ລະຫັດສັ່ງຊື້ : </b><label style="color: red; font-size: 1em ">{{$OrderID}}</label></h5>
                                </div>
                                <li class="list-group-item">
                                    <div class="table-responsive">
                                        <table class="table table-hover" style="">
                                            <tr>
                                                <th style="background-color: #B3E5FC;text-align: center">ຮູບພາບ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ລະຫັດສິນຄ້າ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ຊື່ສິນຄ້າ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ຈໍານວນ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ລາຄາຕໍ່ໜ່ວຍ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ລາຄາຕໍ່ລາຍການ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ໂປຣໂມເຊີນ</th>

                                            </tr>

                                            @foreach($CustomerOrderDetail as $detail)
                                                <tr>
                                                    <td><img src="{{asset('img/'.$detail->image)}}" alt="" style="width: 100px; height: 100px"></td>
                                                    <td>{{$detail->product_id}}</td>
                                                    <td>{{$detail->pro_name}}</td>
                                                    <td>{{$detail->quantity}}</td>
                                                    <td>{{$detail->sale_price}}</td>
                                                    <td>{{$detail->total_price}}</td>
                                                    <td>{{$detail->product_promotion}}&nbsp; % </td>

                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>