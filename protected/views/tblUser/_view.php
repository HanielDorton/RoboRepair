<?php
/* @var $this TblUserController */
/* @var $data TblUser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userGroup')); ?>:</b>
	<?php echo CHtml::encode($data->group->groupName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userCompany')); ?>:</b>
	<?php echo CHtml::encode($data->company->companyName); ?>
	<br />


</div>
