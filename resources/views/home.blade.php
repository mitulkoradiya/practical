@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Date of Birth</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($user as $user)
                            <tr >
                                <td>{{$user->first_name }}</td>
                                <td>{{$user->last_name }}</td>
                                <td>{{$user->gender }}</td>
                                <td>{{$user->dob }}</td>
                                <td>{{$user->username }}</td>
                                <td>{{$user->email }}</td>
                                <th><a href="{{ route('edituser') }}/{{$user->id}}">Edit</a> | <a href="javascript:void(0);" class="delete">Delete</a></th>
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
