<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0"/>
    <title>欢迎登录PHPFun</title>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/assets/Index/css/bootstrap.min.css"/>

    <style type="text/css">
        html, body {
            height: 100%;
        }

        .box {
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#6699FF', endColorstr='#6699FF'); /*  IE */
            background-image: linear-gradient(bottom, #FFFAF0 0%, #FF6103 100%);
            background-image: -o-linear-gradient(bottom, #FFFAF0 0%, #FF6103 100%);
            background-image: -moz-linear-gradient(bottom, #FFFAF0 0%, #FF6103 100%);
            background-image: -webkit-linear-gradient(bottom, #FFFAF0 0%, #FF6103 100%);
            background-image: -ms-linear-gradient(bottom, #FFFAF0 0%, #FF6103 100%);

            margin: 0 auto;
            position: relative;
            width: 100%;
            height: 100%;
        }

        .login-box {
            width: 100%;
            max-width: 500px;
            height: 500px;
            position: absolute;
            top: 50%;

            margin-top: -200px;
            /*设置负值，为要定位子盒子的一半高度*/

        }

        @media screen and (min-width: 500px) {
            .login-box {
                left: 50%;
                /*设置负值，为要定位子盒子的一半宽度*/
                margin-left: -250px;
            }
        }

        .form {
            width: 100%;
            max-width: 500px;
            height: 275px;
            margin: 25px auto 0px auto;
            padding-top: 25px;
        }

        .login-content {
            height: 450px;
            width: 100%;
            max-width: 500px;
            background-color: rgba(255, 250, 2550, .6);
            float: left;
        }

        .input-group {
            margin: 0px 0px 30px 0px !important;
        }

        .form-control,
        .input-group {
            height: 40px;
        }

        .form-group {
            margin-bottom: 0px !important;
        }

        .login-title {
            padding: 20px 10px;
            background-color: #FF8000;
        }

        .login-title h1 {
            margin-top: 10px !important;
        }

        .login-title small {
            color: #fff;
        }

        .link p {
            line-height: 20px;
            margin-top: 30px;
        }

        .btn-sm {
            padding: 8px 24px !important;
            font-size: 16px !important;
        }
    </style>

</head>

<body>
<div class="box">
    <div class="login-box">
        <div class="login-title text-center">
            <h1>
                <small>欢迎登录PHPFun</small>
            </h1>
        </div>
        <div class="login-content ">
            <div class="form">
                <?php $form = $this->beginWidget('CActiveForm') ?>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">

                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <?php echo $form->textField($loginForm, 'username', array('id' => 'userName','class'=>'form-control','placeholder'=>'用户名','style'=>'float:left')) ?>
                        </div>
                        <?php echo $form->error($loginForm,'username',array('style'=>'float:left;color:red')) ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12  ">
                        <div class="input-group">

                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <?php echo $form->passwordField($loginForm, 'password', array('id' => 'password','class'=>'form-control','placeholder'=>'密码','style'=>'float:left')) ?>
                        </div>
                        <?php echo $form->error($loginForm,'password',array('style'=>'float:left;color:red')) ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12  ">
                        <div class="input-group">

                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <?php echo $form->textField($loginForm, 'captcha', array('id' => 'verify','class'=>'form-control','placeholder'=>'验证码','style'=>'float:left;width: 200px')) ?>
                            <?php $this->widget('CCaptcha', array('showRefreshButton' => false,
                                'clickableImage'=>true,'imageOptions' => array('alt' => '点击换图', '
                      title' => '点击换图', 'style' => 'cursor:pointer;width: 180px; margin-left:50px; font-size: 35px;'))); ?>
                        </div>
                        <?php echo $form->error($loginForm,'captcha',array('style'=>'float:left;color:red')) ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12  ">
                        <div class="input-group">
                        </div>
                    </div>
                </div>

                <div class="form-group form-actions">
                    <div class="col-xs-4 col-xs-offset-4 ">
                        <button type="submit" class="btn btn-sm btn-info"><span
                                class="glyphicon glyphicon-off"></span> 登录
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6 link">
                        <p class="text-center remove-margin">
                            <small>忘记密码？</small>
                            <a href="javascript:void(0)">
                                <small>找回</small>
                            </a>
                        </p>
                    </div>
                    <div class="col-xs-6 link">
                        <p class="text-center remove-margin">
                            <small>还没注册?</small>
                            <a href="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Index/register/index">
                                <small>注册</small>
                            </a>
                        </p>
                    </div>
                </div>
                <?php $this->endWidget() ?>
            </div>
        </div>
    </div>
</div>
</body>

</html>