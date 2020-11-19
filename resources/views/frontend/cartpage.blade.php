@extends('frontendtemplate')

@section('content')
<div class="img-fluid">
    <img src="{{asset('frontend_asset/assets/img/detail.jpg')}}" width="1275" height="450">
    <div class="section-title mt-5">
      	<h2>Shopping <span>Cart</span></h2> 
    </div>
</div>
 <!-- ShopingCart Title -->
@if (!empty(session()->get('success')))
	<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>	
	    <strong>{!! session()->get('success') !!}</strong>
	</div>
@endif
<!-- Content -->
<div class="container mt-5">
	<!-- Shopping Cart Div -->
	<div class="row mt-5 shoppingcart_div">
		<div class="col-12">
			<a href="{{route('mainpage')}}" class="btn btn-outline-warning float-right px-3" > 
				Continue Shopping 
			</a>
		</div>
	</div>
	<div class="row mt-5 shoppingcart_div">
		<div class="table-responsive">
			<table class="table">
				<thead class="loginbackground text-white">
					<tr>
						<th colspan="3"> Product </th>
						<th colspan="3"> Qty </th>
						<th> Price </th>
						<th> Total </th>
					</tr>
				</thead>
				<tbody id="shoppingcart_table">
				</tbody>
				<tfoot>
                    <tr>
                        <td colspan="5">
                            <textarea class="form-control notes" id="notes" placeholder="Any Request..." required></textarea>
                        </td>
                        <td colspan="3">
                           @if(Auth::user()->getRoleNames()[0] == 'customer')
                            <button class="btn btn-outline-warning checkoutBtn">
                                Check Out
                            </button>
                           @endif
                        </td>
                    </tr>
            	</tfoot>
			</table>
		</div>
	</div>
</div>
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('my_asset/custom.js')}}"></script>
@endsection