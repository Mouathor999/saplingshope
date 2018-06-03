<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Database</title>
</head>
<body>
<br>
<div style="margin-left: 10px">




 <p style="color: red">
     This is test for product and product_level
 </p>
    <br>
    <div>
       @foreach($product_productlevel as $list)
           {{$list->productlevel->level}}
           @endforeach
    </div>
    <br>
    <hr>



    <p style="color: red">
        This is test for product and image
    </p>
    <br>
        <div>
            <ul>
                @foreach($product_images as $imageList)
                <li>

                    {{--<img src="{{ asset('img/'.$imageList->productimage[0]->image)}}" alt="">--}}
                    @foreach($imageList->productimage as $pictures)
                        {{$imageList->pro_name}}
                        <img src="{{asset('img/'.$pictures->image)}}" alt="" style="width: 100px; height: 100px">

                    @endforeach
                    <br><br>
                    @if(!Empty($imageList->productimage[1] ))
                        <img src="{{asset('img/'.$imageList->productimage[1]->image)}}" alt="" style="width: 100px; height: 100px">
                        @else
                        {{"Image is null"}}
                    @endif


                </li>
                    <br>
                @endforeach
            </ul>



        </div>
    <br>
    <hr>



    <p style="color: red">
        This is test for product , order and orderDetail
    </p>
    <br>
        <div>
            @foreach($product_oder as $datalist)
                {{$datalist}}
                <div>-----0000-----</div>
            @endforeach
        </div>
    <br>
    <hr>

    <p style="color: red">
        This is test for
    </p>
    <br>
    <div>
       {{-- @foreach($product_oder as $datalist)
            {{$datalist}}
            <div>-----0000-----</div>
        @endforeach--}}
    </div>
    <br>
    <hr>
</div>
</body>
</html>