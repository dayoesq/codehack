@extends('layouts.admin')


@section('content')

@if(Session::has('deleted_user'))

    <div class="alert alert-danger" role="alert">{{Session('deleted_user')}}</div>

@endif

    <h3>Users</h3>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role Id</th>
            <th>Status</th>
            <th>Created</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td style="padding-left: 50px;"><img style="border-radius: 50%; height: 70px; width: 70px;" src="{{asset($user->photo ? $user->photo->file : 'https://placebeard.it/80x80')}}"></td>
            <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role_id}}</td>
            <td>{{$user->is_active === 1 ? 'active' : 'Not active'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>

        </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@endsection



