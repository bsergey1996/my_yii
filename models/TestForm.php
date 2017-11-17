<?php
/**
 * Created by PhpStorm.
 * User: s.biryukov
 * Date: 08.11.2017
 * Time: 19:35
 */

namespace app\models;
use yii\base\Model;

class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',
        ];
    }
    public function rules(){
        return [
          ['name','required'],
          ['email','required'],
          ['email','email'],
          ['name','string','min'=>2,'tooShort'=>'Слишком короткий'], //или  ['name','string', 'length'=>[2,5]],
          ['name','string','max'=>5,'tooLong'=>'Слишком длинный'],
          ['text','trim'],
        ];
    }
}