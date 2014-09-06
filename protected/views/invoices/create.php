<?php
/* @var $this InvoicesController */
/* @var $model Invoices */

$this->breadcrumbs=array(
	'Invoices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Invoices', 'url'=>array('index')),
);

if (Yii::app()->user->userGroup == 1) {
	array_push($this->menu, array('label'=>'Manage Invoices', 'url'=>array('admin')));
}


?>

<h1>Create Invoices</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
