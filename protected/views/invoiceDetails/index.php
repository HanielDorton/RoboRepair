<?php
/* @var $this InvoiceDetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invoice Details',
);

$this->menu=array(
	array('label'=>'Create InvoiceDetails', 'url'=>array('create')),
	array('label'=>'Manage InvoiceDetails', 'url'=>array('admin')),
);
?>

<h1>Invoice Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
