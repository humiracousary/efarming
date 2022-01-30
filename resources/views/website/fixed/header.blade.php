<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        
                    </div>

                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +88 018 34587000</a></p>
                    </div> 

                    <div class="our-link">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-user s_color"></i> My Account
                            @auth

                                ({{ auth()->user()->name }}-{{auth()->user()->user_type}})
                            @endauth
                            </a>
                            </li>
                            <li><a href="{{route('location.mylocation')}}"><i class="fas fa-location-arrow"></i> Our location</a></li>
                    
                            @if(auth()->user())
                            <li><a href="{{route('user.logout')}}"><i class="fas fa-sign-out-alt"></i> log out</a></li>
                            @else
                            <li><a href="{{route('do.registration')}}"><i class="fas fa-user-plus"></i> registration</a></li>
                            <li><a href="{{route('admin.login')}}"><i class="fas fa-sign-in-alt"></i> login</a></li>
                            @endif
                            

                        </ul>
                    </div>
                </div>
                

               
            </div>
        </div>
    </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item "><a class="nav-link" href="{{route('webhome')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about.farm')}}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('events')}}">Event</a></li>

                        <li class="nav-item"><a class="nav-link" href="about.html">offer</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('my.oder')}}">Shop Detail</a></li>
                                {{-- <li><a href="my-account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li> --}}
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{route('try.contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
                            <a href="{{route('cart')}}">
                                <i class="fa fa-shopping-bag"></i>
                                <!--<span class="badge">#</span>-->
                                <p>My Cart <span>{{session('cart') ? count(session('cart')) : 0}}</span></p>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>




            
        </nav>

        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->