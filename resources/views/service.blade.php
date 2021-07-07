@extends('layouts.app')

@section('content')

    <div class="main service">
        <div class="serve section-01">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <span class="title">OUR SERVICE</span>
                        <p class="txt">我们提供的服务</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="serve section-02">
            <div class="container">
                <div class="content">
                    <div class="text_panel">
                        <ul class="figs">
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/service_sec02_01.png" alt="service_sec02_01" width="128"  draggable="false">
                                </div>
                                
                                <p class="fig_value">
                                    专业设备租赁
                                </p>
                                <span class="fig_title">
                                    自主研发的全景影视级拍摄设备“ AURA ”的销售，租赁
                                </span>
                            </li>
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/service_sec02_02.png" alt="service_sec02_02" width="128"  draggable="false">
                                </div>
                                
                                <p class="fig_value">
                                    云平台
                                </p>
                                <span class="fig_title">
                                    全球领先的VR制作及三维重建SaaS云平台
                                </span>
                            </li>
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/service_sec02_04.png" alt="service_sec02_04" width="128"  draggable="false">
                                </div>
                                
                                <p class="fig_value">
                                    VR直播
                                </p>
                                <span class="fig_title">
                                    多范围场景直播，视频清晰流畅，低延时、真3D
                                </span>
                            </li>
                        </ul>
                        <ul class="figs">
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/service_sec02_03.png" alt="service_sec02_03" width="128"  draggable="false">
                                </div>
                                
                                <p class="fig_value">
                                    软件
                                </p>
                                <span class="fig_title">
                                    独立知识产权的可交互式10K VR播放器
                                </span>
                            </li>
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/service_sec02_05.png" alt="service_sec02_05" width="128"  draggable="false">
                                </div>
                                
                                <p class="fig_value">
                                    影视级VR制作
                                </p>
                                <span class="fig_title">
                                    全景视频拼接、剪辑、调色、特效等一体化服务
                                </span>
                            </li>
                            <li class="fig">
                                <div class="icons">
                                    <img src="img/service_sec02_06.png" alt="service_sec02_06" width="128"  draggable="false">
                                </div>
                                
                                <p class="fig_value">
                                    团队拍摄
                                </p>
                                <span class="fig_title">
                                    业内顶尖的VR拍摄团队，国际知名 VR导演，艺术指导
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="serve section-03">
            <div class="container">
                <div class="content">
                    <img src="img/service_sec03_01.jpg" width="1190" alt="service_sec03_01" class="service_sec03_01" draggable="false">
                    <div class="text_panel">
                        <span class="title">合作伙伴</span>
                        <p class="txt">COOPERATIVE PARTNER</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="serve section-04">
            <div class="container">
                <div class="text_panel">
                    <span class="title">帮助文档</span>
                    <p class="txt">DOCUMENT</p>
                </div>
                <div class="tabs" data-example-id="togglable-tabs">
                    <ul id="myTabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">AuraMini</a></li>
                        {{--  <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Aura</a></li>  --}}
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading01">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
                                        1.机身接口
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse01" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading01">
                                    <div class="panel-body">
                                        <img src="img/service_sec04_01.jpg" alt="service_sec04_01" width="80%" class="img-responsive big" draggable="false">
                                        <img src="img/service_sec04_02.jpg" alt="service_sec04_02" width="80%" class="img-responsive big" draggable="false">
                                        <img src="img/service_sec04_03.jpg" alt="service_sec04_03" width="80%" class="img-responsive big" draggable="false">
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading02">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
                                        2.相机电源与不同电量状态
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse02" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading02">
                                    <div class="panel-body">
                                        <p>电源：相机使用12V 5.471A 的DC 接口电源适配器</p>
                                        <p>电池类型与续航时间：相机使用7.4V 6200mAh的可更换电池，约续航80分钟</p>
                                        <p>关机充电电量显示：</p>
                                        <img src="img/service_sec04_04.png" alt="service_sec04_04" width="240" draggable="false">
                                        <p><br><br>开机充电电量显示：</p>
                                        <img src="img/service_sec04_05.png" alt="service_sec04_05" width="240" draggable="false">
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading03">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
                                        3.相机存储设备的支持与选择？
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse03" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading03">
                                    <div class="panel-body">
                                        <p>相机支持视频速度等级在 V30及以上更高速度规格的SD卡。 推荐闪迪SD卡（<a href="https://item.jd.com/2217750.html" target="_blank">京东购买链接</a>、<a href="https://www.amazon.com/gp/product/B01HU3Q6F2/ref=s9_acsd_hps_bw_c_x_9_w?th=1" target="_blank">亚马逊购买链接</a>），卡格式推荐 exFat，对存储卡容量没有限制。视频速度等级为 SD 卡协会推出的最新标准，速度标准如图：</p>
                                        <br><br>
                                        <img src="img/service_sec04_06.png" alt="service_sec04_06" width="70%" class="img-responsive big" draggable="false">
                                        <br><br>
                                        <img src="img/service_sec04_07.jpg" alt="service_sec04_07" width="70%" class="img-responsive big" draggable="false">
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading04">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                        4.相机如何进行固件升级?
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading04">
                                    <div class="panel-body">
                                        <p>一、准备</p>
                                        <ul style="margin-left:30px;">
                                            <li><p>请将相机接好电源适配器</p></li>
                                            <li><p>开启相机</p></li>
                                            <li><p>用网线将相机与电脑相连</p></li>
                                            <li>
                                                <p>从官网下载最新固件（<a href="https://visiondk.com/download" target="_blank">点击前往</a>）</p>
                                                <img src="img/service_sec04_08.png" alt="service_sec04_08" width="240px" class="big" draggable="false">
                                                <br><br>
                                            </li>
                                            <li>
                                                <p>解压名为：aura_firmware_vx.x.xx.xx.zip的压缩包，得到名为：upgrade.bin的升级文件</p>
                                                <img src="img/service_sec04_09.png" alt="service_sec04_09" width="640px" class="big" draggable="false">
                                                <br><br>
                                            </li>
                                        </ul>
                                        <p>注意!</p>
                                        <ul style="margin-left:30px;">
                                            <li><p style="color:red;">请确保升级过程中相机一直连接电源</p></li>
                                            <li><p style="color:red;">请确保升级过程中电脑与相机一直处于连接状态</p></li>
                                        </ul>
                                        <p>二、开始升级</p>
                                        <ul style="margin-left:30px;">
                                            <li>
                                                <p>打开Aura Work ，点击菜单栏"固件升级":</p>
                                                <img src="img/service_sec04_10.png" alt="service_sec04_10" width="70%" class="big" draggable="false">
                                                <br><br>
                                            </li>
                                            <li>
                                                <p>选择之前下载好的固件:</p>
                                                <img src="img/service_sec04_11.png" alt="service_sec04_11" width="70%" class="big" draggable="false">
                                                <br><br>
                                            </li>
                                            <li>
                                                <p>点击“确定”开始升级:</p>
                                                <img src="img/service_sec04_12.png" alt="service_sec04_12" width="70%" class="big" draggable="false">
                                                <br><br>
                                            </li>
                                            <li><p>整个过程大约需要2分钟，升级过程中相机会自动重启，重启后完成升级</p></li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading05">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse05" aria-expanded="false" aria-controls="collapse05">
                                        5.如何关机?
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse05" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading05">
                                    <div class="panel-body">
                                        <p>相机处于拍摄模式的准备就绪、设置、异常提示等状态下，长按 Power 键1秒会执行关机<br><br>相机处于拍摄中（拍照中、录像中、直播中）、存储中状态时，长按 Power 键盘1秒会先停止当前的工作状态并完成存储后再执行关机</p>
                                        <img src="img/service_sec04_13.png" alt="service_sec04_13" width="240" draggable="false">
                                        <br><br>
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading06">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse06" aria-expanded="false" aria-controls="collapse06">
                                        6.功能导航菜单
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse06" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading06">
                                    <div class="panel-body">
                                        <p>相机首页状态指示主要包括</p>
                                        <ul style="margin-left:30px;">
                                            <li>
                                                <p>录像模式</p>
                                                <img src="img/service_sec04_14.png" alt="service_sec04_14" width="540" class="big" draggable="false">
                                                <br><br>
                                            </li>
                                            <li>
                                                <p>定时拍照模式</p>
                                                <img src="img/service_sec04_15.png" alt="service_sec04_15" width="540" class="big" draggable="false">
                                                <br><br>
                                            </li>
                                            <li>
                                                <p>延时拍照模式</p>
                                                <img src="img/service_sec04_16.png" alt="service_sec04_16" width="540" class="big" draggable="false">
                                                <br><br>
                                            </li>
                                            <li>
                                                <p>全景直播模式</p>
                                                <img src="img/service_sec04_17.png" alt="service_sec04_17" width="540" class="big" draggable="false">
                                                <br><br>
                                            </li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading07">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse07" aria-expanded="false" aria-controls="collapse07">
                                        7.相机拍照功能
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse07" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading07">
                                    <div class="panel-body">
                                        <p>一、定时拍照操作</p>
                                        <p>从相机首页按SET键进入设置界面</p>
                                        <img src="img/service_sec04_18.png" alt="service_sec04_18" width="240" draggable="false">
                                        <br><br>
                                        <p>在“功能切换”选项按录像键切换到拍照</p>
                                        <img src="img/service_sec04_19.png" alt="service_sec04_19" width="240" draggable="false">
                                        <br><br>
                                        <p>相机默认是“定时拍照”，这里设置“定时时长”是10秒</p>
                                        <img src="img/service_sec04_20.png" alt="service_sec04_20" width="240" draggable="false">
                                        <br><br>
                                        <p>相机首页显示当前是“拍照模式”（定时），此时按录像键拍照</p>
                                        <img src="img/service_sec04_21.png" alt="service_sec04_21" width="240" draggable="false">
                                        <br><br>
                                        <p>拍照时，需要等待10s的倒计时，倒计时过程中屏幕有时间显示</p>
                                        <img src="img/service_sec04_22.png" alt="service_sec04_22" width="240" draggable="false">
                                        <br><br>
                                        <p>二、延时拍照操作</p>
                                        <p>从相机首页按SET键进入设置界面</p>
                                        <img src="img/service_sec04_18.png" alt="service_sec04_18" width="240" draggable="false">
                                        <br><br>
                                        <p>在“功能切换”选项按录像键切换到拍照</p>
                                        <img src="img/service_sec04_19.png" alt="service_sec04_19" width="240" draggable="false">
                                        <br><br>
                                        <p>按SET键切换到“拍照模式”选项，然后按录像键切换到“延时”</p>
                                        <img src="img/service_sec04_23.png" alt="service_sec04_23" width="240" draggable="false">
                                        <br><br>
                                        <p>相机首页显示当前是“拍照模式”（延时），此时按录像键拍照</p>
                                        <img src="img/service_sec04_24.png" alt="service_sec04_24" width="240" draggable="false">
                                        <br><br>
                                        <p>延时拍照时，这里设置的拍照间隔时间为5s，倒计时过程中屏幕有剩余时间显示</p>
                                        <img src="img/service_sec04_25.png" alt="service_sec04_25" width="240" draggable="false">
                                        <br><br>
                                        <p>三、拍照参数设置</p>
                                        <p>锐度：</p>
                                        <img src="img/service_sec04_26.png" alt="service_sec04_26" width="240" draggable="false">
                                        <br><br>
                                        <p>PM打开后将有三个高级选项：</p>
                                        <img src="img/service_sec04_27.png" alt="service_sec04_27" width="240" draggable="false">
                                        <br><br>
                                        <p>色温：</p>
                                        <img src="img/service_sec04_28.png" alt="service_sec04_28" width="240" draggable="false">
                                        <br><br>
                                        <p>ISO:</p>
                                        <img src="img/service_sec04_29.png" alt="service_sec04_29" width="240" draggable="false">
                                        <br><br>
                                        <p>曝光时间：</p>
                                        <img src="img/service_sec04_30.png" alt="service_sec04_30" width="240" draggable="false">
                                        <br><br>
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading08">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse08" aria-expanded="false" aria-controls="collapse08">
                                        8.相机录像功能
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse08" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading08">
                                    <div class="panel-body">
                                        <p>一、录像操作</p>
                                        <p>从相机首页按SET键进入设置界面</p>
                                        <img src="img/service_sec04_19.png" alt="service_sec04_19" width="240" draggable="false">
                                        <br><br>
                                        <p>在“功能切换”选项按录像键切换到录像</p>
                                        <img src="img/service_sec04_18.png" alt="service_sec04_18" width="240" draggable="false">
                                        <br><br>
                                        <p>二、录像参数设置</p>
                                        <p>分辨率：</p>
                                        <img src="img/service_sec04_31.png" alt="service_sec04_31" width="240" draggable="false">
                                        <br><br>
                                        <p>帧率：</p>
                                        <img src="img/service_sec04_32.png" alt="service_sec04_32" width="240" draggable="false">
                                        <br><br>
                                        <p>编码设置：</p>
                                        <img src="img/service_sec04_33.png" alt="service_sec04_33" width="240" draggable="false">
                                        <br><br>
                                        <p>录像格式：</p>
                                        <img src="img/service_sec04_34.png" alt="service_sec04_34" width="240" draggable="false">
                                        <br><br>
                                        <p>锐度：</p>
                                        <img src="img/service_sec04_26.png" alt="service_sec04_26" width="240" draggable="false">
                                        <br><br>
                                        <p>PM打开后将有三个高级选项：</p>
                                        <img src="img/service_sec04_27.png" alt="service_sec04_27" width="240" draggable="false">
                                        <br><br>
                                        <p>色温：</p>
                                        <img src="img/service_sec04_28.png" alt="service_sec04_28" width="240" draggable="false">
                                        <br><br>
                                        <p>ISO:</p>
                                        <img src="img/service_sec04_29.png" alt="service_sec04_29" width="240" draggable="false">
                                        <br><br>
                                        <p>曝光时间：</p>
                                        <img src="img/service_sec04_30.png" alt="service_sec04_30" width="240" draggable="false">
                                        <br><br>
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading09">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse09" aria-expanded="false" aria-controls="collapse09">
                                        9.开启直播
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse09" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading09">
                                    <div class="panel-body">
                                        <p>从相机首页按SET键进入设置界面</p>
                                        <img src="img/service_sec04_18.png" alt="service_sec04_18" width="240" draggable="false">
                                        <br><br>
                                        <p>继续按SET键切换到“直播”选项</p>
                                        <img src="img/service_sec04_35.png" alt="service_sec04_35" width="240" draggable="false">
                                        <br><br>
                                        <p>按录像键打开或关闭直播（直播开启和关闭过程中相机会重启，状态灯会持续闪烁)</p>
                                        <img src="img/service_sec04_36.png" alt="service_sec04_36" width="240" draggable="false">
                                        <br><br>
                                        <p>直播开启完毕后首页会出现“LIVE”图示</p>
                                        <img src="img/service_sec04_37.png" alt="service_sec04_37" width="240" draggable="false">
                                        <br><br>
                                        <p>相机直播功能开启后，还需在AURA WORK中进行进一步的设置和操作才能完整使用AURA MINI直播功能-------<a href="https://visiondk.com/download" target="_blank">传送门<a/></p>
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading10">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                        10.格式化SD卡
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                                    <div class="panel-body">
                                        <p>从相机首页按SET键进入设置界面</p>
                                        <img src="img/service_sec04_18.png" alt="service_sec04_18" width="240" draggable="false">
                                        <br><br>
                                        <p>继续按SET键切换到“格式化SD卡”选项</p>
                                        <img src="img/service_sec04_38.png" alt="service_sec04_38" width="240" draggable="false">
                                        <br><br>
                                        <p>按录像键进入到格式化SD卡确认界面</p>
                                        <img src="img/service_sec04_39.png" alt="service_sec04_39" width="240" draggable="false">
                                        <br><br>
                                        <p>再按SET键切换光标到“确认”</p>
                                        <img src="img/service_sec04_40.png" alt="service_sec04_40" width="240" draggable="false">
                                        <br><br>
                                        <p>最后按录像键开始格式化SD卡</p>
                                        <p>在格式化过程中，相机状态灯会持续闪烁直到格式化完成</p>
                                        <p>建议第一次使用新的SD卡之前，请在相机上格式化一次</p>
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading11">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                        11.风扇静默
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                    <div class="panel-body">
                                        <p>一、功能介绍：在使用相机内置麦克风现场收音时，风扇转动的噪音会影响收音效果。打开“风扇静默”后，在录像过程中，风扇会停止运转。停止录像后，风扇继续运转散热。</p>
                                        <p>如果录像时间过长或环境温度较高，使相机内部温度超过60度，则不管“风扇静默”是否打开，风扇都会运转给相机散热。</p>
                                        <p>二、操作说明</p>
                                        <p>从相机首页按SET键进入设置界面</p>
                                        <img src="img/service_sec04_18.png" alt="service_sec04_18" width="240" draggable="false">
                                        <br><br>
                                        <p>继续按SET键切换到“风扇静默”选项</p>
                                        <img src="img/service_sec04_41.png" alt="service_sec04_41" width="240" draggable="false">
                                        <br><br>
                                        <p>按录像键打开或关闭风扇静默</p>
                                        <img src="img/service_sec04_42.png" alt="service_sec04_42" width="240" draggable="false">
                                        <br><br>
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading12">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                        12.LED静默
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                    <div class="panel-body">
                                        <p>一、功能介绍：由于AURA MINI使用了8个鱼眼镜头，在照度较低的环境下使用相机录像时，状态指示灯的光线会影响录像效果。当“LED静默”开启状态下，录像开始15秒后会自动关闭相机状态指示灯。停止录像会再次亮起状态指示灯。</p>
                                        <p>二、操作说明</p>
                                        <p>从相机首页按SET键进入设置界面</p>
                                        <img src="img/service_sec04_18.png" alt="service_sec04_18" width="240" draggable="false">
                                        <br><br>
                                        <p>继续按SET键切换到“LED静默”选项</p>
                                        <img src="img/service_sec04_43.png" alt="service_sec04_43" width="240" draggable="false">
                                        <br><br>
                                        <p>按录像键打开或关闭LED静默</p>
                                        <img src="img/service_sec04_44.png" alt="service_sec04_44" width="240" draggable="false">
                                        <br><br>
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading13">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                        13.自动关机
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                                    <div class="panel-body">
                                        <p>功能介绍：相机如有没有在以下状态，为保护设备，5分钟后会自动关闭相机。</p>
                                        <ul style="margin-left:30px;">
                                            <li><p>录像中、延时拍摄中</p></li>
                                            <li><p>连接电脑并使用AURA WORK或AURA STUDIO</p></li>
                                            <li><p>连接外置电源</p></li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading14">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                        14.重置相机
                                        </a>
                                    </h4>
                                    </div>
                                    <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                                    <div class="panel-body">
                                        <p>一、功能介绍：在相机使用过程中，如果想恢复相机到出厂状态，可以选择重置相机。</p>
                                        <p>二、操作说明：</p>
                                        <p>从相机首页按SET键进入设置界面</p>
                                        <img src="img/service_sec04_18.png" alt="service_sec04_18" width="240" draggable="false">
                                        <br><br>
                                        <p>继续按SET键切换到“重置相机”选项</p>
                                        <img src="img/service_sec04_45.png" alt="service_sec04_45" width="240" draggable="false">
                                        <br><br>
                                        <p>按录像键进入到重置相机确认界面</p>
                                        <img src="img/service_sec04_46.png" alt="service_sec04_46" width="240" draggable="false">
                                        <br><br>
                                        <p>再按SET键切换光标到“确认”</p>
                                        <img src="img/service_sec04_47.png" alt="service_sec04_47" width="240" draggable="false">
                                        <br><br>
                                        <p>最后按录像键开始重置相机。</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                            <p>待添加</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bfooter">
        <div class="container bar">
            <div class="content">
                <div class="text_panel">
                    <a href="/contact" class="btn btn-primary" title="联系">联 系</a>
                </div>
                <div class="text_panel2">
                   <span class="title">专业VR服务<br>即刻获取</span>
                   <div class="divider"></div>
                   <p class="txt">点击右侧按钮，前往联系！</p>
                </div>
            </div>
        </div>
    </div>
@endsection