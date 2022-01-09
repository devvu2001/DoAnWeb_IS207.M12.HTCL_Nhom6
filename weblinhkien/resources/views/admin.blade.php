@extends('layout.admin.main')
@section('content')
<div class="container jumbotron border border-success">
    <h2>Overview</h2>
           
    <table class="table">
      <thead class="bg-primary text-white"> 
        <tr>
          <th>Catelog name</th>
          
          <th>Product amount</th>
        </tr>
      </thead>
      <tbody>
           @foreach ($quantity as $row)
           <tr>
            <td class="font-weight-bold">{{ $row->categoryName }}</td>
            
            <td>There are {{ $row->quantity }} Products now</td>
          </tr>
           @endforeach

        
 

      </tbody>
    </table>
  </div>
@endsection