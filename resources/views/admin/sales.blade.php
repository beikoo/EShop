@php
  use App\Models\Product;
  use App\User;
@endphp
@extends('layouts.master')


@section('title')
    Sales
@endsection


@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">
            Sales
         </h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="table" class="table">
            <thead class=" text-primary">
              {{-- <th><i class="now-ui-icons users_single-02"></i></th> --}}
              <th><i class="now-ui-icons arrows-1_minimal-down"></i></th>
              <th>CustomerName</th>
              <th>Brand</th>
              <th>Model</th>
              <th>Date</th>
              <th>Price</th>
          </thead>



          <tbody>
            @foreach ($Sales as $sale)
            @php
                $user = User::where(['id' => $sale->CustomerID])->first();
                $product = Product::where(['id' => $sale->ProductID])->first();
            @endphp
            <tr>
              <td><i class="now-ui-icons users_single-02"></i></td>
              <td>{{$user->name}}</td>
              <td>{{$product->Brand}}</td>
              <td>{{$product->Model}}</td>
              <td>{{$sale['created_at']->format('d M Y - H:i:s')}}</td>
              <td>{{$product->Price}}$</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection