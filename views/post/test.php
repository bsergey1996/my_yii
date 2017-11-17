<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;


?>
<h1>Action  Index</h1>

<? $form = ActiveForm::begin()?>
<?=$form->field($model,'name')//->label('Имя')?>
<?=$form->field($model,'email')->input('email')//->label('Email')?>
<?=$form->field($model,'text')->textarea(['rows'=>5])//->label('Текст сообщения')?>

<?=Html::submitButton('Отправить',['class'=>'btn btn-success']) ?>
<? ActiveForm::end();?>