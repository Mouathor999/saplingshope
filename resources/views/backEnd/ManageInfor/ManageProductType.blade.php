<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
</head>
<body>
@include('backEnd.AdminNavbar')
<div class="container container-fluid">
    <br><br>

   <div class="">
           <ul class="list-group">

                   <li class="list-group-item">
                       <div class="table-responsive">
                           <table class="table table-hover" style="">
                               <tr>
                                   <td><b>ລະຫັດປະເພດສິນຄ້່າ</b>ລ</td>
                                   <td style="text-align: left"><b>ຊື່ປະເພດສິນຄ້າ</b></td>
                                   <td style="text-align: right"><b>Edit</b></td>
                                   <td style="text-align: left"><b>Del</b></td>
                               </tr>
                               @foreach($producttype as $ptype)
                                   <tr>
                                       <td> {{$ptype->id}} </td>
                                       <td style="text-align: left"> {{$ptype->ptype_name }} </td>
                                       <td style="text-align: right"><a href="{{route('EditPtype',$ptype->id)}}" class="btn btn-warning"> <i class="fas fa-pencil-alt"></i> </a></td>
                                       <td style="text-align: left"><a href="{{route('DelPtype',$ptype->id)}}" class="btn btn-danger"> X </a></td>
                                   </tr>
                               @endforeach
                           </table>
                       </div>
                   </li>


           </ul>
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>