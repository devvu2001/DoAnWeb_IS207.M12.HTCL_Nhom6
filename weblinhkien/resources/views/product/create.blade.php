@extends('layout.admin.main')
@section('content')
<h5 style="font-weight: bold">Insert product</h5>
{{--  hiển thị nội dung lỗi --}}
<div class="card-body">
   @include('error')
</div>
{{--  --}}
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}  
            <div class="form-group">
                <label for="categoryID" style="font-weight: bold">Catalog:</label>
                <select name="categoryID" id="categoryID" class="form-control">
                    @foreach ($categories as $category)
                    <option value="{{ $category->categoryID }}">
                    {{ $category->categoryName }}
                    </option>
                        
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label for="productName" style="font-weight: bold">Product name</label>
                <input type="text" name="productName" id="productName" class="form-control">
            </div>
            <div class="form-group">
                <label for="productImage" style="font-weight: bold">Choose product image:</label>
                <input type="file" name="productImage" id="productImage" class="form-control-file"> 
            </div>
            <div class="form-group">
                <label for="listPrice" style="font-weight: bold">Product price</label>
                <input type="text" name="listPrice" id="listPrice" class="form-control">
            </div>
            <div class="form-group">
                <label for="discountPercent" style="font-weight: bold">Discount</label>
                <input type="text" name="discountPercent" id="discountPercent" class="form-control">
            </div>
            <div class="form-group">
                <label for="description" style="font-weight: bold">Product info</label>
                <textarea name="description" class="form-control summernote" id="summernote"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-info btn-sm" value="Tạo sản phẩm">
            </div>
            </form>
        </div>
    </div>
</div>
<script>
 $(document).ready(function(){

$('.summernote').summernote({
    height: 240,
    minHeight: null,
    maxHeight: null,
    focus: false
});

});
  </script>
@endsection