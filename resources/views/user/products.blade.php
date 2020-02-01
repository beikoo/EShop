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
                 @if (session('status'))
                 <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                 </div>
                 @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="table" class="table">
                    <thead class=" text-primary">
                      <th><i class="now-ui-icons arrows-1_minimal-down"></th>
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
                          <td><i class="now-ui-icons tech_mobile"></i></td>
                          <td>{{$product->Brand }}</td>
                          <td>{{$product->Model }}</td>
                          <td><div style="height:100px; overflow:hidden;">{{$product->Description }}</div></td>
                          <td>{{$product->ReleaseDate }}</td>
                          <td>{{$product->Price}}$</td>
                          <td>
                            <a href="/buy" class="btn btn-success">Buy</a>
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