<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ເພີ່ມຜູ້ສະໜອງ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
</head>
<body>
   @include('backEnd.AdminNavbar')
<div class="container container-fluid" style="margin-top: 20px">
    <div class="row">
        <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h1>ເພີ່ມຂໍ້ມູນຜູ້ສະໜອງ</h1>
            </div>
            <div>
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul class="nav navbar-nav">
                            @foreach($errors->all() as $err)
                                <li class="nav-item">- {{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <br>
             <div style="color: #d39e00;">
                 @if($text != null)
                     <h3><b>{{$text}}</b></h3>
                     @else

                 @endif
             </div>
            <br>
            <form class="form-group" action="{{route('PostSupplier')}}" method="POST" enctype="">
                <div style="margin-top: 50px">
                    <label for="shopID">ລະຫັດຮ້ານ</label>
                    <input type="text" name="shopID" class="form-control" required>
                </div>
                <div>
                    <label for="shopname">ຊື່ຮ້ານ</label>
                    <input type="text" name="shopname" class="form-control" required>
                </div>
                <div>
                    <label for="supname">ຊື່ເຈົ້າຂອງຮ້ານ</label>
                    <input type="text" name="supname" class="form-control" required>
                </div>
                <div>
                    <label for="lastname">ນາມສະກຸນ</label>
                    <input type="text" name="lastname" class="form-control" required>
                </div>
                <div>
                    <label for="village">ບ້ານ</label>
                    <input type="text" name="village" class="form-control" required>
                </div>
                <div>
                    <label for="district">ເມືອງ</label>
                    <input type="text" name="district" class="form-control" required>
                </div>
                <div>
                    <label for="province">ແຂວງ</label>
                    <input type="text" name="province" class="form-control" required>
                </div>
                <div>
                    <label for="country">ປະເທດ</label>
                    <input type="text" name="country" class="form-control" required>
                </div>
                <div>
                    <label for="tel">Tel</label>
                    <input type="number" name="tel" class="form-control">
                </div>
                <div>
                    <label for="email">ອີເມວ</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div>
                    <label for="baccount">ເລກບັນຊີທະນາຄານ</label>
                    <input type="number" name="baccount" class="form-control">
                </div>
                <br>
                <div>

                    <input type="submit" value=" ເພີ່ມ "  name="submit" class="btn btn-success">
                </div>
                {{csrf_field()}}
            </form>
        </div>
        <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>