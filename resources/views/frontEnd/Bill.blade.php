<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
</head>
<body>
<br>
<div class="mainConten">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <b> Order ID :</b> 0021 <br/>
            <b> Customer ID :</b> C00012 <br/>
            <b> Customer Name :</b> Mr.Jonh Son <br/>
            <b> Customer Village :</b> Dongdok <br/>
            <b> Customer District :</b> Xaythany <br/>
            <b> Customer Province :</b> Vientaine <br/>


        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">

            <b> Shope name:</b> Chanphong Shope<br/>
            <b> Shope Bank Account:</b> 1112232223453454<br/>
            <b> Shope Contack 1 :</b> 020 55667756<br/>
            <b> Shope Contack 2 :</b> 030 5998845<br/>

        </div>
    </div>

    <div class="row" style="margin-top: 2%">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <td><div class="div_in_td"><b>ຮູບພາບ</b></div></td>
                        <td><div class="div_in_td"><b>ຊື່ສີນຄ້າ</b></div></td>
                        <td><div class="div_in_td"><b>ຈໍານວນທີ່ສັ່ງ</b></div></td>
                        <td><div class="div_in_td"><b>ລາຄາຕໍ່ໜ່ວຍ</b></div></td>
                        <td><div class="div_in_td"><b>ລາຄາຕໍ່ລາຍການ</b></div></td>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=1;$i<=10;$i++)
                        <tr>
                            <td>
                                <div class="div_in_td"><img src="{{asset('img/flower2.jpg')}}" class="img-responsive" style="width: 90%" alt=""  ></div>
                            </td>
                            <td>
                                <div class="div_in_td">ສິນຄ້າທີ {{$i+1}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">{{$i+3}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">{{300001+$i}}</div>
                            </td>
                            <td>
                                <div class="div_in_td">{{(30001+$i)*($i+3)}}</div>
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <div style="background-color: #7DA0B1;" class="text-center">
        <br>
        <h3 style="color: white">
           <b>Don't Forget save your Bill</b>
        </h3>
        <a class="btn btn-warning" ><b>Save As PDF</b></a>
        <h3>-----oooo-----</h3>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>