@extends('layout.app')
@section('PageContent')


  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
              @if (count($sliders)>0)
              @foreach ($sliders as $slider)
              <li>
                  <div class="seq-model">
                    <img data-seq src="Sliderimages/{{$slider->slider_image}}" alt="Men slide img" />
                  </div>
                  <div class="seq-title">
                              
                    {{-- <h2 data-seq>Men Collection</h2>                 --}}
                    {{-- <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p> --}}
                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BUY NOW</a>
                  </div>
                </li>
              @endforeach
          @endif
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="img/promo-banner-1.jpg" alt="img">                    
                    <div class="aa-prom-content">
                      <span>75% Off</span>
                      <h4><a href="#">For Women</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-banner-3.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="#">For Men</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-banner-2.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Sale Off</span>
                        <h4><a href="#">On Shoes</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-banner-4.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="#">For Kids</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="img/promo-banner-5.jpg" alt="img">                      
                      <div class="aa-prom-content">
                        <span>25% Off</span>
                        <h4><a href="#">For Bags</a></h4>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo section -->
  

  <!-- popular section -->
  <section id="aa-popular-category">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#" data-toggle="tab">Popular</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                 
                    @foreach($popularBooks as $popularBook)
                          
                     <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="{{URL::asset('storage/Book_image').'/'.$popularBook->image}}" alt="{{$popularBook->title}}"></a>
                        <a class="aa-add-card-btn"href=""><span class="fa fa-shopping-cart"></span>Add to Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$popularBook->title}}</a></h4>
                          <span class="aa-product-price">{{$popularBook->price}}</span><span class="aa-product-price"><del>$0.00</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                     
                    <!--   <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                    </li>
                  @endforeach


                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular product category -->        
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->


  <!-- Latest section -->
  <section id="aa-popular-category">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#" data-toggle="tab">Latest</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men Latest category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                 
                    @foreach($latestBooks as $latestBook)
                          
                     <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="{{URL::asset('storage/Book_image').'/'.$latestBook->image}}" alt="{{$latestBook->title}}"></a>
                        <a class="aa-add-card-btn"href="{{route('/customer/readbook/',['book_id'=>$latestBook->id])}}"><span class="fa fa-shopping-cart"></span>Add to Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$latestBook->title}}</a></h4>
                          <span class="aa-product-price">{{$latestBook->price}}</span><span class="aa-product-price"><del>$0.00</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                     
                    <!--   <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                    </li>
                  @endforeach


                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all<span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / Latest product category -->
           
                       
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest section -->

  <!-- Latest section -->
  <section id="aa-popular-category">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#" data-toggle="tab">More Books</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men Latest category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                 
                    @foreach($moreBooks as $moreBook)
                          
                     <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="{{URL::asset('storage/Book_image').'/'.$moreBook->image}}" alt="{{$moreBook->title}}"></a>
                        <a class="aa-add-card-btn"href="{{route('/customer/readbook/',['book_id'=>$moreBook->id])}}"><span class="fa fa-shopping-cart"></span>Add to Cart</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">{{$moreBook->title}}</a></h4>
                          <span class="aa-product-price">{{$moreBook->price}}</span><span class="aa-product-price"><del>$0.00</del></span>
                        </figcaption>
                      </figure>                     
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                     
                    <!--   <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                    </li>
                  @endforeach


                  </ul>
                  <a class="aa-browse-btn" href="#">Browse all <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / Latest product category -->
           
                       
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest section -->



                  <!-- quick view modal -->                  
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                              <div class="aa-product-view-slider">                                
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                              <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                      </a>                                    
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3>T-Shirt</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">$34.99</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                <h4>Size</h4>
                                <div class="aa-prod-view-size">
                                  <a href="#">S</a>
                                  <a href="#">M</a>
                                  <a href="#">L</a>
                                  <a href="#">XL</a>
                                </div>
                                <div class="aa-prod-quantity">
                                  <form action="">
                                    <select name="" id="">
                                      <option value="0" selected="1">1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                      <option value="4">5</option>
                                      <option value="5">6</option>
                                    </select>
                                  </form>
                                  <p class="aa-prod-category">
                                    Category: <a href="#">Polo T-Shirt</a>
                                  </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
        
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
    <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              @if (count($testimonials)>0)
              @foreach ($testimonials as $testimonial)
              <li>
              <div class="aa-testimonial-single">
                  <img class="aa-testimonial-img" src="Testimonialimages/{{$testimonial->person_image}}" alt="testimonial img">   
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>{!!$testimonial->testimonial_body!!}</p>
                  <div class="aa-testimonial-info">
                      <p>{{$testimonial->person_name}}</p>
                      <span>{{$testimonial->post}}</span>
                      <a href="#">{{$testimonial->company_name}}</a>
                    </div>
              </div>

                  @endforeach
                  
              @endif
              <!-- single slide -->
              {{-- <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/testimonial-img-1.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>KEVIN MEYER</p>
                    <span>CEO</span>
                    <a href="#">Alphabet</a>
                  </div>
                </div>
              </li>
               <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/testimonial-img-3.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis possimus, facere, quidem qui.</p>
                  <div class="aa-testimonial-info">
                    <p>Luner</p>
                    <span>COO</span>
                    <a href="#">Kinatic Solution</a>
                  </div>
                </div>
              </li> --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->


  <!-- Latest Blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">

            <h2>LATEST BLOG</h2>
            <div class="row">
              <!-- single latest blog -->
              @if (count($blogs)>0)
                      @foreach ($blogs as $item)
                      <div class="col-md-4 col-sm-4">
                        <div class="aa-latest-blog-single">
                          <figure class="aa-blog-img">     
                             {{-- iamge dynamic --}}
                            <a href="/blog/{{$item->id}}"><img src="{{$item->blog_image}}" alt="img"></a>  
                              <figcaption class="aa-blog-img-caption">
                              <span href="/blog/{{$item->id}}"><i class="fa fa-clock-o"></i>{{$item->created_at}}</span>
                            </figcaption>                          
                          </figure>
                          <div class="aa-blog-info">
                            {{-- Blog title dynamic --}}
                            <h3 class="aa-blog-title"><a href="/blog/{{$item->id}}">{{$item->blog_title}}</a></h3>
                            {{-- Blog Body --}}
                            <p>{{ str_limit($item->blog_body, 250) }}</p>
                            {{-- <p>{{$item->blog_body}}</p>  --}}
                            <a href="/blog/{{$item->id}}" class="aa-read-mor-btn">Read more <span class="fa fa-long-arrow-right"></span></a>
                          </div>
                        </div>
                      </div>
                         
                      @endforeach
                     
              @endif
               
             
                  
             
              
              <!-- single latest blog -->
              
              <!-- single latest blog -->
              
            </div>
          </div>
        </div>    
      </div>
    </div>
  </section>
  <!-- / Latest Blog -->

  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
              <li><a href="#"><img src="img/client-brand-joomla.png" alt="joomla img"></a></li>
              <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->

@endsection
