<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee work</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

</head>
<body>
@include('backEnd.AdminNavbar')
<br>
<div class="text-center"><h3>ການມາເຮັດວຽກຂອງພະນັກງານ</h3></div>
<div class="mainConten">
    <div class="row" style="margin-top: 2%">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <td><div class="div_in_td"><b>ລະຫັດພະນັກງານ</b></div></td>
                        <td><div class="div_in_td"><b>ຊື່ພະນັກງານ</b></div></td>
                        <td><div class="div_in_td"><b>ເວລາເຂົ້າວຽກ</b></div></td>
                        <td><div class="div_in_td"><b>ເວລາອອກວຽກ</b></div></td>
                        <td><div class="div_in_td"><b>ໝາຍເຫດ</b></div></td>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=1;$i<=10;$i++)
                        <tr>
                            <td>
                                <div class="div_in_td"> e00{{$i}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">ຊື່ພະນັກງານ {{$i}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">{{date('d-m-y')}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">{{date('d-m-y')}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">   </div>
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