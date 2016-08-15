<?php

/**
 * Created by PhpStorm.
 * User: linshuntao
 * Date: 2016/8/11
 * Time: 10:19
 */
class NewsController extends Controller{
    public function actionindex(){
        session_start();
        $newsModel=  News::model()->findAllBySql('select a.id,a.title,a.content,a.digest,a.updateTime,b.name from news AS a,manager AS b where b.id=a.uploadManagerId');
        //$newsModel->title='test';
        //var_dump($newsModel);
        //print_r($newsModel);
        //echo $newsModel->content;
        //foreach($newsModel as $v){
           // echo $v->title;
           // echo $v->content;
       // }
        //echo $_SESSION['username'];
        $this->render('index',array('newsModel'=>$newsModel));
    }

    public function actionread(){
        $newsModel=  News::model()->findAllBySql('select a.id,a.title,a.content,a.digest,a.updateTime,b.name from news AS a,manager AS b where b.id=a.uploadManagerId and a.id='.$_GET['id']);
        $this->render('read',array('newsModel'=>$newsModel));
    }


}