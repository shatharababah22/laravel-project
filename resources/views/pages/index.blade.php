@extends('layouts.master')
@section('title', 'HELPZ')

@section('content')
    <!-- Carousel Start -->
    <div id="slid" class="carousel ">
        <div class="m-0">
            <div class="owl-carousel">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/slider2.jpeg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>Bringing smiles to millions</h1>
                        <p>
                            "Through medical equipment donations, we're dedicated to 'Bringing Smiles to Millions,'
                            improving lives, and enhancing healthcare worldwide."
                        </p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="pages.causes">Donate Now</a>
                            <a class="btn btn-custom btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/2szQhR4oZtA?si=XUFiZL431Bp5DxLT"
                                data-target="#videoModal">Watch
                                Video</a>
                        </div>
                    </div>
                </div>


                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="img/slider1.jpeg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h1>HealthCare Heroes</h1>
                        <p>"Healthcare heroes consistently make a positive impact, bringing smiles to millions through their
                            dedication and compassion in delivering quality healthcare."</p>
                        <div class="carousel-btn">
                            <a class="btn btn-custom" href="pages.causes">Donate Now</a>
                            <a class="btn btn-custom btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/2szQhR4oZtA?si=XUFiZL431Bp5DxLT"
                                data-target="#videoModal">Watch
                                Video</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Video Modal Start-->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img" data-parallax="scroll"
                        data-image-src="img/People holding charity medicine box flat vector illustration.jpg"></div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <h2>Learn About Us</h2>
                        <p>Helpz non-profit charity website</p>
                    </div>
                    <div class="about-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab-content-1" class="container tab-pane active">
                                Helpz is more than just a website; it's a compassionate community dedicated to creating
                                positive change in healthcare. If you have gently used medical equipment that could make a
                                difference in someone's life, we provide a seamless platform for you to donate and help
                                those in need.
                            </div>
                            <div id="tab-content-2" class="container tab-pane fade">
                                At Helpz, our mission is to bridge the gap in healthcare accessibility through the power of
                                generosity and community.
                                We are driven by the belief that everyone, regardless of their circumstances, deserves
                                access to quality medical equipment
                                and services.
                            </div>
                            <div id="tab-content-3" class="container tab-pane fade">
                                At Helpz, we envision a world where healthcare disparities are a thing of the past, and
                                every individual, regardless
                                of their background,
                                enjoys equal access to quality medical equipment and services.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <h2>What We Do?</h2>
                <p>We believe that we can save more lifes with you</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="./img/wheel-chair.png" width="50px" class="mt-4">
                        </div>
                        <div class="service-text">
                            <h3>Medical Equipment </h3>
                            <p>Helpz provides a platform for individuals to donate gently used medical equipment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="./img/social-care.png" width="50px" class="mt-4">
                        </div>
                        <div class="service-text">
                            <h3>Community Support</h3>
                            <p> Helpz connects people seeking assistance with healthcare resources and information </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="./img/campaign.png" width="55px" class="mt-4 ">
                        </div>
                        <div class="service-text">
                            <h3>Awareness</h3>
                            <p>We promote healthcare advocacy about important healthcare issues.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="./img/give-money.png" width="55px" class="mt-4 ">
                        </div>
                        <div class="service-text">
                            <h3>Financial Donations</h3>
                            <p>We facilitate financial contributions to healthcare initiatives.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="./img/party.png" width="55px" class="mt-4 ">
                        </div>
                        <div class="service-text">
                            <h3>Event Coordination</h3>
                            <p> We organize and support events aimed at addressing healthcare challenges.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="./img/community.png" width="55px" class="mt-4 ">
                        </div>
                        <div class="service-text">
                            <h3>Community Building</h3>
                            <p>A common goal of making a difference in healthcare.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Facts Start -->
    <div class="facts" data-parallax="scroll" data-image-src="img/istockphoto-1016780008-1024x1024-transformed.jpeg">
        <div class="container" id="ach">
            <div class="section-header text-center">
                <h2>Our Achievements </h2>
                {{-- <h2>Let's know how we can get the offerings and services</h2> --}}
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="fas fa-cube"></i>

                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">{{ $category->it }}</h3>
                            <p>Items Donatedd</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-charity"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">{{ $category->usersCount }}</h3>
                            <p>Healthcare Partners</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-kindness"></i>
                        <div class="facts-text">
                            <h3 class="facts-plus" data-toggle="counter-up">{{ $category->life }}</h3>
                            <p>Lives Impacted</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="flaticon-donation"></i>
                        <div class="facts-text">
                            <h3 class="facts-dollar" data-toggle="counter-up">{{ $category->alldonation }}</h3>
                            <p>Total Donations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->





    <!-- Causes Start -->
    <div class="causes">
        <div class="container" id="off">
            <div class="section-header text-center">
                <h2>Our Services</h2>
                <p>Let's know how we can get the offerings and services</p>
            </div>
            <div class="row">
                @foreach ($category as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="causes-item d-flex flex-column h-100 w-100" class="img-cause img-fluid">
                            <div class="causes-img">
                                {{-- <img src={{$item->image}} --}}
                                {{-- <img src="./images/"{{$item->image}} --}}
                                <a href="pages.causes/{{ $item->id }}"> <img
                                        src="{{ asset('images/' . $item->image) }}" alt="Image" height="300px"></a>

                            </div>
                            <div class="causes-progress">
                                <div class="progress">
                                    @php
                                        if ($item->price != 0) {
                                            $result = intval(($item->donate / $item->price) * 100);
                                        } else {
                                            $result = 0;
                                        }
                                        if ($result > 100) {
                                            $result = 100; // Ensure the result does not exceed 100%
                                        }
                                    @endphp
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $result }}"
                                        aria-valuemin="0" aria-valuemax="100">
                                        <span>{{ $result }}%</span>
                                    </div>
                                </div>
                                <div class="progress-text">
                                    <p><strong>Raised:</strong>${{ $item->donate }}</p>
                                    <p><strong>Goal:</strong>${{ $item->price }}</p>
                                </div>
                            </div>
                            <div class="causes-text">
                                <h3>{{ $item->name }}</h3>
                                <p>{{ $item->shorter_description }}<span
                                                class="read-more-text">{{ $item->showmore_description }} </span>
                                </p>
                                <span class="read-more-btn">Read More...</span>
                            </div>

                            <div class="causes-btn">
                                <a href="pages.causes/{{ $item->id }}" class="btn btn-custom btn-play">DONATE NOW
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Causes End -->

    <!-- Donate Start -->

    <!-- Event End -->
    
    <!-- Volunteer Start -->

    <div class="container ">
        <div class="section-header text-center mt-5 ">
            <h2>Become a Valounteer</h2>
            <p>Let’s make a difference in the lives of others</p>
        </div>

        <div class="volunteer " data-parallax="scroll" data-image-src="img/volunteer.jpg">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="volunteer-form">
                        @if (Session::get('message_sent1'))
                            <script>
                                Swal.fire("Message", "{{ Session::get('message_sent1') }}", 'success', {
                                    showConfirmButton: true,
                                    confirmButtonText: "OK",
                                });
                            </script>
                        @endif

                        <form method="POST" action='{{ route('Val.send') }}'>
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control" placeholder="Name" name="name"
                                    required="required" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                    required="required" />
                            </div>
                            <div class="control-group">
                                <input type="number" class="form-control no-spinner"
                                    placeholder="Number : +962XXXXXXXXX" name="number" required="required" />
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" placeholder="Why you want to become a volunteer?" name="msg" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">Become a volunteer</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="volunteer-content">
                        <div class="section-header">
                            <h2>Become A Volunteer</h2>
                            <p>Let’s make a difference in the lives of others</p>
                        </div>
                        <div class="volunteer-text">
                            <p>

                                A "Become A Volunteer" form is a document for people to express their interest in
                                volunteering. It gathers their contact info, availability, skills, and interests, aiding
                                organizations in finding suitable volunteer roles.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Volunteer End -->


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <h2>Meet Our Partners</p>
                    <p>Awesome guys behind our charity activities</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/murad.jpg" alt="Team Image" class="img-fluid">
                        </div>
                        <div class="team-text">
                            <h2>Murad Alzeroo</h2>
                            <p>Full stuck developer</p>
                            <div class="team-social">
                                <a href="https://github.com/murad-97" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="https://www.facebook.com/muradalshorman136" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/murad-ashorman-38a608228/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/qasem (2).jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Qasem AL-Zou'bi</h2>
                            <p>Full stuck developer</p>
                            <div class="team-social">
                                <a href="https://github.com/qasemzoubii" target="_blank"><i
                                        class="fab fa-github"></i></a>
                                <a href="https://www.facebook.com/qasemzo3bii" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/qasem-zo3bi/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/shatha.jpg" class="img-fluid" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Shatha Rababah</h2>
                            <p>Telecom Engineer</p>
                            <div class="team-social">
                                <a href="https://github.com/shatharababah22"><i class="fab fa-github"></i></a>
                                <a href="https://web.facebook.com/shatha.rababah.7/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/shatha-rababah/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/husam.jpeg" alt="Team Image" class="img-fluid">
                        </div>
                        <div class="team-text">
                            <h2>Husam Al-odat</h2>
                            <p>Full stuck developer</p>
                            <div class="team-social">
                                <a href="https://github.com/Husam-Odat" target="_blank"><i class="fab fa-github"></i></a>
                                <a href="https://www.facebook.com/husam0dat/?_rdc=1&_rdr" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/husam-odat-b6312127a/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/mohammed.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Mohammed Ghzawi</h2>
                            <p>Full stuck developer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-github"></i></a>
                                <a href="https://www.facebook.com/mohammd.alghzawi"target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/in/mohammad-ghzawi/" target="_blank"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/default-avatar-profile-icon-vector-18942370.jpg" class="img-fluid"
                                alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Sawsan Dagamseh</h2>
                            <p>Full stuck developer</p>
                            <div class="team-social">
                                <a href=""><i class="fab fa-github"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Volunteer Start -->
    <div class="section-header text-center" id="contact">
        <h2>Contact Us</p>
            <p>Contact For Any Query</p>
    </div>
    <div class="volunteer" data-parallax="scroll" data-image-src="./img/woww2.PNG">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="volunteer-content">
                        <div class="section-header">
                            <h2>Get In Touch</h2>
                            <p>Contact for any query</p>
                        </div>
                        <div class="volunteer-text">
                            <p>
                                "For any questions or additional information, please do not hesitate to contact us. We're
                                here to assist you and ensure you have all the information you need!"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="volunteer-form">
                        @if (Session::get('message_sent'))
                            <script>
                                Swal.fire("Message", "{{ Session::get('message_sent') }}", 'success', {
                                    showConfirmButton: true,
                                    confirmButtonText: "OK",
                                });
                            </script>

                    </div>
                    @endif
                    <form method="POST" action='{{ route('contact.send') }}'>
                        @csrf
                        <div class="control-group">
                            <input type="text" name="name" class="form-control" placeholder="Name"
                                required="required" />
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                required="required" />
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="msg" placeholder="Message" required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit">Contact</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- Volunteer End -->






@endsection
