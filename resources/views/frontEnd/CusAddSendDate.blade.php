<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add send date</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
    <script !src="" type="text/javascript">
        function TDate() {
            var CusDate = document.getElementById("cusDate").value;
            var ToDate = new Date();

            if (new Date(CusDate).getTime() <= ToDate.getTime()) {
                alert("ວັນທີກໍານົດສົ່ງຕ້ອງໃຫຍ່ກ່ວາວັນສັ່ງຊື້ຢ່າງໜ້ອຍ 1 ວັນ");
                document.getElementById("cusDate").value='';
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
@include('frontEnd.masterpage.MainNavbar')
    <div class="container container-fluid" style="margin-top: 3%">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <form class="form-group" action="{{route('postSendDate')}}" method="POST" enctype="">
                    <div>
                        <label for="sendDate">ກໍານົດວັນທີ່ສົ່ງ</label>
                        <input type="date" name="sendDate" class="form-control" required autofocus id="cusDate" oninput="TDate()">
                    </div>
                    <br>
                    <div>
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
        <div><h6><b><u>ໝາຍເຫດ</u> : ວັນທີກໍານົດສົ່ງຕ້ອງໃຫຍ່ກ່ວາວັນສັ່ງຊື້ຢ່າງໜ້ອຍ 1 ວັນ</b></h6></div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>