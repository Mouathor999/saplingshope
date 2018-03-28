<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
</head>
<body>
@include("frontEnd.masterpage.MainNavbar")
<div class="container container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h1>Improt Form</h1>
            </div>
            <form class="form-group" action="" method="POST" enctype="">
                <div style="margin-top: 50px">
                    <label for="empid">Emp id</label>
                    <input type="text" name="empid" class="form-control">
                </div>
                <div>
                    <label for="pid">Product ID</label>
                    <input type="text" name="pid" class="form-control">
                </div>
                <div>
                    <label for="ptype">Product Type</label>
                    <input type="text" name="ptype" class="form-control" disabled>
                </div>
                <div>
                    <label for="pname">Product Name</label>
                    <input type="number" name="pname" class="form-control" disabled>
                </div>
                <div>
                    <label for="plevel">Product Level</label>
                    <select name="plevel" class="form-control" disabled>
                        <option></option>
                        <option>A</option>
                        <option>B</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div>
                <div>
                    <label for="qty">Quantity</label>
                    <input type="text" name="qty" class="form-control">
                </div>
                <div>
                    <label for="sup">Supplier</label>
                    <select name="plevel" class="form-control">
                        <option></option>
                        <option>A</option>
                        <option>B</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div>
                <div>
                    <img src="" alt="This image are not insert yet" width="500px" height="400px">
                </div>
                <div>
                    <input type="submit" value="clear" name="clear" class="btn btn-warning">
                    <input type="submit" value="submit" name="submit" class="btn btn-success">
                    <input type="submit" name="cancel" value="cancel" class="btn btn-danger">
                </div>
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