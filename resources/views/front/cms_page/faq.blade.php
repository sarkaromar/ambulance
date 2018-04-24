@extends('front.layouts.template')

@section('content')
<!-- mainbody section -->
<section class="main-body">
    <div class="sub-page about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(isset($faqs[0]))
                    @foreach($faqs as $list)
                    <h4>{{ $list->faq_ques }}</h4>
                    <p>{{ $list->faq_ansr }}</p>
                    @endforeach
                    @else
                    <h4>There is no FAQ's info</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection