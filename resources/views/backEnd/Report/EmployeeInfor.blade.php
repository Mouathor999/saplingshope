<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ຂໍ້ມູນພະນັກງານ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
</head>
<body>
@include('backEnd.AdminNavbar')
<div class="mainConten">
    {{--class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2--}}

    <br>
    <h4 style="width: 100%; text-align: center;"><b>ລາຍງານຂໍ້ພະນັກງານ</b></h4>
    <p>&nbsp;</p>
    <div class="container" id="search">
        <form class="navbar-form" role="search" action="" method="post">
            <div class="input-group add-on">
                <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text" style="box-shadow: 1px 1px 2px 1px #1e7e34">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="button" style="box-shadow: 1px 1px 2px 1px #1e7e34"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <p>&nbsp;</p>
    </div>
    <div class="row" style="margin-top: 1%; margin-left: 1%">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="table-responsive" id="tableResponsive">
                <table class="table table-hover" style="width:95%">
                    <tr>
                        <td ><div class=""><b>ລະຫັດ</b></div></td>
                        <td ><div class="div_in_td"><b>ຮູບພາບ</b></div></td>
                        <td ><div class=""><b>ຊື່</b></div></td>
                        <td ><div class="div_in_td"><b>ນາມສະກຸນ</b></div></td>
                        <td ><div class=""><b>ລະດັັບການສືກສາ</b></div></td>
                        <td ><div class=""><b>ເພດ</b></div></td>
                        <td ><div class=""><b>ອາຍຸ</b></div></td>
                        <td ><div class=""><b>ບ້ານ</b></div></td>
                        <td ><div class=""><b>ເມືອງ</b></div></td>
                        <td ><div class=""><b>ແຂວງ</b></div></td>
                        <td ><div class=""><b>ໂທລະສັບ</b></div></td>
                        <td ><div class=""><b>ອີເມວ</b></div></td>
                        <td ><div class=""><b>ໜາຍເລກບັດປະຈໍາຕົວ</b></div></td>
                    </tr>
                    <tbody>
                    @foreach($employees as $employee )
                        <tr>
                            <td style="text-align: center;width: 150px">
                                {{$employee -> id}}
                            </td>
                            <td style="text-align: center;width: 150px">
                                <a href=""><img src="{{asset('img/'.$employee ->image )}}" class="img-responsive" style="width: 100px" alt=""  ></a>
                            </td>
                            <td style="text-align: center;"><div>{{$employee ->emp_name }}</div></td>
                            <td style="text-align: center;"><div>{{$employee ->emp_lastname}}</div></td>
                            <td style="text-align: center;"><div>{{$employee ->edu_id }}</div></td>

                            <td><div class="">{{$employee ->gender}}</div></td>
                            <td><div class="">{{$employee ->age}}</div></td>
                            <td><div class="">{{$employee ->village}}</div></td>
                            <td><div class="">{{$employee ->district}}</div></td>
                            <td><div class="">{{$employee ->province}}</div></td>
                            <td><div class="">{{$employee ->tel}}</div></td>
                            <td><div class="">{{$employee ->email}}</div></td>
                            <td><div class="">{{$employee ->identification_card}}</div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div style="margin-top: 2%; margin-right: 5%; text-align: right">
                <button class="btn btn-success" id="windowprint" onclick="printPage()">Print page</button>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

<script type="text/javascript">
    function printPage() {
        document.getElementById('windowprint').style.display='none';
        document.getElementById('search').style.display='none';
        document.getElementById('tableResponsive').classList.remove("table-responsive");
        window.print();
        document.getElementById('search').style.display='block';
        document.getElementById('windowprint').style.display='block';
        document.getElementById('tableResponsive').classList.add("table-responsive");
    }

</script>

</html>


