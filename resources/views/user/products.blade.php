@extends('layouts.user')


@section('Usertitle')
    Products
@endsection 


@section('UserContent')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">
                    List Of Products
                 </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="table" class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Brand</th>
                      <th>Model</th>
                      <th>Description</th>
                      <th>ReleaseDate</th>
                      <th>Price</th>
                      <th>BUY</th>
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
                          <td>
                            <a href="#" class="btn btn-success">Buy</a>
                          </td>
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

@section('UserScripts')

@endsection