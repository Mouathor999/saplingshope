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
        <h4><b>Product detail</b></h4>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">

                <div class="container">
                    <div class="mycarousel">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="40000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img id="myImg1" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}"  width="100%" height="350px">
                                </div>
                                <div class="carousel-item">
                                    <img id="myImg2" src="{{asset('img/download.jpg')}}"  width="100%" height="350px">
                                </div>
                                <div class="carousel-item">
                                    <img id="myImg3" src="{{asset('img/Unique_And_Beautiful_Wallpaper_HD.jpg')}}"  width="100%" height="350px">
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
            </div>

            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h4><b>Product detail</b></h4>
                <div class="productdetail">

                    <div class="productName">
                        <h3>ຊື່ຂອງສີນຄ້າ ປະເພດຂອງສີນຄ້າ</h3>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <div class="productlevel">
                                <form action="" >
                                    <input type="radio" class="" name="productl_level" id="productl_level" value="">
                                    <label for="productl_level">ລະດັບໃຫຍ່     ລາຄາ: $12</label>
                                    <br/>
                                    <input type="radio" class="" name="productl_level" id="productl_level" value="">
                                    <label for="productl_level">ລະດັບກາງ     ລາຄາ: $10</label>
                                    <br/>
                                    <input type="radio" class="" name="productl_level" id="productl_level" value="">
                                    <label for="productl_level">ລະດັບໜ້ອຍ    ລາຄາ: $8</label>
                                    <br/>
                                </form>
                            </div>
                            <hr/>
                            <div>
                                <div>
                                    ຂໍ້ມູນເພີ່ມເຕີມ
                                </div>
                                <div>
                                    -  aaaaaaa <br/>
                                    -  aaaaaaa <br/>
                                    -  aaaaaaa <br/>
                                    -  aaaaaaa <br/>
                                    -  aaaaaaa <br/>
                                    -  aaaaaaa <br/><br/>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div>
                                <form action="">
                                    <div>
                                        <label for="#quantity">ຈໍານວນ : </label>
                                        <input type="number" name="quantity" id="quantity" value="1" min="1"  >
                                    </div>
                                    <hr/>
                                    <div>
                                        <p class="" style="text-align: center"><a href="" class="btn btn-success btn-xs">Add to cart</a></p>
                                    </div>
                                    <div class="promotionDIV">
                                        <h3>promotion detail</h3>
                                        <ul class="">
                                            <li>ຄ່າຂົນສົ່ງ  : 0 ກີບ</li>
                                            <li>ໂປຣໂມເຊີນ : 100%</li>
                                            <li>ຄ່າຂົນສົ່ງ  : 0 ກີບ</li>
                                            <li>ຄ່າຂົນສົ່ງ  : 0 ກີບ</li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 1%">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div><h3>description</h3></div>
                <p id="p1">  Tree saplings are usually purchased in a container or with their root balls wrapped in burlap. The optimum time for planting saplings is during the fall while the ground is still warm, which can encourage root growth. Supplemental watering may be required for a year or two after planting, at least until the complete root system has developed.</p>
            </div>
        </div>
        <div class="row" style="margin-top: 1%">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div><h3> Rule</h3></div>
                <p id="p1">  Tree saplings are usually purchased in a container or with their root balls wrapped in burlap. The optimum time for planting saplings is during the fall while the ground is still warm, which can encourage root growth. Supplemental watering may be required for a year or two after planting, at least until the complete root system has developed.</p>
            </div>
        </div>

      <div style="margin-top: 2%">
          {{--Start swiper slide   Advertising--}}
          <div class="swiper-container">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="thumbnail">
                          <div class="productImage"><img class="ns-img" src="{{asset('img/53b0150c46fd23eb14d2c025b09e579d.jpg')}}" alt=""></div>
                          <div class="caption">
                              <h4 class="producttitle">Thumbnail label</h4>
                              <div class="producttext">All Text hereAll Text hereAll Text hereAll Text here</div>
                              <div>$12</div>
                              <p><a href="{{route('product.productdetail')}}" class="btn btn-info btn-xs" role="button">Button</a></p>
                          </div>
                      </div>
                  </div>


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