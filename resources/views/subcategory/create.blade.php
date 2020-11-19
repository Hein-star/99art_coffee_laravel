@extends('backendtemplate')

@section('content')
{{-- Main Content --}}
    <div class="page-wrapper" style="min-height: 250px;">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14">SUBCATEGORY CREATE FORM</h4>
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
                    <form method="post" action="{{route('subcategory.store')}}">
                        @csrf
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Subcategory Name..." value="{{old('name')}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Category: </label>
                            <select name="category" class="form-control">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Container fluid  -->
    </div>
{{-- Main Content End --}}
@endsection