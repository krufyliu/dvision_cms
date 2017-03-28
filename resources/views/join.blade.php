@extends('layouts.app')

@section('content')
    <div class="main join">
        <div class="jon section-01">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">WE NEED YOU</span>
                        <p class="txt">人才招聘</p>
                        <p class="txt txt2">我们是一个，青春向上，欢乐的团队，各种坚持以互联网的思维来创新发展， <br>用眼看世界、用芯走未来，为智慧城市、智慧生活贡献力量。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="jon section-02">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">加入量子视觉吧！</span>
                        <p class="txt">JOIN IN DKVISION</p>
                    </div>
                    <img src="img/join_sec02_01.png" width="1100" alt="join_sec02_01" class="join_sec02_01" draggable="false">
                </div>
            </div>
        </div>
        <div class="jon section-03">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">我们需要这些人才</span>
                        <p class="txt">JOB POSITION</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="jon section-04">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <ul class="figs">
                            @foreach($careerjobs as $careerjob)
                                <li class="fig">
                                    <div class="icons" style="background-image: url({{ '/storage/' . $careerjob->cover_image }})">
                                    </div>
                                    <div class="intro">
                                          <span class="title">{{ $careerjob->title }}</span>
                                          <p class="txt">部门:{{ $careerjob->department }}&nbsp;&nbsp;&nbsp;地点:{{ $careerjob->location }}</p>
                                          <a class="link" href="#jobs_{{ $careerjob->id }}"  data-toggle="modal">查看职位详情</a>
                                    </div>
                                </li>
                            @endforeach
                                <li class="fig">
                                    <div class="icons" style="background-image: url({{ '/img/join_sec04_06.jpg' }})">
                                    </div>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mod">
        @foreach($careerjobs as $careerjob)
              <div class="modal fade" id="jobs_{{ $careerjob->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                          <div class="modal-header" style="border-bottom: 0px;">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          </div>
                          <div class="modal-body">
                              <p class="h3 text-center">
                                  {{ $careerjob->title }}
                              </p>
                              <p class="col-md-6 margin-middle" style="padding: 0px">
                                  部门: {{ $careerjob->department }}
                              </p>
                              <p class="col-md-6 margin-middle" style="padding: 0px;">
                                  工作地点: {{ $careerjob->location }}
                              </p>

                              {!! $careerjob->description !!}
                          </div>
                          <div class="modal-footer" style="border-top: 0px;">
                              <a href="mailto:hr@visiondk.com" class="btn btn-primary">发送简历</a>
                              <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                          </div>
                      </div>
                  </div>
              </div>
        @endforeach
    </div>
@endsection