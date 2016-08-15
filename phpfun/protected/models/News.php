<?php
/**
 * Created by PhpStorm.
 * User: pengjun
 * Date: 2016/8/8
 * Time: 15:39
 */
class News extends CActiveRecord
{
    public $name;
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'news';
    }

    public function rules(){
        return array(
            array('title','required','message'=>'标题不能为空'),
            array('digest','required','message'=>'摘要不能为空'),
            array('content','required','message'=>'正文不能为空'),
            array('title','judgeTitleLength'),
            array('digest','judgeDigestLength'),
        );
    }

    public function judgeTitleLength($attribute,$params){
        $lenght = strlen($this->title);
        if($lenght > 100){
            $this->addError('title','标题过长');
        }
    }
    public function judgeDigestLength($attribute,$params){
        $lenght = strlen($this->digest);
        if($lenght > 200){
            $this->addError('digest','摘要过长');
        }
    }
}