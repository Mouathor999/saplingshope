<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
</head>
<body>
@include('backEnd.AdminNavbar')

<div class="container container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2>Add Promotion</h2>
            </div>
            <form class="form-group" action="" method="POST" enctype="">
                <div>
                    <label for="pid">Promotion ID</label>
                    <input type="text" name="pid" class="form-control">
                </div>
                <div>
                    <label for="pname">Promotion</label>
                    <input type="text" name="ptname" class="form-control">
                </div>
                <br>
                <div>
                    <input type="submit" value="submit" name="submit" class="btn btn-success">
                </div>
            </form>
            <div class="card" style="height: auto">
                <div class="card-title">
                   <h4><b>Promotion list</b></h4>
                </div>
                <div class="card-body">
                    <div  style="overflow: scroll;height: 500px">
                        <ul class="list-group">
                            @for($i=1;$i<=10;$i++)
                                <li class="list-group-item">
                                    <div class="table-responsive">
                                        <table class="table table-hover" style="">
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$i+2}}%</td>
                                                <td style="text-align: right"><a href="" class="btn btn-warning"><i class="fas fa-pencil-alt"></i>ແກ້ໄຂ</a></td>
                                            </tr>
                                        </table>
                                    </div>
                                </li>
                            @endfor

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>