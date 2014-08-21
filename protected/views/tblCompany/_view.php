<?php
/* @var $this TblCompanyController */
/* @var $data TblCompany */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('companyName')); ?>:</b>
	<?php echo CHtml::encode($data->companyName); ?>
	<br />


</div>