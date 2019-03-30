<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
 ?>
<?php $form = ActiveForm::begin() ?>
	<?= $form->field($model,'name')->label('这里是名字 ') ?>
	<?= $form->field($model, 'email')->label('这里是email') ?>

	<div class="form-group">
		<?=Html::submitButton('Submit',['class' => 'btn btn-primary']) ?>
	</div>
<?php ActiveForm::end(); ?>
