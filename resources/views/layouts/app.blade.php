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

    <title>量子视觉{{ '-' . $title }}</title>
    <meta name="keywords" content="量子视觉科技有限公司,量子视觉,VR视频,全景,VR服务,DKvision,vision">
    <meta name="description" content="DKvision致力于打造下一代虚拟现实的完整解决方案">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <header class="navbar navbar-default navbar-fixed-top">
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
                    <li><a href="{{ url('/video') }}">VR视频</a></li>
                    <!-- <li><a href="#">产品</a></li> -->
                    <li><a href="{{ url('/service') }}">服务</a></li>
                    <!-- <li><a href="#">下载</a></li> -->
                </ul>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer role="contentinfo">
        <div class="container">
            <hr>
            <div class="row">
                <!-- <div class="col-sm-12 col-lg-6 col-lg-offset-3">
                    <h4 class="text-center">
                    <img src="qcode.png">
                    </h4>
                    <p class="small text-center text-muted">关注公众号订阅最新信息<br><br></p>
                </div> -->
                <div class="col-sm-12 col-lg-6 col-lg-offset-3">
                    <ul class="footer-links text-center">
                        <li><a href="{{ url('/team') }}">团队</a></li>
                        <li><a href="{{ url('/news') }}">新闻</a></li>
                        <li><a href="{{ url('/join') }}">加入</a></li>
                        <li><a href="{{ url('/contact') }}">联系</a></li>
                    </ul>
                </div>

                <div class="col-sm-12 col-lg-6 col-lg-offset-3">
                    <p class="small text-center text-muted">Copyright©2016 量子视觉科技有限公司 保留所有权利</p> 
                    <p class="small text-center text-muted"><a href="http://www.miibeian.gov.cn/">粤ICP备16006475号-1</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('script')
</body>
</html>
