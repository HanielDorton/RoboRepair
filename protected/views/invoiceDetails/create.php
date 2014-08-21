<?php
/* @var $this InvoiceDetailsController */
/* @var $model InvoiceDetails */

$this->breadcrumbs=array(
	'Invoice Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InvoiceDetails', 'url'=>array('index')),
	array('label'=>'Manage InvoiceDetails', 'url'=>array('admin')),
);
?>

<h1>Create InvoiceDetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>