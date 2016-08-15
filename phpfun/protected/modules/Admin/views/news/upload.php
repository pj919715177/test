<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>新闻上传</title>

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <script type="text/javascript" charset="utf-8"
            src="<?php echo Yii::app()->request->baseUrl . '/protected/library/ueditor/ueditor.config.js' ?>"></script>
    <script type="text/javascript" charset="utf-8"
            src="<?php echo Yii::app()->request->baseUrl . '/protected/library/ueditor/ueditor.all.min.js' ?>"></script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8"
            src="<?php echo Yii::app()->request->baseUrl . '/protected/library/ueditor/lang/zh-cn/zh-cn.js' ?>"></script>

    <script type="text/javascript">
        var ue = UE.getEditor('content');
    </script>
    <style type = "text/css">
        div {
            width: 100 %;
        }
    </style>
</head >
<body>
<center><h2> 新闻上传 </h2> </center>
<div class="form"  style = "margin-left: 50px" >
    <?php $form = $this->beginWidget('CActiveForm', array(
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnsubmit' => true
        ),
    )); ?>
    <?php echo $form->textField($news, 'title', array('id' => 'title', 'class' => 'input-small', 'placeholder' => '新闻标题')) ?>
    <?php echo $form->error($news, 'title', array('style' => 'color:red')); ?>
    <?php echo $form->textArea($news, 'digest', array(
        'id' => 'digest', 'style' => 'width:500px;height:100px;margin-top:10px', 'class' => 'form-control', 'placeholder' => '新闻摘要'));
    ?>
    <?php echo $form->error($news, 'digest', array('style' => 'color:red')); ?>
    <?php echo $form->textArea($news, 'content', array(
        'id' => 'content', 'type' => 'text/plain', 'value' => '新闻正文', 'style' => 'width:1024px;height:500px;margin-top:10px;margin-bottom:10px;clear:both'));
    ?>
    <?php echo $form->error($news, 'content', array('style' => 'color:red')); ?>
    <input type = "submit" class="btn" value = "确认上传"/>
    <?php $this->endWidget() ?>
</div>
</body>
</html>
