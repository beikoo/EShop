@extends('layouts.master')


@section('title')
    Product Editor
@endsection 


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/saveproducts" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Brand:</label>
              <input type="text" name="brand" class="form-control" id="recipient-name">
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Model:</label>
                <input type="text" name="model" class="form-control" id="recipient-name">
              </div>

              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">ReleaseDate:</label>
                  <input type="text" name="releasedate" class="form-control" id="recipient-name">
                </div>

            <div class="form-group">
              <label for="message-text" class="col-form-label">Description:</label>
              <textarea name="description" class="form-control" id="message-text"></textarea>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Price:</label>
                <input type="text" name="price" class="form-control" id="recipient-name">
            </div>
            <img src="{{asset('/images/noimage.png')}}" style="vertical-align:bottom;max-height:240px;border:1px solid #dcdcdc;">
            <input type="file" class="btn btn-default" accept="image/*" name="image" />
            <div>{{ $errors->first('image') }}</div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Add</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </form>
      </div>
    </div>
  </div>

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">
                    List Of Products
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add</button>
                 </h4>
                 <div>{{$errors->first('brand') }}</div>
                 <div>{{$errors->first('model') }}</div>
                 <div>{{$errors->first('releasedate') }}</div>
                 <div>{{$errors->first('description') }}</div>
                 <div>{{$errors->first('price') }}</div>
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
                      <th>ID</th>
                      <th>Brand</th>
                      <th>Model</th>
                      <th>Description</th>
                      <th>ReleaseDate</th>
                      <th>Price</th>
                      <th>Picture</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </thead>
                    <tbody>
                        @foreach ($Products as $product)
                        <tr>
                          <td><i class="now-ui-icons tech_mobile"></i></td>
                          <td>{{$product->id }}</td>
                          <td>{{$product->Brand }}</td>
                          <td>{{$product->Model }}</td>
                          <td><div style="height:100px; overflow:hidden;">{{$product->Description }}</div></td>
                          <td>{{$product->ReleaseDate }}</td>
                          <td>{{$product->Price}}$</td>
                          <td>
                            @if (!empty($product['image']))
                              <img src="{{asset('storage/images/'.$product['image'])}}" style="vertical-align:bottom;max-height:240px;border:1px solid #dcdcdc;">
                              @else
                                  <img src="{{asset('/images/noimage.png')}}" style="vertical-align:bottom;max-height:240px;border:1px solid #dcdcdc;">
                              @endif
                            </td>
                        <td>
                        <a href="{{url('EditProducts/'.$product->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <form action="/DeleteProduct/{{$product->id}}" method="POST">
                              {{ csrf_field() }}
                              {{method_field('DELETE') }}               
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
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

@section('scripts')

@endsection