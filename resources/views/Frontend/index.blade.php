<x-header />

{{-- Carousel Start --}}

<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/image/slide01.jpg') }}" alt="Los Angeles" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h3>ESS</h3>
                <p>EXMAN SECURITY SERVICE</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/image/slide03.jpg') }}" alt="Chicago" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h3>ESS</h3>
                <p>EXMAN SECURITY SERVICE</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/image/slide_3.webp') }}" alt="New York" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h3>ESS</h3>
                <p>EXMAN SECURITY SERVICE</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
{{-- Carousel End --}}


<div class="img-first">
    <div class="effect-container">
        <div class="img-container">
            <img class="wow animate__animated animate__zoomIn" src="{{ asset('assets/image/Security-guard-1.jpg') }}"
                alt="">
        </div>
        <div class="element-first wow animate__animated animate__fadeInRight">
            <h5>We are Efficient & Cost Effective Company that
                Secure your Surroundings!</h5>
            <div class="element-second">
                <small>More than five decades in industry gives us the power to perform every day and every
                    time.</small><br>
                <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, rem.</small>
            </div>
            <div class="element-third">
                <div class="element-third-1">
                    <h4>OUR STORY</h4>
                    <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, dolores, consequatur optio,
                        ex</small>
                </div>
                <div class="element-third-2">
                    <h4>OUR EXPERIENCE</h4>
                    <small>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore quisquam facilis
                        qui</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="skill-container ">
    <div class="skill-element">
        <div class="wow animate__animated animate__fadeInLeft">
            <h4>We have Awesome Skills</h4>
            <p>WeGuard has over 10 years of experience as a security company</p>
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit sed dol eiusmod tempor incididunt dolor magna
                aliqua enim ad minim </small><br>
            <small>Dolore eu fugiat nulla pariatur enimadm nostrud exercitation ullamco laboris nisi ut aliqua veniam
                quis nostrud exercitation</small>
        </div>
        <div class="skill-rating wow animate__animated animate__fadeInRight">
            <div class="skill-content">
                <div class="rating-90">
                    <h6>90%</h6>
                    <div class="rating-1">
                        <div class="rating-fix-1">&nbsp;</div>
                    </div>
                </div>
                <div class="rating-80">
                    <h6>80%</h6>
                    <div class="rating-2">
                        <div class="rating-fix-2">&nbsp;</div>
                    </div>
                </div>
                <div class="rating-70">
                    <h6>70%</h6>
                    <div class="rating-3">
                        <div class="rating-fix-3">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="edge-content" class="container-fluid mt-5 bg-client">
    <div class="edge-head wow animate__animated animate__zoomIn">OUR EDGE</div>
    <div class="edge-container wow animate__animated animate__fadeInDown">
        <div class="card">
            <div class="icon">
                <img src="{{ asset('assets/image/trophy.png') }}" alt="" class="w-100">
            </div>
            <h3>440+</h3>
            <p>YEARS OF CUMULATIVE LEADERSHIP EXPERIENCE</p>
        </div>
        <div class="card">
            <div class="icon">
                <img src="{{ asset('assets/image/review.png') }}" alt="" class="w-100">
            </div>
            <h3>440+</h3>
            <p>SATISFIED CLIENTS</p>
        </div>
        <div class="card">
            <div class="icon">
                <i class="fa-solid fa-map-location-dot fa-lg"></i>
            </div>
            <h3>440+</h3>
            <p>WORLDWIDE LOCATIONS</p>
        </div>
        <div class="card">
            <div class="icon">
                <img src="{{ asset('assets/image/rating.png') }}" alt="" class="w-100">
            </div>
            <h3>440+</h3>
            <p>HAPPY EMPLOYEES</p>
        </div>
    </div>
</div>



<div class="container mt-5">
    <div class="team-element">
        <div class="team-heading wow animate__animated animate__fadeInTopLeft">
            <h5>Meet our expert Team</h5>
        </div>
        <div class="team-pic wow animate__animated animate__zoomIn">
            <div class="team-card">
                <div class="team-1">
                    <img src="{{ asset('assets/image/security-1.jpeg') }}" alt="" class="w-100 h-100">
                </div>
                {{-- <div class="team-icons">
                    <div><a href="#"><i class="fa-brands fa-square-facebook fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a>
                    </div>
                    <div><a href="#"><i class="fa-brands fa-linkedin fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a></div>
                    <div><a href="#"><i class="fa-brands fa-square-twitter fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a></div>
                    <div><a href="#"><i class="fa-brands fa-square-google-plus fa-2xl"
                                style="color:rgb(255, 255, 255);"></i></a></div>
                </div> --}}
                <div class="team-name">
                    <div>Satish Pasawan</div>
                    <div>Satish Pasawan</div>
                </div>
            </div>
            <div class="team-card">
                <div class="team-1">
                    <img src="{{ asset('assets/image/security-1.jpeg') }}" alt="" class="w-100 h-100">
                </div>
                {{-- <div class="team-icons">
                    <div><a href="#"><i class="fa-brands fa-square-facebook fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a>
                    </div>
                    <div><a href="#"><i class="fa-brands fa-linkedin fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a></div>
                    <div><a href="#"><i class="fa-brands fa-square-twitter fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a></div>
                    <div><a href="#"><i class="fa-brands fa-square-google-plus fa-2xl"
                                style="color:rgb(255, 255, 255);"></i></a></div>
                </div> --}}
                <div class="team-name">
                    <div>Satish Pasawan</div>
                    <div>Satish Pasawan</div>
                </div>
            </div>
            <div class="team-card">
                <div class="team-1">
                    <img src="{{ asset('assets/image/security-1.jpeg') }}" alt="" class="w-100 h-100">
                </div>
                {{-- <div class="team-icons">
                    <div><a href="#"><i class="fa-brands fa-square-facebook fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a>
                    </div>
                    <div><a href="#"><i class="fa-brands fa-linkedin fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a></div>
                    <div><a href="#"><i class="fa-brands fa-square-twitter fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a></div>
                    <div><a href="#"><i class="fa-brands fa-square-google-plus fa-2xl"
                                style="color:rgb(255, 255, 255);"></i></a></div>
                </div> --}}
                <div class="team-name">
                    <div>Satish Pasawan</div>
                    <div>Satish Pasawan</div>
                </div>
            </div>
            <div class="team-card">
                <div class="team-1">
                    <img src="{{ asset('assets/image/security-1.jpeg') }}" alt="" class="w-100 h-100">
                </div>
                {{-- <div class="team-icons">
                    <div><a href="#"><i class="fa-brands fa-square-facebook fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a>
                    </div>
                    <div><a href="#"><i class="fa-brands fa-linkedin fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a></div>
                    <div><a href="#"><i class="fa-brands fa-square-twitter fa-2xl"
                                style="color: rgb(255, 255, 255);"></i></a></div>
                    <div><a href="#"><i class="fa-brands fa-square-google-plus fa-2xl"
                                style="color:rgb(255, 255, 255);"></i></a></div>
                </div> --}}
                <div class="team-name">
                    <div>Satish Pasawan</div>
                    <div>Satish Pasawan</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="business-content" class="container-fluid mt-5 bg-client">
    <div class="business-head wow animate__animated animate__zoomIn">OUR BUSINESSES</div>
    <div class="busineess-container wow animate__animated animate__fadeInUp">
        <a href="#">
            <div class="business-element">
                <div class="business-logo">
                    <img src="{{ asset('assets/image/ess-logo.png') }}" alt="">
                </div>
                <div class="business-element-1">Integrated Security</div>
                <div class="business-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, totam. Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Laboriosam asperiores fugit adipisci deserunt,
                    saepe libero illum animi vitae harum accusamus laborum sapiente, ab aperiam, quidem maxime?
                    Inventore eius veritatis ducimus?</div>
            </div>
        </a>
        <a href="#">
            <div class="business-element">
                <div class="business-logo">
                    <img src="{{ asset('assets/image/ess-logo.png') }}" alt="">
                </div>
                <div class="business-element-1">Facility Management</div>
                <div class="business-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, totam. Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Laboriosam asperiores fugit adipisci deserunt,
                    saepe libero illum animi vitae harum accusamus laborum sapiente, ab aperiam, quidem maxime?
                    Inventore eius veritatis ducimus?</div>
            </div>
        </a>
        <a href="#">
            <div class="business-element">
                <div class="business-logo">
                    <img src="{{ asset('assets/image/ess-logo.png') }}" alt="">
                </div>
                <div class="business-element-1">Remote Monitoring </div>
                <div class="business-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, totam. Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Laboriosam asperiores fugit adipisci deserunt,
                    saepe libero illum animi vitae harum accusamus laborum sapiente, ab aperiam, quidem maxime?
                    Inventore eius veritatis ducimus?</div>
            </div>
        </a>
    </div>
</div>

<div class="container mt-5">
    <div class="news_container">
        <div class="news_heading">
            <h3>In The News</h3>
        </div>
        <div class="news_link">
            <a href="#">READ ALL NEWS</a>
        </div>
    </div>
    <div class="container mt-3">
        <div class="news_card_container">
            <div id="news_card">
                <div class="news_img">
                    <img src="{{ asset('assets/image/blog-img-1.png') }}" alt="Avatar" style="width:100%">
                </div>
                <div class="container">
                    {{-- <h4><b>John Doe</b></h4>  --}}
                    <a href="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, eos?</p><br>
                    </a>
                    <a id="read_more" href="#">READ MORE<i class="fa-regular fa-circle-right"
                            style="margin-left: 14px;"></i></a>
                </div>
            </div>
            <div id="news_card">
                <div class="news_img">
                    <img src="{{ asset('assets/image/blog-img-1.png') }}" alt="Avatar" style="width:100%">
                </div>
                <div class="container">
                    {{-- <h4><b>John Doe</b></h4>  --}}
                    <a href="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, eos?</p><br>
                    </a>
                    <a id="read_more" href="#">READ MORE<i class="fa-regular fa-circle-right"
                            style="margin-left: 14px;"></i></a>
                </div>
            </div>
            <div id="news_card">
                <div class="news_img">
                    <img src="{{ asset('assets/image/blog-img-1.png') }}" alt="Avatar" style="width:100%">
                </div>
                <div class="container">
                    {{-- <h4><b>John Doe</b></h4>  --}}
                    <a href="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, eos?</p><br>
                    </a>
                    <a id="read_more" href="#">READ MORE<i class="fa-regular fa-circle-right"
                            style="margin-left: 14px;"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="client-section" class="bg-client">
    <div class="client-head wow animate__animated animate__zoomIn" style="color: white">
        Your Trusted Choice
    </div>
    <div id="client-container" id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa explicabo voluptatibus dicta? Aperiam
                    eligendi provident beatae, rerum quaerat eius repudiandae, sunt molestiae magni cum nemo vel
                    distinctio
                    similique, architecto assumenda?</p>
                <div class="client-img">
                    <img id="img-1" src="{{ asset('assets/image/Big-fix.png') }}" alt=""
                        style="width: 45%">
                </div>
            </div>
            <div class="carousel-item">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa explicabo voluptatibus dicta? Aperiam
                    eligendi provident beatae, rerum quaerat eius repudiandae, sunt molestiae magni cum nemo vel
                    distinctio
                    similique, architecto assumenda?</p>
                <div class="client-img">
                    <img id="img-1" src="{{ asset('assets/image/aircel.png') }}" alt=""
                        style="width: 45%">
                </div>
            </div>
            <div class="carousel-item">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa explicabo voluptatibus dicta? Aperiam
                    eligendi provident beatae, rerum quaerat eius repudiandae, sunt molestiae magni cum nemo vel
                    distinctio
                    similique, architecto assumenda?</p>
                <div class="client-img">
                    <img id="img-1" src="{{ asset('assets/image/wipro.png') }}" alt=""
                        style="width: 45%">
                </div>
            </div>
            <div class="carousel-item">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa explicabo voluptatibus dicta? Aperiam
                    eligendi provident beatae, rerum quaerat eius repudiandae, sunt molestiae magni cum nemo vel
                    distinctio
                    similique, architecto assumenda?</p>
                <div class="client-img">
                    <img id="img-1" src="{{ asset('assets/image/tic.png') }}" alt=""
                        style="width: 45%">
                </div>
            </div>
            <div class="carousel-item">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa explicabo voluptatibus dicta? Aperiam
                    eligendi provident beatae, rerum quaerat eius repudiandae, sunt molestiae magni cum nemo vel
                    distinctio
                    similique, architecto assumenda?</p>
                <div class="client-img">
                    <img id="img-1" src="{{ asset('assets/image/lafarge.png') }}" alt=""
                        style="width: 45%">
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer />
