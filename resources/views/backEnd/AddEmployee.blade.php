<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emp Add</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
    <script !src="" type="text/javascript">
      function onloadfun() {
         document.getElementById("submit").disabled=true;
      }
      function checkIf_pwd_Lessthen_8() {
          var password = document.getElementById("pwd").value;
          if(password.length<8){
              document.getElementById("Comfirm_pwd").disabled=true;
              document.getElementById("tesJavascript").innerHTML ="Password must more then 8 character ";
          }else {
              document.getElementById("Comfirm_pwd").disabled=false;
              document.getElementById("tesJavascript").innerHTML ="";
          }
      }
      function CheckPassword() {
          var password = document.getElementById("pwd").value;
          var Confirm_password = document.getElementById("Comfirm_pwd").value;
          if(password == Confirm_password){
              document.getElementById("tesJavascript").innerHTML = "Password are match";
              document.getElementById("submit").disabled=false;
          }else{
              document.getElementById("tesJavascript").innerHTML ="Password not match";
          }
      }

    </script>
</head>
<body onload="onloadfun()">
@include('backEnd.AdminNavbar')
<div class="container container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h1>Insert Employee</h1>
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
                    <p style="color: #c82333; font-size: 2em">{{$text}}</p>
                @endif
            </div>

            <div id="tesJavascript">

            </div>

            <form class="form-group" action="{{route('PostEmployee')}}" method="POST" enctype="multipart/form-data">
                {{--<div style="margin-top: 50px">
                    <label for="uid">User ID</label>
                    <input type="text" name="uid" id="uid" class="form-control" required>
                </div>--}}
                <div>
                    <label for="uname">Username</label>
                    <input type="text" name="uname" class="form-control" required>
                </div>
                <div>
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" oninput="checkIf_pwd_Lessthen_8()" id="pwd" class="form-control" required>
                </div>
                <div>
                    <label for="Comfirm_pwd">Comfirm Password</label>
                    <input type="password" name="Comfirm_pwd"  id="Comfirm_pwd" oninput="CheckPassword()" class="form-control" required>
                </div>
                <div class="text-center" style="margin-top: 5px;margin-bottom: 5px">-------------000------------</div>

                <div>
                    <label for="name">First Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div>
                    <label for="last">Last Name</label>
                    <input type="text" name="lastname" class="form-control">
                </div>
                <div>
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control">
                        <option>ເລືອກເພດ</option>
                        <option value="male">ຊາຍ</option>
                        <option value="female">ຍິງ</option>
                        <option value="other">ອື່ນໆ</option>
                    </select>
                </div>
                <div>
                    <label for="age">Age</label>
                    <input type="number" name="age" class="form-control">
                </div>
                <div>
                    <label for="edu">Education</label>
                    <select name="E_edu" class="form-control">
                        <option>ເລືອກລະດັບການສືກສາ</option>
                        @foreach($emp_edus as $emp_edu)
                            <option value="{{$emp_edu->id}}">{{$emp_edu->education}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="village">Village</label>
                    <input type="text" name="village" class="form-control">
                </div>
                <div>
                    <label for="district">District</label>
                    <input type="text" name="district" class="form-control">
                </div>
                <div>
                    <label for="province">Province</label>
                    <input type="text" name="province" class="form-control">
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" class="form-control">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div>
                    <label for="identification_card">identification card</label>
                    <input type="number" name="identification_card" class="form-control">
                </div>
                <div>
                    <label for="description">Description</label><br/>
                    <textarea class="" class="form-control" name="description" cols="100" rows="3"></textarea>
                </div>
                <div>
                    <label for="img">User picture</label><br/>
                    <input type="file" name="img" class="form-control">
                </div>
                <div>
                    <br>
                    <input type="submit" value="clear" name="clear" class="btn btn-warning">
                    <input type="submit" value="submit" name="submit" id="submit"  class="btn btn-success">
                    <input type="submit" name="cancel" value="cancel" class="btn btn-danger">
                </div>
                {{csrf_field()}}
            </form>
        </div>
        <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>