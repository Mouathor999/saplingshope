<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ຂໍ້ມູນຍອດຂາຍ</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

</head>
<body>
@include('backEnd.AdminNavbar')
<br>
<div class="mainConten" style="background-color: ghostwhite">
<div class="text-center"><h3>ລາຍງານຍອດຂາຍ</h3></div>

    <div class="row" style="margin-top: 2%; margin-left: 2%; margin-right: 2%">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="box-shadow: 1px 1px 1px 1px #1c7430; height: auto ; background-color: white" id="leftSide">
            <div style="background-color: #8cacbb; text-align: center; margin-top: 1%"><h5>ລາຍງານເປັນຊ່ວງ</h5></div>
            <div class="row" style="margin-top: 2%">

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">

                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                    <br>
                    <input type="date" name="date1" id="date1" class="form-control">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <br>
                    <a class="btn btn-warning" id="btn1">ລາຍງານ</a>
{{--                    <a href="{{route('moneyReceive',date('Y-m-d'))}}" class="btn btn-warning">ລາຍງານ</a>--}}
                </div>
            </div>
            <div style="margin-top: 2%">

                <div id="Notification" style="margin-left: 3%; margin-top: 2%; color: #990000"></div>
                <div style="margin-top: 2%; display: none;" id="showcontent">
                    <div >
                        <h5 style="margin-left: 4%">ລວມຕົ້ນທືນຊື້ສິນຄ້າ: <b style="color: red; font-size: 1em" id="show1"></b> &nbsp; ກີບ</h5>
                    </div>
                    <br>
                    <br>
                    <div class="table-responsive" id="tableResponsive">
                        <table class="table table-hover">
                            <tr>
                                <th style="text-align: center">ລະຫັດ</th>
                                <th style="text-align: center">ຊື່ສິນຄ້າ</th>
                                <th style="text-align: center">ຈໍານວນນໍາເຂົ້າ</th>
                                <th style="text-align: center">ລາຄາ/ຫົວໜ່ວຍ</th>
                                <th style="text-align: center">ລາຄາທັງໝົດ</th>
                            </tr>
                            <tbody id="detail">

                            </tbody>
                        </table>
                    </div>
                    <div style="margin-top: 2%; margin-right: 5%; text-align: right">
                        <button class="btn btn-success" id="windowprint" onclick="printPage1()">Print page</button>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1" style=" height:10px ">

        </div>

        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5" style="box-shadow: 1px 1px 1px 1px #1c7430; height: auto ; background-color: white" id="rightSide">
            <div style="background-color: #8cacbb; text-align: center; margin-top: 1%"><h5>ລາຍງານເປັນເຂດຈໍາກັດເວລາ</h5></div>
            <div class="row" style="margin-top: 2%">
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <div>ວັນທີ່ເລີ່ມຕົ້ນ</div>
                    <br>
                    <input type="date" name="date2" id="date2" class="form-control">
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <div>ວັນທີ່ສຸດທ້າຍ</div>
                    <br>
                    <input type="date" name="date3" id="date3" class="form-control">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <div>&nbsp;</div>
                    <br>
                    <a class="btn btn-warning" id="btn2">ລາຍງານ</a>
                </div>
            </div>


            <div style="margin-top: 2%">

                <div id="Notification2" style="margin-left: 3%; margin-top: 2%; color: #990000"></div>
                <div style="margin-top: 2%; display: none;" id="showcontent2">
                    <p>&nbsp;</p>
                    <div >
                        <h5 style="margin-left: 4%">ລວມຕົ້ນທືນຊື້ສິນຄ້າ: <b style="color: red; font-size: 1em" id="show2"></b> &nbsp; ກີບ</h5>
                    </div>
                    <br>
                    <br>
                    <div class="table-responsive" id="tableResponsive">
                        <table class="table table-hover">
                            <tr>
                                <th style="text-align: center">ລະຫັດ</th>
                                <th style="text-align: center">ຊື່ສິນຄ້າ</th>
                                <th style="text-align: center">ຈໍານວນນໍາເຂົ້າ</th>
                                <th style="text-align: center">ລາຄາ/ຫົວໜ່ວຍ</th>
                                <th style="text-align: center">ລາຄາທັງໝົດ</th>
                            </tr>
                            <tbody id="detail2">

                            </tbody>
                        </table>
                    </div>
                    <div style="margin-top: 2%; margin-right: 5%; text-align: right">
                        <button class="btn btn-success" id="windowprint2" onclick="printPage2()">Print page</button>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
<script  type="text/javascript">
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#btn1').click(function () {
        if($('#date1').val() !=""){
            var date1 = $('#date1').val();
            $.ajax({
                type:'POST',
                url:'/admin/moneyReceiveOne/'+date1,
                data:"",
                success: function(data){ // What to do if we succeed
                    console.log(data)
                    document.getElementById('showcontent').style.display='block';
                    var data = data;
                    $("#show1").html(data['totalMoney']);
                    var reportDetail = data['productList'];
                    var detail = '';
                    for(var i=0; i<reportDetail.length; i++) {
                        detail += `<tr >
                                    <td>${reportDetail[i]['product_id']}</td>
                                    <td>${reportDetail[i]['pro_nam']}</td>
                                    <td>${reportDetail[i]['quantity']}</td>
                                    <td>${reportDetail[i]['sale_price']}</td>
                                    <td>${reportDetail[i]['total_price']}</td>
                                    </tr>`
                    }
                    $("#detail").html(detail)
                }
            });
        }else {
            $("#show1").html("ກະລູນາເລືອກວັນທີ່ ເດືອນ ປີ");
        }



    });



    $('#btn2').click(function () {
        if($('#date2').val() !="" && $('#date3').val() !=""){
            var date2 = $('#date2').val();
            var date3 = $('#date3').val();
            $.ajax({
                type:'POST',
                url:'/admin/moneyReceiveTwo/'+date2+'/'+date3,
                data:"",
                success: function(data){ // What to do if we succeed
                    document.getElementById('showcontent2').style.display='block';
                    console.log(data)
                    var data = data;
                    $("#show2").html(data['totalMoney']);
                    var reportDetail = data['productList'];
                    var detail = '';
                    for(var i=0; i<reportDetail.length; i++) {
                        detail += `<tr >
                                    <td>${reportDetail[i]['product_id']}</td>
                                    <td>${reportDetail[i]['pro_nam']}</td>
                                    <td>${reportDetail[i]['quantity']}</td>
                                    <td>${reportDetail[i]['sale_price']}</td>
                                    <td>${reportDetail[i]['total_price']}</td>
                                    </tr>`
                    }
                    $("#detail2").html(detail)
                }
            });
        }else {
            $("#Notification2").html("ກະລູນາເລືອກວັນທີ່ ເດືອນ ປີ");
        }



    });

    function printPage1() {
        document.getElementById('windowprint').style.display='none';
        document.getElementById('btn1').style.display='none';
        document.getElementById('tableResponsive').classList.remove("table-responsive");
        document.getElementById('rightSide').style.display='none';
        window.print();
        document.getElementById('btn1').style.display='block';
        document.getElementById('windowprint').style.display='block';
        document.getElementById('tableResponsive').classList.add("table-responsive");
        document.getElementById('rightSide').style.display='block';
    }
    function printPage2() {
        document.getElementById('windowprint2').style.display='none';
        document.getElementById('btn2').style.display='none';
        document.getElementById('tableResponsive').classList.remove("table-responsive");
        document.getElementById('leftSide').style.display='none';
        window.print();
        document.getElementById('btn1').style.display='block';
        document.getElementById('windowprint2').style.display='block';
        document.getElementById('tableResponsive').classList.add("table-responsive");
        document.getElementById('leftSide').style.display='block';
    }


</script>



</html>