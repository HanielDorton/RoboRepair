<?php
/* @var $this SummarySalesController */
/* @var $model SummarySales */

$this->breadcrumbs=array(
	'Summary Sales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SummarySales', 'url'=>array('index')),
	array('label'=>'Create SummarySales', 'url'=>array('create')),
	array('label'=>'View SummarySales', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SummarySales', 'url'=>array('admin')),
);
?>

<h1>Update SummarySales <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>