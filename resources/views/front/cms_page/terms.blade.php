@extends('front.layouts.template')

@section('content')

<!-- mainbody section -->
<section class="main-body">
    <div class="sub-page about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(isset($data->terms_info))
                    <?php echo $data->terms_info; ?>
                    @else
                    <h4>There is no information</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection