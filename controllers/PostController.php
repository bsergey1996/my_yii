<?php
/**
 * Created by PhpStorm.
 * User: s.biryukov
 * Date: 02.11.2017
 * Time: 13:36
 */

namespace app\controllers;

use app\models\Category;
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
          if($model->validate()){
              Yii::$app->session->setFlash('success','Данные приняты');
          }
          else{
              Yii::$app->session->setFlash('error','Ошибка');

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

        //$cats = Category::find()->asArray()->where(['like','title','pp'])->all();
        //$cats = Category::find()->asArray()->where(['<=','id',695])->all();
        $cats = Category::find()->asArray()->where(['<=','id',695])->all();


        return $this->render('show',compact('cats'));
    }
}

































