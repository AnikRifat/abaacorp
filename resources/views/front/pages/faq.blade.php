@extends('front.master.master')
@section('content')
<div class="main-body">


    <div class="faq_area section_padding_130" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-6">
                    <!-- Section Heading-->
                    <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                      style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h3 class="mb-4"><span>Frequently </span> Asked Questions</h3>
                        </p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- FAQ Area-->
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="accordion faq-accordian" id="faqAccordion">

                        @foreach ($faq as $item)
                        <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s"
                          style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="card-header" id="heading{{ $item->id }}">
                                <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse{{ $item->id }}"
                                  aria-expanded="true" aria-controls="collapse{{ $item->id }}">{{ $item->ques }}<span
                                      class="lni-chevron-up"></span></h6>
                            </div>
                            <div class="collapse" id="collapse{{ $item->id }}" aria-labelledby="heading{{ $item->id }}"
                              data-parent="#faqAccordion">
                                <div class="card-body">
                                    {!! $item->ans !!}
                                </div>
                            </div>
                        </div>
                        @endforeach



                    </div>
                    <!-- Support Button-->

                </div>
            </div>
        </div>
    </div>

</div>
@endsection