<?php
/* @var $this SummarySalesController */
/* @var $model SummarySales */

$this->breadcrumbs=array(
	'Summary Sales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SummarySales', 'url'=>array('index')),
	array('label'=>'Create SummarySales', 'url'=>array('create')),
	array('label'=>'Update SummarySales', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SummarySales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SummarySales', 'url'=>array('admin')),
);
?>

<h1>View SummarySales #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'salesDate',
		'salesTotal',
	),
)); ?>
