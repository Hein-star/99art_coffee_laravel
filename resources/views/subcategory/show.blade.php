@extends('backendtemplate')

@section('content')
{{-- Main Content --}}
    <div class="page-wrapper" style="min-height: 250px;">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">SUBCATEGORY SHOW</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <a href="{{route('subcategory.index')}}" class="btn btn-danger ml-auto d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card my-3">
                        <div class="row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$subcategory->name}}</h5>
                                    {{-- <p class="card-text">{{number_format($subcategory->price)}} MMK</p> --}}
                                    <p class="card-text">{{$subcategory->category->name}}</p>
                                    {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Container fluid  -->
    </div>
{{-- Main Content End --}}
@endsection