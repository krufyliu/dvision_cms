@extends('layouts.app')

@section('content')

    <div class="main download">
        <div class="dld section-01">
            <div class="container">
                <div class="content">
                    <div class="header-nav">软件下载</div>
                    <div class="wrapper">
                        <a class="link" href="/download/auramini">
                            <div class="helper">
                            <img class="logo" src="/img/download_mini_logo.png">
                            <div class="tip">相关软件下载</div>
                            <img class="product" src="/img/download_product_mini.png">
                            </div>
                        </a>
                        <a class="link" href="/download/aura">
                            <div class="helper">
                            <img class="logo" src="/img/download_aura_logo.png">
                            <div class="tip">相关软件下载</div>
                            <img class="product" src="/img/download_product_aura.png">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
