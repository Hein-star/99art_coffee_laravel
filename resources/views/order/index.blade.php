@extends('backendtemplate')

@section('content')
{{-- Main Content --}}
	<div class="page-wrapper" style="min-height: 250px;">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h3 class="page-title text-uppercase font-medium font-14">ORDER LIST</h3>
                </div>
            </div>
        </div>
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Confirm</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table mt-3 table-bordered dataTable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Customer Name</th>
                                        <th>Orderno</th>
                                        <th>Orderdate</th>
                                        <th>Totalamount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                    $i=1;
                                    @endphp
                                    @foreach($pending_orders as $row)
                                    <tr>
                                        <td>
                                            <span class="text-primary">{{$i++}}</span>
                                        </td>
                                        <td>
                                            <div class="text-primary font-weight-bold">{{$row->user->name}}</div>
                                        </td>
                                        <td>
                                            <span class="text-dark">{{$row->orderno}}</span>    
                                        </td>
                                        <td>
                                            <span class="text-dark">{{ date('Y-M-d', strtotime($row->order_date)) }}</span>
                                        </td>
                                        <td>
                                            <span class="text-dark font-weight-bold">{{number_format($row->totalamount)}} MMK</span>
                                        </td>
                                        <td>
                                            <a href="{{route('order.show',$row->id)}}" class="btn btn-outline-info">Detail</a> 
                                            <a href="{{url('order/'.$row->id.'/cancle')}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure ?')">Cancle</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table mt-3 table-bordered dataTable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Customer Name</th>
                                        <th>Orderno</th>
                                        <th>Orderdate</th>
                                        <th>Total Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php 
                                    $i=1;
                                    @endphp
                                    @foreach($confirmed_orders as $row)
                                    <tr>
                                        <td>
                                            <span class="text-primary">{{$i++}}</span>
                                        </td>
                                        <td>
                                            <div class="text-primary font-weight-bold">{{$row->user->name}}</div>
                                        </td>
                                        <td>
                                            <span>{{$row->orderno}} (confirmed)</span>    
                                        </td>
                                        <td>
                                            <span>{{ date('Y-M-d', strtotime($row->order_date)) }}</span>
                                        </td>
                                        <td>
                                            <span class="text-dark font-weight-bold">{{number_format($row->totalamount)}} MMK</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Container fluid  -->
    </div>
{{-- Main Content End --}}
@endsection
@section('script')
    <!-- All Jquery -->
    <script src="{{asset('backend_asset/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('backend_asset/plugins/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('backend_asset/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend_asset/js/app-style-switcher.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('backend_asset/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('backend_asset/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('backend_asset/js/custom.js')}}"></script>
  <script type="text/javascript">
    $('.dataTable').DataTable();
  </script>
@endsection