<?php


namespace app\models;

use app\components\MyBehavior;
use yii\base\Model;

class Post extends Model
{

    public $name = 'model"s name';

    const USER_REGISTERED = 'user registered';

    public function behaviors()
    {
        return [
            [
                'class'=>MyBehavior::class,
                'property1'=>$this->name
            ]
        ];
    }

    public function userRegistered()
    {
        $this->trigger(self::USER_REGISTERED);
    }

}