<?php
/* @var $this SummarySalesController */
/* @var $model SummarySales */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salesDate'); ?>
		<?php echo $form->textField($model,'salesDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salesTotal'); ?>
		<?php echo $form->textField($model,'salesTotal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->