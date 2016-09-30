@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="title text-lighter">
      配置
        <a href="{{ url('/admin/posts') }}" class="btn btn-default btn-xs"><i class="fa fa-mail-reply"></i></a>
        </h1>
        <hr>
        <div class="well">
            <form>
                <div class="form-group">
                    <label class="control-label">SITE_TITLE(站点标题)</label>
                    <input class="form-control" type="text" required></input>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label class="control-label">SITE_KEY(站点关键字)</label>
                    <input class="form-control" type="text" required></input>
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label class="control-label">SITE_DESCRIPTION(站点关键字)</label>
                    <input class="form-control" type="text" required></input>
                    <span class="help-block"></span>
                </div>
            </form>
            <br>
            <div class="buttons text-right">
              <a class="btn btn-info" href="/admin/posts">保存</a>
            </div>
        </div>
    </div>
</div>
@endsection
