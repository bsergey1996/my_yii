<?php
/**
 * Created by PhpStorm.
 * User: s.biryukov
 * Date: 02.11.2017
 * Time: 13:36
 */

namespace app\controllers;

use Yii;

class PostController extends  AppController
{
    public $layout ='basic';


    public function actionTest(){

    return $this->render('test');
}
    public function actionIndex(){

        if(Yii::$app->request->isAjax){
            //$this->debug($_POST);
            debug(
            Yii::$app->request->post()
            );
            return 'test';
        }
        return $this->render('test');
    }
    public function actionShow(){
           //$this->layout = 'basic';
        return $this->render('show');
    }
}