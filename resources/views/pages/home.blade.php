@extends('welcome')

@section('content')
    <!-- Intro Section -->
    <div class="hero-section">
        <div class="hero-content">
            @foreach ($datas as $elem)
                <div class="hero-center">
                    <img src="{{ asset('img/' . $elem->src) }}" alt="">
                    <p>{{ $elem->slogan }}</p>
                </div>
            @endforeach
        </div>
        <!-- slider -->
        <div id="hero-slider" class="owl-carousel">
            @foreach ($caroussel as $elem)
                <div class="item  hero-item" data-bg="{{ asset('img/' . $elem->src) }}"></div>
            @endforeach
        </div>
    </div>
    <!-- Intro Section -->


    <!-- About section -->
    <div class="about-section">
        <div class="overlay"></div>
        <!-- card section -->
        <div class="card-section">
            <div class="container">
                <div class="row">
                    @foreach ($serviceRandom as $elem)
                        <div class="col-md-4 col-sm-12">
                            <div class="lab-card">
                                <div class="icon">
                                    <i class="{{ $elem->icon }}"></i>
                                </div>
                                <h2>{{ $elem->titre2 }}</h2>
                                <p>{{ $elem->para }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- card section end-->


            <!-- About contant -->
            <div class="about-contant">
                <div class="container">
                    @foreach ($presentation as $elem)

                        <div class="section-title">
                            <h2>{{$start}}<span>{{$slice}}</span>{{$end}}</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>{{ $elem->texte1 }}</p>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $elem->texte2 }}</p>
                            </div>
                        </div>
                        <div class="text-center mt60">
                            <a href="#contact" class="site-btn">{{ $elem->button }}</a>
                        </div>
                    @endforeach
                    <!-- popup video -->
                    <div class="intro-video">
                        <div class="row">
                            @foreach ($video as $elem)

                                <div class="col-md-8 col-md-offset-2">
                                    <img src="img/video.jpg" alt="">
                                    <a href="{{ $elem->src }}" class="video-popup">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About section end -->


        <!-- Testimonial section -->
        <div class="testimonial-section pb100">
            <div class="test-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <div class="section-title left">
                            <h2>{{ $titre[1]->titre }}</h2>
                        </div>
                        <div class="owl-carousel" id="testimonial-slide">

                            <!-- single testimonial -->
                            @foreach ($testimonial as $elem)
                                <div class="testimonial">
                                    <span>‘​‌‘​‌</span>
                                    <p>{{ $elem->temoignage }}</p>
                                    <div class="client-info">
                                        <div class="avatar">
                                            <img src="{{ asset('img/avatar/' . $elem->src) }}" alt="">
                                        </div>
                                        <div class="client-name">
                                            <h2>{{ $elem->nom }} {{ $elem->prenom }}</h2>
                                            <p>{{ $elem->fonction }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial section end-->


        <!-- Services section -->
        <div class="services-section spad bg-success">
            <div class="container">
                <div class="section-title dark">
                    <h2>Get in <span>the Lab</span> and see the services</h2>
                </div>
                <div class="row">
                    @foreach ($service as $elem)
                        <!-- single service -->
                        <div class="col-md-4 col-sm-6">
                            <div class="service">
                                <div class="icon">
                                    <i class="{{ $elem->icon }}"></i>
                                </div>
                                <div class="service-text">
                                    <h2>{{ $elem->titre }}</h2>
                                    <p>{{ $elem->para }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $service->fragment('service')->links() }}
                @foreach ($presentation as $elem)

                    <div class="text-center">
                        <a href="" class="site-btn">{{ $elem->button }}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- services section end -->


        <!-- Team Section -->
        <div class="team-section spad">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h2>Get in <span>the Lab</span> and meet the team</h2>
                </div>
                <div class="row">
                    @foreach ($team as $elem)
                        <!-- single member -->
                        <div class="col-sm-4">
                            <div class="member">
                                <img src="{{ asset('img/team/' . $elem->src) }}" alt="">
                                <h2>{{ $elem->prenom }} {{ $elem->nom }}</h2>
                                <h3>{{ $elem->fonction }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team Section end-->


        <!-- Promotion section -->
        <div class="promotion-section">
            <div class="container">
                <div class="row">
                    @foreach ($ready as $elem)

                        <div class="col-md-9">
                            <h2>{{ $elem->titre }}</h2>
                            <p>{{ $elem->soustitre }}</p>
                        </div>
                        <div class="col-md-3">
                            <div class="promo-btn-area">
                                <a href="" class="site-btn btn-2">{{ $elem->button }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Promotion section end-->


        <!-- Contact section -->
        <div class="contact-section spad fix" id="contact">
            <div class="container">
                <div class="row">
                    @foreach ($info as $elem)

                        <!-- contact info -->
                        <div class="col-md-5 col-md-offset-1 contact-info col-push">
                            <div class="section-title left">
                                <h2>{{ $elem->titre1 }}</h2>
                            </div>
                            <p>{{ $elem->texte }}</p>
                            <h3 class="mt60">{{ $elem->titre2 }}</h3>
                            <p class="con-item">{{ $elem->adresse }}<br></p>
                            <p class="con-item">{{ $elem->phone }}</p>
                            <p class="con-item">{{ $elem->email }}</p>
                        </div>
                        <!-- contact form -->
                        <div class="col-md-6 col-pull">
                            <form class="form-class" id="con_form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="{{ $elem->name }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="mail" placeholder="{{ $elem->mail }}l">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" name="subject" placeholder="{{ $elem->subject }}">
                                        <textarea name="message" placeholder="{{ $elem->message }}"></textarea>
                                        <button class="site-btn">{{ $elem->button }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Contact section end-->
    @endsection
