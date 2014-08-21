<?php
/* @var $this InvoiceDetailsController */
/* @var $data InvoiceDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoiceNumber')); ?>:</b>
	<?php echo CHtml::encode($data->invoiceNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productName')); ?>:</b>
	<?php echo CHtml::encode($data->productName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productCost')); ?>:</b>
	<?php echo CHtml::encode($data->productCost); ?>
	<br />


</div>