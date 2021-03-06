@extends('website.master')
@section('content')

<div class="container-fluid">
    
    @if(session('success'))
    <div class="alert alert-success">
        {!! session('success') !!}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {!! session('error') !!}
</div>
@endif

     <!-- Start Slider -->
     <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> HK FARM</strong></h1>
                            <p class="m-b-40">We are trying to provide our best service for our customer. <br> Our foods are totally organics.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br>HK FARM</strong></h1>
                            <p class="m-b-40">We are trying to provide our best service for our customer. <br>Our foods are totally organics.</p>                            
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->




    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Product Categories</h1>
                    </div>
                </div>
                <div class="row">
                @foreach ($categories as $category )
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" style="height: 200px" src="{{url('uploads/'.$category->image)}}" alt="Image"/>
                        <a class="btn hvr-hover" href="{{route('category',$category->id)}}">{{$category->name}}</a>  
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Categories -->
	




    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>(Our Products) Fruits & Vegetables</h1>
                        <p></p>
                    </div>
                </div>
            </div>


<!--product-->
            <div class="row special-list">
                
                
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
              
                            <img style="height: 200px" src="{{url('uploads/'.$product->image)}}" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="{{route('view.singleproduct',$product->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    {{-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li> --}}
                                    {{-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                                </ul>
                                <a class="cart" href="{{route('add.cart',$product->id)}}">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Name: {{$product->name}}</h4>
                            <h5>Price: {{$product->price}} BDT</h5>
                        </div>
                    </div>
                </div> 
                 @endforeach
                    
               
            </div>
        </div>
    </div>
    <!-- End Products  -->





    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">

                
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Latest Blog</h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($tutorials as $tutorial)
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img style="height: 200px" class="img-fluid" src="{{url('uploads/'.$tutorial->image)}}" alt="image" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>{{$tutorial->name}}</h3>
                                <p>{{$tutorial->details}}</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="{{$tutorial->link}}" target="_blank"><i class="fas fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>  
        </div>
    </div>
    <!-- End Blog  -->


   <!-- Start Instagram Feed  -->
   <div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-01.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-02.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-03.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-04.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-06.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-07.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-08.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-09.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->
</div>
@endsection