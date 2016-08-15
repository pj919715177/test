<?php
/**
 * Created by PhpStorm.
 * User: linshuntao
 * Date: 2016/8/10
 * Time: 14:57
 */
session_start();
include './protected/library/email.class.php';

class Registercontroller extends Controller{
    public function actionIndex(){
        $registerModel = new User();
        if(isset($_POST['User'])){

            $registerModel->attributes=$_POST['User'];
            $registerModel->password=md5($registerModel->password);
            $registerModel->passwordAgain=md5($registerModel->passwordAgain);
            $registerModel->activationCode=md5($registerModel->name.$registerModel->password);
            if($registerModel->validate()){
                if($registerModel->save()){
                    Yii::app()->user->setFlash('success','注册成功,请前往您的邮箱激活账号！');


                    $smtpserver = "smtp.163.com";//SMTP服务器
                    $smtpserverport =25;//SMTP服务器端口
                    $smtpusermail = "scut0418@163.com";//SMTP服务器的用户邮箱
                    $smtpemailto = $registerModel->email;//发送给谁
                    $smtpuser = "scut0418@163.com";//SMTP服务器的用户帐号
                    $smtppass = "shuntao449626816";//SMTPSMTP服务器的用户密码
                    $mailsubject = "《PHPFun》账号激活";//邮件主题
                    //$url=Yii::app()->request->baseUrl.'/index.php?r=register/activation&code='.$registerModel->activationCode;
                    //$url = 'http://192.168.126.128/PHPFun/phpfun/index.php?r=register/Activation&code='.$registerModel->activationCode;

                    $url='<a href="http://192.168.126.128/phpfun/index.php?r=Index/register/Activation">点击此处激活账号</a>';
                    $_SESSION['code']=$registerModel->activationCode;
                    $mailbody = "请点击链接完成注册:$url";//邮件内容
                    $mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件

                    $smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);   //实例化邮件类；
                    $smtp->debug = false;//是否显示发送的调试信息
                    $smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);

                }
            }
        }
        $this->render('index',array('registerModel'=>$registerModel));
    }

    public function actionActivation(){
        //echo $_SESSION['code'];
        //$a='267ab7738d262c3163fd6c9ee903fcfb';
        $user=new User();
        $userinfo=$user->find('activationCode=:activationCode',array(':activationCode'=>$_SESSION['code']));
        //$userinfo=$user->find('activationCode=:activationCode',array(':activationCode'=>$a));
        //var_dump($user);
        //if($user!=NULL){
            //echo $userinfo->name;
           // echo $user[0]->isActvation;
            $userinfo->isActvation=1;
           if($userinfo->update()){
               echo '<h1>:)<br/>激活成功</h1>';
               echo '请点击此登录链接：';
               echo '<a href="http://192.168.126.128/phpfun/index.php?r=Index/login/index">登录</a>';
            }

        //}


    }

}