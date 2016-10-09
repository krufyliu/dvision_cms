@if (isset($career_job))
    {!! Form::model($career_job, ['url' => $career_job->path(), 'method' => 'patch']) !!}
@else
    {!! Form::open(['url' => 'admin/career_jobs']) !!}
@endif
<div class="form-group {{ has_error_class($errors, 'title') }}">
    {!! Form::label('title', '职位', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {{ error_block($errors, 'title') }}
</div>

<div class="form-group {{ has_error_class($errors, 'department') }}">
    {!! Form::label('department', '部门', ['class' => 'control-label']) !!}
    {!! Form::text('department', null, ['class' => 'form-control']) !!}
    {{ error_block($errors, 'department') }}
</div>

<div class="form-group {{ has_error_class($errors, 'location') }}">
    {!! Form::label('location', '地点', ['class' => 'control-label']) !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
    {{ error_block($errors, 'location') }}
</div>

<div class="form-group {{ has_error_class($errors, 'description') }}">
    {!! Form::label('description', '内容', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'summernote']) !!}
    {{ error_block($errors, 'description') }}
</div>

<div class="buttons text-right">
    <a class="btn btn-default" href="/admin/career_jobs">取消</a>
    @if (isset($career_job))
        <a class="btn btn-danger"
           onclick="event.preventDefault();
                    document.getElementById('delete-form').submit();">删除</a>
        <button class="btn btn-primary" type="submit">保存</button>
    @else
        <button class="btn btn-primary" type="submit">创建</button>
    @endif
</div>

{!! Form::close() !!}
@if(isset($career_job))
    <form id="delete-form" action="{{ $career_job->path() }}" method="career_job" style="display: none;">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>
@endif