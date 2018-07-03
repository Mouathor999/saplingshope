<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
    {{--<script type="text/javascript">

        $(document).ready(function(){
            $("#username").change(function(){
                $("#message").html("checking...");


                var username = $("#username").val();

                $.ajax({
                    type:"post",
                    url:"check.php",
                    data:"username =" + username,
                    success:function(data){
                        if(data==0){
                            $("#message").html("<img src='images/tick.png' /><span style='font-size:13px; color: black'> Username available</span>");
                        }
                        else{
                            $("#message").html("<img src='images/err.png' /><span style=font-size:13px; color: red'> Username already taken</span>");
                        }
                    }
                });

            });

        });

    </script>--}}
</head>
<body>
    <div class="container container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
            <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <br>
                    <h1>Login</h1>
                </div>
                <div id="message">
                    @if($text == null)
                        @else
                        <h6><b style="color: tomato">{{$text}}</b></h6>
                    @endif
                </div>
                <form class="form-group" action="{{route('CustomerLogin')}}" method="POST" enctype="">
                    <div style="margin-top: 20px">
                        <label for="pid">User name</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div>
                        <label for="pname">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <br>
                    <div>
                        <input type="submit" name="Clogin" value="Login" class="btn btn-success">
                        <input type="submit" name="cancel" value="cancel" class="btn btn-danger">
                    </div>
                    {{csrf_field()}}
                </form>

                    <p>Create new account : <a href="{{route('CustomerSignUp')}}">register</a></p>

            </div>
            <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>