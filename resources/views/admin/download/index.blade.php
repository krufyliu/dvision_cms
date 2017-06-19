@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="title text-lighter">
      下载管理
        <a href="{{ url('/admin/') }}" class="btn btn-default btn-xs"><i class="fa fa-mail-reply"></i></a>
        </h1>
        <hr>
        <div class="well">
            {!! Form::model($download, ['url' => $download->path('admin'), 'method' => 'patch']) !!}

                <div class="buttons text-right">
                    <button class="btn btn-primary" type="submit">保存</button>
                </div>
                <br>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Aura Studio</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label">Image URL</label>
                            {!! Form::text('aura[studio][image_url]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Win URL</label>
                            {!! Form::text('aura[studio][win][url]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Win Title</label>
                            {!! Form::text('aura[studio][win][title]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mac URL</label>
                            {!! Form::text('aura[studio][mac][url]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mac Title</label>
                            {!! Form::text('aura[studio][mac][title]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Version</label>
                            {!! Form::text('aura[studio][version]', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Aura Work</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label">Image URL</label>
                            {!! Form::text('aura[work][image_url]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Win URL</label>
                            {!! Form::text('aura[work][win][url]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Win Title</label>
                            {!! Form::text('aura[work][win][title]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mac URL</label>
                            {!! Form::text('aura[work][mac][url]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Mac Title</label>
                            {!! Form::text('aura[work][mac][title]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Version</label>
                            {!! Form::text('aura[work][version]', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Aura Firmware</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label">Image URL</label>
                            {!! Form::text('aura[firmware][image_url]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">URL</label>
                            {!! Form::text('aura[firmware][url]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            {!! Form::text('aura[firmware][title]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Version</label>
                            {!! Form::text('aura[firmware][version]', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Aura Live</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="control-label">Image URL</label>
                            {!! Form::text('aura[live][image_url]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">URL</label>
                            {!! Form::text('aura[live][url]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            {!! Form::text('aura[live][title]', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label class="control-label">Version</label>
                            {!! Form::text('aura[live][version]', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

                <br>
                <div class="buttons text-right">
                    <button class="btn btn-primary" type="submit">保存</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection