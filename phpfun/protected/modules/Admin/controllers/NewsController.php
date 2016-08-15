<?php

/**
 * /**
 * Created by PhpStorm.
 * User: pengjun
 * Date: 2016/8/8
 * Time: 15:39
 */
class NewsController extends Controller
{
    //显示新闻列表
    public function actionIndex()
    {
        $str = "SELECT `id`,`title`,`digest`,`uploadTime` FROM news ORDER BY `uploadTime` DESC ;";
        $datas = News::Model()->findAllBySql($str);
        $this->changeTimeFormat($datas);
        $this->renderPartial('index', array('datas' => $datas));
    }

    //上传新闻
    public function actionUpload()
    {
        $news = new News();
        if (isset($_POST['News'])) {
            // 收集用户输入的数据
            $news->attributes = $_POST['News'];
            //验证用户输入，并在判断输入正确后重定向到前一页
            if ($news->validate()) {

                $news->title = $this->deleteTags($news->title);
                $news->digest = $this->deleteTags($news->digest);
                $news->content = $this->saveTags($news->content);
                $news->uploadTime = time();
                $news->updateTime = time();
                $news->uploadManagerId = 2;
                $news->updateManagerId = 2;
                $news->supportCount = 0;
                $news->isOnline = 1;

                if ($news->save()) {
                    unset($_POST['News']);
                    echo '<script>';
                    echo "alert('上传成功！');";
                    echo 'window.location.href="' . $this->createUrl('news/index') . '";';
                    echo '</script>';
                }
            }
        }
        $this->renderPartial('upload', array('news' => $news));
    }

    //修改新闻
    public function actionUpdate()
    {
        $id = $_GET['id'];
        $news = News::model()->findByPk($id);
        if (isset($_POST['News'])) {
            // 收集用户输入的数据
            $news->attributes = $_POST['News'];
            //验证用户输入，并在判断输入正确后重定向到前一页
            if ($news->validate()) {
                $news->title = $this->deleteTags($news->title);
                $news->digest = $this->deleteTags($news->digest);
                $news->content = $this->saveTags($news->content);
                $news->uploadTime = time();
                $news->updateTime = time();
                $news->uploadManagerId = 2;
                $news->updateManagerId = 2;
                $news->supportCount = 0;
                $news->isOnline = 1;

                if ($news->update()) {
                    unset($_POST['News']);
                    echo '<script>';
                    echo "alert('修改成功！');";
                    echo 'window.location.href="' . $this->createUrl('news/index') . '";';
                    echo '</script>';
                }
            }
        }
        $this->renderPartial('update', array('news' => $news));
    }

    //删除新闻
    public function actionDeleteNews()
    {
        $id = $_GET['id'];
        $success = News::model()->deleteByPk($id);
        if ($success)
            echo '删除成功';
        else
            echo '删除失败';
    }

    private function deleteTags($string)
    {
        return strip_tags($string);
    }

    private function saveTags($string)
    {
        return htmlspecialchars(stripslashes($string));
    }

    private function changeTimeFormat(& $datas)
    {
        $count = count($datas);
        for ($i = 0; $i < $count; $i++) {
            $datas[$i]->uploadTime = date('Y-m-d H:i:s', $datas[$i]->uploadTime);
        }
    }
}