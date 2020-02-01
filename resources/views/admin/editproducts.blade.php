@extends('layouts.master')


@section('title')
    Edit User
@endsection

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                         <h5>Edit User</h5>
                    </div>
                    <div class="card-body">
                        <form action="/UpdateProducts/{{$products->id}}" method="POST">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label>Brand</label>
                                <input type="text" name="Brand" value="{{$products->Brand}}" class="form-control">
                            </div>
                            <div class="form-group">
                                    <label>Model</label>
                                    <input type="text" name="Model" value="{{$products->Model}}" class="form-control">
                             </div>
                             <div class="form-group">
                                    <label>ReleaseDate</label>
                                    <input type="text" name="ReleaseDate" value="{{$products->ReleaseDate}}" class="form-control">
                             </div>
                             <div class="form-group">
                                    <label for="message-text" class="col-form-label">Description:</label>
                                    <textarea name="Description" class="form-control" value="{{$products->Description}}"></textarea>
                                  </div>
                            <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="Price" value="{{$products->Price}}" class="form-control">
                            </div>
                            <button type ="submit" class="btn btn-success">Submit</button>
                            <a href="/EditProducts" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection