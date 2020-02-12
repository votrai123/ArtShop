@extends('index')
@section("content")
<section>
    <div class="categories-home3">
        <div class="container container-home-3 ctn-content">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <div class="categories-homepage-v3">
                     <div class="cate-hp-3 ">
                       <img class="js-push-menu" src="images/menu.png" alt=""><a href="">Categories</a>
                   </div>
                   <ul class="nav-home5 js-menubar nav-megamenu">
                    <li class="level1 active dropdown">
                        <a href="#">Clothings</a>
                        <span class="glyphicon-plus dropdown-mega-menu"></span>
                        <ul class="menu-level1 js-open-menu">
                            <li class="level2"><a href="home1.html" title="">Demo 1</a></li>
                            <li class="level2"><a href="home2.html" title="">Demo 2</a></li>
                            <li class="level2"><a href="home3.html" title="">Demo 3</a></li>

                        </ul>
                    </li>  
                    <li class="level1 active dropdown"><a href="#">Shoes</a></li>
                    <li class="level1">
                        <a href="#">Backpack</a>
                        <span class="glyphicon-plus dropdown-mega-menu"></span>
                        <ul class="menu-level1 js-open-menu">
                            <li class="level2"><a href="aboutus.html" title="About Us ">About Us </a></li>
                            <li class="level2"><a href="contactus.html" title="Contact">Contact</a></li>
                            <li class="level2"><a href="faq.html" title="FAQs">FAQs</a></li>

                        </ul>
                    </li>
                    <li class="level1">
                        <a href="#">Hat</a>   
                    </li>
                    <li class="level1">
                        <a href="#">Accessories</a>           
                    </li>
                    <li class="level1">
                        <a href="#">Toys</a>    
                    </li>
                    <li class="level1">
                        <a href="#">Book</a>   
                    </li>
                </ul>
            </div>
            <div id="flip"><button type=""><img src="images/menu.png" alt="">Categories</button> </div>
            <div id="panel"><ul class="nav-home5 js-menubar nav-megamenu nav-cate-home3">
                <li class="level1 active dropdown">
                    <a href="#">Clothings</a>
                    <span class="glyphicon-plus dropdown-mega-menu drop-cate-hp3"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="#" title="">Demo 1</a></li>
                        <li class="level2"><a href="#" title="">Demo 2</a></li>
                        <li class="level2"><a href="#" title="">Demo 3</a></li>
                    </ul>
                </li>  
                <li class="level1 active dropdown"><a href="#">Shoes</a></li>
                <li class="level1">
                    <a href="#">Backpack</a>
                    <span class="glyphicon-plus dropdown-mega-menu drop-cate-hp3"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="#" title="About Us ">About Us </a></li>
                        <li class="level2"><a href="#" title="Contact">Contact</a></li>
                        <li class="level2"><a href="#" title="FAQs">FAQs</a></li>
                    </ul>
                </li>
                <li class="level1">
                    <a href="#">Hat</a>   
                </li>
                <li class="level1">
                    <a href="#">Accessories</a>           
                </li>
                <li class="level1">
                    <a href="#">Toys</a>    
                </li>
                <li class="level1">
                    <a href="#">Book</a>   
                </li>
            </ul>
        </div>

    </div>
    <div class="col-lg-7 col-md-6 col-sm-9 col-xs-12 owl-center">
        <div class="kids-st homepage2 kids-img-home-3">
            <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-hp1">
            @foreach($slide1 as $sl1)
                <img class="img-responsive" src="images/banner/{{$sl1->image}}" hight="540px" With="992px" alt="">
                
                    <!-- <img class="img-responsive" src="images/banner/banner2.jpg" alt=""> -->
            @endforeach
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 banner-right fix-pd-right-homepage3">
        <div class="img-home3">
            <a class="plus-zoom hover-images" href=""><img class="img-responsive" src="images/banner/Rbanner1.jpg" alt=""></a>
        </div>
    </div>
</div>
</div>
</div> <!-- categories -->
<!-- New Arrival -->
<div class="new-arrival">
    <div class="container container-home-3 ctn-content">
        <div class="row">
            <div class=" col-md-3 col-sm-3 col-xs-12">
                <div class="new-arrival-content">
                    <h1 class="widget-blog-title">New Arrival</h1>
                    <div class="owl-carousel owl-theme js-owl-post post-home3">
                        <div class="item">
                            <div class="product-item pro-v1 home1 product-home3home-3">
                                <div class="product-img arrival-img img-home-3">
                                    <a class="hover-images" href=""><img src="images/img50.jpg" alt="" class="img-responsive"></a>
                                    <div class="sale-img shop1 shop2 st-v2">
                                        <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                                    </div>
                                    <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
                                </div>
                                <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                                    <p><a href="#">Animal Print Sweat-shirt</a></p>
                                    <div class="star-icons icons-home3">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                                        </ul>
                                    </div>
                                    <div class="review-hp1 hp3 review-home3">
                                        <p>$36.00</p>
                                        <del>$42.00</del>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item pro-v1 home1 product-home3home-3">
                                <div class="product-img arrival-img img-home-3">
                                    <a class="hover-images" href=""><img src="images/img108.jpg" alt="" class="img-responsive"></a>
                                    <div class="sale-img shop1 shop2 st-v2">
                                        <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                                    </div>
                                    <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
                                </div>
                                <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                                  <p><a href="#">Animal Print Sweat-shirt</a></p>
                                  <div class="star-icons icons-home3">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                                    </ul>
                                </div>
                                <div class="review-hp1 hp3 review-home3">
                                    <p>$36.00</p>
                                    <del>$42.00</del>
                                </div>
                            </div>
                        </div>
                        <div class="product-item pro-v1 home1 product-home3home-3">
                            <div class="product-img arrival-img img-home-3">
                                <a class="hover-images" href=""><img src="images/img100.jpg" alt="" class="img-responsive"></a>
                                <div class="sale-img shop1 shop2 st-v2">
                                    <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                                </div>
                                <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
                            </div>
                            <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                                <p><a href="#">Animal Print Sweat-shirt</a></p>
                                <div class="star-icons icons-home3">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                                    </ul>
                                </div>
                                <div class="review-hp1 hp3 review-home3">
                                    <p>$36.00</p>
                                    <del>$42.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-item pro-v1 home1 product-home3home-3">
                            <div class="product-img arrival-img img-home-3">
                                <a class="hover-images" href=""><img src="images/img113.jpg" alt="" class="img-responsive"></a>
                                <div class="sale-img shop1 shop2 st-v2">
                                    <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                                </div>
                                <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
                            </div>
                            <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                               <p><a href="#">Animal Print Sweat-shirt</a></p>
                               <div class="star-icons icons-home3">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                                </ul>
                            </div>
                            <div class="review-hp1 hp3 review-home3">
                                <p>$36.00</p>
                                <del>$42.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="product-item pro-v1 home1 product-home3home-3">
                        <div class="product-img arrival-img img-home-3">
                            <a class="hover-images" href=""><img src="images/img112.jpg" alt="" class="img-responsive"></a>
                            <div class="sale-img shop1 shop2 st-v2">
                                <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                            </div>
                            <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
                        </div>
                        <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                           <p><a href="#">Animal Print Sweat-shirt</a></p>
                           <div class="star-icons icons-home3">
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                            </ul>
                        </div>
                        <div class="review-hp1 hp3 review-home3">
                            <p>$36.00</p>
                            <del>$42.00</del>
                        </div>
                    </div>
                </div>
                <div class="product-item pro-v1 home1 product-home3home-3">
                    <div class="product-img arrival-img img-home-3">
                        <a class="hover-images" href=""><img src="images/img111.jpg" alt="" class="img-responsive"></a>
                        <div class="sale-img shop1 shop2 st-v2">
                            <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                        </div>
                        <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
                    </div>
                    <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                     <p><a href="#">Animal Print Sweat-shirt</a></p>
                     <div class="star-icons icons-home3">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3 review-home3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="product-item pro-v1 home1 product-home3home-3">
                <div class="product-img arrival-img img-home-3">
                    <a class="hover-images" href=""><img src="images/img109.jpg" alt="" class="img-responsive"></a>
                    <div class="sale-img shop1 shop2 st-v2">
                        <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                    <p><a href="#">Animal Print Sweat-shirt</a></p>
                    <div class="star-icons icons-home3">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3 review-home3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1 product-home3home-3">
                <div class="product-img arrival-img img-home-3">
                    <a class="hover-images" href=""><img src="images/img114.jpg" alt="" class="img-responsive"></a>
                    <div class="sale-img shop1 shop2 st-v2">
                        <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                    <p><a href="#">Animal Print Sweat-shirt</a></p>
                    <div class="star-icons icons-home3">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3 review-home3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1 product-home3home-3">
                <div class="product-img arrival-img img-home-3">
                    <a class="hover-images" href=""><img src="images/img115.jpg" alt="" class="img-responsive"></a>
                    <div class="sale-img shop1 shop2 st-v2">
                        <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                   <p><a href="#">Animal Print Sweat-shirt</a></p>
                   <div class="star-icons icons-home3">
                    <ul>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                    </ul>
                </div>
                <div class="review-hp1 hp3 review-home3">
                    <p>$36.00</p>
                    <del>$42.00</del>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="monial monial-home3">
    <div class="title-pro-v1 hp1">
        <h3 class="related-title text-center hp1 hp2 texttitle-home-3">Testimonial</h3>
    </div>
    <div class="owl-carousel owl-theme owl-monial-home3">
        <div class="item best item-home3">
            <a href=""><img class="img-st1" src="images/img90.png" alt=""></a>
            <a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
            <img class="img-st st-img-home3" src="images/img91.png" alt="">
             <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
     </div>
     <div class="item best item-home3 owl-monial-home3">
        <a href=""><img class="img-st1" src="images/img90.png" alt=""></a>
        <a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
        <img class="img-st st-img-home3" src="images/img91.png" alt="">
        <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
    </div>
    <div class="item best item-home3 owl-monial-home3">
        <a href=""><img class="img-st1" src="images/img90.png" alt=""></a>
        <a href=""><h4>JoAnne Theodore<br><em>Graphic Design</em></h4></a>
        <img class="img-st st-img-home3" src="images/img91.png" alt="">
        <p><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</em></p>
    </div>
</div>
</div>
<div class="new-arrival-content content-2 content-best-home3">
    <h1 class="widget-blog-title">Bestseller</h1>
    <div class="owl-carousel owl-theme js-owl-post post-home3">
        <div class="item">
            <div class="product-item pro-v1 home1 product-home3home-3">
                <div class="product-img arrival-img img-home-3">
                    <a class="hover-images" href=""><img src="images/img46.jpg" alt="" class="img-responsive"></a>
                    <div class="sale-img shop1 shop2 st-v2">
                        <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                    <p><a href="#">Animal Print Sweat-shirt</a></p>
                    <div class="star-icons icons-home3">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3 review-home3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1 product-home3home-3">
                <div class="product-img arrival-img img-home-3">
                    <a class="hover-images" href=""><img src="images/img60.jpg" alt="" class="img-responsive"></a>
                    <div class="sale-img shop1 shop2 st-v2">
                        <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                  <p><a href="#">Animal Print Sweat-shirt</a></p>
                  <div class="star-icons icons-home3">
                    <ul>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                    </ul>
                </div>
                <div class="review-hp1 hp3 review-home3">
                    <p>$36.00</p>
                    <del>$42.00</del>
                </div>
            </div>
        </div>
        <div class="product-item pro-v1 home1 product-home3home-3">
            <div class="product-img arrival-img img-home-3">
                <a class="hover-images" href=""><img src="images/img52.jpg" alt="" class="img-responsive"></a>
                <div class="sale-img shop1 shop2 st-v2">
                    <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                </div>
                <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
            </div>
            <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
                <p><a href="#">Animal Print Sweat-shirt</a></p>
                <div class="star-icons icons-home3">
                    <ul>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                        <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                    </ul>
                </div>
                <div class="review-hp1 hp3 review-home3">
                    <p>$36.00</p>
                    <del>$42.00</del>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="product-item pro-v1 home1 product-home3home-3">
            <div class="product-img arrival-img img-home-3">
                <a class="hover-images" href=""><img src="images/img113.jpg" alt="" class="img-responsive"></a>
                <div class="sale-img shop1 shop2 st-v2">
                    <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
                </div>
                <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
            </div>
            <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
               <p><a href="#">Animal Print Sweat-shirt</a></p>
               <div class="star-icons icons-home3">
                <ul>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                </ul>
            </div>
            <div class="review-hp1 hp3 review-home3">
                <p>$36.00</p>
                <del>$42.00</del>
            </div>
        </div>
    </div>
    <div class="product-item pro-v1 home1 product-home3home-3">
        <div class="product-img arrival-img img-home-3">
            <a class="hover-images" href=""><img src="images/img112.jpg" alt="" class="img-responsive"></a>
            <div class="sale-img shop1 shop2 st-v2">
                <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
            </div>
            <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
        </div>
        <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
           <p><a href="#">Animal Print Sweat-shirt</a></p>
           <div class="star-icons icons-home3">
            <ul>
                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
            </ul>
        </div>
        <div class="review-hp1 hp3 review-home3">
            <p>$36.00</p>
            <del>$42.00</del>
        </div>
    </div>
</div>
<div class="product-item pro-v1 home1 product-home3home-3">
    <div class="product-img arrival-img img-home-3">
        <a class="hover-images" href=""><img src="images/img111.jpg" alt="" class="img-responsive"></a>
        <div class="sale-img shop1 shop2 st-v2">
            <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
        </div>
        <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
    </div>
    <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
     <p><a href="#">Animal Print Sweat-shirt</a></p>
     <div class="star-icons icons-home3">
        <ul>
            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
            <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
        </ul>
    </div>
    <div class="review-hp1 hp3 review-home3">
        <p>$36.00</p>
        <del>$42.00</del>
    </div>
</div>
</div>
</div>
<div class="item">
    <div class="product-item pro-v1 home1 product-home3home-3">
        <div class="product-img arrival-img img-home-3">
            <a class="hover-images" href=""><img src="images/img109.jpg" alt="" class="img-responsive"></a>
            <div class="sale-img shop1 shop2 st-v2">
                <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
            </div>
            <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
        </div>
        <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
            <p><a href="#">Animal Print Sweat-shirt</a></p>
            <div class="star-icons icons-home3">
                <ul>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                </ul>
            </div>
            <div class="review-hp1 hp3 review-home3">
                <p>$36.00</p>
                <del>$42.00</del>
            </div>
        </div>
    </div>
    <div class="product-item pro-v1 home1 product-home3home-3">
        <div class="product-img arrival-img img-home-3">
            <a class="hover-images" href=""><img src="images/img114.jpg" alt="" class="img-responsive"></a>
            <div class="sale-img shop1 shop2 st-v2">
                <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
            </div>
            <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
        </div>
        <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
            <p><a href="#">Animal Print Sweat-shirt</a></p>
            <div class="star-icons icons-home3">
                <ul>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                    <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
                </ul>
            </div>
            <div class="review-hp1 hp3 review-home3">
                <p>$36.00</p>
                <del>$42.00</del>
            </div>
        </div>
    </div>
    <div class="product-item pro-v1 home1 product-home3home-3">
        <div class="product-img arrival-img img-home-3">
            <a class="hover-images" href=""><img src="images/img115.jpg" alt="" class="img-responsive"></a>
            <div class="sale-img shop1 shop2 st-v2">
                <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3-before"></div>
            </div>
            <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-home3"><span>-50%</span></div>
        </div>
        <div class="sale-para2 shop-1 pro-v1 hp2-para arrival-para arii-home-3">
           <p><a href="#">Animal Print Sweat-shirt</a></p>
           <div class="star-icons icons-home3">
            <ul>
                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                <li class="review"><a class="view" href=""><em>6Review(s)</em></a></li>
            </ul>
        </div>
        <div class="review-hp1 hp3 review-home3">
            <p>$36.00</p>
            <del>$42.00</del>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- Blogs -->
<div class="blogs blog-home3-owlnav">   
    <div class="title-pro-v1 hp1">
        <h3 class="related-title text-center hp1 para-blogs">Blogs</h3>
    </div>
    <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-blogs-home3">
        <div class="blog-v3 blog-homepage-3">
            <div class="img-blog-v2 v3 img-blog-hp-3">
                <a href=""><img src="images/img86.jpg" alt="img"></a>
            </div>
            <div class="img-title2 v2 v3">
                <div class="kid-all v2 v3 kid-home-3">
                    <div class="para blog-v2 v3 para-blogs-home3">
                        <h4>
                            <a href="#">Our Kindergarten Anniversarty</a>
                        </h4>
                        <div class="img-title2 blog-v2 v3 img-title-home-3">
                            <a href="#"><img class="img-st-hp3" src="images/img4.png" alt="img"></a>
                            <p><em>Pixel Creative</em></p>
                        </div>
                        <div class="img-title3 v2 v3 fa-home3">
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                            <p><em>Jan 30, 2018</em></p>
                        </div>
                        <div class="para2 v2 v3 para-home-3">
                            <p>The perfect class for your child with the best staff and best teachers...</p>
                        </div>
                        <div class="icon v2 v3 icons-home-3">
                            <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                            <p> <em>123 Comments</em></p>
                        </div>
                        <div class="icon v2 v3 icons-home-3">
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                            <p><em>98 likes</em></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="blog-v3 blog-homepage-3">
            <div class="img-blog-v2 v3 img-blog-hp-3">
                <a href=""><img src="images/img87.jpg" alt="img"></a>
            </div>
            <div class="img-title2 v2 v3">
                <div class="kid-all v2 v3 kid-home-3">
                    <div class="para blog-v2 v3 para-blogs-home3">
                        <h4>
                            <a href="#">Our Kindergarten Anniversarty</a>
                        </h4>
                        <div class="img-title2 blog-v2 v3 img-title-home-3">
                            <a href="#"><img class="img-st-hp3" src="images/img4.png" alt="img"></a>
                            <p> <em>Pixel Creative</em></p>
                        </div>
                        <div class="img-title3 v2 v3 fa-home3">
                            <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i></a>
                            <p> <em>Jan 30, 2018</em></p>
                        </div>
                        <div class="para2 v2 v3 para-home-3">
                            <p>The perfect class for your child with the best staff and best teachers...</p>
                        </div>
                        <div class="icon v2 v3 icons-home-3">
                            <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                            <p><em>123 Comments</em></p>
                        </div>
                        <div class="icon v2 v3 icons-home-3">
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                            <p> <em>98 likes</em></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class=" col-md-9 col-sm-9 col-xs-12 fix-pd-right-homepage3">
    <div class="bn3">
        <a href="" class="hover-images"><img src="images/bn3.jpg" alt=""></a>
    </div>
    <div class="title-pro-v1 hp1">
        <h3 class="related-title text-center hp1 hp2 texttitle-home-3">Fashion Products</h3>
        <p><a class="view" href="">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
    </div>
    <div class="fashion">
        <a href="" ><img src="images/img105.jpg" alt=""></a>
        <div class="ul-home3">
            <ul>
                <li><a href="">clothings</a></li>
                <li><a href="">shoes</a></li>
                <li><a href="">backpack</a></li>
                <li><a href="">hat</a></li>
                <li><a href="">Accessories</a></li>
                <li><a href="">All Products</a></li>
            </ul>
        </div>
    </div>
    <div class="featured-homepage1 home3">
        <div class="product-related hp1 pro-home-3">
            <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-feat-home3 owl-home3">
                <div class="product-item pro-v1 home1 product-home3">
                    <div class="product-img product-img-home3">
                        <a class="" href=""><img src="images/img61.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                        <div class="sale-img shop1 shop2">
                            <div class="before shop1 v2 pro-v1 hp1  before-home3"></div>
                        </div>
                        <div class="ribbon zoa-hot shop-v1 hp1 new-ribbon-home3"><span>New</span></div>
                        <div class="product-button-group hp1 hp3">
                            <a href="#" class="zoa-btn zoa-quickview">
                                <span class="fa fa-shopping-bag"></span>
                            </a>
                            <a href="#" class="zoa-btn zoa-wishlist">
                                <span class="fa fa-balance-scale"></span>
                            </a>
                            <a href="#" class="zoa-btn zoa-addcart">
                                <span class="fa fa-heart"></span>
                            </a>
                        </div>
                    </div>
                    <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                        <p><a href="#">Crepe Jacket With Pompom</a></p>
                        <div class="star-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                            </ul>
                        </div>
                        <div class="review-hp1 hp3">
                            <p>$36.00</p>
                            <del>$42.00</del>
                        </div>
                    </div>
                </div>
                <div class="product-item pro-v1 home1">
                    <div class="product-img product-img-home3">
                        <a class="" href=""><img src="images/img50.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                        <div class="sale-img shop1 shop2 st-v2">
                            <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3"></div>
                        </div>
                        <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-25-home3 new-ribbon-home3"><span>-25%</span></div>
                        <div class="product-button-group hp1 hp3">
                            <a href="#" class="zoa-btn zoa-quickview">
                                <span class="fa fa-shopping-bag"></span>
                            </a>
                            <a href="#" class="zoa-btn zoa-wishlist">
                                <span class="fa fa-balance-scale"></span>
                            </a>
                            <a href="#" class="zoa-btn zoa-addcart">
                                <span class="fa fa-heart"></span>
                            </a>
                        </div>
                    </div>
                    <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                        <p><a href="#">Animal Print Sweatshirt</a></p>
                        <div class="star-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                            </ul>
                        </div>
                        <div class="review-hp1 hp3">
                            <p>$36.00</p>
                            <del>$42.00</del>
                        </div>
                    </div>
                </div>
                <div class="product-item pro-v1 home1">
                    <div class="product-img product-img-home3">
                       <div class="style-opacity">
                        <div class="opacity-home2">
                            <a href=""><img src="images/img51.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="out-of-stock">
                            <h4>Out of stock!</h4>
                            <em><span>see</span>similar products</em>
                        </div>
                    </div>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Printed T-Shirt</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1 product-home3">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img61.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="sale-img shop1 shop2">
                        <div class="before shop1 v2 pro-v1 hp1  before-home3"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 hp1 new-ribbon-home3"><span>New</span></div>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Knit Cardigan</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1 product-home3">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img61.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="sale-img shop1 shop2">
                        <div class="before shop1 v2 pro-v1 hp1  before-home3"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 hp1 new-ribbon-home3"><span>New</span></div>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Knit Cardigan</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="bn4-5 bn-4-5-home3">
    <div class="bn4">
        <a href="" class="hover-images"><img src="images/bn4.jpg" alt=""></a>
    </div>
    <div class="bn5">
        <a href="" class="hover-images"><img src="images/bn5.jpg" alt=""></a>
    </div>
</div>
<!-- Toys -->
<div class="title-pro-v1 hp1">
    <h3 class="related-title text-center hp1 hp2 texttitle-home-3 toys">Toys</h3>
    <p><a class="view" href="">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
</div>
<div class="group-line">
<div class="fashion">
    <a href=""><img src="images/img106.jpg" alt=""></a>
    <div class="ul-home3 toys">
        <ul>
            <li><a href="">clothings</a></li>
            <li><a href="">shoes</a></li>
            <li><a href="">backpack</a></li>
            <li><a href="">hat</a></li>
            <li><a href="">Accessories</a></li>
            <li><a href="">All Products</a></li>
        </ul>
    </div>
</div>
<div class="featured-homepage1 home3">

    <div class="product-related hp1 pro-home-3">
        <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-feat-home3 owl-home3">
            <div class="product-item pro-v1 home1 product-home3">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img108.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="sale-img shop1 shop2">
                        <div class="before shop1 v2 pro-v1 hp1 before-home3"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 hp1 new-ribbon-home3"><span>New</span></div>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Crepe Jacket With Pompom</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img109.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="sale-img shop1 shop2 st-v2">
                        <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-25-home3 new-ribbon-home3"><span>-25%</span></div>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Animal Print Sweatshirt</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1 product-home3">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img110.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Printed T-Shirt</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1 product-home3">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img111.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="sale-img shop1 shop2">
                        <div class="before shop1 v2 pro-v1 hp1  before-home3"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 hp1 new-ribbon-home3"><span>New</span></div>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Knit Cardigan</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1 product-home3">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img112.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="sale-img shop1 shop2">
                        <div class="before shop1 v2 pro-v1 hp1  before-home3"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 hp1 new-ribbon-home3"><span>New</span></div>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Knit Cardigan</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- Education -->
<div class="title-pro-v1 hp1">
    <h3 class="related-title text-center hp1 hp2 texttitle-home-3 education">Education</h3>
    <p><a class="view" href="">View All Products<i class="fa fa-angle-right" aria-hidden="true"></i></a></p>
</div>
<div class="fashion">
    <a href="" class=""><img src="images/img-hp3.png" alt=""></a>
    <div class="ul-home3 edu">
        <ul>
            <li><a href="">clothings</a></li>
            <li><a href="">shoes</a></li>
            <li><a href="">backpack</a></li>
            <li><a href="">hat</a></li>
            <li><a href="">Accessories</a></li>
            <li><a href="">All Products</a></li>
        </ul>
    </div>
</div>
<div class="featured-homepage1 home3">

    <div class="product-related hp1 pro-home-3">
        <div class="owl-carousel owl-theme owl-cate v2 js-owl-cate-feat-home3 owl-home3">
            <div class="product-item pro-v1 home1 product-home3">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img112.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="sale-img shop1 shop2">
                        <div class="before shop1 v2 pro-v1 hp1  before-home3"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 hp1 new-ribbon-home3"><span>New</span></div>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Crepe Jacket With Pompom</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img113.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="sale-img shop1 shop2 st-v2">
                        <div class="before shop1 v2 pro-v1 st-v2 hp1 hp3"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 v2 hp1 ribbon-25-home3 new-ribbon-home3"><span>-25%</span></div>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Animal Print Sweatshirt</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img114.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Printed T-Shirt</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1 product-home3">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img115.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="sale-img shop1 shop2">
                        <div class="before shop1 v2 pro-v1 hp1  before-home3"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 hp1 new-ribbon-home3"><span>New</span></div>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Knit Cardigan</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
            <div class="product-item pro-v1 home1 product-home3">
                <div class="product-img product-img-home3">
                    <a class="" href=""><img src="images/img111.jpg" alt="" class="img-responsive"><i class="fa fa-arrows" aria-hidden="true"></i><span class="quick">Quick view</span></a>
                    <div class="sale-img shop1 shop2">
                        <div class="before shop1 v2 pro-v1 hp1  before-home3"></div>
                    </div>
                    <div class="ribbon zoa-hot shop-v1 hp1 new-ribbon-home3"><span>New</span></div>
                    <div class="product-button-group hp1 hp3">
                        <a href="#" class="zoa-btn zoa-quickview">
                            <span class="fa fa-shopping-bag"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-wishlist">
                            <span class="fa fa-balance-scale"></span>
                        </a>
                        <a href="#" class="zoa-btn zoa-addcart">
                            <span class="fa fa-heart"></span>
                        </a>
                    </div>
                </div>
                <div class="sale-para2 shop-1 pro-v1 hp2-para home-3">
                    <p><a href="#">Knit Cardigan</a></p>
                    <div class="star-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li class="review"><a class="view" href=""><em>6 Review(s)</em></a></li>
                        </ul>
                    </div>
                    <div class="review-hp1 hp3">
                        <p>$36.00</p>
                        <del>$42.00</del>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Sign up to -->
<div class="sign-up">
    <div class="miukid-hp3">
        <h4>Sign up to<span>Miukid</span></h4>
    </div>
    <div class="form-home3">
        <form class="form_newsletter hp1 sign-hp3" action="#" method="post">
            <input type="email" value="" placeholder="Enter your emaill" name="EMAIL" id="mail" class="newsletter-input form-control">
            <button id="subscribe" class="button_mini zoa-btn button bt-hp3
            " type="submit">
            Subscribe
        </button>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection