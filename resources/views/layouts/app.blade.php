<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--  <meta name="viewport" content="width=device-width" />  --}}
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title . '-' : '' }}量子视觉科技官网</title>
    <meta name="keywords" content="量子视觉科技有限公司,量子视觉,VR视频,全景,VR服务,DKVISION,AURA,专业级VR摄影机,全景相机,全景视频,全景图片,360度全景照相机,全景拍摄,三维全景">
    <meta name="description" content="DKVISION致力于打造下一代虚拟现实的完整解决方案。AURA 专业级VR摄影机">

    <!-- redirect to mobile -->
    <script type="text/javascript">
        var u = navigator.userAgent;
        var width = screen.width;
        if (u.match(/Android|webOS|iPhone|iPod|BlackBerry|Windows Phone/)) {
          if (width < 737) {
              if (window.location.href.match(/aura|service|lease/)) {
                  window.location.href = window.location.origin + '/mobile' + window.location.pathname;
              } else if (window.location.pathname == "/") {
                window.location.href = window.location.origin + '/mobile';
              } else {
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
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    {{--  <link href="/css/app.css" rel="stylesheet">  --}}

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
    <div class="header headroom">
        <div class="container">
            <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="{{ url('/') }}">
                      <img src="/img/logo2.png" alt="logo2" width="120">
                  </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="nav navbar-nav navbar-left">
                    <div class="dropdown menu-item" id="menu-product">
                      <a href="#" class="dropdown-toggle" role="button">产品</a>
                      <div class="sub-menu-bg">
                      </div>
                      <div class="sub-menu">
                        <a href="{{ route('auramini') }}">
                          <img class="img-medium" alt="" src="/img/menu-aura-mini.png" style="">
                          <span style="font-size: 16px; font-weight: 400;">Mini</span>
                        </a>
                        <a href="{{ route('aura') }}">
                          <img class="img-medium" alt="" src="/img/menu-aura.png" style="">
                          <span style="font-size: 16px; font-weight: 400;">Aura</span>
                        </a>
                        {{--  <a href="#">
                          <img class="img-medium" alt="" src="/img/menu-other.png" style="">
                          <span>配件</span>
                        </a>  --}}
                      </div>
                    </div>

                    <div class="menu-item"><a href="/video" title="内容">内容</a></div>

                    <div class="menu-item"><a href="/download" title="软件下载">软件下载</a></div>
                    <div class="dropdown menu-item" id="menu-about">
                      <a href="#" class="dropdown-toggle" role="button">关于我们</a>
                      <div class="sub-menu-bg">
                      </div>
                      <div class="sub-menu">
                        <a href="{{ route('about') }}">
                          <img class="img-medium" alt="" src="/img/menu-about.png" style="">
                          <span>关于我们</span>
                        </a>
                        <a href="{{ route('join') }}">
                          <img class="img-medium" alt="" src="/img/menu-join.png" style="">
                          <span>人才招聘</span>
                        </a>
                        <a href="{{ route('news') }}">
                          <img class="img-medium" alt="" src="/img/menu-news.png" style="">
                          <span>新闻报道</span>
                        </a>
                        <a href="{{ route('contact') }}">
                          <img class="img-medium" alt="" src="/img/menu-contact.png" style="">
                          <span>联系留言</span>
                        </a>
                      </div>
                    </div>

                    <div class="menu-item"><a href="/service" title="服务与支持">服务与支持</a></div>
                    {{--  <div class="dropdown menu-item" id="menu-support">
                      <a href="#" class="dropdown-toggle" role="button" title="服务与支持">服务与支持</a>
                      <div class="sub-menu-bg">
                      </div>
                      <div class="sub-menu">
                        <a href="#">
                          <img class="img-medium" alt="" src="/img/menu-product-support.png" style="">
                          <span>产品支持</span>
                        </a>
                        <a href="#">
                          <img class="img-medium" alt="" src="/img/menu-bug-nav.png" style="">
                          <span>售后与维修服务</span>
                        </a>
                        <a href="#">
                          <img class="img-medium" alt="" src="/img/menu-agreement.png" style="">
                          <span>条款与协议</span>
                        </a>
                      </div>
                    </div>  --}}
                </div>
                <div class="nav navbar-nav navbar-right">
                    <div><a href="/order" class="btn btn-default" title="立即订购">立即订购</a></div>
                    <div><a href="/franchise" class="btn btn-default" title="加盟代理">加盟代理</a></div>
                </div>
                </div>
            </div>
            </nav>
        </div>
        </div>

    <main>
        @yield('content')
    </main>

    <div class="footer">
      <div class="container">
        <nav class="columns with-4-columns">
          <div class="column">
            <div class="section">
              <label for="">
                <h3 class="title">网站导航</h3>
              </label>
              <ul class="list">
                <li class="item">
                  <a href="/aura" class="link" title="AURA">AURA</a>
                </li>
                <li class="item">
                  <a href="/aurawork" class="link" title="AURA Work">AURA Work</a>
                </li>
                <li class="item">
                  <a href="/aurastudio" class="link" title="AURA Studio">AURA Studio</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="section">
              <label for="">
                <h3 class="title">服务</h3>
              </label>
              <ul class="list">
                <li class="item">
                  <a href="/service" class="link" title="VR直播">VR直播</a>
                </li>
                <li class="item">
                  <a href="/service" class="link" title="设备租赁">设备租赁</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="section">
              <label for="">
                <h3 class="title">支持</h3>
              </label>
              <ul class="list">
                <li class="item">
                  <a href="/download" class="link" title="软件下载">软件下载</a>
                </li>
                <li class="item">
                  <a href="/download" class="link" title="固件下载">固件下载</a>
                </li>
                <li class="item">
                  <a href="https://cdn.visiondk.com/download/aura/pdf/aura_guide.pdf?attname=" class="link" target="_blank" title="AURA快速指南" rel="nofollow">AURA快速指南</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="section">
              <label for="">
                <h3 class="title">公司</h3>
              </label>
              <ul class="list">
                <li class="item">
                  <a href="/about" class="link" title="关于我们">关于我们</a>
                </li>
                <li class="item">
                  <a href="/join" class="link" title="人才招聘">人才招聘</a>
                </li>
                <li class="item">
                  <a href="/news" class="link" title="新闻报道">新闻报道</a>
                </li>
                <li class="item">
                  <a href="{{ route('contact') }}" class="link" title="联系我们">联系我们</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="secondary">
          <div class="content">
            <h4 class="title">全国服务热线：<a href="tel:0755-26657982">0755-26657982</a></h4>
            <h4 class="title">公司邮箱：<a href="mailto:marketing@visiondk.com">marketing@visiondk.com</a></h4>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="gf-footer">
          <div class="gf-footer-logo">
            <img src="/img/logo2.png" alt="logo2" width="120">
          </div>
          <div class="gf-footer-legal">
            <div class="gf-footer-legal-copyright">量子视觉科技有限公司©Copyright  版权所有 <a href="http://www.miibeian.gov.cn/" rel="nofollow">粤ICP备16006475号-1</a><br>Shenzhen Deep Kernel Vision Co.,Ltd.</div>
          </div>
        </div>
      </div>
  </div>
    <!-- Scripts -->
    @yield('script')
</body>
</html>
