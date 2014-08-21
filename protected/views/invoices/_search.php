<?php
/* @var $this InvoicesController */
/* @var $model Invoices */
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
		<?php echo $form->label($model,'invoiceNumber'); ?>
		<?php echo $form->textField($model,'invoiceNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invoiceDate'); ?>
		<?php echo $form->textField($model,'invoiceDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invoiceTotal'); ?>
		<?php echo $form->textField($model,'invoiceTotal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->