@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h1 class="title text-lighter">
                创建管理员
                <a href="{{ url('/admin/admins') }}" class="btn btn-default btn-xs"><i class="fa fa-mail-reply"></i></a>
            </h1>
            <hr>
            <div class="well">
                {!! Form::open(['url' => 'admin/admins']) !!}
                <div class="form-group {{ has_error_class($errors, 'name') }}">
                    {!! Form::label('name', '用户名', ['class' => 'control-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {{ error_block($errors, 'name') }}
                </div>

                <div class="form-group {{ has_error_class($errors, 'email') }}">
                    {!! Form::label('email', '邮箱', ['class' => 'control-label']) !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    {{ error_block($errors, 'email') }}
                </div>

                <div class="form-group {{ has_error_class($errors, 'password') }}">
                    {!! Form::label('password', '密码', ['class' => 'control-label']) !!}
                    {!! Form::text('password', '123456', ['class' => 'form-control']) !!}
                    {{ error_block($errors, 'password') }}
                </div>

                <div class="buttons text-right">
                    <a class="btn btn-default" href="/admin/admins">取消</a>
                    <button class="btn btn-primary" type="submit">创建</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
