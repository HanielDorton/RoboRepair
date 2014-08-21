<?php
/* @var $this InvoicesController */
/* @var $model Invoices */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invoices-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'invoiceNumber'); ?>
		<?php echo $form->textField($model,'invoiceNumber'); ?>
		<?php echo $form->error($model,'invoiceNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoiceDate'); ?>
		<?php echo $form->textField($model,'invoiceDate'); ?>
		<?php echo $form->error($model,'invoiceDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoiceTotal'); ?>
		<?php echo $form->textField($model,'invoiceTotal'); ?>
		<?php echo $form->error($model,'invoiceTotal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->