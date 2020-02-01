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
                        <form action="/UpdateUser/{{$users->id}}" method="POST">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="username" value="{{$users->name}}" class="form-control">
                            </div>
                            <div class="form-group">
                                    <label>Edit Role</label>
                                    <select name="usertype" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                            </div>
                            <button type ="submit" class="btn btn-success">Submit</button>
                            <a href="/UsersList" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection