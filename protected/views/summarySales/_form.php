<?php
/* @var $this SummarySalesController */
/* @var $model SummarySales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'summary-sales-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'salesDate'); ?>
		<?php echo $form->textField($model,'salesDate'); ?>
		<?php echo $form->error($model,'salesDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salesTotal'); ?>
		<?php echo $form->textField($model,'salesTotal'); ?>
		<?php echo $form->error($model,'salesTotal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->