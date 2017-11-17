<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Action  Index</h1>



<? if( Yii::$app->session->hasFlash('success')) :  ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <? echo Yii::$app->session->getFlash('success');?>
    </div>

<? endif;?>

<? if( Yii::$app->session->hasFlash('error')) :  ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Warning!</strong>  <? echo Yii::$app->session->getFlash('error');?>
    </div>

<? endif;?>

<? $form = ActiveForm::begin()?>
<?=$form->field($model,'name')//->label('Имя')?>
<?=$form->field($model,'email')->input('email')//->label('Email')?>
<?=$form->field($model,'text')->textarea(['rows'=>5])//->label('Текст сообщения')?>

<?=Html::submitButton('Отправить',['class'=>'btn btn-success']) ?>
<? ActiveForm::end();?>