<?php
/* @var $this SummarySalesController */
/* @var $model SummarySales */

$this->breadcrumbs=array(
	'Summary Sales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SummarySales', 'url'=>array('index')),
	array('label'=>'Manage SummarySales', 'url'=>array('admin')),
);
?>

<h1>Create SummarySales</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>