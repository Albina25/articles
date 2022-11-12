<?php

namespace app\components;


use app\models\Post;

class MyBehavior extends \yii\base\Behavior
{

    public $property1;
    public $owner;

    public function foo()
    {
        var_dump($this->owner);
    }

    public function events()
    {
        return [
            Post::USER_REGISTERED => 'register'
        ];
    }

    public function registered()
    {
        return 'user registered';
    }

    public function test()
    {
        echo $this->property1;
    }

}