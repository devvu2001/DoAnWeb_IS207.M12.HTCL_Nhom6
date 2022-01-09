@extends('layout.admin.main')
@section('content')
<div class="container jumbotron border border-success">
    <h2>User management</h2>
           
    <table class="table">
      <thead class="bg-warning"> 
        <tr class="text-white">
          <th>User name</th>
            <th>Email</th>
         <th>Phone number</th>
        <th>Address</th>
       <th>Function</th>
    
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
               {{ $user->phonenumber }} 
          </td>
          <td>
              {{ $user->address }}
          </td>
          
          <td> 
            <a class="button btn btn-success" href="{{ route('user.edit',$user->id) }}"><i class="fas fa-tools"></i>  Update</a>
            <form class="d-inline-block " action="{{ route('user.destroy',$user->id) }}" method="post" >
              {{ csrf_field() }}
              @method('DELETE')
              {{-- HTML không có các method PUT, PATCH, DELETE, nên cần dùng lệnh @method để có thể gán các method này --}}
              {{-- or --}}
              {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
              {{-- <input type="hidden" name="_method" value="delete"> --}}
             
             <button type="submit" class="button btn btn-danger"> <i class="fas fa-trash-alt"></i> Delete</button>
              </form>
          
          </td>
        </tr>
       

        @endforeach
      </tbody>
    </table>
   

  </div>
    
@endsection