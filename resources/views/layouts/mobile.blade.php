<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title . '-' : '' }}量子视觉科技官网</title>
    <meta name="keywords" content="量子视觉科技有限公司,量子视觉,VR视频,全景,VR服务,DKVISION, AURA, 专业级VR摄影机">
    <meta name="description" content="DKVISION致力于打造下一代虚拟现实的完整解决方案。AURA 专业级VR摄影机">
    <div id="wx_pic" style="margin:0 auto;display:none;"><img src="/img/mobile_ss.jpg"></div>
    
    <!-- redirect to mobile -->
    <script type="text/javascript">
        var u = navigator.userAgent;
        var width = document.documentElement.clientWidth;
        if (!u.match(/Android|webOS|iPhone|iPod|BlackBerry|Windows Phone/)) {
          if (width > 736) {
              if (window.location.href.match(/mobile/)) {
                window.location.href = window.location.href.replace('/mobile', '');
              }
          }
        }
    </script>

    <!--[if lt IE 9]>
        <script type="text/javascript">
            eval(function(d,e,a,c,b,f){b=function(a){return(a<e?"":b(parseInt(a/e)))+(35<(a%=e)?String.fromCharCode(a+29):a.toString(36))};if(!"".replace(/^/,String)){for(;a--;)f[b(a)]=c[a]||b(a);c=[function(a){return f[a]}];b=function(){return"\\w+"};a=1}for(;a--;)c[a]&&(d=d.replace(new RegExp("\\b"+b(a)+"\\b","g"),c[a]));return d}('2.l("f");2.n(\'<6 0="g: i;3: r%;s: t;D-3: -d;"><4 0="5-1: h;"><7 0="j:k;">\\G\\m!</7></4><8 0="5-1: o;">\\p\\q\\9\\a\\b\\u\\v\\w\\x\\y\\z<A>\\B\\C\\c\\E\\F\\c\\e\\9\\a\\b</8></6>\');',43,43,"style size document left h1 font div span h2 u6d4f u89c8 u5668 u65b0 226px u7248IE stop position 72px absolute color red execCommand u544a write 38px u60a8 u7684IE 50 top 230px u5b58 u5728 u5b89 u5168 u95ee u9898 br u8bf7 u66f4 margin u5230 u6700 u8b66".split(" "),0,{}));
        </script>
    <![endif]-->

    <!-- Styles -->
    <link href="{{ elixir('css/mobile.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?7f4e8b613b72d886b4445c4a9075837f";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <script src="{{ elixir('js/app.js') }}"></script>
    <script src="{{ elixir('js/index.js') }}"></script>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-default navbar-black navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle pull-left nav-btn" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand nav-logo" href="{{ url('/mobile') }}">
                      <img src="/img/mobile_logo.png" alt="logo" width="120">
                  </a>
                  <a href="#" onclick="$('html,body').animate({scrollTop: $('#footer').offset().top}, 600);" class="btn btn-primary pull-right nav-btn" title="订购">订&nbsp;购</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/mobile/aura') }}" title="AURA">AURA</a></li>
                        <li><a href="{{ url('/mobile/auramini') }}" title="AURA mini">AURA mini</a></li>
                        <li><a href="{{ url('/mobile/aurawork') }}" title="AURA Work">AURA Work</a></li>
                        <li><a href="{{ url('/mobile/aurastudio') }}" title="AURA Studio">AURA Studio</a></li>
                        <li><a href="{{ url('/mobile/service') }}" title="服务">服务</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PC版入口 <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a href="/video" title="内容">内容</a></li>
                                <li><a href="/download" title="软件下载">软件下载</a></li>
                                <li><a href="/about" class="link" title="关于我们">关于我们</a></li>
                                <li><a href="/join" class="link" title="人才招聘">人才招聘</a></li>
                                <li><a href="/news" class="link" title="新闻报道">新闻报道</a></li>
                                <li><a href="/contact" class="link" title="联系我们">联系我们</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <main>
        @yield('content')
    </main>
    <div class="footer" id="footer">
        <div class="footer-bg">
            <div class="container">
                <div class="row margin-top">
                    <div class="col-xs-6">
                        <img src="/img/mobile_auratm.png" alt="mobile_auratm.png" width="130" draggable="false">
                    </div>
                </div>
                <hr class="divider">
                <div class="row">
                    <div class="col-xs-7" style="margin-top:28px;">
                        <small class="footer-title">全国服务热线</small>
                        <h5 class="footer-txt">
                            <a href="tel:0755-26657982">0755-26657982</a>
                        </h5>
                    </div>
                    <div class="col-xs-5">
                        <h5 class="footer-txt text-right">
                            <a href="tel:0755-26657982"><span class="glyphicon glyphicon-phone-alt tada" aria-hidden="true" style="font-size:64px;"></span></a>
                        </h5>
                    </div>
                    <div class="col-xs-12">
                        <small class="footer-title">公司邮箱</small>
                        <h5 class="footer-txt">
                            <a href="mailto:marketing@visiondk.com">marketing@visiondk.com</a>
                        </h5>
                    </div>
                    <div class="col-xs-12">
                        <small class="footer-title">工作时间</small>
                        <h5 class="footer-txt">
                            <a href="">周一至周五 09:00 ~ 18:00 (GMT+8)</a>
                        </h5>
                    </div>
                    <div class="col-xs-12">
                        <small class="footer-title">公司地址</small>
                        <h5 class="footer-txt">
                            <a href="http://j.map.baidu.com/AhgTH">深圳市南山区铜鼓路39号大冲国际中心5号楼902</a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @yield('script')
</body>
</html>
