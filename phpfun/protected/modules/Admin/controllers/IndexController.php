<?php

/**
 * Created by PhpStorm.
 * User: zhanghengyu
 * Date: 2016/8/12
 * Time: 12:39
 *
 * 后台的主页控制器
 */
class IndexController extends Controller
{

    public function actionIndex()
    {
            $this->render('index');
    }
}