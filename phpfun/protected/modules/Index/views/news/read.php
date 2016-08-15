<!DOCTYPE html>
<!-- saved from url=(0025)http://www.golaravel.com/ -->
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PHPfun 欢迎您</title>
    <meta name="description" content="phpfun 是一个php中文新闻社区">
    <meta name="keywords" content="php中文社区,php框架,php中文网,php framework,restful routing,laravel,laravel php">


    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="http://www.golaravel.com/assets/favicon.ico">

    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/assets/Index//css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/assets/Index//css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/assets/Index//css/vs.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/Index//css/screen.css">

    <script>
        var _hmt = _hmt || [];
    </script>

    <link rel="canonical" href="http://www.golaravel.com/">
    <meta name="referrer" content="origin">
    <link rel="next" href="http://www.golaravel.com/page/2/">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/assets/Index//js/ghost-url.min.js"></script>
    <script type="text/javascript">
        ghost.init({
            clientId: "ghost-frontend",
            clientSecret: "26b0e31d612d"
        });
    </script>
    <meta name="generator" content="Ghost 0.7">
    <link rel="alternate" type="application/rss+xml"
          title="Laravel-简洁、优雅的PHP开发框架(PHP Web Framework)。- Laravel中文网（Laravel中国社区）"
          href="http://www.golaravel.com/rss/">
    <style id="fit-vids-style">.fluid-width-video-wrapper {
        width: 100%;
        position: relative;
        padding: 0;
    }

    .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }</style>
</head>
<body class="home-template">

<!-- start header -->
<header class="main-header"
        style="background-image: url(http://image.golaravel.com/5/c9/44e1c4e50d55159c65da6a41bc07e.jpg)"
"="">
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <h1><span class="hide">PHPFun - </span>是 PHP 开发者的世界之窗。</h1>
            <h2 class="hide">PHP THAT DOESN'T HURT. CODE HAPPY &amp; ENJOY THE FRESH AIR.</h2>

            <img src="./phpfun/4e4bd788405aab87f03d26edc4ab4.png" alt="Laravel" class="hide">
        </div>
    </div>
</div>
</header>
<!-- end header -->

<!-- start navigation -->
<nav class="main-navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="navbar-header">
                        <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                        </span>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="menu">
                        <li class="nav-current" role="presentation"><a href="#">首页</a></li>
                        <li role="presentation"><a href="#" title="PHP大牛论" target="_blank">PHP大牛论</a>
                        </li>
                        <li role="presentation"><a href="#" title="PHP框架"
                                                   target="_blank">PHP框架</a></li>
                        <li role="presentation"><a href="#" title="大话PHP安全"
                                                   target="_blank">大话PHP安全</a></li>
                        <li role="presentation"><a href="#" title="PHP 源码解读"
                                                   target="_blank">PHP源码解读</a></li>
                        <li role="presentation"><a href="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Index/login/index" title="登录"
                                                   >登录</a></li>
                        <li role="presentation"><a href="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Index/register/index" title="注册"
                                                   >注册</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- end navigation -->


<!-- start site's main content area -->
<section class="content-wrap">
    <div class="container">
        <div class="row">

            <main class="col-md-8 main-content">

                    <article id="66" class="post tag-laravel-5 tag-getting-started-with-laravel tag-laravel-5-2">

                        <div class="post-head">
                            <h1 class="post-title"><a
                                    href="http://www.golaravel.com/post/2016-ban-laravel-xi-lie-ru-men-jiao-cheng-er/"><?php echo $newsModel[0]->title ?></a></h1>

                            <div class="post-meta">
                                <span class="author">作者：<?php echo $newsModel[0]->name ?></span> •
                                <time class="post-date" datetime="2016年6月6日星期一下午3点27分" title="2016年6月6日星期一下午3点27分">
                                    <?php  echo $newsModel[0]->updateTime ?>
                                </time>
                            </div>
                        </div>

                        <div class="post-content">
                            <?php echo html_entity_decode($newsModel[0]->content); ?>
                        </div>


                        <footer class="post-footer clearfix">
                        </footer>
                    </article>

            </main>

            <aside class="col-md-4 sidebar">
                <!-- start widget -->
                <!-- end widget -->

                <!-- start tag cloud widget -->
                <div class="widget">
                    <h4 class="title">社区</h4>
                    <div class="content community">
                        <p>QQ群：123456</p>
                        <p><a href="http://wenda.golaravel.com/" title="PHPfun问答社区" target="_blank"
                              onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;big-button&#39;, &#39;click&#39;, &#39;问答社区&#39;])"><i
                                class="fa fa-comments"></i> 问答社区</a></p>
                    </div>
                </div>
                <!-- end tag cloud widget -->

                <!-- start widget -->
                <div class="widget">
                    <h4 class="title"></h4>
                    <div class="content download">
                        <a href="http://www.golaravel.com/download/" class="btn btn-default btn-block"
                           onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;big-button&#39;, &#39;click&#39;, &#39;下载 Laravel &amp; Lumen&#39;])">PHP
                          官网</a>
                    </div>
                </div>
                <!-- end widget -->


                <!-- start tag cloud widget -->
                <div class="widget">
                    <h4 class="title">标签云</h4>
                    <div class="content tag-cloud">
                        <a href="http://www.golaravel.com/tag/laravel-5-2/">Laravel 5.2</a>
                        <a href="http://www.golaravel.com/tag/spark/">Spark</a>
                        <a href="http://www.golaravel.com/tag/jing-xiang/">镜像</a>
                        <a href="http://www.golaravel.com/tag/xin-ban-ben-fa-bu/">新版本发布</a>
                        <a href="http://www.golaravel.com/tag/lts/">LTS</a>
                        <a href="http://www.golaravel.com/tag/wei-kuang-jia/">微框架</a>
                        <a href="http://www.golaravel.com/tag/lumen/">Lumen</a>
                        <a href="http://www.golaravel.com/tag/ming-ming-kong-jian/">命名空间</a>
                        <a href="http://www.golaravel.com/tag/laravel4/">Laravel4</a>


                        <a href="http://www.golaravel.com/tag-cloud/"><?php echo Yii::app()->request->baseUrl ?>/assets/Index/.</a>
                    </div>
                </div>
                <!-- end tag cloud widget -->

                <!-- start widget -->
                <!-- end widget -->

                <!-- start widget -->
                <!-- end widget -->                </aside>

        </div>
    </div>
</section>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">最新文章</h4>
                    <div class="content recent-post">
                        <div class="recent-single-post">
                            <a href="http://www.golaravel.com/post/laracon-laravel-5-3-recap/" class="post-title">Laracon
                                开发者大会快报：听 Taylor Otwell 讲解 Laravel 5.3 的新特性</a>
                            <div class="date">2016年7月28日</div>
                        </div>
                        <div class="recent-single-post">
                            <a href="http://www.golaravel.com/post/laravel-turns-five/" class="post-title">Laravel
                                五岁了</a>
                            <div class="date">2016年6月12日</div>
                        </div>
                        <div class="recent-single-post">
                            <a href="http://www.golaravel.com/post/2016-ban-laravel-xi-lie-ru-men-jiao-cheng-yi/"
                               class="post-title">2016 版 Laravel 系列入门教程（一）</a>
                            <div class="date">2016年6月6日</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">标签云</h4>
                    <div class="content tag-cloud">
                        <a href="http://www.golaravel.com/tag/laravel/">Laravel</a>
                        <a href="http://www.golaravel.com/tag/getting-started-with-laravel/">Laravel入门教程</a>
                        <a href="http://www.golaravel.com/tag/laravel-5/">Laravel 5</a>
                        <a href="http://www.golaravel.com/tag/laravel-5-2/">Laravel 5.2</a>
                        <a href="http://www.golaravel.com/tag/eloquent/">Eloquent</a>
                        <a href="http://www.golaravel.com/tag/xin-ban-ben-fa-bu/">新版本发布</a>
                        <a href="http://www.golaravel.com/tag/laravel-5-1/">Laravel 5.1</a>

                        <a href="http://www.golaravel.com/tag-cloud/"><?php echo Yii::app()->request->baseUrl ?>/assets/Index/.</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">合作伙伴</h4>
                    <div class="content tag-cloud friend-links">
                        <a href="http://www.bootcss.com/" title="Bootstrap中文网"
                           onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;link&#39;, &#39;click&#39;, &#39;bootcsscom&#39;])"
                           target="_blank">Bootstrap中文网</a>
                        <a href="http://www.bootcdn.cn/" title="开放CDN服务"
                           onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;link&#39;, &#39;click&#39;, &#39;bootcdncn&#39;])"
                           target="_blank">开放CDN服务</a>
                        <a href="http://www.gruntjs.net/" title="Grunt中文网"
                           onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;link&#39;, &#39;click&#39;, &#39;gruntjsnet&#39;])"
                           target="_blank">Grunt中文网</a>
                        <a href="http://www.gulpjs.com.cn/" title="Gulp中文网"
                           onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;link&#39;, &#39;click&#39;, &#39;gulpjscomcn&#39;])"
                           target="_blank">Gulp中文网</a>
                        <hr>
                        <a href="http://lodashjs.com/" title="Lodash中文文档"
                           onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;link&#39;, &#39;click&#39;, &#39;lodashjscom&#39;])"
                           target="_blank">Lodash中文文档</a>
                        <a href="http://www.jquery123.com/" title="jQuery中文文档"
                           onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;link&#39;, &#39;click&#39;, &#39;jquery123com&#39;])"
                           target="_blank">jQuery中文文档</a>
                        <hr>
                        <a href="https://www.upyun.com/" title="又拍云"
                           onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;link&#39;, &#39;click&#39;, &#39;upyun&#39;])"
                           target="_blank">又拍云</a>
                        <a href="http://www.ucloud.cn/" title="UCloud"
                           onclick="_hmt.push([&#39;_trackEvent&#39;, &#39;link&#39;, &#39;click&#39;, &#39;ucloud&#39;])"
                           target="_blank">UCloud</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span>Copyright © <a href="http://www.golaravel.com/">PHPFun新闻</a></span> |
                <span><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a></span> |
                <span>京公网安备11010802014853</span>
            </div>
        </div>
    </div>
</div>

<a href="http://www.golaravel.com/#" id="back-to-top" style="display: none;"><i class="fa fa-angle-up"></i></a>

<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/Index//js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/Index//js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/Index//js/jquery.fitvids.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/Index//js/highlight.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/Index//js/main.js"></script>


<script>
    $(document).ready(function () {
        var qqgroup = 'QQ群：123456';
        $('.qq-group').text(qqgroup);
    });
</script>

<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fc8d13872a523d9c286aa7affbe0921f1' type='text/javascript'%3E%3C/script%3E"));
</script>
<script src="<?php echo Yii::app()->request->baseUrl ?>/assets/Index//js/h.js" type="text/javascript"></script>


</body>
</html>