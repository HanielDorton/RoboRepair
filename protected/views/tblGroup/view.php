<?php
/* @var $this TblGroupController */
/* @var $model TblGroup */

$this->breadcrumbs=array(
	'Tbl Groups'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TblGroup', 'url'=>array('index')),
	array('label'=>'Create TblGroup', 'url'=>array('create')),
	array('label'=>'Update TblGroup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblGroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblGroup', 'url'=>array('admin')),
);
?>

<h1>View TblGroup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'groupName',
	),
)); ?>
