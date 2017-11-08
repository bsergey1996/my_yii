<?php
/**
 * Created by PhpStorm.
 * User: s.biryukov
 * Date: 02.11.2017
 * Time: 12:19
 */

namespace app\controllers;


use yii\base\Controller;

class MyController extends  AppController
{
    public function actionIndex($id = null)
    {
        $hi = 'Hello , World!';
        $names = ['ivanov','Petrov'];
        if($id) {!$id = 123;}
        return $this->render('index',['hi'=>$hi,'names'=>$names,'id'=>$id]);//compact('hi','names')
    }
}