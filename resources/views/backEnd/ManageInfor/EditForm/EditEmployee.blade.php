<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ແກ້ໄຂຂໍ້ມູນພະນັກງານ</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
    <script !src="" type="text/javascript">
     /* function onloadfun() {
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
      }*/

    </script>
</head>
{{--<body onload="onloadfun()">--}}
<body>
@include('backEnd.AdminNavbar')
<div class="container container-fluid" style="margin-top: 20px">
    <div class="row">
        <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2>ແກ້ໄຂຂໍ້ມູນພະນັກງານ</h2>
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
            <div id="tesJavascript">

            </div>
            <div>
                <h4><b>{{"ID : "}}</b><label style="color: red">{{$EMPinfor->id}}</label></h4>
            </div>

            <form class="form-group" action="{{route('EUpdate',$EMPinfor->id)}}" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="name">ຊື່</label>
                    <input type="text" name="name" class="form-control" value="{{$EMPinfor->emp_name}}" required>
                </div>
                <div>
                    <label for="last">ນາມສະກຸນ</label>
                    <input type="text" name="lastname" value="{{$EMPinfor->emp_lastname}}" class="form-control">
                </div>
                <div>
                    <label for="gender">ເພດ</label>
                    <select name="gender" class="form-control">
                        <option value="male" @if($EMPinfor->gender =='male'){{'selected'}} @else @endif>ຊາຍ</option>
                        <option value="female" @if($EMPinfor->gender =='female'){{'selected'}} @else @endif>ຍິງ</option>
                        <option value="other" @if($EMPinfor->gender =='other'){{'selected'}} @else @endif>ອື່ນໆ</option>
                    </select>
                </div>
                <div>
                    <label for="age">ອາຍຸ</label>
                    <input type="number" name="age" class="form-control" value="{{$EMPinfor->age}}">
                </div>
                <div>

                        <br>
                    <label for="edu">ລະດັບການສືກສາ</label>
                    <select name="E_edu" class="form-control">
                        <option>ເລືອກລະດັບການສືກສາ</option>
                        @foreach($EMPeducations as $empEdu)
                            <option value="{{$empEdu->id}}" @if($empEdu->id == $EMPinfor->emp_education_id) {{'selected'}} @endif>{{$empEdu->education}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="village">ບ້ານຢູ່</label>
                    <input type="text" name="village" value="{{$EMPinfor->village}}" class="form-control">
                </div>
                <div>
                    <label for="district">ເມືອງຢູ່</label>
                    <input type="text" name="district" value="{{$EMPinfor->district}}" class="form-control">
                </div>
                <div>
                    <label for="province">ແຂວງຢູ່</label>
                    <input type="text" name="province" value="{{$EMPinfor->province}}" class="form-control">
                </div>
                <div>
                    <label for="phone">ໂທລະສັບ</label>
                    <input type="number" name="phone" value="{{$EMPinfor->tel}}" class="form-control">
                </div>
                <div>
                    <label for="phone">ອີເມວ</label>
                    <input type="email" name="email" value="{{$EMPinfor->email}}" class="form-control">
                </div>
                <div>
                    <label for="identification_card">ໝາຍເລກບັດປະຈໍາຕົວ</label>
                    <input type="number" name="identification_card" value="{{$EMPinfor->identification_card}}" class="form-control">
                </div>
                <div>
                    <label for="description">ເພີ່ມເຕີມ</label><br/>
                    <textarea class="" class="form-control" name="description" value="{{$EMPinfor->description}}" cols="100" rows="3"></textarea>
                </div>
                <div>
                    <label for="img">ຮູບ</label>
                    <br/>
                    <br/>
                    <img src="{{asset('img/'.$EMPinfor->image)}}" class="img-responsive" style="width: 100px" alt=""  >
                    <br/>
                    <br/>
                    <input type="file" class="form-control" name="EMPimg" accept="image/*">
                </div>
                <div>
                    <br>
                    <input type="submit" value="ຕົກລົງ" name="submit" id="submit"  class="btn btn-success">
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