@extends('layout.admin.main')
@section('content')
<div class="container jumbotron   border border-success">
    <h2>Catelog management</h2>
           
    <table class="table">
      <thead class="bg-info text-white"> 
        <tr>
          <th>Catalog</th>
          
          <th>Functions</th>
        </tr>
      </thead>
      <tbody>
           @foreach ($categories as $category)
           <tr>
            <td>{{ $category->categoryName }}</td>
            
            <td> <a class="button btn btn-danger " href="{{ route('product.show',$category->categoryID) }}"><i class="fas fa-info-circle"></i>  Detail</a>
              <a class="button btn btn-success" href="{{ route('category.edit',$category->categoryID) }}"><i class="fas fa-tools"></i>  Update</a>
              <form class="d-inline-block " action="{{ route('category.destroy',$category->categoryID) }}" method="post" >
                {{ csrf_field() }}
                @method('DELETE')
                {{-- HTML không có các method PUT, PATCH, DELETE, nên cần dùng lệnh @method để có thể gán các method này --}}
                {{-- or --}}
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                {{-- <input type="hidden" name="_method" value="delete"> --}}
                
                <input type="submit" value="Delete" class="button btn btn-secondary">
                </form>
            
            </td>
          </tr>
           @endforeach

        
 

      </tbody>
    </table>
    <div class="d-flex justify-content-center">{{ $categories->links() }}</div>
                <p class="d-flex justify-content-end">
                    <a class="btn btn-info btn-sm fa fa-plus" href="{{ route('category.create') }}">Insert catalog</a>
                </p>

  </div>
@endsection