@extends('frontendtemplate')

@section('content')
<div class="img-fluid">
    <img src="{{asset('frontend_asset/assets/img/detail.jpg')}}" width="1275" height="450">
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-10 shadow p-3 mb-5 bg-white rounded table-bordered border-info">
            <div class="row">
                <div class="col-4">
                <img src="{{asset('backend_asset/success-tick-dribbble.gif')}}" width="200" height="200">
                </div>
                <div class="col-8 mt-4">
                    <h1> Your order is successfully! </h1>
                    <p> You order will be delivered in 2 hours. </p>
                </div>
            </div>
        <a href="{{url('/')}}" class="btn btn-block btn-outline-info">Go Back Shopping</a>
        </div>
    </div>
</div>
@endsection