<?php
/**
 * Created by PhpStorm.
 * User: s.biryukov
 * Date: 02.11.2017
 * Time: 13:36
 */

namespace app\controllers;

use Yii;
use app\models\TestForm;

class PostController extends  AppController
{
    public $layout ='basic';


    public function actionTest(){

    return $this->render('test');
}
    public function actionIndex(){

      $model = new TestForm();

      if( $model->load(Yii::$app->request->post())  ){//&& $model->validate() - проверка , валидации форм
          $this->debug($model);
          die;
          if($model->validate()){
                echo 'Yeah';
          }
          else{
/////////////////////////////////////////////////////
          }
      }



        if(Yii::$app->request->isAjax){
            //$this->debug($_POST);
            debug(
            Yii::$app->request->post()
            );
            return 'test';
        }
        return $this->render('test',compact('model'));
    }
    public function actionShow(){
           //$this->layout = 'basic';
        return $this->render('show');
    }
}