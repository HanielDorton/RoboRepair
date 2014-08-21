<?php
/* @var $this SummarySalesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Summary Sales',
);

$this->menu=array(
	array('label'=>'Create SummarySales', 'url'=>array('create')),
	array('label'=>'Manage SummarySales', 'url'=>array('admin')),
);
?>

<h1>Summary Sales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
