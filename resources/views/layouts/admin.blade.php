<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Dkvision 后台') }}</title>

<!-- Styles -->
<link href="/css/admin.css" rel="stylesheet">

<!-- Scripts -->
<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            @if (Auth::guest())
                <li><a href="{{ url('/admin/login') }}"> 登录 </a></li>
            @else
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>{{ Auth::guard('admin')->user()->name }} <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> 用户资料 </a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置 </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ url('/admin/logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            注销
                        </a>

                        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>

            </li>
            @endif
        </ul>
        @if (!Auth::guest())
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> 控制台</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> 文章</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-youtube-play fa-fw"></i> 视频</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-newspaper-o fa-fw"></i> 职位</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-unlink fa-fw"></i> 链接</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-user fa-fw"></i> 账户</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-cogs fa-fw"></i> 配置</a>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    </nav>

    <div id="page-wrapper" style="{{ Auth::guest() ? 'margin-left:0' : '' }}">
        @yield('content')
    </div>

</div>

<!-- Scripts -->
<script src="/js/admin.js"></script>
</body>
</html>