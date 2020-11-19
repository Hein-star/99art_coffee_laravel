@extends('frontendtemplate')
<style type="text/css">
   .pointer {
      cursor: pointer;
    }
    .img-zoom {
      display: block;
    }
    .img-zoom img {
      -webkit-transform: scale(1);
      transform: scale(1);
      -webkit-transition: .3s ease-in-out;
      transition: .3s ease-in-out;
    }
    .img-zoom:hover img {
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
 </style>
@section('content')
<div class="img-fluid">
  <img src="{{asset('frontend_asset/assets/img/detail.jpg')}}" width="1275" height="450">
  <div class="section-title mt-5">
    <h2>Product <span>Detail</span></h2> 
  </div>
</div>
<div class="container">
  <div class="row my-5">
    <div class="col-md-6">
      <img src="{{asset($item->photo)}}" class="img-fluid">
    </div>
    <div class="col-md-6 my-5">
      <div class="header">
        <h4>{{$item->name}}</h4>
      </div>
      <div class="body">
        <p>{{$item->description}}</p>
        <p>{{$item->price}} MMK</p>
        <input type="number" name="qty" class="form-control w-50" value="1" min="1">
      </div>
      <div class="footer my-3">
        <button class="btn btn-outline-warning addtocartBtn" 
                  data-id="{{$item->id}}"
                  data-name="{{$item->name}}"
                  data-codeno="{{$item->codeno}}"
                  data-photo="{{asset($item->photo)}}"
                  data-price="{{$item->price}}"
                  data-discount="{{$item->discount}}">Add To Cart
        </button>
      </div>          
    </div>
  </div>
</div>
<div class="my-5 bg-white">
  <div class="container">
      <h1 class="text-center text-warning"> YOU MAY ALSO LIKE </h1>
  </div>
</div>
<div class="container mb-5">
  <div class="row">
    <div style="width: 16rem;" class="mx-2 img-zoom" tabindex="-1">
      <img src="{{asset('frontend_asset/assets/img/photo1.jpg')}}" class="card-img-top" alt="...">
      <div class="body my-3">
        <h5 class="card-title text-center">Street Blend</h5>
        <p class="card-text text-center">15000 MMK</p>
        <p class="card-text">Milk Chocolate, Grape Fruit and Caramel</p>
        <button class="btn btn-outline-warning form-control addtocartBtn" 
                data-id="{{$item->id}}"
                data-name="{{$item->name}}"
                data-codeno="{{$item->codeno}}"
                data-photo="{{asset($item->photo)}}"
                data-price="{{$item->price}}"
                data-discount="{{$item->discount}}">Add To Cart
        </button>
      </div>
    </div>
    <div style="width: 16rem;" class="mx-3 img-zoom" tabindex="-1">
      <img src="{{asset('frontend_asset/assets/img/photo2.jpg')}}" class="card-img-top" alt="...">
      <div class="body my-3">
        <h5 class="card-title text-center">Espresso Parisi</h5>
        <p class="card-text text-center">17000 MMK</p>
        <p class="card-text">Hazelnut, Almond, Vanilla and Milk Chocolate</p>
        <button class="btn btn-outline-warning form-control addtocartBtn" 
                data-id="{{$item->id}}"
                data-name="{{$item->name}}"
                data-codeno="{{$item->codeno}}"
                data-photo="{{asset($item->photo)}}"
                data-price="{{$item->price}}"
                data-discount="{{$item->discount}}">Add To Cart
        </button>
      </div>
    </div>
    <div style="width: 16rem;" class="mx-3 img-zoom" tabindex="-1">
      <img src="{{asset('frontend_asset/assets/img/photo3.jpg')}}" class="card-img-top" alt="...">
      <div class="body my-3">
        <h5 class="card-title text-center">Ethiopia Sidamo Ardi</h5>
        <p class="card-text text-center">21000 MMK</p>
        <p class="card-text">Ripe Strawberry, Blueberries and Dark Chocolate</p>
        <button class="btn btn-outline-warning form-control addtocartBtn" 
                data-id="{{$item->id}}"
                data-name="{{$item->name}}"
                data-codeno="{{$item->codeno}}"
                data-photo="{{asset($item->photo)}}"
                data-price="{{$item->price}}"
                data-discount="{{$item->discount}}">Add To Cart
        </button>
      </div>
    </div>
    <div style="width: 16rem;" class="mx-3 img-zoom" tabindex="-1">
      <img src="{{asset('frontend_asset/assets/img/photo4.jpg')}}" class="card-img-top" alt="...">
      <div class="body my-3">
        <h5 class="card-title text-center">Bravissimo Blend</h5>
        <p class="card-text text-center">17000 MMK</p>
        <p class="card-text">Milk Chocolate, Grape Fruit and Caramel</p>
        <button class="btn btn-outline-warning form-control addtocartBtn" 
                data-id="{{$item->id}}"
                data-name="{{$item->name}}"
                data-codeno="{{$item->codeno}}"
                data-photo="{{asset($item->photo)}}"
                data-price="{{$item->price}}"
                data-discount="{{$item->discount}}">Add To Cart
        </button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('my_asset/custom.js')}}"></script>
@endsection