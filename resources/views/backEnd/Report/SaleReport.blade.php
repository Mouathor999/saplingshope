<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sale Report</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

</head>
<body>
@include('backEnd.AdminNavbar')
<br>
<div class="text-center"><h3>ປະຫວັດການຂາຍ</h3></div>
<div class="mainConten">
    <div class="row" style="margin-top: 2%">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <td><div class="div_in_td"><b>ລະຫັດການຂາຍ</b></div></td>
                        <td><div class="div_in_td"><b>ລະຫັດລູກຄ້າ</b></div></td>
                        <td><div class="div_in_td"><b>ຊື່ລູກຄ້າ</b></div></td>
                        <td><div class="div_in_td"><b>ລະຫັດພະນັກງານຂາຍ</b></div></td>
                        <td><div class="div_in_td"><b>ວັນທີ່ຂາຍ</b></div></td>
                        <td><div class="div_in_td"><b>ສະຖານະ</b></div></td>
                        <td><div class="div_in_td"><b>ເບີ່ງຂໍ້ມູນ</b></div></td>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=1;$i<=10;$i++)
                        <tr>
                            <td>
                                <div class="div_in_td"> 00{{$i}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">00{{$i+3}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">ຊື່ລູກຄ້າທີ {{$i+1}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">c00 {{$i+2}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">{{date('d-m-y')}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">ຈ່າຍແລ້ວ</div>
                            </td>
                            <td>
                                <div class="div_in_td"><a class="btn"><i class="fas fa-eye" style="color: #1e7e34"></i> ລາຍລະອຽດ</a></div>
                            </td>

                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="text-right" style="margin-right: 5%">
        <a class="btn btn-primary" style="color: white">Print PDF</a>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>