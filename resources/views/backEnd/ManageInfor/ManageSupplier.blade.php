<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
</head>
<body>
@include('backEnd.AdminNavbar')
<div class="mainContent">
    {{--class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2--}}
    <br>
    <div class="container">
        <form class="navbar-form" role="search" action="" method="post">
            <div class="input-group add-on">
                <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text" style="box-shadow: 1px 1px 2px 1px #1e7e34">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="button" style="box-shadow: 1px 1px 2px 1px #1e7e34"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class="row" style="margin-top: 1%; margin-right: 1%">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="table-responsive">
                <table class="table table-hover" style="width:95%">
                    <tr>
                        <td ><div class=""><b>SP_ID</b></div></td>
                        <td ><div class=""><b>ShopName</b></div></td>
                        <td ><div class="div_in_td"><b>Name</b></div></td>
                        <td ><div class=""><b>Lastname</b></div></td>
                        <td ><div class=""><b>Village</b></div></td>
                        <td ><div class=""><b>District</b></div></td>
                        <td ><div class=""><b>Province</b></div></td>
                        <td ><div class=""><b>country</b></div></td>
                        <td ><div class=""><b>Phone</b></div></td>
                        <td ><div class=""><b>Email</b></div></td>
                        <td ><div class=""><b>bankAccount</b></div></td>
                        <td ><div class=""><b>edit</b></div></td>
                        <td ><div class=""><b>delete</b></div></td>
                    </tr>

                    <tbody>
                    @foreach($suppliers as $supplier)
                        <tr>
                            <td style="text-align: center;"><div>{{$supplier->id}} </div></td>
                            <td style="text-align: center;"><div>{{$supplier->shop_name}} </div></td>
                            <td style="text-align: center;"><div>{{$supplier->sup_name}} </div></td>
                            <td><div class="">{{$supplier->lastname}} </div></td>
                            <td><div class="">{{$supplier->village}} </div></td>
                            <td><div class="">{{$supplier->district}} </div></td>
                            <td><div class="">{{$supplier->province}} </div></td>
                            <td><div class="">{{$supplier->country}} </div></td>
                            <td><div class="">{{$supplier->tel}} </div></td>
                            <td><div class="">{{$supplier->email}} </div></td>
                            <td><div class="">{{$supplier->bankAccount}} </div></td>
                            <td>
                                <a href="{{route('EditSupplier',$supplier->id)}}" class="btn btn-outline-warning"><i class="fas fa-pencil-alt" style="color: #1e7e34"></i> Ed</a>
                            </td>
                            <td >
                                <a href="{{route('DelSP',$supplier->id)}}" class="btn btn-outline-danger" ><i class="far fa-times-circle"></i> Dl</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>


