<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

</head>
<body onresize="screenReSize()">
@include('frontEnd.masterpage.MainNavbar')

    <div class="container container-fluid" style="margin-top: 1% ;margin-bottom: 2%">
        <h4><b>ຂໍ້ມູນລະອຽດຂອງສິນຄ້າ</b></h4>
        <br>
      @foreach($productinfor as $product)
          {{--{{$product}}--}}
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                @if($product->productimage->count() >=1)
                    {{--{{$product->productimage[0]}}--}}
                       <div class="container">
                            <div class="mycarousel">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="40000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            @if(!Empty($product->productimage[0]))
                                            <img id="myImg1" src="{{asset('img/'.$product->productimage[0]->image)}}"  width="100%" height="350px">
                                            @else
                                                <img id="myImg1" src="{{asset('img/nopic.jpg')}}"  width="100%" height="350px">
                                            @endif

                                        </div>
                                        <div class="carousel-item">
                                            @if(!Empty($product->productimage[1]))
                                                <img id="myImg2" src="{{asset('img/'.$product->productimage[1]->image)}}"  width="100%" height="350px">
                                            @else
                                                <img id="myImg1" src="{{asset('img/nopic.jpg')}}"  width="100%" height="350px">
                                            @endif
                                        </div>
                                        <div class="carousel-item">
                                            @if( !Empty($product->productimage[2]))
                                                <img id="myImg3" src="{{asset('img/'.$product->productimage[2]->image)}}"  width="100%" height="350px">
                                            @else
                                                <img id="myImg1" src="{{asset('img/nopic.jpg')}}"  width="100%" height="350px">
                                            @endif
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="container">
                            <div class="mycarousel">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="40000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img id="myImg1" src="{{asset('img/nopic.jpg')}}"  width="100%" height="350px">
                                        </div>
                                        <div class="carousel-item">
                                            <img id="myImg2" src="{{asset('img/nopic.jpg')}}"  width="100%" height="350px">
                                        </div>
                                        <div class="carousel-item">
                                            <img id="myImg3" src="{{asset('img/nopic.jpg')}}"  width="100%" height="350px">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                @endif
            </div>

            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h4>ຊື່ສິນຄ້າ : <b>{{$product->pro_name}}</b></h4>
                <div class="productdetail">
                    <div class="productName">
                        <h4>ປະເພດ : <b>{{$product->producttype->ptype_name}}</b> </h4>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <div class="productlevel">
                                <label>ລາຄາ: {{$product->sale_price}}</label>
                            </div>
                            <hr/>
                            <div>
                                <div>
                                    ຂໍ້ມູນເພີ່ມເຕີມ
                                </div>
                                <div>

                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div>
                                <form action="{{route('cart',$product->id)}}">
                                    <div>
                                        <label for="#quantity">ຈໍານວນ : </label>
                                        <input type="number" name="quantity" id="quantity" value="1" min="1"  >
                                    </div>
                                    <hr/>
                                    <div>
                                        <p class="" style="text-align: center"><button class="btn btn-success btn-xs"><i class="fas fa-cart-plus"></i> Add to cart</button></p>
                                    </div>
                                    <div class="promotionDIV">
                                        <h3>promotion detail</h3>
                                        <ul class="">
                                            <li>ໂປຣໂມເຊີນ :
                                                @if($product->promotion->count() > 0)
                                                    @foreach($product->promotion as $ppromotion)
                                                        @if($ppromotion->pivot->start_date >= date('Y-m-d') && $ppromotion->pivot->end_date >= date('Y-m-d'))
                                                            <b>{{$ppromotion->pivot->promotion . " %" }}</b>
                                                        @endif

                                                    @endforeach
                                                @else
                                                    0 %
                                                @endif

                                            </li>
                                            <li>ຄ່າຂົນສົ່ງ  : 0 ກີບ</li>
                                            <li>ຄ່າຂົນສົ່ງ  : 0 ກີບ</li>
                                            <li>ຄ່າພາສີ   : 0 ກີບ</li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
        <div class="row" style="margin-top: 1%">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="bd-example bd-example-tabs">
                    <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="" aria-expanded="true"><h3>Description</h3></a>
                        <a class="nav-item nav-link" id="nav-rule-tab" data-toggle="tab" href="#nav-rule" role="tab" aria-controls="" aria-expanded="false"><h3>Rule</h3></a>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="nav-description-tab" aria-expanded="true" >
                            <p>
                                xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                                {{--sapling one needs to be aware of measurement parameters like DBH which stands for Diameter at Breast Height.  It is used as an evaluation criteria for comparing the dimensions of different trees. It is basically the diameter of tree trunk which is measured at breast level.--}}
                            </p>
                        </div>
                        <div class="tab-pane fade" id="nav-rule" role="tabpanel" aria-labelledby="nav-rule-tab" aria-expanded="false">
                            <p>
                                xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                                {{--To be observed by all students using room F212 Parkview. 1. Safety glasses, cover goggles, or face shields are required when in any shop area, whether working or not!! 2. Shoes must be worn in any shop area. No one wearing sandals will be allowed to enter any shop area.--}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <div style="margin-top: 2%">
          {{--Start swiper slide   Advertising--}}
          <div class="swiper-container">
              <div class="swiper-wrapper">
                 @for($i=1;$i<=12;$i++)
                      <div class="swiper-slide">
                          <div class="thumbnail">
                              <div class="productImage">
                                  <a href="{{route('productdetail',2 )}}">
                                      <img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt="">
                                  </a>
                              </div>
                              <div class="caption">
                                  <h4 class="producttitle">Thumbnail label</h4>
                                  <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                                  <div>$12</div>
                                  <p><a href="" class="btn btn-info btn-xs" role="button">Add to cart</a></p>
                              </div>
                          </div>
                      </div>
                 @endfor
              </div>
          </div>
          {{--End of swiper slide--}}
      </div>
    </div>

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="modalContent">
</div>




<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img1 = document.getElementById('myImg1');
    var modalImg = document.getElementById("modalContent");
    img1.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img2 = document.getElementById('myImg2');
    var modalImg = document.getElementById("modalContent");
    img2.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img3 = document.getElementById('myImg3');
    var modalImg = document.getElementById("modalContent");
    img3.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/js/swiper.min.js"></script>
<script>
    var swiper;
    screenReSize();
    window.onresize = screenReSize;
    function screenReSize() {
        var screenWidth = window.innerWidth;

        if(screenWidth<=540){
            swiper = new Swiper('.swiper-container', {
                slidesPerView: 2,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }
        else if(screenWidth>540 && screenWidth<= 720 ){
            swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }
        else if(screenWidth> 720 && screenWidth<=960 ){
            swiper = new Swiper('.swiper-container', {
                slidesPerView: 4,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }

        else {
            swiper = new Swiper('.swiper-container', {
                slidesPerView: 6,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>