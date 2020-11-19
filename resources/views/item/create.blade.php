@extends('backendtemplate')

@section('content')
{{-- Main Content --}}
    <div class="page-wrapper" style="min-height: 250px;">
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title text-uppercase font-medium font-14"> ITEM CREATE FORM</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <a href="{{route('item.index')}}" class="btn btn-danger ml-auto d-none d-md-block pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{route('item.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Item Name..." value="{{old('name')}}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>
                            <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                            @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Price: </label>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Current</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-2" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <input type="number" name="price" class="form-control" value="0">
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <input type="number" name="discount" class="form-control" value="0">
                                </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <label>Description:</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description...">{{old('description')}}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Category:</label>
                            <select name="category" class="form-control category">
                                <optgroup label="Choose Category">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sub Category:</label>
                            <select name="subcategory" class="form-control subcategory">
                                <optgroup label="Choose Subcategory" class="subcategory_option">
                                    @foreach($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endforeach
                                </optgroup>
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
{{-- @section('script')
<script type="text/javascript">
  $(document).ready(function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $('.category').change(function () {
      let categoryid = $(this).val();
      $.post("{{route('filterCategory')}}",{cid:categoryid},function (response) {
        // console.log(response);

        var html = "";
        for(let row of response){
          html+=`<option value="${row.id}">${row.name}</option>`;
        }
        $('.subcategory').prop('disabled',false);
        $('.subcategory_option').html(html);
      })
    })
  })
</script> --}}