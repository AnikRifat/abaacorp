@extends('front.master.master')
@section('content')
@foreach ($methods as $method)
<style>
    .single-progress-work.progress {
            {
            $method->id
        }
    }

    :hover .icon {
        background-color: {
                {
                $method->color
            }
        }

        ;
        color: #FFF;
    }

    .single-progress-work.progress {
            {
            $method->id
        }
    }

    .icon {
        z-index: 33;
        width: 130px;
        height: 130px;

        color: {
                {
                $method->color
            }
        }

        ;
        margin: 0 auto;
        font-size: 60px;
        overflow: hidden;
        position: relative;
        line-height: 130px;
        border-radius: 50%;
        margin-bottom: 30px;
        background-color: #FFF;
        transition: 0.35s;
        box-shadow: 0px 10px 30px 0px rgba(20, 27, 201, 0.1);
    }
</style>
@endforeach

<div class="main-body">


    <section class="hero-agency d-flex align-items-center" data-bg='{{ asset(' /')
      }}assets/front/img/agency-hero-shape.svg'>
        <div class="animate-elements">
            <img src="{{ asset('/') }}assets/front/img/icon/ydot.png" alt="" class="shape e1">
            <img src="{{ asset('/') }}assets/front/img/icon/pinkdot.png" alt="" class="shape e2">
            <img src="{{ asset('/') }}assets/front/img/icon/fgdot.png" alt="" class="shape e3">
        </div>
        <div class="container">
            <div class="row align-items-center text-center text-lg-left">
                <div class="col-12 col-xl-6 col-lg-6 offset-lg-0 col-sm-10 offset-sm-1">
                    <div class="hero-agency-content">
                        {{-- <span>Digital Agency</span> --}}
                        <h1 class="fs-lg">{!! $content->slogan !!}</h1>
                    </div>
                </div>
                <div class="col-xl-6 col-12 col-sm-10 offset-sm-1 col-lg-6 mt-5 mt-lg-0 offset-lg-0">
                    <div class="agency-banner">

                        <img src="{{ asset('/') }}images/{{ $content->slogan_image }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="agency-service-wrap section-padding pt-0" id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12 text-center">
                    <div class="section-title two">
                        <h1>{{ $content->section_1 }}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single-service-box-item box1">
                        <div class="icon">
                            <img src="{{ asset('/') }}images/{{ $service->image }}" alt="">
                        </div>
                        <h4>{{ $service->title }}</h4>
                        <p>{{ $service->detail }}</p>

                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <section class="progress-work-wrap section-padding pt-0">
        <div class="dew-line" data-bg='{{ asset(' /') }}assets/front/img/dew-line.png'></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center col-12">
                    <div class="section-title two">
                        <h1>{{ $content->section_2 }}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($methods as $method)
                <div class="col-xl-3 col-sm-6 col-12 text-center">
                    <div class="single-progress-work progress{{ $method->id }}">
                        <div class="icon">
                            <i class="{{ $method->icon }}"></i>
                        </div>
                        <h4>{{ $method->title }}</h4>
                        <p>{!! $method->description !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="agency-featured-wrap section-padding pt-0" id="feature">
        <div class="section-title two text-center">
            <h1>{{ $content->section_3 }}</h1>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-xl-4 col-12">
                    <div class="cross-featured-shots mml-200 pb-5 pb-lg-0" data-aos="fade-right"
                      data-aos-duration="1200">
                        <img src="{{ asset('/') }}images/{{ $content->about_image }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-12 offset-xl-2">
                    <p>
                    <p>{!! $content->about !!}</p>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="funfact-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12 text-center">
                    <div class="section-title two">
                        <h1>{{ $content->section_4 }}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="single-funfact sf1">
                        <span class="counter">{{ $content->customer }}</span>
                        <p>Global Customers</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="single-funfact sf2">
                        <span class="counter">{{ $content->project }}</span>
                        <p>Completed Projects</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <div class="single-funfact sf3">
                        <span class="counter">{{ $content->worker }}</span>
                        <p>Expert Technicians</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="gallery-area section-padding pt-5">
        <div class="container">
            <div class="row align-items-center text-center text-lg-left">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-title two text-center">
                        <h1>{{ $content->section_5 }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row grid">

                @foreach ($portfolio as $item)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 grid-item brand web">
                    <div class="portfolio text-center">
                        <a href="{{ asset('/') }}images/{{ $item->image }}" class="gallery-item">
                            <img class="img-fluid" src="{{ asset('/') }}images/{{ $item->image }}" alt="">
                        </a>
                    </div>
                </div>
                @endforeach




            </div>
        </div>
    </section>
    <section class="blog-page-wrap section-padding">
        <div class="container">
            <div class="section-title two text-center">
                <h1>{{ $content->section_6 }}</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="blog-post-list row">
                        @foreach ($blogs as $item)
                        <div class="blog-item col-lg-4 col-md-12 post" data-aos='fade-up' data-aos-duration='700'
                          data-aos-delay='100'>
                            <div class="featured-thumb">
                                <img src="images/{{ $item->image }}" alt="">
                            </div>


                            <div class="post-content">
                                <h3><a href="#">{{ $item->title }}</a></h3>
                                <p>{!! $item->detail !!}</p>
                                <a href="{{ url('/view_blogs', $item->id) }}" class="read-btn">Read More <i
                                      class="far fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('blogs') }}" class="btn theme-btn btn-sm ">View All </a>

            </div>
        </div>
    </section>



</div>
@endsection