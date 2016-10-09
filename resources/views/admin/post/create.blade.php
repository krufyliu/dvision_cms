@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="title text-lighter">
      创建文章
        <a href="{{ url('/admin/posts') }}" class="btn btn-default btn-xs"><i class="fa fa-mail-reply"></i></a>
        </h1>
        <hr>
        <div class="well">
            <form role="form" method="post" action="{{ url('/admin/posts') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label class="control-label">标题</label>
                    <input class="form-control" type="text" name="title" required></input>
                    @if ($errors->has('title'))
                        <span class="help-block">
                            {{ $errors->first('title') }}
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('cover_image') ? ' has-error' : '' }}">
                    <label class="control-label">封面图片(尺寸必须为 360*280)</label>
                    <div id="fileuploader">Upload</div>
                    <input type="hidden" name="cover_image" required>
                    @if ($errors->has('cover_image'))
                        <span class="help-block">
                            {{ $errors->first('cover_image') }}
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                    <label class="control-label">内容</label>
                    <textarea class="form-control" name="content" id="summernote"></textarea>
                    @if ($errors->has('content'))
                        <span class="help-block">
                            {{ $errors->first('content') }}
                        </span>
                    @endif
                </div>
                <br>
                <div class="buttons text-right">
                    <a class="btn btn-default" href="{{ url('/admin/posts') }}">取消</a>
                    <button class="btn btn-primary" type="submit">创建</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript" src="/vendor/summernote/summernote.min.js"></script>
    <script type="text/javascript" src="/vendor/jquery-upload-file/jquery.form.min.js"></script>
    <script type="text/javascript" src="/vendor/jquery-upload-file/jquery.uploadfile.min.js"></script>
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

        $("#fileuploader").uploadFile({
            url: "/admin/upload/file",
            fileName: "myfile",
            multiple: false,
            maxFileCount: 1,
            acceptFiles: "image/*",
            showDelete: true,
            deleteCallback: function (data, pd) {
                var data = JSON.parse(data);
                for (var i = 0; i < data.length; i++) {
                    $.post("/admin/upload/delete", {op: "delete",name: data[i]});
                }
                $("input[name='cover_image']").val('');
                pd.statusbar.hide(); //You choice.

            },
            onSuccess:function(files,data,xhr,pd) {
                $("input[name='cover_image']").val(JSON.parse(data)[0])
            },
        });
    })
    </script>
@endsection