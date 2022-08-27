@extends('front.master.master')
@section('content')
<div class="main-body">

    <section class="blog-page-wrap section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1 col-12">
                    <div class="blog-post-details ml-lg-2">
                        <div class="blog-item post aos-init aos-animate" data-aos="fade-up" data-aos-duration="700"
                          data-aos-delay="100">
                            <h3 class="my-4">
                                <blockquote>
                                    {{ $blog->title }}
                                </blockquote>
                            </h3>
                            <div class="featured-thumb">
                                <img src="{{ asset('/') }}images/{{ $blog->image }}" alt="">
                            </div>


                            <div class="post-content">

                                <p>

                                    {!! $blog->detail !!}
                                </p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection