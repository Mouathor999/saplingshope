<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Infor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
</head>
<body>
@include('frontEnd.masterpage.MainNavbar')
<br>
<div class="container container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>ຂໍ້ມູນລູກຄ້າ</h2>
            </div>
            <form class="form-group" action="{{route('PostCustomerInfor')}}" method="POST" enctype="">
                <div>
                    <label for="cname">ຊື່</label>
                    <input type="text" name="cname" class="form-control" required>
                </div>
                <div>
                    <label for="clast">ນາມສະກຸນ</label>
                    <input type="text" name="clastname" class="form-control">
                </div>
                <div>
                    <label for="cgender">ເພດ</label>
                    <select name="cgender" class="form-control" required>
                        <option value="">ເລືອກເພດ</option>
                        <option value="male">ຊາຍ</option>
                        <option value="female">ຍິງ</option>
                    </select>
                </div>
                <div>
                    <label for="cvillage">ບ້ານ</label>
                    <input type="text" name="cvillage" class="form-control" required>
                </div>
                <div>
                    <label for="cdistrict">ເມືອງ</label>
                    <input type="text" name="cdistrict" class="form-control" required>
                </div>
                <div>
                    <label for="cprovince">ແຂວງ</label>
                    <input type="text" name="cprovince" class="form-control" required>
                </div>
                <div>
                    <label for="cphone">ໂທລະສັບ</label>
                    <input type="number" name="cphone" class="form-control" required>
                </div>
                <div>
                    <label for="cemail">ອີເມວ</label>
                    <input type="email" name="cemail" class="form-control">
                </div>
                <div>
                    <label for="cpicture">ຮູບຂອງທ່ານ</label>
                    <input type="file" name="cpicture" class="form-control">
                </div>
                <br>
                <div>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>