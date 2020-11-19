<div class="dropdown-menu">
	@foreach($categories as $category)
		<a class="dropdown-item text-dark" href="#"></a>
		@foreach($category->subcategories as $subcategory)
			<a class="dropdown-item text-dark" href="{{route('itemsbysubcategory',$subcategory->id)}}">{{ $subcategory->name }}</a>
		@endforeach
	@endforeach
</div>
