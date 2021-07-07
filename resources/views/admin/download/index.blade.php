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
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#mini8" aria-controls="mini8" role="tab" data-toggle="tab">Mini</a></li>
                <li role="presentation"><a href="#aura20" aria-controls="aura20" role="tab" data-toggle="tab">Aura</a></li>
            </ul>
            {!! Form::model($download, ['url' => $download->path('admin'), 'method' => 'patch']) !!}
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="mini8">
                        <br>
                        <div class="buttons text-right">
                            <button class="btn btn-primary" type="submit">保存</button>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Studio</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Image URL</label>
                                                {!! Form::text('mini8[studio][image_url]', null, ['class' => 'form-control']) !!}
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Description</label>
                                                {!! Form::text('mini8[studio][description]', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Win</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="control-label">Win URL</label>
                                                        {!! Form::text('mini8[studio][win][url]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Title</label>
                                                        {!! Form::text('mini8[studio][win][title]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Version</label>
                                                        {!! Form::text('mini8[studio][win][version]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Date</label>
                                                        {!! Form::text('mini8[studio][win][date]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Log</label>
                                                        {!! Form::textarea('mini8[studio][win][log]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Mac</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="control-label">Mac URL</label>
                                                        {!! Form::text('mini8[studio][mac][url]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Title</label>
                                                        {!! Form::text('mini8[studio][mac][title]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Version</label>
                                                        {!! Form::text('mini8[studio][mac][version]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Date</label>
                                                        {!! Form::text('mini8[studio][mac][date]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Log</label>
                                                        {!! Form::textarea('mini8[studio][mac][log]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Work</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Image URL</label>
                                                {!! Form::text('mini8[work][image_url]', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Description</label>
                                                {!! Form::text('mini8[work][description]', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Win</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="control-label">Win URL</label>
                                                        {!! Form::text('mini8[work][win][url]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Title</label>
                                                        {!! Form::text('mini8[work][win][title]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Version</label>
                                                        {!! Form::text('mini8[work][win][version]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Date</label>
                                                        {!! Form::text('mini8[work][win][date]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Log</label>
                                                        {!! Form::textarea('mini8[work][win][log]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Mac</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="control-label">Mac URL</label>
                                                        {!! Form::text('mini8[work][mac][url]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Title</label>
                                                        {!! Form::text('mini8[work][mac][title]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Version</label>
                                                        {!! Form::text('mini8[work][mac][version]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Date</label>
                                                        {!! Form::text('mini8[work][mac][date]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Log</label>
                                                        {!! Form::textarea('mini8[work][mac][log]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Firmware</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="control-label">Image URL</label>
                                            {!! Form::text('mini8[firmware][image_url]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                            {!! Form::text('mini8[firmware][description]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">URL</label>
                                            {!! Form::text('mini8[firmware][url]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Title</label>
                                            {!! Form::text('mini8[firmware][title]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Version</label>
                                            {!! Form::text('mini8[firmware][version]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Date</label>
                                            {!! Form::text('mini8[firmware][date]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Log</label>
                                            {!! Form::textarea('mini8[firmware][log]', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Live</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="control-label">Image URL</label>
                                            {!! Form::text('mini8[live][image_url]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                            {!! Form::text('mini8[live][description]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">URL</label>
                                            {!! Form::text('mini8[live][url]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Title</label>
                                            {!! Form::text('mini8[live][title]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Version</label>
                                            {!! Form::text('mini8[live][version]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Date</label>
                                            {!! Form::text('mini8[live][date]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Log</label>
                                            {!! Form::textarea('mini8[live][log]', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Remote</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Image URL</label>
                                                {!! Form::text('mini8[remote][image_url]', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Description</label>
                                                {!! Form::text('mini8[remote][description]', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Android</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="control-label">Android URL</label>
                                                        {!! Form::text('mini8[remote][android][url]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Android Title</label>
                                                        {!! Form::text('mini8[remote][android][title]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Android Version</label>
                                                        {!! Form::text('mini8[remote][android][version]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Android Date</label>
                                                        {!! Form::text('mini8[remote][android][date]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Android Log</label>
                                                        {!! Form::textarea('mini8[remote][android][log]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">App Store</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="control-label">App Store URL</label>
                                                        {!! Form::text('mini8[remote][appstore][url]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">App Store Title</label>
                                                        {!! Form::text('mini8[remote][appstore][title]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">App Store Version</label>
                                                        {!! Form::text('mini8[remote][appstore][version]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">App Store Date</label>
                                                        {!! Form::text('mini8[remote][appstore][date]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">App Store Log</label>
                                                        {!! Form::textarea('mini8[remote][appstore][log]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="buttons text-right">
                            <button class="btn btn-primary" type="submit">保存</button>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="aura20">
                        <br>
                        <div class="row">
                            <div class="buttons text-left col-md-6">
                                <div class="alert alert-danger" role="alert" style="padding:6px; margin: 0px;">修改时,请注意AURA和MINI的内容是否都改了！！！</div>
                            </div>
                            <div class="buttons text-right col-md-6">
                                <button class="btn btn-primary" type="submit">保存</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Studio</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Image URL</label>
                                                {!! Form::text('aura20[studio][image_url]', null, ['class' => 'form-control']) !!}
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Description</label>
                                                {!! Form::text('aura20[studio][description]', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Win</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="control-label">Win URL</label>
                                                        {!! Form::text('aura20[studio][win][url]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Title</label>
                                                        {!! Form::text('aura20[studio][win][title]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Version</label>
                                                        {!! Form::text('aura20[studio][win][version]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Date</label>
                                                        {!! Form::text('aura20[studio][win][date]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Log</label>
                                                        {!! Form::textarea('aura20[studio][win][log]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Mac</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="control-label">Mac URL</label>
                                                        {!! Form::text('aura20[studio][mac][url]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Title</label>
                                                        {!! Form::text('aura20[studio][mac][title]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Version</label>
                                                        {!! Form::text('aura20[studio][mac][version]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Date</label>
                                                        {!! Form::text('aura20[studio][mac][date]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Log</label>
                                                        {!! Form::textarea('aura20[studio][mac][log]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Work</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Image URL</label>
                                                {!! Form::text('aura20[work][image_url]', null, ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Description</label>
                                                {!! Form::text('aura20[work][description]', null, ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Win</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="control-label">Win URL</label>
                                                        {!! Form::text('aura20[work][win][url]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Title</label>
                                                        {!! Form::text('aura20[work][win][title]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Version</label>
                                                        {!! Form::text('aura20[work][win][version]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Date</label>
                                                        {!! Form::text('aura20[work][win][date]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Win Log</label>
                                                        {!! Form::textarea('aura20[work][win][log]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Mac</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="control-label">Mac URL</label>
                                                        {!! Form::text('aura20[work][mac][url]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Title</label>
                                                        {!! Form::text('aura20[work][mac][title]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Version</label>
                                                        {!! Form::text('aura20[work][mac][version]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Date</label>
                                                        {!! Form::text('aura20[work][mac][date]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mac Log</label>
                                                        {!! Form::textarea('aura20[work][mac][log]', null, ['class' => 'form-control']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Firmware</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label class="control-label">Image URL</label>
                                            {!! Form::text('aura20[firmware][image_url]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                            {!! Form::text('aura20[firmware][description]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">URL</label>
                                            {!! Form::text('aura20[firmware][url]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Title</label>
                                            {!! Form::text('aura20[firmware][title]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Version</label>
                                            {!! Form::text('aura20[firmware][version]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Date</label>
                                            {!! Form::text('aura20[firmware][date]', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Log</label>
                                            {!! Form::textarea('aura20[firmware][log]', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="buttons text-right">
                            <button class="btn btn-primary" type="submit">保存</button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection