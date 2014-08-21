<?php
/* @var $this TblGroupController */
/* @var $model TblGroup */

$this->breadcrumbs=array(
	'Tbl Groups'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblGroup', 'url'=>array('index')),
	array('label'=>'Create TblGroup', 'url'=>array('create')),
	array('label'=>'View TblGroup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblGroup', 'url'=>array('admin')),
);
?>

<h1>Update TblGroup <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>