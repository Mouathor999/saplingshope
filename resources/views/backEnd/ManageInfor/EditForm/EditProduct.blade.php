<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

</head>
<body>
@include('backEnd.AdminNavbar')
<br>

<br>
{{--Chect promotion with product --}}
    <div>
        <ul>
           {{-- @foreach($p_promotions as $p_promotion)
                    <li>  @if($p_promotion->promotion->count() > 0)
                              @if($p_promotion->promotion[0]->pivot->end_date >= date('Y-m-d'))
                                  --}}{{--{{date('d-m-Y')}}--}}{{--
                                  {{$p_promotion->promotion[0]->pivot->end_date }}
                               @endif

                        @endif
                    </li>
                <br>
            @endforeach--}}
        </ul>
    </div>

    <div>
        <ul>

        </ul>
    </div>


<div class="container container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2><b>Edit Product Information</b></h2>
                <br>

            </div>
            <div>
                @if(count($errors) > 0 )
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

            </div>
            @foreach($products as $product)
                {{--{{$product}}--}}
           <form class="form-group" action="{{route('pUpdate',$product->id)}}" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="pid">ລະຫັດສິນຄ້າ</label>
                    <input type="number" name="pid" value="{{$product->id}}" class="form-control" disabled="">

                </div>
                <br>
                <div>
                    <label for="pname">ຊື່ສິນຄ້າ</label>
                    <input type="text" name="pname" value="{{$product->pro_name}}" class="form-control">
                </div>
                <br>
                <div>

                    <label for="ptypeid">ປະເພດສິນຄ້າ</label>
                    <select name="ptypeid" id="ptypeid" class="form-control">
                        <option>ເລືອກປະເພດສິນຄ້າ</option>
                        @foreach($producttype as $ptype)
                            <option value="{{$ptype->id}}" @if($ptype->id == $product->product_type_id) {{'selected'}} @endif>{{$ptype->ptype_name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div>
                    <label for="pprice">ລາຄາຂາຍ</label>
                    <input type="number" name="pprice" value="{{$product->sale_price}}" class="form-control">
                </div>
                <br>
                <div>
                    <label for="pamount">ຈໍານວນ</label>
                    <input type="number" name="pamount" value="{{$product->stock}}" class="form-control">
                </div>
                <br>


                <div>
                    <label for="ppromotion">ໂປຣໂມເຊີນ</label>
                    @if($product->promotion->count() > 0)
                        {{--<div>
                         {{$product->promotion}}
                        </div>--}}
                            @foreach($product->promotion as $ppromotion)

                                @if($ppromotion->pivot->end_date >= date('Y-m-d'))
                                    <select name="ppromotion" id="ppromotion"  class="form-control">
                                        <option value="">ເລືອກໂປຣໂມເຊີນ...</option>
                                        @foreach($promotions as $promotion)
                                            <option value="{{$promotion->id}}" @if($promotion->id == $ppromotion->pivot->promotion_id) {{'selected'}}  @endif>{{$promotion->promotion}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <div>
                                        <label for="promotion_startDate">ວັນເລີ່ມໂປຣໂມເຊີນ</label>
                                        <input type="date" name="promotion_startDate" value="{{$ppromotion->pivot->start_date}}" class="form-control">
                                    </div>
                                    <br>
                                    <div>
                                        <label for="promotion_stopDate">ວັນໝົດໂປຣໂມເຊີນ</label>
                                        <input type="date" name="promotion_stopDate" value="{{$ppromotion->pivot->end_date}}"  class="form-control">
                                        <br>
                                    </div>
                                 @else
                                @endif
                            @endforeach



                    {{--<div>
                        <br>------------------------------<br>

                        {{$product->promotion[$product->promotion->count()-1]->pivot->end_date}}
                    </div>--}}

                        @if($product->promotion[$product->promotion->count()-1]->pivot->end_date < date('Y-m-d'))
                            <select name="ppromotion" id="ppromotion"  class="form-control">
                                <option value="">ເລືອກໂປຣໂມເຊີນ...</option>
                                @foreach($promotions as $promotion)
                                    <option value="{{$promotion->id}}">{{$promotion->promotion}}</option>
                                @endforeach
                            </select>
                            <br>
                            <div>
                                <label for="promotion_startDate">ວັນເລີ່ມໂປຣໂມເຊີນ</label>
                                <input type="date" name="promotion_startDate"  class="form-control">
                            </div>
                            <br>
                            <div>
                                <label for="promotion_stopDate">ວັນໝົດໂປຣໂມເຊີນ</label>
                                <input type="date" name="promotion_stopDate"  class="form-control">
                                <br>
                            </div>
                        @else

                        @endif
                    @else
                        <select name="ppromotion" id="ppromotion"  class="form-control">
                            <option value="">ເລືອກໂປຣໂມເຊີນ...</option>
                            @foreach($promotions as $promotion)
                                <option value="{{$promotion->id}}">{{$promotion->promotion}}</option>
                            @endforeach
                        </select>
                        <br>
                        <div>
                            <label for="promotion_startDate">ວັນເລີ່ມໂປຣໂມເຊີນ</label>
                            <input type="date" name="promotion_startDate" class="form-control">
                        </div>
                        <br>
                        <div>
                            <label for="promotion_stopDate">ວັນໝົດໂປຣໂມເຊີນ</label>
                            <input type="date" name="promotion_stopDate"  class="form-control">
                        </div>
                        <br>
                    @endif

                </div>



                <div>
                    <label for="limit">Limit</label>
                    <input type="number" name="limit" value="{{$product->limit}}" class="form-control">
                </div>
                <br>
                <div>
                    <label for="pid">ອະທີບາຍເພີ່ມເຕີມ</label>
                    <textarea type="text" name="pdescription"  class="form-control" rows="3" cols="20">{{$product->descript}}</textarea>
                </div>
                <br>

               {{--Product Images--}}
               <div class="row">
                   @foreach($product_images as $imageList)
                       @if($imageList->productimage->count()>=1)
                       @foreach($imageList->productimage as $pictures)
                               <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2">
                                   <img src="{{asset('img/'.$pictures->image)}}" alt="" style="width: 100px; height: 100px">
                               </div>
                           @endforeach
                        @endif
                       <br>
                   @endforeach
              </div>
               <br>
               <br>
               <a href="#contentCollapse1" class="" data-toggle="collapse">Edit image</a>
               <div id="contentCollapse1" class="collapse">
                   <div>
                       <label for="pid">ຮູບທີ່ 1</label>
                       <input type="file" name="pImage1" class="form-control" >
                   </div>
                   <br>
                   <div>
                       <label for="pid">ຮູບທີ່ 2</label>
                       <input type="file" name="pImage2" class="form-control" >
                   </div>
                   <br>
                   <div>
                       <label for="pid">ຮູບທີ່ 3</label>
                       <input type="file" name="pImage3" class="form-control" >
                   </div>
                   <br>
               </div>
               <br>
               <br>
                <div>
                    <input type="submit" value="submit" name="submit" class="btn btn-success">
                </div>
               <br>
               <br>
               <br>
               {{csrf_field()}}
           </form>
            @endforeach
        </div>
        <div class="col-xs-12 col-sm-1 col-md-2 col-lg-2"></div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>