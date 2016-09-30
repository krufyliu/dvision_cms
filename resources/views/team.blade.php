@extends('layouts.app')

@section('content')
    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/image/tem01.jpg" class="img-responsive" width="100%" alt="团队">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row margin-middle">
            <div class="col-md-12 text-center">
                <p class="h1 text-lighter">
                    关于我们
                </p>
                <br>
                <p>
                    DKvision致力于打造下一代虚拟现实的完整解决方案。
                </p>
                <p>
                    公司采用最先进的计算机视觉技术，将软件、硬件以及工业设计进行高效整合，为用户打造电影级别的虚拟现实体验。
                </p>
                <p>
                    DKvision的全景拍摄设备可以实时的捕捉和重建三维场景，通过高效的视频传输技术，将虚拟现实内容实时的传输提供给用户，
                </p>
                <p>
                    用户使用DKVision拥有独立知识产权的VR眼镜和VR播放器，即可享受到无与伦比的沉浸式娱乐体验。
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row margin-middle">
            <div class="col-md-12 text-center">
                <p class="h1 text-lighter">
                    主创人员
                </p>
            </div>
        </div>
    </div>
    <div class="row team margin-middle">
        <div class="col-xs-12 col-sm-6 col-md-4 team-item">
            <img src="/image/tem03.jpg" class="img-responsive" alt="Responsive image"/>
            <div>
                <p class="visible-xs visible-sm">
                    <span class="h4 text-center">张聪 CEO</span>
                </p>
                <p class="hidden-xs hidden-sm">
                    <span class="h4 text-center">张聪 CEO</span><br>
              主要研究方向为深度学习、物体检测、智能监控系统、大数据分析、集群行为分析。主要项目经历包括，ImageNet大数据物体检测竞赛，该竞赛是全球最具挑战的物体检测及图片分类竞赛，所参与的CUHK DEEPID团队获得图片与视频检测任务最好的结果；跨场景集群人数及密度估计，首次提出了集群深度模型，解决了跨场景集群人数估计，模型产品已成熟，并在公开数据库UCSD Dataset取得最好的结果。
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 team-item">
            <img src="/image/tem02.jpg" class="img-responsive" alt="Responsive image"/>
            <div>
                <p class="visible-xs visible-sm">
                    <span class="h4 text-center">韩庆龙 联合创始人</span>
                </p>
                <p class="hidden-xs hidden-sm">
                    <span class="h4 text-center">韩庆龙 联合创始人</span><br>
              主要研究方向为视频编码和图像处理。在视频编码领域，提出了多项能够有效提升H.264和H.265编码器工作效率的技术，并且在该领域发表多篇重要学术论文。同时，积极参与了H.265国际视频编码标准以及AVS2中国视频编码标准的建立工作。在图像处理领域，提出了多种能够有效恢复和提升图像质量、去除多种图像噪声的算法。
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 team-item">
            <img src="/image/tem04.jpg" class="img-responsive" alt="Responsive image"/>
            <div>
                <p class="visible-xs visible-sm">
                    <span class="h4 text-center">黄之燊 联合创始人</span>
                </p>
                <p class="hidden-xs hidden-sm">
                    <span class="h4 text-center">黄之燊 联合创始人</span><br>
              主要研究方向包括深度图像解析、图形变换及分割算法、体育视频分析及增强。在计算机视觉方向有丰富的工程开发经验，其中包括单摄像头识别快速移动手部动作，应用在云南某导演的显示视频互动中；基于手势及道具的虚拟展示系统，该系统应用于沈阳某博物馆；所开发的虚拟试衣系统，已经形成成熟产品，每一虚拟试衣app。
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 team-item">
            <img src="/image/tem05.jpg" class="img-responsive" alt="Responsive image"/>
            <div>
                <p class="visible-xs visible-sm">
                    <span class="h4 text-center">辛福社 技术总监</span>
                </p>
                <p class="hidden-xs hidden-sm">
                    <span class="h4 text-center">辛福社 技术总监</span><br>
              10年的软硬件开发经验，先后就职于富士康、百度、腾讯、大疆等高科技公司，从事软件及嵌入式开发等工作。对VR、3D交互有超过3年的研发经验，有独立开发可交互的VR播放器产品的经验。熟悉android等操作系统、unity3D、openGL和多媒体相关应用的开发工作。
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 team-item">
            <img src="/image/tem06.jpg" class="img-responsive" alt="Responsive image"/>
            <div>
                <p class="visible-xs visible-sm">
                    <span class="h4 text-center">孙燕青 首席艺术顾问</span>
                </p>
                <p class="hidden-xs hidden-sm">
                    <span class="h4 text-center">孙燕青 首席艺术顾问</span><br>
              著名摄影师，北京电影学院摄影系，毕业作品《火锅》香港大学生电影节评审会奖。代表作品有电影：《芳兰羽》，《惊蛰》，《大有前途》等：西班牙电影节开幕电影，《天边的云》，《终极游戏》，《囧探佳人》等；电视剧： 《香木虎》；广告、MV、企业宣传片：《贵州茅台》，《东部华侨城》 ，《万科》，《腾讯》等。
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 team-item">
            <img src="/image/tem07.jpg" class="img-responsive" alt="Responsive image"/>
            <div>
                <p class="visible-xs visible-sm">
                    <span class="h4 text-center">曾作为 产品总监</span>
                </p>
                <p class="hidden-xs hidden-sm">
                    <span class="h4 text-center">曾作为 产品总监</span><br>
              前火乐科技研发总监，多年硬件产品研发、生产一线经验，拥有丰富的供应链资源。成功研发过六款畅销硬件产品，其中主要有坚果G1智能家庭影院，坚果P1便携智能投影。善于领导产品研发团队从提高用户体验的角度创新突破，每款产品都申请了多项创新专利。
                </p>
            </div>
        </div>
    </div>
    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/image/tem08.jpg" class="img-responsive" width="100%" alt="协作">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid team-timeline">
        <div class="row margin-middle">
            <div class="col-md-12 text-center">
                <p class="h1 text-lighter">
                    发展历程
                </p>
            </div>
        </div>
        <div class="row margin-middle">
            <div class="col-md-4 col-md-offset-1 text-right hidden-xs hidden-sm ">
                <p class="h3" style="margin-top: 0px;">
                    2015
                </p>
            </div>
            <div class="col-md-4 col-md-offset-1 text-left visible-xs visible-sm">
                <p class="h3" style="margin-top: 0px;">
                    2015
                </p>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><span class="h4">12</span>&nbsp;&nbsp;&nbsp;&nbsp;公司成立</li>
                </ul>
            </div>
        </div>
        <div class="row margin-middle">
            <div class="col-md-4 col-md-offset-1 text-right hidden-xs hidden-sm ">
                <p class="h3" style="margin-top: 0px;">
                    2016
                </p>
            </div>
            <div class="col-md-4 col-md-offset-1 text-left visible-xs visible-sm">
                <p class="h3" style="margin-top: 0px;">
                    2016
                </p>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><span class="h4">02</span>&nbsp;&nbsp;&nbsp;&nbsp;全球首部VR功夫电影《寅虎》</li>
                    <li><span class="h4">03</span>&nbsp;&nbsp;&nbsp;&nbsp;黄晓明第一支VR宣传片《新万水千山总是情》</li>
                    <li><span class="h4">04</span>&nbsp;&nbsp;&nbsp;&nbsp;张楚VR MV 《晃动一下》</li>
                    <li><span class="h4">05</span>&nbsp;&nbsp;&nbsp;&nbsp;吴奇隆工作室《色戒》</li>
                    <li><span class="h4">06</span>&nbsp;&nbsp;&nbsp;&nbsp;地产宣传片 《天峦湖》《万科云城》</li>
                    <li><span class="h4">07</span>&nbsp;&nbsp;&nbsp;&nbsp;华为校招影片</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
    $(function() {
        if(document.documentElement.clientWidth > 768) {
            $('.team > .team-item ').each(function() {
                $(this).hoverdir({
                    hoverDelay: 75
                });
            });
        }
    });
    </script>
@endsection