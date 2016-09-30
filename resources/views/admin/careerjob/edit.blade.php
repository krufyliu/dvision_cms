@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h1 class="title text-lighter">
          更新职位
            <a href="{{ url('/admin/career_jobs') }}" class="btn btn-default btn-xs"><i class="fa fa-mail-reply"></i></a>
            </h1>
            <hr>
            <div class="well">
                <form role="form" method="post" action="{{ $careerjob->path() }}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label class="control-label">标题</label>
                        <input class="form-control" type="text" name="title" value="{{ $careerjob->title }}" required></input>
                        @if ($errors->has('title'))
                            <span class="help-block">
                                {{ $errors->first('title') }}
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                        <label class="control-label">部门</label>
                        <input class="form-control" type="text" name="department" value="{{ $careerjob->department }}" required></input>
                        @if ($errors->has('department'))
                            <span class="help-block">
                                {{ $errors->first('department') }}
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                        <label class="control-label">地点</label>
                        <input class="form-control" type="text" name="location" value="{{ $careerjob->location }}" required></input>
                        @if ($errors->has('location'))
                            <span class="help-block">
                                {{ $errors->first('location') }}
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label class="control-label">内容</label>
                        <textarea class="form-control" name="description" id="summernote">{{ $careerjob->description }}</textarea>
                        @if ($errors->has('description'))
                            <span class="help-block">
                                {{ $errors->first('description') }}
                            </span>
                        @endif
                    </div>
                    <br>
                    <div class="buttons text-right">
                      <a class="btn btn-default" href="{{ url('/admin/career_jobs') }}">取消</a>
                      <a class="btn btn-danger"
                         href="{{ url('/admin/career_jobs') }}"
                         onclick="event.preventDefault();
                                     document.getElementById('delete-form').submit();">删除</a>
                      <button class="btn btn-primary" type="submit">保存</button>
                    </div>
                </form>

                <form id="delete-form" action="{{ $careerjob->path() }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="/vendor/summernote/summernote.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#summernote').summernote({
            height: '300px',
            callbacks: {
                onImageUpload: function(files) {
                    var $summernote = $(this);
                    sendFile(files[0],$summernote);
                }
            }
        });
        function sendFile(file, $summernote) {
            data = new FormData();
            data.append("file", file);
            $.ajax({
                data: data,
                type: "POST",
                url: "/admin/upload/image",
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    $summernote.summernote('insertImage', url);
                }
            });
        }
    });
    </script>
@endsection