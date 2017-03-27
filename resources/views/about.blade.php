@extends('layouts.app')

@section('content')

    <div class="main about">
        <div class="abt section-01">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">ABOUT US</span>
                        <p class="txt">量子视觉(DKVISION)致力于打造下一代虚拟现实的完整解决方案。<br>

公司基于最先进的计算机视觉技术以及最专业硬件开发团队，将软件、硬件以及工业设计进行高效整合，为用户打造电影级别的虚拟现实体验。<br>

DKVISION AURA 全景拍摄设备是目前唯一可量产8K 3D VR相机，可以实时的捕捉和重建三维场景，通过最先进的公开SaaS云拼接平台，低成本、高效率帮助内容生产者<br>生成最高质量VR视频。用户使用DKVISION VR播放器及SDK服务，可集成至任意平台，通过视频传输技术，<br>将虚拟现实内容实时的传输提供给用户，即可享受到无与伦比的沉浸式娱乐体验。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="abt section-02">
            <div class="container">
                <div class="content">
                    <img src="img/about_sec02_01.jpg" width="1194" alt="about_sec02_01" class="about_sec02_01" draggable="false">
                    <hr>
                    <div class="text_panel">
                        <span class="title">主创人员</span>
                        <p class="txt">CREATIVE STAFF</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="abt section-03">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <ul class="figs">
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/about_sec03_01.jpg" alt="about_sec03_01" width="398"  draggable="false">
                                </div>
                                <div class="intro">
                                  <span class="title">张聪 CEO</span>
                                  <p class="txt">

              主要研究方向为深度学习、物体检测、智能监控系统、大数据分析、集群行为分析。主要项目经历包括，ImageNet大数据物体检测竞赛，该竞赛是全球最具挑战的物体检测及图片分类竞赛，所参与的CUHK DEEPID团队获得图片与视频检测任务最好的结果；跨场景集群人数及密度估计，首次提出了集群深度模型，解决了跨场景集群人数估计，模型产品已成熟，并在公开数据库UCSD Dataset取得最好的结果。
                                  </p>
                                </div>
                            </li>
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/about_sec03_02.jpg" alt="about_sec03_01" width="398"  draggable="false">
                                </div>
                                <div class="intro">
                                  <span class="title">韩庆龙 联合创始人</span>
                                  <p class="txt">
              主要研究方向为视频编码和图像处理。在视频编码领域，提出了多项能够有效提升H.264和H.265编码器工作效率的技术，并且在该领域发表多篇重要学术论文。同时，积极参与了H.265国际视频编码标准以及AVS2中国视频编码标准的建立工作。在图像处理领域，提出了多种能够有效恢复和提升图像质量、去除多种图像噪声的算法。
                                  </p>
                                </div>
                            </li>
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/about_sec03_03.jpg" alt="about_sec03_03" width="398"  draggable="false">
                                </div>
                                <div class="intro">
                                  <span class="title">黄之燊 联合创始人</span>
                                  <p class="txt">
              主要研究方向包括深度图像解析、图形变换及分割算法、体育视频分析及增强。在计算机视觉方向有丰富的工程开发经验，其中包括单摄像头识别快速移动手部动作，应用在云南某导演的显示视频互动中；基于手势及道具的虚拟展示系统，该系统应用于沈阳某博物馆；所开发的虚拟试衣系统，已经形成成熟产品，每一虚拟试衣app。
                                  </p>
                                </div>
                            </li>
                        </ul>
                        <ul class="figs">
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/about_sec03_04.jpg" alt="about_sec03_04" width="398"  draggable="false">
                                </div>
                                <div class="intro">
                                  <span class="title">辛福社 技术总监</span>
                                  <p class="txt">
              10年的软硬件开发经验，先后就职于富士康、百度、腾讯、大疆等高科技公司，从事软件及嵌入式开发等工作。对VR、3D交互有超过3年的研发经验，有独立开发可交互的VR播放器产品的经验。熟悉android等操作系统、unity3D、openGL和多媒体相关应用的开发工作。
                                  </p>
                                </div>
                            </li>
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/about_sec03_05.jpg" alt="about_sec03_05" width="398"  draggable="false">
                                </div>
                                <div class="intro">
                                  <span class="title">孙燕青 首席艺术顾问</span>
                                  <p class="txt">
              著名摄影师，北京电影学院摄影系，毕业作品《火锅》香港大学生电影节评审会奖。代表作品有电影：《芳兰羽》，《惊蛰》，《大有前途》等：西班牙电影节开幕电影，《天边的云》，《终极游戏》，《囧探佳人》等；电视剧： 《香木虎》；广告、MV、企业宣传片：《贵州茅台》，《东部华侨城》 ，《万科》，《腾讯》等。
                                  </p>
                                </div>
                            </li>
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/about_sec03_06.jpg" alt="about_sec03_06" width="398"  draggable="false">
                                </div>
                                <div class="intro">
                                  <span class="title">曾作为 产品总监</span>
                                  <p class="txt">

              前火乐科技研发总监，多年硬件产品研发、生产一线经验，拥有丰富的供应链资源。成功研发过六款畅销硬件产品，其中主要有坚果G1智能家庭影院，坚果P1便携智能投影。善于领导产品研发团队从提高用户体验的角度创新突破，每款产品都申请了多项创新专利。
                                  </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="abt section-04">
            <div class="container">
                <div class="content">
                    <img src="img/about_sec04_01.jpg" width="580" alt="about_sec04_01" class="about_sec04_01" draggable="false">
                    <div class="text_panel">
                        <span class="title">公司地址</span>
                        <p class="txt">COMPANY ADRESS</p>
                    </div>
                    <div class="text_panel2">
                        <p class="tag">ADRESS</p>
                        <p class="txt"><a href="http://j.map.baidu.com/AhgTH" target="_blank" rel="nofollow">深圳市南山区铜鼓路39号大冲国际中心5号楼902</a><br><br></p>
                        <p class="tag">BUSINESS HOURS</p>
                        <p class="txt">周一至周五 09:00 ~ 18:00<br><br></p>
                        <p class="tag">TEL</p>
                        <p class="txt"><a href="tel:0755-26657982" target="_blank">0755-26657982</a><br><br></p>
                        <p class="tag">E-MAIL</p>
                        <p class="txt"><a href="mailto:marketing@visiondk.com" target="_blank">marketing@visiondk.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection