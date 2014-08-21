<?php
/* @var $this InvoiceDetailsController */
/* @var $model InvoiceDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invoice-details-form',
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
		<?php echo $form->textField($model,'invoiceNumber',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'invoiceNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productName'); ?>
		<?php echo $form->textField($model,'productName',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'productName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'productCost'); ?>
		<?php echo $form->textField($model,'productCost'); ?>
		<?php echo $form->error($model,'productCost'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->