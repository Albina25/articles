<?php


namespace app\models;


use yii\base\Model;

class Mail extends Model
{

    public static function staticMethodFromClass()
    {
        var_dump('static method was triggered from class Mail');
    }

}