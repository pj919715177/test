<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPFun新闻后台管理系统</title>
    <link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl.'/assets/Admin/css/';?>Index_style.css"/>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl.'/assets/Admin/js/';?>jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl.'/assets/Admin/js';?>/menu.js"></script>
</head>

<body>
<div class="top"></div>
<div id="header">
    <div class="logo">PHPFun新闻-后台管理系统</div>
    <div class="navigation">
        <ul>
            <li>欢迎您！</li>
            <li><a href="">张三</a></li>
        </ul>
    </div>
</div>
<div id="content">
    <!--左边菜单栏-->
    <div class="left_menu">
        <ul id="nav_dot">
            <li>
                <h4 class="M1"><span></span>系统信息</h4>
                <div class="list-item none">
                    <a href='' target="content">系统运行配置</a>
                    <a href=''>系统日志</a>
                    <a href=''>系统公告</a>
                </div>
            </li>
            <li>
                <h4 class="M2"><span></span>新闻管理</h4>
                <div class="list-item none">
                    <a href='<?php echo $this->createUrl('news/index');?>' target="content">新闻列表</a>
                    <a href='<?php echo $this->createUrl('news/upload');?>' target="content">写新闻</a>
                </div>
            </li>
            <li>
                <h4 class="M3"><span></span>评论管理</h4>
                <div class="list-item none">
                    <a href=''>评论列表</a>
                    <a href=''>基础教学2</a>
                    <a href=''>基础教学3</a>
                </div>
            </li>
            <li>
                <h4 class="M5"><span></span>用户管理</h4>
                <div class="list-item none">
                    <a href=''>用户列表</a>
                </div>
            </li>
            <li>
                <h4 class="M6"><span></span>角色管理</h4>
                <div class="list-item none">
                    <a href=''>增加角色</a>
                    <a href=''>编辑角色</a>
                </div>
            </li>
            <li>
                <h4 class="M7"><span></span>奖励管理</h4>
                <div class="list-item none">
                    <a href=''>奖励管理1</a>
                    <a href=''>奖励管理2</a>
                    <a href=''>奖励管理3</a>
                </div>
            </li>
        </ul>
    </div>
    <!--右边内容 -->
    <div class="m-right">
        <div class="right-nav">
            <ul>
                <li><img src="<?php echo Yii::app()->request->baseUrl.'/assets/Admin/images/';?>home.png"></li>
                <li style="margin-left:25px;">您当前的位置：</li>
                <li><a href="#">系统公告</a></li>
                <li>></li>
                <li><a href="#">最新公告</a></li>
            </ul>
        </div>
        <div class="main">
            <iframe name="content" src="" frameborder="0" id="mainframe" scrolling="yes" marginheight="0"
                    marginwidth="0" width="100%" style="height: 90%;"></iframe>
        </div>
    </div>
</div>
<div class="bottom"></div>
<div id="footer"><p>Copyright© 2015 版权所有 京ICP备05019125号-10 来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a>
</p></div>
<script>navList(2);</script>
</body>
</html>
