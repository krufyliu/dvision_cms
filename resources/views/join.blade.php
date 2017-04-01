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
                    <div class="text_panel2">
                        <ul class="figs">
                            <li class="fig">
                                <span class="icon">01/</span>
                                <span class="title">这是一个<br>实现自我的公司</span>
                                <div class="ctt">
                                    <div class="divider"></div>
                                    <p class="txt">量子视觉是一家积极向上的创业型公司，创业的氛围让每个人都积极创新，为做出美好的事情而努力。这是一个每个人都可以找到实现个人价值的美好空间。</p>
                                </div>
                            </li>
                            <li class="fig">
                                <span class="icon">02/</span>
                                <span class="title">一起创造<br>让人激动的产品</span>
                                <div class="ctt">
                                    <div class="divider"></div>
                                    <p class="txt">量子视觉坚持创新，利用前沿的科技眼界，让每个人都能享受科技的乐趣。让我们一起，把量子视觉变成VR一体化解决方案的最好品牌。</p>
                                </div>
                            </li>
                            <li class="fig right">
                                <span class="icon">03/</span>
                                <span class="title">工作伙伴<br>都是一流人才</span>
                                <div class="ctt">
                                    <div class="divider"></div>
                                    <p class="txt">量子视觉自诞生起初已经有着一流的科技人才基因，初创人员均是科技领域博士，创业团队成员是来自各大国际企业的顶尖人才，加入量子视觉，与一流人才工作。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    {{-- <img src="img/join_sec02_01.jpg" width="1100" alt="join_sec02_01" class="join_sec02_01" draggable="false"> --}}
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
                            @if(count($careerjobs)%5!=0)
                                <li class="fig">
                                    <div class="icons" style="background-image: url({{ '/img/join_sec04_06.jpg' }})">
                                    </div>
                                </li>
                            @endif
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