@extends('layouts.admin')


@section('content')

    <h3>Edit Users</h3>
    
    <div class="sm-3" style="margin: 10px;">
        <img style="height: 100px; width: 100px;" src="{{asset($user->photo ? $user->photo->file : 'https://placebeard.it/100x100')}}" alt="" class="img-responsive img-circle">
    </div>
    <div class="col-md-8">

        @include('includes.error_form')


        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null,  ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Upload:') !!}
            {!! Form::file('photo_id', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Edit User', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>



@endsection


