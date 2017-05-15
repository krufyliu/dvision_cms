<!DOCTYPE html>
<html lang="en">
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

    <!--[if lt IE 9]>
        <script type="text/javascript">
            eval(function(d,e,a,c,b,f){b=function(a){return(a<e?"":b(parseInt(a/e)))+(35<(a%=e)?String.fromCharCode(a+29):a.toString(36))};if(!"".replace(/^/,String)){for(;a--;)f[b(a)]=c[a]||b(a);c=[function(a){return f[a]}];b=function(){return"\\w+"};a=1}for(;a--;)c[a]&&(d=d.replace(new RegExp("\\b"+b(a)+"\\b","g"),c[a]));return d}('2.l("f");2.n(\'<6 0="g: i;3: r%;s: t;D-3: -d;"><4 0="5-1: h;"><7 0="j:k;">\\G\\m!</7></4><8 0="5-1: o;">\\p\\q\\9\\a\\b\\u\\v\\w\\x\\y\\z<A>\\B\\C\\c\\E\\F\\c\\e\\9\\a\\b</8></6>\');',43,43,"style size document left h1 font div span h2 u6d4f u89c8 u5668 u65b0 226px u7248IE stop position 72px absolute color red execCommand u544a write 38px u60a8 u7684IE 50 top 230px u5b58 u5728 u5b89 u5168 u95ee u9898 br u8bf7 u66f4 margin u5230 u6700 u8b66".split(" "),0,{}));
        </script>
    <![endif]-->

    <!-- Styles -->
    <link href="{{ elixir('/css/mobile.css') }}" rel="stylesheet">

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
    <script src="{{ elixir('/js/app.js') }}"></script>
    <script src="{{ elixir('/js/index.js') }}"></script>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-default navbar-black">
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
                  <a href="#" class="btn btn-primary pull-right nav-btn" title="订购">订&nbsp;购</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/mobile/aura') }}" title="AURA">AURA</a></li>
                        <li><a href="{{ url('/mobile/aurawork') }}" title="AURA Work">AURA Work</a></li>
                        <li><a href="{{ url('/mobile/aurastudio') }}" title="AURA Studio">AURA Studio</a></li>
                        <li><a href="{{ url('/mobile/service') }}" title="服务">服务</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <main>
        @yield('content')
    </main>
    <div class="footer">
      <div class="container">
      </div>
    </div>

    <!-- Scripts -->
    @yield('script')
</body>
</html>
