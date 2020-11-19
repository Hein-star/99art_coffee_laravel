@extends('backendtemplate')

@section('content')
{{-- Main Content --}}
	<div class="page-wrapper" style="min-height: 250px;">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h3 class="page-title text-uppercase font-medium font-14">CATEGORY LIST</h3>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <a href="{{route('category.create')}}" class="btn btn-danger ml-auto d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">ADD NEW</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table class="table mt-3 table-bordered dataTable">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php 
                            $i=1;
                            @endphp
                            @foreach($categories as $row)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$row->name}}</td>
                                <td>
                                <a href="{{route('category.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{route('category.show',$row->id)}}" class="btn btn-info">Show</a>
                                <form method="post" action="{{route('category.destroy',$row->id)}}" class="d-inline-block" onsubmit="return confirm('Are you Sure to Delete?')">
                                @csrf
                                @method('DELETE')
                                <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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