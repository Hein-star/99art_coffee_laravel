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
      -webkit-transform: scale(1.3);
      transform: scale(1.1);
    }
 </style>
@section('content')
<!-- Subcategory Start -->
<div class="img-fluid">
  <img src="{{asset('frontend_asset/assets/img/detail.jpg')}}" width="1275" height="450">
  <div class="section-title mt-5">
    <h2>Types of <span>Food Products</span></h2> 
  </div>
</div>
<div class="container">
	<div class="row my-5 pointer">
	  	@foreach($subcategory->items as $item)
	    	<div class="col-md-4 img-zoom" tabindex="-1" style="width: 18px;">
			    <a href="{{route('itemdetail', $item->id)}}">
			        <img src="{{asset($item->photo)}}" height="300" width="350" alt="...">
			    </a>
		      	<div class="body mt-5">
			        <h5 class="title text-center">{{$item->name}}</h5>
			        <p class="text text-center">{{$item->price}} MMK</p>
			        <p class="text text-center">{{$item->description}}</p>
			        <button class="btn btn-outline-warning form-control mb-5 addtocartBtn" 
			            data-id="{{$item->id}}"
			            data-name="{{$item->name}}"
			            data-codeno="{{$item->codeno}}"
			            data-photo="{{asset($item->photo)}}"
			            data-price="{{$item->price}}"
			            data-discount="{{$item->discount}}">Add To Cart</button>
		      	</div>
		    </div>
	  	@endforeach  
	</div>
</div>

@endsection
@section('script')
  <script type="text/javascript" src="{{asset('my_asset/custom.js')}}"></script>
@endsection