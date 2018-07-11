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
                        <div class="card-title">
                            <div>
                                <div class="row">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{asset('img/nopic.jpg')}}" alt="" style="width: 120px;margin-bottom: 10px">
                                    </div>
                                    <div class="col-md-8 col-lg-8 col-xl-8">
                                        &nbsp;&nbsp;
                                    </div>
                                    <div class="col-md-2 col-lg-2 col-xl-2">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="height: auto; box-shadow: 1px 1px 1px 1px #B3E5FC">
                            <div  style="overflow: scroll;height: 800px">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="table-responsive">
                                            <table class="table table-hover" style="">
                                                <tr>
                                                    <th style="background-color: #B3E5FC;text-align: center">ລະຫັດສັ່ງຊື້</th>
                                                    <th style="background-color: #B3E5FC;text-align: center">ວັນທີ່ສັ່ງຊື້ອອກ</th>
                                                    <th style="background-color: #B3E5FC;text-align: center">ລະຫັດພະນັກງານສັ່ງຊື້</th>
                                                    <th style="background-color: #B3E5FC;text-align: center">ຊື່ຮ້ານ</th>
                                                    <th style="background-color: #B3E5FC;text-align: center">ນໍາເຂົ້າສີນຄ້າ</th>
                                                </tr>

                                                @foreach($OrderOutList as $OrderOut)
                                                    <tr>
                                                        <td>{{$OrderOut->id}}</td>
                                                        <td>{{$OrderOut->orderOut_date}}</td>
                                                        <td>{{$OrderOut->employee->emp_name}}</td>
                                                        <td>{{$OrderOut->supplier->shop_name}}</td>
                                                        <td>
                                                            <a class="btn btn-outline-success" href="{{route('orderoutDetail',$OrderOut->id)}}">ນໍາເຂົ້າ</a>
                                                        </td>
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