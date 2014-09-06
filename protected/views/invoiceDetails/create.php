<?php
/* @var $this InvoiceDetailsController */
/* @var $model InvoiceDetails */

$this->breadcrumbs=array(
	'Invoice Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InvoiceDetails', 'url'=>array('index')),
);

if (Yii::app()->user->userGroup == 1) {
	array_push($this->menu, array('label'=>'Manage InvoiceDetails', 'url'=>array('admin')));
}
?>

<h1>Create InvoiceDetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
