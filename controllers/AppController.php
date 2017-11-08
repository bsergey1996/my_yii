<?php
/**
 * Created by PhpStorm.
 * User: s.biryukov
 * Date: 02.11.2017
 * Time: 13:04
 */

namespace app\controllers;


use yii\base\Controller;

class AppController extends Controller
{
  public function debug($arr){
      echo '<pre>'.print_r($arr,true).'</pre>';
  }
}

 function debug($arr){
    echo '<pre>'.print_r($arr,true).'</pre>';
}