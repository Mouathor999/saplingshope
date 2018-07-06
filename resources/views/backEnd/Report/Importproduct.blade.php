<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ສິນຄ້ານໍາເຂົ້າ</title>

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
    <div class="text-center"><h3>ລາຍງານສິນຄ້ານໍາເຂົ້າ</h3></div>

    <div style="margin-top: 2%; margin-left: 2%; margin-right: 2%">
        <div style="box-shadow: 1px 1px 1px 1px #1c7430; height: auto ; background-color: white">
            <div class="row" style="margin-top: 2% ; margin-left: 2%">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <br>
                    <div>ວັນທີ່ເລີ່ມຕົ້ນ</div>
                    <br>
                    <input type="date" name="date1" id="date1" class="form-control">
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <br>
                    <div>ວັນທີ່ສຸດທ້າຍ</div>
                    <br>
                    <input type="date" name="date2" id="date2" class="form-control">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <br>
                    <br>
                    <br>
                    <a class="btn btn-warning" id="btn1">ລາຍງານ</a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                </div>

            </div>
            <p style="text-align: center; width: 100%; margin-top: 3%" id="helpTag">=====00=====</p>

            <div id="Notification" style="margin-left: 3%; margin-top: 2%; color: #990000"></div>
            <div style="margin-top: 2%; display: none" id="showcontent">
                <div  style="margin-left: 5%">
                    <h5>ລວມຕົ້ນທືນຊື້ສິນຄ້າ: <b style="color: red; font-size: 1em" id="show1"></b> &nbsp; ກີບ</h5>
                </div>
                <br>
                <br>
                <div class="table-responsive" id="tableResponsive">
                    <table class="table table-hover">
                        <tr>
                            <th style="text-align: center">ວັນທີ່ນໍາເຂົ້າ</th>
                            <th style="text-align: center">ຜູ້ສັ່ງ</th>
                            <th style="text-align: center">ຮ້ານສະໜອງສິນຄ້າ</th>
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
                    <button class="btn btn-success" id="windowprint" onclick="printPage()">Print page</button>
                    <p>&nbsp;</p>
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
        if($('#date1').val() !="" && $('#date2').val()!="" && $('#date1').val() < $('#date2').val()){
            var date1 = $('#date1').val();
            var date2 = $('#date2').val();
            $.ajax({
                type:'POST',
                url:'/admin/reportImportProduct/'+date1+'/'+date2,
                data:"",
                success: function(data){ // What to do if we succeed
                    document.getElementById('helpTag').style.display='none';
                    console.log(data);
                    document.getElementById('showcontent').style.display='block';

                    var data = data;
                    $("#show1").html(data['totalMoney']);
                    var reportDetail = data['productList'];
                    var detail = '';
                    for(var i=0; i<reportDetail.length; i++) {
                        detail += `<tr >
                                    <td style="padding: 2%; word-spacing: 2% ; width: 100px" class="div_in_td">${reportDetail[i]['getInDate']}</td>
                                    <td style="padding: 2%; word-spacing: 2% ; width: 100px" class="div_in_td">${reportDetail[i]['employee_name']}</td>
                                    <td style="padding: 2%; word-spacing: 2% ; width: 100px">${reportDetail[i]['supp_shop']}</td>
                                    <td style="padding: 2%; word-spacing: 2% ; width: 100px">${reportDetail[i]['pro_name']}</td>
                                    <td style="padding: 2%; word-spacing: 2% ; width: 100px">${reportDetail[i]['quatity']}</td>
                                    <td style="padding: 2%; word-spacing: 2% ; width: 100px">${reportDetail[i]['price']}</td>
                                    <td style="padding: 2%; word-spacing: 2% ; width: 100px" class="div_in_td">${reportDetail[i]['total_price']}</td>
                                    </tr>`
                    }
                    $("#detail").html(detail)
                }
            });
        }else {
            $("#Notification").html("ກະລູນາເລືອກວັນທີ່ ເດືອນ ປີ ໃຫ້ຖືກຕ້ອງ");
        }
    });

function printPage() {
    document.getElementById('windowprint').style.display='none';
    document.getElementById('btn1').style.display='none';
    document.getElementById('tableResponsive').classList.remove("table-responsive");
     window.print();
    document.getElementById('btn1').style.display='block';
    document.getElementById('windowprint').style.display='block';
    document.getElementById('tableResponsive').classList.add("table-responsive");
}


</script>



</html>