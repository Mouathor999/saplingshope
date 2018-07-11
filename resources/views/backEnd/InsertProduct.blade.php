<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ເພີ່ມສິນຄ້າ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

</head>
<body>
@include('backEnd.AdminNavbar')
<br>

<br>
    <div class="container container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2><b>ເພີ່ມຂໍ້ມູນສິນຄ້າ</b></h2>
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
                <div>
                    @if($text != null)
                        <div class="posttext" style="color: #d39e00;">
                           <h4>{{"Inserted 1 product list"}}</h4>
                        </div>
                        @else
                    @endif
                </div>
                <div>
                    {{--{{$getid}}--}}
                </div>
                <form class="form-group" action="{{route('InsertProduct')}}" method="POST" enctype="multipart/form-data">

                    <div>
                        <label for="pname">ຊື່ສິນຄ້າ</label>
                        <input type="text" name="pname" class="form-control">
                    </div>
                    <br>
                    <div>
                        <label for="ptypeid">ປະເພດສິນຄ້າ</label>
                        <select name="ptypeid" id="ptypeid" class="form-control">
                            <option value="">ເລືອກປະເພດ...</option>
                            @foreach($producttype as $ptype)
                                <option value="{{$ptype->id}}">{{$ptype->ptype_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div>
                        <label for="pprice">ລາຄາຂາຍ</label>
                        <input type="number" name="pprice" class="form-control">
                    </div>
                    <br>
                    <div>
                        <label for="pamount">ຈໍານວນ</label>
                        <input type="number" name="pamount" class="form-control">
                    </div>
                    <br>
                    <div>
                        <label for="ppromotion">ໂປຣໂມເຊີນ</label>
                        <select name="ppromotion" id="ppromotion" class="form-control">
                            <option value="">ເລືອກໂປຣໂມເຊີນ...</option>
                            @foreach($promotion as $ppromotion)
                                <option value="{{$ppromotion->promotion_id}}">{{$ppromotion->promotion}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div>
                        <label for="promotion_startDate">ວັນເລີ່ມໂປຣໂມເຊີນ</label>
                        <input type="date" name="promotion_startDate" class="form-control">
                    </div>
                    <br>
                    <div>
                        <label for="promotion_stopDate">ວັນໝົດໂປຣໂມເຊີນ</label>
                        <input type="date" name="promotion_stopDate" class="form-control">
                    </div>
                    <br>
                    <div>
                        <label for="limit">Limit</label>
                        <input type="number" name="limit" class="form-control">
                    </div>
                    <br>
                    <div>
                        <label for="pid">ອະທີບາຍເພີ່ມເຕີມ</label>
                        <textarea type="text" name="pdescription" class="form-control" rows="3" cols="20"></textarea>
                    </div>
                    <br>
                    <div>
                        <label for="pid">ຮູບທີ່ 1</label>
                        <input type="file" name="pImage1" class="form-control" >
                    </div>
                    <br>
                    <div>
                        <label for="pid">ຮູບທີ່ 2</label>
                        <input type="file" name="pImage2" class="form-control" >
                    </div>
                    <br>
                    <div>
                        <label for="pid">ຮູບທີ່ 3</label>
                        <input type="file" name="pImage3" class="form-control" >
                    </div>
                    <br>
                    <div>
                        <input type="submit" value="ຕົກລົງ" name="submit" class="btn btn-success">
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