@extends('layouts.app')

@section('content')
    <div class="main dkauramini">
        <div class="auramini section-01">
            <div class="container">
                <div class="content">
                    <img src="img/auramini_sec01_01.jpg" width="1024" alt="auramini_sec01_01" class="auramini_sec01_01" draggable="false">
                    <div class="text_panel">
                        <span class="title">AURA mini</span>
                        <p class="txt">不仅专业, 更是效率。</p>
                        <!--a href="#" class="link">宣传视频</a-->
                    </div>
                </div>
            </div>
        </div>
        <div class="auramini section-02">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">匠心设计, 为内容创作而生。</span>
                        <ul class="figs">
                            <li class="fig">
                                <span class="fig_title">
                                镜头
                                </span>
                                <p class="fig_value">
                                 8目F2.0全玻镜头
                                </p>
                            </li>
                            <li class="fig">
                                <span class="fig_title">
                                续航
                                </span>
                                <p class="fig_value">
                                6300mAh<br>可拆卸电池
                                </p>
                            </li>
                            <li class="fig">
                                <span class="fig_title">
                                音频
                                </span>
                                <p class="fig_value">
                                四路内置麦克风<br>3.5mm外接音频口
                                </p>
                            </li>
                            <li class="fig">
                                <span class="fig_title">
                                存储
                                </span>
                                <p class="fig_value">
                                 最大支持2TB储存<br>一键导出
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="auramini section-03">
            <div class="container">
                <div class="content">
                    <img src="img/auramini_sec03_01.jpg" width="1440" alt="auramini_sec03_01" class="auramini_sec03_01" draggable="false">
                    <div class="text_panel">
                        <span class="title">&nbsp;&nbsp;8目镜头，效率与画质的更优结合。</span>
                        <p class="txt">使用更多的鱼眼中心无畸变画面，得到色彩还原度更搞解析度更好的360°*360° 4K/6K/8K 3D画质<br>同时将镜头数目控制在8目，降低用户素材量，提升制作效率</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="auramini section-04">
            <div class="container">
                <div class="content">
                    <img src="img/auramini_sec04_01.jpg" width="1194" alt="auramini_sec04_01" class="auramini_sec04_01" draggable="false">
                    <div class="text_panel">
                        <span class="title">基于深度学习的光流算法 </span>
                        <p class="txt">无缝拼接的基础上，对于运动物体拼接优化更好</p>
                    </div>
                    <div class="text_panel2">
                        <span class="title">DK FlowNet 2.0 <sup style="color:#5ac8fa;">[1]</sup> + Aura Dataset </span>
                    </div>
                    <div class="text_panel3">
                        <span class="title">Calculation Based on Layers</span>
                    </div>
                    <div class="text_panel4">
                        <p class="txt">采用准确度最高光流方案，并针对AURA mini镜头<br>方案构建数据集进行据集模型优化</p>
                    </div>
                    <div class="text_panel5">
                        <p class="txt">运动物体分离进行区域光流计算，减少光流算法带来的变形副作用</p>
                    </div>
                    <div class="text_panel6">
                        <p class="txt"><sup style="color:#5ac8fa;">[1]</sup> Ilg, Eddy, et al. "Flownet 2.0: Evolution of optical flow estimation with deep networks." arXiv preprint arXiv:1612.01925 (2016).
</p>
                    </div>
                </div>
            </div>
        </div>
        {{--  <div class="aura section-05">
            <div class="container">
                <div class="content">
                    <img src="img/aura_sec05_01.png" width="960" alt="aura_sec05_01" class="aura_sec05_01" draggable="false">
                    <img src="img/aura_sec05_02.png" width="660" alt="aura_sec05_02" class="aura_sec05_02">
                    <div class="text_panel" draggable="false">
                        <span class="title">全方位录音，<br>完美呈现当下环境。</span>
                        <div class="divider"></div>
                        <p class="txt">AURA采用球形环绕立体声采集技术，<br>360x360度全向采集环境音效，不放过任何<br>声响，细腻采集，让音频更沉浸，配合全景<br>画面如同身临其境。</p>
                    </div>
                    <div class="text_panel2">
                        <ul class="figs">
                            <li class="fig">
                                <span class="fig_title">
                    采集类型
                    </span>
                                <p class="fig_value">
                                    环绕立体采集
                                </p>
                            </li>
                            <li class="fig">
                                <span class="fig_title">
                    录音范围
                    </span>
                                <p class="fig_value">
                                    360x360度
                                </p>
                            </li>
                        </ul>
                        <ul class="figs">
                            <li class="fig">
                                <span class="fig_title">
                    录制时间
                    </span>
                                <p class="fig_value">
                                    1小时
                                </p>
                            </li>
                            <li class="fig">
                                <span class="fig_title">
                    音频传感类型
                    </span>
                                <p class="fig_value">
                                    全向
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="aura section-06">
            <div class="container">
                <div class="content">
                    <img src="img/aura_sec06_01.png" width="800" alt="aura_sec06_01" class="aura_sec06_01" draggable="false">
                    <img src="img/aura_sec06_02.png" width="800" alt="aura_sec06_02" class="aura_sec06_02" draggable="false">
                    <div class="text_panel">
                        <span class="title">软硬结合，<br>让创作更为流畅。</span>
                        <div class="divider"></div>
                        <p class="txt">量子视觉自主研发的 AURA WORK 、AURA <br>STUDIO 软件，支持实时监看各个镜头画面，<br>远程设置单个、或多个镜头参数，一键快速素材<br>导出、拼接、剪辑，并通过本地或者 SaaS 服务器<br>进行高品质 3D 拼接和立体深层渲染。</p>
                    </div>
                    <div class="text_panel2">
                        <ul class="figs">
                            <li class="fig">
                                <span class="fig_title">
                    程序支持
                    </span>
                                <p class="fig_value">
                                    <br>Windows 10<br><br> mac OS
                                </p>
                            </li>
                        </ul>
                        <!--ul class="figs">
                <li class="fig">
                    <span class="fig_title">
                    遥控程序支持
                    </span>
                    <p class="fig_value">
                    Android 4.0
                    </p>
                </li>
                </ul>
                <ul class="figs">
                <li class="fig">
                    <span class="fig_title">
                    相机控制支持
                    </span>
                    <p class="fig_value">
                    蓝牙 4.0
                    </p>
                </li>
                </ul-->
                    </div>
                    <div class="text_panel3">
                        <img src="img/aura_sec06_03.png" width="238" alt="aura_sec06_03" class="aura_sec06_03" draggable="false">
                        <p class="txt">AURA 专用监看、控制软件</p>
                        <a href="/aurawork" class="link">了解更多</a>
                    </div>
                    <div class="text_panel4">
                        <img src="img/aura_sec06_04.png" width="200" alt="aura_sec06_04" class="aura_sec06_04" draggable="false">
                        <p class="txt">AURA 专用 VR 制作软件</p>
                        <a href="/aurastudio" class="link">了解更多</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="aura section-07">
            <div class="container">
                <div class="content">
                    <img id="video_btn" src="img/aura_sec07_02.png" width="193" alt="aura_sec07_02" class="aura_sec07_02" data-toggle="modal" data-target="#video_dlg" data-theVideo="//player.youku.com/embed/XMjY0NTgxNzQ3Ng==">
                    <div class="text_panel">
                        <span class="title">AURA宣传视频</span>
                        <div class="divider"></div>
                        <p class="txt">播放过程可以使用打开音响效果更佳。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="aura section-09">
            <div class="container">
                <div class="content">
                    <img src="img/aura_sec09_01.jpg" width="860" alt="aura_sec09_01" class="aura_sec09_01" draggable="false">
                    <div class="text_panel">
                        <span class="title">品质所在，<br>知名企业所认可。</span>
                        <div class="divider"></div>
                        <p class="txt">AURA的品质和强大被业内外都为之交赞，<br>多所知名企业所选用。</p>
                    </div>
                </div>
            </div>
        </div>  --}}
    </div>
    <div class="bfooter">
        <div class="container bar">
            <div class="content">
                <div class="text_panel">
                    <a href="/order" class="btn btn-primary" title="订购">订 购</a>
                </div>
                <div class="text_panel2">
                   <span class="title">即刻订购AURA mini<br>开启VR拍摄新体验</span>
                   <div class="divider"></div>
                   <p class="txt">点击右侧按钮，开始预订！</p>
                </div>
            </div>
        </div>
    </div>
@endsection