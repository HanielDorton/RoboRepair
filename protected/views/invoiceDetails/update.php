<?php
/* @var $this InvoiceDetailsController */
/* @var $model InvoiceDetails */

$this->breadcrumbs=array(
	'Invoice Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InvoiceDetails', 'url'=>array('index')),
	array('label'=>'Create InvoiceDetails', 'url'=>array('create')),
	array('label'=>'View InvoiceDetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InvoiceDetails', 'url'=>array('admin')),
);
?>

<h1>Update InvoiceDetails <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>