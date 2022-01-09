@extends('layout.admin.main')
@section('content')
<div class="container jumbotron   border border-success">
    <h2>Manage product</h2>
           
    <table class="table">
      <thead class="bg-danger text-white"> 
        <tr>
          <th>Product name</th>
            <th>image</th>
         <th>Price</th>
        <th>Discount</th>
       <th>Function</th>
    
        </tr>
      </thead>
      <tbody>
       @foreach ($products as $product)
       <tr>
        <td>
           {{ $product->productName }} 
        <td>
             <div class="product-image-thumb" ><img src="../public/upload/{{ $product->productImage }}" alt="Product Image"></div>
        </td>
        <td>
          {{number_format($product->listPrice)}}đ
        </td>
        <td>{{ $product->discountPercent }}%</td>
        <td> 
            <a class="button btn btn-success" href="{{ route('product.edit',$product->productID) }}"><i class="fas fa-tools"></i>  Update</a>
            <form class="d-inline-block " action="{{ route('product.destroy',$product->productID) }}" method="post" >
              {{ csrf_field() }}
              @method('DELETE')
              {{-- HTML không có các method PUT, PATCH, DELETE, nên cần dùng lệnh @method để có thể gán các method này --}}
              {{-- or --}}
              {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
              {{-- <input type="hidden" name="_method" value="delete"> --}}
              
              <input type="submit" value="Delete" class="button btn btn-danger">
              </form>
          
          </td>
      </tr>
       @endforeach
       


      </tbody>
    </table>
    <div class="d-flex justify-content-center">{{ $products->links() }}</div>
    <p class="d-flex justify-content-end">
        <a class="btn btn-info btn-sm fa fa-plus" href="{{ route('product.create') }}">Insert Product</a>
    </p>
  </div>
@endsection