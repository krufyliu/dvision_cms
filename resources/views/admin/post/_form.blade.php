@if (isset($post))
    {!! Form::model($post, ['url' => $post->path(), 'method' => 'patch']) !!}
@else
    {!! Form::open(['url' => 'admin/posts']) !!}
@endif
<div class="form-group {{ has_error_class($errors, 'title') }}">
    {!! Form::label('title', '标题', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {{ error_block($errors, 'title') }}
</div>

<div class="form-group {{ has_error_class($errors, 'cover_image') }}">
    {!! Form::label('cover_image', '封面图片(尺寸必须为 360*280)', ['class' => 'control-label']) !!}
    <label class="control-label"></label>
    <div id="fileuploader">Upload</div>
    {!! Form::hidden('cover_image', null, ['class' => 'form-control']) !!}
    {{ error_block($errors, 'cover_image') }}
</div>

<div class="form-group {{ has_error_class($errors, 'link') }}">
    {!! Form::label('link', '链接地址', ['class' => 'control-label']) !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
    {{ error_block($errors, 'link') }}
</div>
{{-- <div class="form-group {{ has_error_class($errors, 'content') }}">
    {!! Form::label('content', '内容', ['class' => 'control-label']) !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'summernote']) !!}
    {{ error_block($errors, 'content') }}
</div> --}}

<div class="buttons text-right">
    <a class="btn btn-default" href="/admin/posts">取消</a>
    @if (isset($post))
        <a class="btn btn-danger"
           onclick="event.preventDefault();
                    document.getElementById('delete-form').submit();">删除</a>
        <button class="btn btn-primary" type="submit">保存</button>
    @else
        <button class="btn btn-primary" type="submit">创建</button>
    @endif
</div>

{!! Form::close() !!}
@if(isset($post))
<form id="delete-form" action="{{ $post->path() }}" method="POST" style="display: none;">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
</form>
@endif