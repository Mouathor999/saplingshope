<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#btn1').click(function (event) {
                $.ajax({
                    type: 'GET',
                    url : "/admin/comfirm",
                    success : function (data) {
                        $("#mytestDIV").html(data);
                    }
                });
            });
        });
    </script>
</head>
<body>
<input type="button" id="btn1" name="btn1" value="load file">
<div id="mytestDIV"></div>
</body>
</html>