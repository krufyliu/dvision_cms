@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="title text-lighter">
        创建视频
        <a href="{{ url('/admin/videos') }}" class="btn btn-default btn-xs"><i class="fa fa-mail-reply"></i></a>
        </h1>
        <hr>
        <div class="well">
            <form method="post" action="/admin/videos">
                {{ csrf_field() }}
                <div class="form-group {{ has_error_class($errors, 'title') }}">
                    <label class="control-label">标题</label>
                    <input class="form-control" type="text" name="title" value="{{ old('title') }}" required></input>
                    {{ error_block($errors, 'title') }}
                </div>
                <div class="form-group">
                    <labtel class="control-label">分类</label>
                    <div class="row">
                        <div class="col-md-5">
                            <select name="category_id" class="form-control {{ has_error_class($errors, 'category_id') }}" id="categorySelect">
                                <option value="0">请选择</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id === old('category_id') ? 'selected' : '' }}>
                                    {{ $category->title }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <span class="btn btn-primary" data-toggle="modal" data-target="#categoryDialog">新增分类</span>
                        </div>
                    </div>
                    {{ error_block($errors, 'category_id') }}
                </div>
                <div class="form-group {{ has_error_class($errors, 'cover_image') }}">
                    <label class="control-label">视频封面(尺寸必须为 1024*480)</label>
                    <div id="fileuploader">Upload</div>
                    <input type="hidden" name="cover_image" value="{{ old('cover_image') }}"required>
                    {{ error_block($errors, 'cover_image') }}
                </div>
                <div class="form-group {{ has_error_class($errors, 'url.audio') }}">
                    <label class="control-label">音频地址(仅支持m4a, 地址勿加后缀)</label>
                    <input name="url[audio]" value="{{ old('url.audio') }}" class="form-control" type="text" required></inputnam>
                    {{ error_block($errors, 'url.audio') }}
                </div>
                <div class="form-group {{ has_error_class($errors, 'url.video_720p') }}">
                    <label class="control-label">720P视频地址(仅支持mp4, 地址勿加后缀)</label>
                    <input name="url[video_720p]" value="{{ old('url.video_720p') }}" class="form-control" type="text" required></input>
                    {{ error_block($errors, 'url.video_720p') }}
                </div>
                <div class="form-group {{ has_error_class($errors, 'url.video_1080p') }}">
                    <label class="control-label">1080P视频地址(仅支持mp4, 地址勿加后缀)</label>
                    <input name="url[video_1080p]" value="{{ old('url.video_1080p') }}" class="form-control" type="text" required></input>
                    {{ error_block($errors, 'url.video_1080p') }}
                </div>
                <div class="form-group {{ old('description') }}">
                    <label class="control-label">内容</label>
                    <textarea class="form-control" name="description" value="{{ old('description') }}" id="summernote"></textarea>
                    <span class="help-block"></span>
                </div>
                <div class="buttons text-right">
                    <a class="btn btn-default" href="/admin/videos">取消</a>
                    <button class="btn btn-primary" type="submit">创建</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="categoryDialog" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">新增视频分类</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/admin/video_categories" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">分类名:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="title">
                            <span class="help-block"></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="categoryAdd">创建</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script type="text/javascript" src="/vendor/summernote/summernote.min.js"></script>
    <script type="text/javascript" src="/vendor/jquery-upload-file/jquery.form.min.js"></script>
    <script type="text/javascript" src="/vendor/jquery-upload-file/jquery.uploadfile.min.js"></script>
    <script type="text/javascript">
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
            maxFileSize: 2*1024*1024,
            multiple: false,
            maxFileCount: 1,
            acceptFiles: "image/*",
            showDelete: true,
            showPreview: true,
            @if (!empty(old('cover_image')))
            onLoad: function(obj) {
                console.log(obj);
                {{--obj.createProgress("{{ old('cover_image') }}", "{{ '/storage/'.old('cover_image') }}");--}}
            },
            @endif
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

        $('#categoryAdd').on('click', function() {
            var $form = $('#categoryDialog form');
            $.ajax({
                url: $form.attr('action'),
                method: $form.attr('method'),
                dataType: 'json',
                data: $form.serialize(),
                success: function(data) {
                    $form.resetForm();
                    $form.find('input[name=title]').parent().parent().removeClass('has-error');
                    $form.find('input[name=title]+span').text('');
                    $('#categoryDialog').modal('hide');
                    $('#categorySelect').append("<option value='" + data.category.id + "'>" + data.category.title + "</option>");
                },
                error: function(jxqXHR, textStatus, errorThrown) {
                    if (jxqXHR.status === 422) {
                        var result = $.parseJSON(jxqXHR.responseText);
                        $form.find('input[name=title]').parent().parent().addClass('has-error');
                        $form.find('input[name=title]+span').text(result.title[0]);
                    } else {
                        alert(errorThrown);
                    }
                }
            });
        });
    </script>
@endsection