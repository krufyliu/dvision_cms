<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($title) ? $title . '-' : '' }}量子视觉科技官网</title>
    <meta name="keywords" content="量子视觉科技有限公司,量子视觉,VR视频,全景,VR服务,DKVISION, AURA, 专业级VR拍摄设备">
    <meta name="description" content="DKVISION致力于打造下一代虚拟现实的完整解决方案。AURA 专业级VR拍摄设备">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

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
    <script src="/js/app.js"></script>
    <script src="/js/index.js"></script>
</head>
<body>
    {{-- <header class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img alt="Brand" height="20" src="/image/logo.png">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1"  role="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/aura') }}">AURA</a></li>
                    <li><a href="#">产品</a></li>
                    <li><a href="{{ url('/service') }}">服务</a></li>
                    <li><a href="{{ url('/video') }}">内容</a></li>
                    <li><a href="{{ url('/news') }}">新闻</a></li>
                    <li><a href="{{ url('/team') }}">关于我们</a></li>
                    <li><a href="{{ url('/contact') }}">联系</a></li>
                    <li><a href="#">下载</a></li>
                </ul>
            </div>
        </div>Ï
    </header> --}}

    <div class="header">
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
                    <img src="/img/logo.png" alt="logo" width="120">
                </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">产品 <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-left">
                        <li><a href="{{ url('/aura') }}" title="AURA">AURA</a></li>
                        <li><a href="{{ url('/aurawork') }}" title="AURA Work">AURA Work</a></li>
                        <li><a href="{{ url('/aurastudio') }}" title="AURA Studio">AURA Studio</a></li>
                    </ul>
                    </li>
                    {{-- <li><a href="/aura">AURA</a></li> --}}

                    <li><a href="/service" title="服务">服务</a></li>

                    <li><a href="/video" title="内容">内容</a></li>

                    <li><a href="/download" title="软件下载">软件下载</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">公司 <span class="caret"></span></a>
                      <ul class="dropdown-menu dropdown-menu-left">
                          <li><a href="/about" class="link" title="关于我们">关于我们</a></li>
                          <li><a href="/join" class="link" title="人才招聘">人才招聘</a></li>
                          <li><a href="/news" class="link" title="新闻报道">新闻报道</a></li>
                          <li><a href="/contact" class="link" title="联系我们">联系我们</a></li>
                      </ul>
                    </li>
                    {{-- <li><a href="/about" title="关于我们">关于我们</a></li> --}}

                    <li><a href="/order" class="btn btn-default" title="立即订购">立即订购</a></li>
                </ul>
                </div>
            </div>
            </nav>
        </div>
        </div>

    <main>
        @yield('content')
    </main>

    {{-- <footer role="contentinfo">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-12 col-lg-6 col-lg-offset-3">
                    <h4 class="text-center">
                    <img src="qcode.png">
                    </h4>
                    <p class="small text-center text-muted">关注公众号订阅最新信息<br><br></p>
                </div>
                <div class="col-sm-12 col-lg-6 col-lg-offset-3">
                    <ul class="footer-links text-center">
                        <li><a href="{{ url('/service') }}">服务</a></li>
                        <li><a href="{{ url('/video') }}">内容</a></li>
                        <li><a href="{{ url('/news') }}">新闻</a></li>
                        <li><a href="{{ url('/team') }}">关于我们</a></li>
                        <li><a href="{{ url('/contact') }}">联系</a></li>
                    </ul>
                </div>

                <div class="col-sm-12 col-lg-6 col-lg-offset-3">
                    <br>
                    <p class="small text-center text-muted">Copyright©2016 量子视觉科技有限公司 保留所有权利</p> 
                    <p class="small text-center text-muted"><a href="http://www.miibeian.gov.cn/">粤ICP备16006475号-1</a></p>
                </div>
            </div>
        </div>
    </footer> --}}

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
                {{-- <li class="item">
                  <a href="/service" class="link">专业级VR制作</a>
                </li>
                <li class="item">
                  <a href="/service" class="link">云渲染</a>
                </li> --}}
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
                  <a href="#" class="link" title="固件下载">固件下载</a>
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
                  <a href="/contact" class="link" title="联系我们">联系我们</a>
                </li>
              </ul>
            </div>
          </div>
          {{-- <div class="column">
            <div class="section">
              <label for="">
                <h3 class="title">报道</h3>
              </label>
              <ul class="list">
                <li class="item">
                  <a href="/news" class="link">新闻报道</a>
                </li>
                <li class="item">
                  <a href="/contact" class="link">用户反馈</a>
                </li>
              </ul>
            </div>
          </div> --}}
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
            <div class="gf-footer-legal-copyright">量子视觉科技有限公司©Copyright  版权所有 <a href="http://www.miibeian.gov.cn/" rel="nofollow">粤ICP备16006475号-1</a></div>
          </div>
        </div>
      </div>
  </div>

    <!-- Scripts -->
    @yield('script')
</body>
</html>
