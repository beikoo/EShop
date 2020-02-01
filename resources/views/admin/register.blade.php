@extends('layouts.master')


@section('title')
    Users List
@endsection


@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Edit Registered Users</h4>
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
                        {{-- <th><i class="now-ui-icons users_single-02"></i></th> --}}
                        <th><i class="now-ui-icons arrows-1_minimal-down"></i></th>
                        <th>UserID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>



                    <tbody>
                      @foreach ($Users as $user)
                      <tr>
                        <td><i class="now-ui-icons users_single-02"></i></td>
                        <td>{{$user->id }}</td>
                        <td>{{$user->name }}</td>
                        <td>{{$user->email }}</td>
                        <td>{{$user->phone }}</td>
                        <td>{{$user->usertype }}</td>
                      <td>
                        <a href="/EditUser/{{$user->id}}" class="btn btn-success">Edit</a>
                      </td>
                      
                      <td>
                        <form action="/DeleteUser/{{$user->id}}" method="POST">
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