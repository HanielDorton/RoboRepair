<?php
/* @var $this SummarySalesController */
/* @var $data SummarySales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salesDate')); ?>:</b>
	<?php echo CHtml::encode($data->salesDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salesTotal')); ?>:</b>
	<?php echo CHtml::encode($data->salesTotal); ?>
	<br />


</div>