@extends('web.layout.master')

@section('content')

<!--====  Page Slider  ====-->
<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background-image:url({{ asset('assets/web/images/slider/1.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2" data-animation-in="slideInLeft">Our Best Surgeons</h2>
                        <p class="tag-text mb-4" data-animation-in="slideInRight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sunt animi sequi ratione quod at earum. <br> Quis quos officiis numquam!</p>
                        <a href="{{ url('about-us') }}" class="btn btn-main btn-white" data-animation-in="slideInLeft" data-duration-in="1.2">explore</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url({{ asset('assets/web/images/slider/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start-->
                    <div class="content style text-center">
                        <h2 class="text-white" data-animation-in="slideInRight">We Care About Your Health</h2>
                        <p class="tag-text mb-4" data-animation-in="slideInRight" data-duration-in="0.6">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <a href=" {{url('about-us')}}" class="btn btn-main btn-white" data-animation-in="slideInRight" data-duration-in="1.2">about us</a>
                    </div>
                    <!-- Slide Content End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url({{ asset('assets/web/images/slider/3.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content text-center style">
                        <h2 class="text-white text-bold mb-2" data-animation-in="slideInRight">Best Medical Services</h2>
                        <p class="tag-text mb-4" data-animation-in="slideInLeft">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae deserunt, <br>eius pariatur minus itaque nostrum.</p>
                        <a href="{{ url('about-us') }}" class="btn btn-main btn-white" data-animation-in="slideInRight" data-duration-in="1.2">shop now</a>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--====  End of Page Slider  ====-->

<!--====  Working section  ====-->
<section class="cta">
    <div class="container">
        <div class="cta-block row no-gutters">
            <div class="col-lg-4 col-md-6 emmergency item">
                <i class="fa fa-phone"></i>
                <h2>Emegency Cases</h2>
                <a href="">{{$settings->emegency_phone}}</a>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-lg-4 col-md-6 top-doctor item">
                <i class="fa fa-stethoscope"></i>
                <h2>24 Hour Service</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore dignissimos officia dicta suscipit vel eum</p>
                <a href="" class="btn btn-main">Read more</a>
            </div>
            <div class="col-lg-4 col-md-12 working-time item">
                <i class="fa fa-hourglass-o"></i>
                <h2>Working Hours</h2>
                <ul class="w-hours">
                    @foreach($working_hours as $working_hour)
                    <li>{{$working_hour->day}}<span>{{$working_hour->open}} - {{$working_hour->close}}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!--====  End Working section  ====-->

<!--Features section-->
<section class="feature-section section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="image-content">
                    <div class="section-title text-center">
                        <h3>Best Features <span>of Our Hospital</span></h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at debitis <br> nam error officia vero tempora alias? Sunt?</p>
                    </div>
                    <div class="row">
                    @foreach($features as $feature)
                        <div class="col-sm-6">
                            <div class="item">
                                <div class="icon-box">
                                    <figure>
                                        <a href="{{ url('services') }}"><img loading="lazy" src="{{ asset('uploads/web/features/'.$feature->img) }}" alt="features image"></a>
                                    </figure>
                                </div>
                                <h3 class="mb-2">{{$feature->name}}</h3>
                                <p> {{$feature->text}} </p>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Features section-->

<!--team section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Expert
                <span>Doctors</span>
            </h3>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum
                <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?</p>
        </div>
        <div class="row justify-content-center">
        @foreach($doctors as $doctor)
            <div class="col-lg-4 col-md-6">
                <div class="team-member">
                    <img loading="lazy" src="{{ asset('uploads/web/doctors/'.$doctor->img) }}" alt="doctor" class="img-fluid">
                    <div class="contents text-center">
                        <h4>Dr. {{$doctor->name}}</h4>
                        <p> {{$doctor->about}} </p>
                        <a href="{{ url('appointment') }}" class="btn btn-main">Book Appointment</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
<!--End team section-->

<!--Patients Says-section-->
<section class="testimonial-section" style="background: url({{ asset('assets/web/images/background/1.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>What Our
                        <span>Patients Says</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel">
                    <!--Slide Item-->
                @foreach($feed_backs as $feed_back)
                    <div class="slide-item">
                        <div class="inner-box text-center">
                            <div class="image-box">
                                <figure>
                                    <img loading="lazy" src="{{ asset('uploads/web/patients/'.$feed_back->img) }}" alt="">
                                </figure>
                            </div>
                            <h6>{{$feed_back->name}}</h6>
                            <p class="mb-0">{{$feed_back->comment}}</p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Patients Says-section-->

@endsection