<?php
/* @var $this InvoicesController */
/* @var $model Invoices */

$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Invoices', 'url'=>array('index')),
	array('label'=>'Create Invoices', 'url'=>array('create')),

);

if (Yii::app()->user->userGroup == 1) {
	array_push($this->menu, array('label'=>'Update Invoices', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Invoices', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Invoices', 'url'=>array('admin')));
}

?>

<h1>View Invoices #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'invoiceNumber',
		'invoiceDate',
		'invoiceTotal',
	),
)); ?>
