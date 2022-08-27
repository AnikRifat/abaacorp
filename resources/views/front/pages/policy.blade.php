@extends('front.master.master')
@section('content')
<div class="main-body">


    <div class="faq_area section_padding_130" id="faq">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <!-- FAQ Area-->
                <div class="col-12 col-sm-12 col-lg-12">
                    <div class="card container pb-4">
                        <h3 class="my-4 text-center">Privacy & Policy</h3>

                        {!! $content->policy !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection