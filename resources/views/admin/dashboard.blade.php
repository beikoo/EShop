@extends('layouts.master')


@section('title')
     Products we Have
@endsection


@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">
                    List Of Products we Have
                 </h4>
                 @if (session('status'))
                 <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                 </div>
                 @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Brand</th>
                      <th>Model</th>
                      <th>Description</th>
                      <th>ReleaseDate</th>
                      <th>Price</th>
                    </thead>
                    <tbody>
                        @foreach ($Products as $product)
                        <tr>
                          <td>{{$product->id }}</td>
                          <td>{{$product->Brand }}</td>
                          <td>{{$product->Model }}</td>
                          <td>{{$product->Description }}</td>
                          <td>{{$product->ReleaseDate }}</td>
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