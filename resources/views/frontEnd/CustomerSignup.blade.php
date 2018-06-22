<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
    <script !src="" type="text/javascript">
        function disableSubmit() {
            document.getElementById('submit').disabled=true;
        }
        function  checkpwd() {
            var Cpassword = document.getElementById('cus_password').value;
            var confirm_password = document.getElementById('cus_confirmpassword').value;
            if(Cpassword == confirm_password){
//                document.getElementById('sowtext').innerHTML= Cpassword + confirm_password;
                document.getElementById('submit').disabled=false;
            }else {
                document.getElementById('sowtext').innerHTML= "";
                document.getElementById('submit').disabled=true;
            }

        }
        function  blurCheck() {
            var Cpassword = document.getElementById('cus_password').value;
            var confirm_password = document.getElementById('cus_confirmpassword').value;
            if(Cpassword == confirm_password){

            }else {
                document.getElementById('sowtext').innerHTML= "Your confirm password not match. Please retry";
            }
        }
    </script>
</head>
<body onload="disableSubmit()">
    @include("frontEnd.masterpage.MainNavbar")
    <div class="container container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<br>
                    <h1>Register Form</h1>
                </div>
                <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div id="sowtext" style="color: #c82333; font-size: 16px"></div>
                @if($Text !== null)
                    {{$Text}}
                    @else

                @endif
                <form class="form-group" action="{{route('Customer.Register')}}" method="POST" enctype="">
                    <div style="margin-top: 20px">
                        <label for="cus_username">User name</label>
                        <input type="text" name="cus_username" id="cus_username" class="form-control" required>
                    </div>
                    <div>
                        <label for="cus_password">Password</label>
                        <input type="password" name="cus_password" id="cus_password" class="form-control" required>
                    </div>
                    <div>
                        <label for="cus_confirmpassword">Comfirm Password</label>
                        <input type="password" name="cus_confirmpassword" id="cus_confirmpassword" oninput="checkpwd()" onblur="blurCheck()" class="form-control" required>
                    </div>
                    <br>
                    <br>
                    <div>
                        <button type="submit" value="submit" name="submit" id="submit" class="btn btn-success" >Submit</button>
                        <input type="submit" name="cancel" value="cancel" class="btn btn-danger">
                    </div>
                    {{csrf_field()}}
                </form>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p><a href="">Forget password</a></p>
                    <p>Already have account <a href="{{route('CustomerSignUp')}}">Login</a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
        </div>
    </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>