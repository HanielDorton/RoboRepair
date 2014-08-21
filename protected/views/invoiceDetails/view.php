<?php
/* @var $this InvoiceDetailsController */
/* @var $model InvoiceDetails */

$this->breadcrumbs=array(
	'Invoice Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InvoiceDetails', 'url'=>array('index')),
	array('label'=>'Create InvoiceDetails', 'url'=>array('create')),
	array('label'=>'Update InvoiceDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InvoiceDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InvoiceDetails', 'url'=>array('admin')),
);
?>

<h1>View InvoiceDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'invoiceNumber',
		'productName',
		'productCost',
	),
)); ?>
