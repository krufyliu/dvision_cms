@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 class="title text-lighter">
      职位
        <a href="{{ url('/admin/career_jobs/create') }}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i></a>
        </h1>
        <hr>
        <div class="well">
            <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>标题</th>
                                        <th>部门</th>
                                        <th>工作地点</th>
                                        <th>创建时间</th>
                                        <th>更新时间</th>
                                        <th>创建人</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($career_jobs as $career_job)
                                        <tr class="{{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}" data-href="{{ $career_job->path() . '/edit' }}">
                                            <td>{{ $career_job->title }}</td>
                                            <td>{{ $career_job->department }}</td>
                                            <td>{{ $career_job->location }}</td>
                                            <td>{{ $career_job->created_at }}</td>
                                            <td>{{ $career_job->updated_at }}</td>
                                            <td>{{ $career_job->creator->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">
                            Showing {{ ($career_jobs->currentPage()-1) * $career_jobs->perPage() + 1 }} to {{ ($career_jobs->currentPage()-1) * $career_jobs->perPage() + $career_jobs->count() }} of {{ $career_jobs->total() }} entries
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                            {{ $career_jobs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection