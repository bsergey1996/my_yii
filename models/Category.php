<?php
/**
 * Created by PhpStorm.
 * User: s.biryukov
 * Date: 17.11.2017
 * Time: 20:12
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends  ActiveRecord {

     public static function tableName()
     {
         return 'categories';
     }

}